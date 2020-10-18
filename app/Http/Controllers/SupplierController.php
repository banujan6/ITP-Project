<?php

namespace App\Http\Controllers;
use App\Models\Bank;
use App\Models\ChequePayment;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{


    public function index()
    {
        $suppliers = Supplier::with(array('readymades' => function($query)
        {
            $query->orderBy('initial_stocks', 'desc');

        }))->get();

        $banks = Bank::all();


        $shares = \DB::table('transaction')
            ->join('suppliers', 'suppliers.id', '=', 'transaction.supplier_id')
            ->join('cheque_payment', 'cheque_payment.id', '=', 'transaction.cheque_payment_id')
            ->where('cheque_payment.transaction_status','=','returned')
            ->get();

        $sum = \DB::table('transaction')
            ->select('suppliers.name',\DB::raw('SUM(cheque_payment.amount) as total_sales'))
            ->join('suppliers', 'suppliers.id', '=', 'transaction.supplier_id')
            ->join('cheque_payment', 'cheque_payment.id', '=', 'transaction.cheque_payment_id')
            ->where('cheque_payment.transaction_status','=','returned')->groupBy('suppliers.name')
            ->get();




        return view('supplier',["suppliers" =>$suppliers, "share" => $shares, "sum"=>$sum,"banks"=>$banks]);
    }


    public function update(Request $request){
        $id = $request->input("updateId");

        if(empty($id)){
            return abort(400);
        }

        $supplier = Supplier::with(array('readymades' => function($query)
        {
            $query->orderBy('initial_stocks', 'desc');

        }))->find($id);

        $count = 0;
        $product1 = array();
        $product2 = array();


        foreach($supplier->readymades as $readymade) {

            $product1[] = $readymade->item_code;

            if ( $count == 2){
                break;}

            $count = $count +1;
        }

        $products1 = implode(" | ",$product1);
//
//        foreach($supplier->fabrics as $fabric) {
//
//            $product2[] = $fabric->name;
//
//            if ( $count == 2){
//                break;}
//
//            $count = $count +1;
//        }

//        $products2 = implode(" | ",$product2);

//        $products = $products1." | ".$products2;

        if(strlen($products1) == 0){

            $products1 = "! Add products to the supplier";
        }

        if(empty($supplier)){
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contactNo' => 'required|regex:/(0)[0-9]{2}(-)[0-9]{7}\b/',
            'address'=> 'required',
            'description'=>'required',
            'bank'=>'required|exists:banks,id'
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $supplier->update([
            "name"=> $request->input("name"),
            "phone_number"=> $request->input("contactNo"),
            "address"=> $request->input("address"),
            "description"=> $request->input("description"),
            "bank_name"=> $request->input("bank"),

        ]);

        return [
            'success'=> true,

            "supplier" =>[

                "id" => $supplier->getKey(),
                "name"=> $supplier->name,
                "contactNo"=> $supplier->phone_number,
                "address"=> $supplier->address,
                "products"=> $products1,
                "description"=> $supplier->description,
                "bank"=> [
                    "id"=> $supplier->bank->getKey(),
                    "name"=> $supplier->bank->name]
            ]




        ];
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contactNo' => 'required|regex:/(0)[0-9]{2}(-)[0-9]{7}\b/',
            'address'=> 'required',
            'description'=>'required',
            'bank'=>'required|exists:banks,id'
        ]);

        $text = "! Add products to the supplier";

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $supplier = Supplier::create([

            "name"=> $request->input("name"),
            "phone_number"=> $request->input("contactNo"),
            "address"=> $request->input("address"),
            "description"=> $request->input("description"),
            "bank_name"=> $request->input("bank"),

        ]);

        return [
            'success'=> true,

            "supplier" =>[

                "id" => $supplier->getKey(),
                "name"=> $supplier->name,
                "contactNo"=> $supplier->phone_number,
                "address"=> $supplier->address,
                "products"=> $text,
                "description"=> $supplier->description,
                "bank"=> [
                    "id"=> $supplier->bank->getKey(),
                    "name"=> $supplier->bank->name]

            ]


        ];



    }

    public function delete(Request $request){
        $id = $request->input("id");

        if(empty($id)){
            return abort(400);
        }

        $supplier = Supplier::find($id);

        if(empty($supplier)){
            return abort(404);
        }

        $supplier->readymades()->detach();
//        $supplier->fabrics()->detach();
        $supplier->delete();

        return [
            "success"=> true
        ];
    }

}
