<?php

namespace App\Http\Controllers;

use App\Models\vehicle;
use Illuminate\Http\Request;

class vehicleController extends Controller
{
    public function index()
    {
        if (request('eager')) {
            $vehicles = vehicle::with('vehicle_finance')->get();
        } else {
            $vehicles = vehicle::all();
        }
        return view('vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        //return view('vehicles.create');
    }

    /*public function store(Request $request, $vehicle_finance)
    {
        $vehicles = vehicle::create($request->only(['make','model','year_of_purchase','registered_number','colour','capacity']));
        $vehicles = new vehicle();
        $vehicle_finance -> model = $request->get('model');
        $vehicle_finance->finance_company = $request->get('finance_company');
        $vehicle_finance->account_number = $request->get('account_number');
        $vehicle_finance->monthly_payment_amount = $request->get('monthly_payment_amount');
        $vehicle_finance->payment_date = $request->get('payment_date');
        $vehicles->vehicle_finance()->save($vehicle_finance);
        return redirect()->route('views/vehicle-management');
    }*/

    public function delete(Request $request)
    {
        $id = $request->input("id");

        if (empty($id)) {
            return abort(400);
        }

        $vehicle = vehicle::with("vehicle_finance")->find($id);

        if (empty($vehicle)) {
            return abort(404);
        }

        $vehicle->delete();

        return [
            "success" => true
        ];
    }



}
