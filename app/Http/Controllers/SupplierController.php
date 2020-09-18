<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{


    public function index()
    {
        $suppliers = Supplier::all();


        return view('supplier',["suppliers" =>$suppliers]);
    }


    public function update(Request $request){
        $id = $request->input("updateId");

        if(empty($id)){
            return abort(400);
        }

        $supplier = Supplier::find($id);

        if(empty($supplier)){
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contactNo' => 'required',
            'address'=> 'required',
            'description'=>'required',
            'bankname'=>'required'
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
            "bank_name"=> $request->input("bankname"),

        ]);

        return [
            'success'=> true,

            "supplier" =>[

                "id" => $supplier->getKey(),
                "name"=> $supplier->name,
                "contactNo"=> $supplier->phone_number,
                "address"=> $supplier->address,
                "description"=> $supplier->description,
                "bankname"=> $supplier->bank_name,

            ]


        ];
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contactNo' => 'required',
            'address'=> 'required',
            'description'=>'required',
            'bankname'=>'required'
        ]);

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
            "bank_name"=> $request->input("bankname"),

        ]);

        return [
            'success'=> true,

            "supplier" =>[

                "id" => $supplier->getKey(),
                "name"=> $supplier->name,
                "contactNo"=> $supplier->phone_number,
                "address"=> $supplier->address,
                "description"=> $supplier->description,
                "bankname"=> $supplier->bank_name,

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

        $supplier->delete();

        return [
            "success"=> true
        ];
    }

}

