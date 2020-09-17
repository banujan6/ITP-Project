<?php

namespace App\Http\Controllers\CRUD;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\RetailCustomer;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class RetailTransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::with("retail_customer")->get();
        $retail_customers = RetailCustomer::all();

        return view("retail-transaction",[
            "transactions"=> $transactions->where("payment_type","cash"),
            "retail_customers"=> $retail_customers
        ]);
    }

    public function update(Request $request){

        $id= $request->input("updateId");
        $payment_type= $request->input("payment_type");

        if(empty($id) || $payment_type !=='cash'){
            return abort(400);
        }
        
        $transaction = Transaction::with("retail_customer")->where("payment_type","cash")->find($id);

        $validator = Validator::make($request->all(), [
            'invoice_number'=>'required',
            'date'=>'required',
            'description',
            'price_per_quantity'=>'required',
            'quantity_or_peices'=>'required',
            'payment_type'=>'required',
            'cash'=>'required',
            'retail_customer'=>'required',
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
            "cash" => $request->input("cash"),
            "retail_customer_id" => $request->input("retail_customer")
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
                "retail_customer" =>[
                    "id" => $transaction->retail_customer->getkey(),
                    "name"=> $transaction->retail_customer->name
                ]
            ]
        ];
    }

    public function create(Request $request){

        $payment_type = $request->input("payment_type");

        if($payment_type !=='cash'){
            return abort(400);
        }
        
        $validator = Validator::make($request->all(), [
            'invoice_number'=>'required',
            'date'=>'required',
            'description',
            'price_per_quantity'=>'required',
            'quantity_or_peices'=>'required',
            'payment_type'=>'required',
            'cash'=>'required',
            'retail_customer'=>'required'
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
            "cash" => $request->input("cash"),
            "retail_customer_id" => $request->input("retail_customer")
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
                "retail_customer" =>[
                    "id" => $transaction->retail_customer->getkey(),
                    "name"=> $transaction->retail_customer->name
                ]
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
