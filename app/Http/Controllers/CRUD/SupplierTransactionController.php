<?php

namespace App\Http\Controllers\CRUD;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\ChequePayment;
use App\Models\Supplier;
use App\Models\Bottom;
use App\Models\ReadymadeSub;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class SupplierTransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::with("supplier")->with("cheque_payment")->get();
        $status = ["pending", "depositted","returned"];
        $suppliers = Supplier::all();
        $readymade_subs = ReadymadeSub::all();
        $bottoms = Bottom::all();

        return view("supplier-transaction",[
            "transactions"=> $transactions->where("payment_type","cheque_supplier"),
            "status"=> $status,
            "suppliers"=> $suppliers,
            "readymade_subs"=> $readymade_subs,
            "bottoms"=> $bottoms
        ]);
    }

    public function update(Request $request){
        $payment_type = $request->input("payment_type");
        $item_code = $request->input("item_code");
        $transaction_status = $request->input("transaction_status");
        $id= $request->input("updateId");

        $transaction = Transaction::with("supplier")->with("cheque_payment")->where("payment_type","cheque_supplier")->find($id);

        if($payment_type !== 'cheque_supplier' || empty($id)){
            return abort(400);
        }

        $validator = Validator::make($request->all(), [
            'date'=>'required',
            'invoice_number'=>'required',
            'supplier' => 'required',
            'description',
            'cheque_number'=>'required',
            'cheque_Date'=>'required',
            'amount'=>'required',
            'payment_Date'=>'required',
            'payment_Date'=>'required',
            'bank'=>'required',
            'branch'=>'required',
            'transaction_status'=>'required',
            'item_code'=>'required',
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

        $cheque_payment= ChequePayment::updateOrCreate(['id'=>$id],[
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
            "supplier_id" => $request->input("supplier"),
            "payment_type"=> $request->input("payment_type"),
            "item_code"=>$request->input("item_code"),
        ]);

        return [
            'success'=> true,
            "transaction"=> [
                "id"=> $transaction->getKey(),
                "invoice_number"=> $transaction->invoice_number,
                "date"=> $transaction->date,
                "description"=> $transaction->description,
                "payment_type"=>$transaction->payment_type,
                "supplier" =>[
                    "id" => $transaction->supplier->getkey(),
                    "name"=> $transaction->supplier->name
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

    public function create(Request $request){

        $payment_type = $request->input("payment_type");
        $item_code = $request->input("item_code");

        if($payment_type !== 'cheque_supplier'){
            return abort(400);
        }
        
        $validator = Validator::make($request->all(), [
            'date'=>'required',
            'invoice_number'=>'required',
            'supplier' => 'required',
            'description',
            'cheque_number'=>'required',
            'cheque_Date'=>'required',
            'amount'=>'required',
            'payment_Date'=>'required',
            'payment_Date'=>'required',
            'bank'=>'required',
            'branch'=>'required',
            'transaction_status'=>'required',
            'item_code'=>'required',
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
            "supplier_id" => $request->input("supplier"),
            "payment_type"=> $request->input("payment_type"),
            "item_code"=>$request->input("item_code"),
            
        ]);

        return [
            'success'=> true,
            "transaction"=> [
                "id"=> $transaction->getKey(),
                "invoice_number"=> $transaction->invoice_number,
                "date"=> $transaction->date,
                "description"=> $transaction->description,
                "payment_type"=>$transaction->payment_type,
                "supplier" =>[
                    "id" => $transaction->supplier->getkey(),
                    "name"=> $transaction->supplier->name
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


