<?php

namespace App\Http\Controllers\CRUD;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\ChequePayment;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class WholesaleTransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::all();

        return view("wholesale-transactions",[
            "transactions"=> $transactions
        ]);
    }

    public function update(Request $request){

        $id= $request->input("updateId");

        if(empty($id)){
            return abort(400);
        }
        
        $transaction = Transaction::find($id);

        $validator = Validator::make($request->all(), [
            'invoice_number'=>'required',
            'date'=>'required',
            'description',
            'price_per_quantity'=>'required',
            'quantity_or_peices'=>'required',
            'payment_type'=>'required',
            'cash',
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $transaction->update([
            "invoice_number"=> $request->input("invoice_number"),
            "date"=> $request->input("date"),
            "description"=> $request->input("description"),
            "price_per_quantity"=> $request->input("price_per_quantity"),
            "quantity_or_peices"=> $request->input("quantity_or_peices"),
            "payment_type"=> $request->input("payment_type"),
            "cash" => $request->input("cash")
        ]);

        return [
            'success'=> true,
            "transaction"=> [
                "id"=> $transaction->getKey(),
                "invoice_number"=> $transaction->invoice_number,
                "date"=> $transaction->date,
                "description"=> $transaction->description,
                "price_per_quantity"=>$transaction->price_per_quantity,
                "quantity_or_peices"=>$transaction->quantity_or_peices,
                "payment_type"=>$transaction->payment_type,
                "cash"=> $transaction->cash,
            ]
        ];
    }

    public function create(Request $request){

        $payment_type = $request->input("payment_type");
        $cheque_payment_id = $request->input("cheque_payment_id");

        if($payment_type === 'cash' and !(is_null($cheque_payment_id))){
            return abort(400);
        }
        
        $validator = Validator::make($request->all(), [
            'invoice_number'=>'required',
            'date'=>'required',
            'description',
            'price_per_quantity'=>'required',
            'quantity_or_peices'=>'required',
            'payment_type'=>'required|string',
            'cash'=>'exclude_unless:payment_type,cash|required',
            'cheque_payment_id'=> 'exclude_unless:payment_type,cheque|required',    
        ]);


        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $transaction = Transaction::create([
            "invoice_number"=> $request->input("invoice_number"),
            "date"=> $request->input("date"),
            "description"=> $request->input("description"),
            "price_per_quantity"=> $request->input("price_per_quantity"),
            "quantity_or_peices"=> $request->input("quantity_or_peices"),
            "payment_type"=> $request->input("payment_type"),
            "cheque_payment_id"=> $request->input("cheque_payment_id
            "),
            "cash" => $request->input("cash")
        ]);

        return [
            'success'=> true,
            "transaction"=> [
                "id"=> $transaction->getKey(),
                "invoice_number"=> $transaction->invoice_number,
                "date"=> $transaction->date,
                "description"=> $transaction->description,
                "price_per_quantity"=>$transaction->price_per_quantity,
                "quantity_or_peices"=>$transaction->quantity_or_peices,
                "payment_type"=>$transaction->payment_type,
                "cash"=> $transaction->cash,
            ]
        ];
    }

    public function delete(Request $request){
        $id = $request->input("id");

        $transaction = Transaction::find($id);

        // if(empty($id)){
        //     return abort(400);
        // }

        $transaction->delete();

        return[
            "success"=>true
        ];

    }
}


