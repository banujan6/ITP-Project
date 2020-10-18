<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use App\Models\Vehicle_finance;
use App\Models\Vehicle;

class VehicleFinanceController extends Controller
{
    public function index()
    {
          $vehicle_finances = Vehicle_finance::with('vehicles')->get();
          $vehicles = Vehicle::all();


          return view('vehicle-finance',[
              "vehicle_finances" => $vehicle_finances,
              "vehicles" => $vehicles
          ]);

//        $vehicle_finances = vehicle_finance::with('vehicle')->get();
//        return view('views/vehicle-finance', compact('vehicle_finances'));
    }

    public function update(Request $request){
        $id= $request->input("updateId");

        if(empty($id)){
            return abort(400);
        }

        $vehicle_finance = Vehicle_finance::find($id);

        $validator = Validator::make($request->all(), [
            'vehicles' => 'required',
            'finance_company' => 'required',
            'account_number'=> 'required|max:10',
            'monthly_payment_amount'=> 'required|max:15',
            'payment_date'=> 'required'
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $vehicle_finance->update([
            "vehicle_id"=> $request->input("vehicles"),
            "finance_company"=> $request->input("finance_company"),
            "account_number"=> $request->input("account_number"),
            "monthly_payment_amount"=> $request->input("monthly_payment_amount"),
            "payment_date"=> $request->input("payment_date")
        ]);

        return [
            'success'=> true,
            "vehicle_finance"=> [
                "id"=> $vehicle_finance->getKey(),
                "vehicles" =>[
                    "id" => $vehicle_finance->vehicles->getkey(),
                    "registered_number"=> $vehicle_finance->vehicles->registered_number
                ],
                "finance_company"=> $vehicle_finance->finance_company,
                "account_number"=> $vehicle_finance->account_number,
                "monthly_payment_amount"=> $vehicle_finance->monthly_payment_amount,
                "payment_date"=> $vehicle_finance->payment_date
            ]
        ];
    }
//
    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'vehicles' => 'required',
            'finance_company' => 'required',
            'account_number'=> 'required|max:10',
            'monthly_payment_amount'=> 'required|max:15',
            'payment_date'=> 'required'
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $vehicle_finance = Vehicle_finance::create([
            "vehicle_id"=> $request->input("vehicles"),
            "finance_company"=> $request->input("finance_company"),
            "account_number"=> $request->input("account_number"),
            "monthly_payment_amount"=> $request->input("monthly_payment_amount"),
           "payment_date"=> $request->input("payment_date")
        ]);

//       $vehicle_finance = vehicle_finance::$id;

        return [
            'success'=> true,
            "vehicle_finance"=> [
                "id"=> $vehicle_finance->getKey(),
                "finance_company"=> $vehicle_finance->finance_company,
                "account_number"=> $vehicle_finance->account_number,
                "monthly_payment_amount"=> $vehicle_finance->monthly_payment_amount,
                "payment_date"=> $vehicle_finance->payment_date,
                "vehicles" =>[
                    "id" => $vehicle_finance->vehicles->getkey(),
                    "registered_number"=> $vehicle_finance->vehicles->registered_number
                ]

            ]

        ];
    }

    public function delete(Request $request){
        $id = $request->input("id");

        if(empty($id)){
            return abort(400);
        }

        $vehicle_finance = vehicle_finance::find($id);

        if(empty($vehicle_finance)){
            return abort(404);
        }

        $vehicle_finance->delete();

        return [
            "success"=> true
        ];
    }


}
