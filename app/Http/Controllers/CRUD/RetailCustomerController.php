<?php

namespace App\Http\Controllers\CRUD;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\RetailCustomer;
use App\Models\Occupation;
use Illuminate\Support\Facades\Response;

class RetailCustomerController extends Controller {
    public function index(){

        $retail_customers = RetailCustomer::with("occupation")->get();
        $occupations = Occupation::all();

        return view("retail-customer",[
            "customers"=> $retail_customers,
            "occupations"=> $occupations
        ]);
    }

    public function update(Request $request){
        $id = $request->input("updateId");

        if(empty($id)){
            return abort(400);
        } 

        $customer = RetailCustomer::with("occupation")->find($id);

        if(empty($customer)){
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contactNumber' => 'required',
            'address'=> 'required',
            'occupation'=> 'required|exists:occupation,id'
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $customer->update([
            "name"=> $request->input("name"),
            "phone_number"=> $request->input("contactNumber"),
            "description"=> $request->input("description"),
            "address"=> $request->input("address"),
            "occupation_id"=> $request->input("occupation")
        ]);

        return [
            'success'=> true,
            "customer"=> [
                "id"=> $customer->getKey(),
                "name"=> $customer->name,
                "contactNumber"=> $customer->phone_number,
                "description"=> $customer->description,
                "address"=> $customer->address,
                "occupation"=> [
                    "id"=> $customer->occupation->getKey(),
                    "name"=> $customer->occupation->name
                ]
            ]
        ];
    }

    public function create(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contactNumber' => 'required',
            'address'=> 'required',
            'occupation'=> 'required|exists:occupation,id'
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $customer = RetailCustomer::create([
            "name"=> $request->input("name"),
            "phone_number"=> $request->input("contactNumber"),
            "description"=> $request->input("description"),
            "address"=> $request->input("address"),
            "occupation_id"=> $request->input("occupation")
        ]);

        return [
            'success'=> true,
            "customer"=> [
                "id"=> $customer->getKey(),
                "name"=> $customer->name,
                "contactNumber"=> $customer->phone_number,
                "description"=> $customer->description,
                "address"=> $customer->address,
                "occupation"=> [
                    "id"=> $customer->occupation->getKey(),
                    "name"=> $customer->occupation->name
                ]
            ]
        ];
    }

    public function delete(Request $request){
        $id = $request->input("id");

        if(empty($id)){
            return abort(400);
        } 

        $customer = RetailCustomer::with("occupation")->find($id);

        if(empty($customer)){
            return abort(404);
        }

        $customer->delete();

        return [
            "success"=> true
        ];
    }
}
