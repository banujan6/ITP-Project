<?php

namespace App\Http\Controllers\CRUD;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\RetailCustomer;
use App\Models\Occupation;
use Illuminate\Support\Facades\Response;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;


class RetailCustomerController extends Controller {
    public function index(){

        $retail_customers = RetailCustomer::with("occupation")->get();
	$occupations = Occupation::all();

	$results = DB::table('transaction AS t')
			->join('retail_customer AS c', 't.retail_customer_id','c.id')
			->join('occupation AS o', 'o.id', 'c.occupation_id')
			->select([
				'o.name', 
				DB::raw('SUM(t.cash) AS amount'), 
				DB::raw('MIN(t.created_at) AS min_date'), 
				DB::raw('MAX(t.updated_at) AS max_date'), 
				'o.id'
			])
			->groupBy(['o.id','o.name'])
			->get();

		$results = $results->map(function($result){
			$customers = RetailCustomer::join('transaction AS t', 't.retail_customer_id','retail_customer.id')
				->groupBy([
					'retail_customer.id',
					'retail_customer.name'
				])
				->select(['retail_customer.name'])
				->orderBy(DB::raw('SUM(t.cash)'), "DESC")
				->limit(10)
				->get();

			$result->top_customers = $customers;

			return $result;
		});


        return view("retail-customer",[
            "customers"=> $retail_customers,
	    "occupations"=> $occupations,
	    "report_results"=> $results
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
            'name' => 'required|min:6',
            'contactNumber' => 'required|numeric',
            'address'=> 'required|min:12',
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
            'name' => 'required|min:3',
            'contactNumber' => 'required|numeric',
            'address'=> 'required|min:12',
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
