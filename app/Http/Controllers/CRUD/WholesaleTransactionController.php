<?php

namespace App\Http\Controllers\CRUD;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\ChequePayment;
use App\Models\WholesaleCustomer;
use App\Models\ReadymadeSub;
use App\Models\Bottom;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class WholesaleTransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::with("wholesale_customer")->with("cheque_payment")->get();
        $status = ["pending", "depositted","returned"];
        $wholesale_customers = WholesaleCustomer::all();
        $readymade_subs = ReadymadeSub::all();
        $bottoms = Bottom::all();

        return view("wholesale-transactions",[
            "transactions"=> $transactions->where("payment_type","cheque_wholesale"),
            "status"=> $status,
            "wholesale_customers"=> $wholesale_customers,
            "readymade_subs"=> $readymade_subs,
            "bottoms" => $bottoms
        ]);
    }

    public function update(Request $request){
        $payment_type = $request->input("payment_type");
        $item_code = $request->input("item_code");
        $price_per_quantity = $request->input("price_per_quantity");
        $quantity_or_peices = $request->input("quantity_or_peices");
        $transaction_status = $request->input("transaction_status");
        $id= $request->input("updateId");

        $transaction = Transaction::with("wholesale_customer")->with("cheque_payment")->where("payment_type","cheque_wholesale")->find($id);

        if($payment_type !== 'cheque_wholesale' || empty($id)){
            return abort(400);
        }

        $total = $price_per_quantity * $quantity_or_peices;       

        $validator = Validator::make($request->all(), [
            'date'=>'required',
            'invoice_number'=>'required',
            'wholesale_customer' => 'required',
            'description',
            'price_per_quantity'=>'required',
            'quantity_or_peices' =>'required',
            'cheque_number'=>'required',
            'cheque_Date'=>'required',
            'amount'=>'required',
            'payment_Date'=>'required',
            'payment_Date'=>'required',
            'bank'=>'required',
            'branch'=>'required',
            'transaction_status'=>'required',
            'cash'=>[
                'required',
                function ($attribute, $value, $fail) use ($total) {
                    if ($value !== strval($total)) {
                        $fail($attribute.' is invalid.');
                    }
                },
            ],
            'item_code'=>[
                'required',
                function ($attribute, $value, $fail) use($item_code, $quantity_or_peices) {

                    $readymade_subs_availability = ReadymadeSub::select('item_code','initial_stocks')->where('item_code','=',$item_code)->where('initial_stocks', '>', $quantity_or_peices)->exists();

                    $bottom_availability = Bottom::select('item_code','initial_stocks')->where('item_code','=',$item_code)->where('initial_stocks', '>', $quantity_or_peices)->exists();

                    if ($readymade_subs_availability === false && $bottom_availability === false) {
                        $fail('Required Qunatity is not available under this product');
                    } 
                },
            ],
            'payment_type'=>'required', 
            'deposited_bank_account'=>'required_if:transaction_status,depositted,returned',
            'new_cheque_date'=>'required_if:transaction_status,returned',
            'deposited_bank'=>'required_if:transaction_status,depositted,returned',
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $cheque_payment= ChequePayment::firstOrCreate(['id'=>$id],[
            "cheque_number"=> $request->input("cheque_number"),
            "amount"=> $request->input("amount"),
            "cheque_Date"=> $request->input("cheque_Date"),
            "payment_Date"=> $request->input("payment_Date"),
            "bank"=> $request->input("bank"),
            "branch"=> $request->input("branch"),
            "deposited_bank_account"=> $request->input("deposited_bank_account"),
            "deposited_bank"=> $request->input("deposited_bank"),
            "transaction_status"=> $request->input("transaction_status"),
            "new_cheque_date"=> $request->input("new_cheque_date"),
        ]);

        $transaction->update([
            "cheque_payment_id"=> $cheque_payment->getKey(),
            "invoice_number"=> $request->input("invoice_number"),
            "date"=> $request->input("date"),
            "description"=> $request->input("description"),
            "price_per_quantity"=> $request->input("price_per_quantity"),
            "quantity_or_peices"=> $request->input("quantity_or_peices"),
            "wholesale_customer_id" => $request->input("wholesale_customer"),
            "payment_type"=> $request->input("payment_type"),
            "item_code"=>$request->input("item_code"),
            "cash"=>$request->input("cash")
        ]);

        return [
            'success'=> true,
            "transaction"=> [
                "id"=> $transaction->getKey(),
                "invoice_number"=> $transaction->invoice_number,
                "date"=> $transaction->date,
                "cash"=> $transaction->cash,
                "description"=> $transaction->description,
                "price_per_quantity"=>$transaction->price_per_quantity,
                "quantity_or_peices"=>$transaction->quantity_or_peices,
                "payment_type"=>$transaction->payment_type,
                "wholesale_customer" =>[
                    "id" => $transaction->wholesale_customer->getkey(),
                    "name"=> $transaction->wholesale_customer->name
                ],
                "item_code"=>$transaction->item_code,
                "cheque_payment" => [
                    "id" => $cheque_payment->id,
                    "cheque_number" => $cheque_payment->cheque_number,
                    "amount" => $cheque_payment->amount,
                    "cheque_Date" => $cheque_payment->cheque_Date,
                    "payment_Date" => $cheque_payment->payment_Date,
                    "bank" => $cheque_payment->bank,
                    "branch" => $cheque_payment->branch,
                    "deposited_bank_account" => $cheque_payment->deposited_bank_account,
                    "deposited_bank" => $cheque_payment->deposited_bank,
                    "transaction_status" => $cheque_payment->transaction_status,
                    "new_cheque_date" => $cheque_payment->new_cheque_date,
                ],
            ]
        ];
    }

    public function create(Request $request){

        $payment_type = $request->input("payment_type");
        $item_code = $request->input("item_code");
        $price_per_quantity = $request->input("price_per_quantity");
        $quantity_or_peices = $request->input("quantity_or_peices");

        if($payment_type !== 'cheque_wholesale'){
            return abort(400);
        }

        $total = $price_per_quantity * $quantity_or_peices;
        
        $validator = Validator::make($request->all(), [
            'date'=>'required',
            'invoice_number'=>'required',
            'wholesale_customer' => 'required',
            'description',
            'price_per_quantity'=>'required',
            'quantity_or_peices' =>'required',
            'cheque_number'=>'required',
            'cheque_Date'=>'required',
            'amount'=>'required',
            'payment_Date'=>'required',
            'payment_Date'=>'required',
            'bank'=>'required',
            'branch'=>'required',
            'transaction_status'=>'required',
            'cash'=>[
                'required',
                function ($attribute, $value, $fail) use ($total) {
                    if ($value !== strval($total)) {
                        $fail($attribute.' is invalid.');
                    }
                },
            ],
            'item_code'=>[
                'required',
                function ($attribute, $value, $fail) use($item_code, $quantity_or_peices) {

                    $readymade_subs_availability = ReadymadeSub::select('item_code','initial_stocks')->where('item_code','=',$item_code)->where('initial_stocks', '>', $quantity_or_peices)->exists();

                    $bottom_availability = Bottom::select('item_code','initial_stocks')->where('item_code','=',$item_code)->where('initial_stocks', '>', $quantity_or_peices)->exists();

                    if ($readymade_subs_availability === false && $bottom_availability === false) {
                        $fail('Required Qunatity is not available under this product');
                    } 
                },
            ],
            'payment_type'=>'required', 
            'deposited_bank_account'=>'required_if:transaction_status,depositted,returned',
            'new_cheque_date'=>'required_if:transaction_status,returned',
            'deposited_bank'=>'required_if:transaction_status,depositted,returned',
        ]);


        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $cheque_payment = new ChequePayment;

        $cheque_payment = ChequePayment::create([
            "cheque_number"=> $request->input("cheque_number"),
            "amount"=> $request->input("amount"),
            "cheque_Date"=> $request->input("cheque_Date"),
            "payment_Date"=> $request->input("payment_Date"),
            "bank"=> $request->input("bank"),
            "branch"=> $request->input("branch"),
            "deposited_bank_account"=> $request->input("deposited_bank_account"),
            "deposited_bank"=> $request->input("deposited_bank"),
            "transaction_status"=> $request->input("transaction_status"),
            "new_cheque_date"=> $request->input("new_cheque_date"),
        ]);

        $transaction = Transaction::create([
            "cheque_payment_id"=> $cheque_payment->getKey(),
            "invoice_number"=> $request->input("invoice_number"),
            "date"=> $request->input("date"),
            "description"=> $request->input("description"),
            "price_per_quantity"=> $request->input("price_per_quantity"),
            "quantity_or_peices"=> $request->input("quantity_or_peices"),
            "wholesale_customer_id" => $request->input("wholesale_customer"),
            "payment_type"=> $request->input("payment_type"),
            "item_code"=>$request->input("item_code"),
            "cash"=>$request->input("cash"),
        ]);

        return [
            'success'=> true,
            "transaction"=> [
                "id"=> $transaction->getKey(),
                "invoice_number"=> $transaction->invoice_number,
                "date"=> $transaction->date,
                "cash"=> $transaction->cash,
                "description"=> $transaction->description,
                "price_per_quantity"=>$transaction->price_per_quantity,
                "quantity_or_peices"=>$transaction->quantity_or_peices,
                "payment_type"=>$transaction->payment_type,
                "wholesale_customer" =>[
                    "id" => $transaction->wholesale_customer->getkey(),
                    "name"=> $transaction->wholesale_customer->name
                ],
                "item_code"=>$transaction->item_code,
                "cheque_payment" => [
                    "id" => $cheque_payment->getKey(),
                    "cheque_number" => $cheque_payment->cheque_number,
                    "amount" => $cheque_payment->amount,
                    "cheque_Date" => $cheque_payment->cheque_Date,
                    "payment_Date" => $cheque_payment->payment_Date,
                    "bank" => $cheque_payment->bank,
                    "branch" => $cheque_payment->branch,
                    "deposited_bank_account" => $cheque_payment->deposited_bank_account,
                    "deposited_bank" => $cheque_payment->deposited_bank,
                    "transaction_status" => $cheque_payment->transaction_status,
                    "new_cheque_date" => $cheque_payment->new_cheque_date,
                ],
            ]
        ];
    }

    public function delete(Request $request){
        $id = $request->input("id");

        $transaction = Transaction::find($id);

        if(empty($id)){
            return abort(400);
        }

        $transaction->delete();

        return[
            "success"=>true
        ];

    }
}


