<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleFinanceController extends Controller
{
    public function index()
    {
        $vehicle_finances = vehicle_finance::with('vehicle')->get();
        return view('views/vehicle-finance', compact('vehicle_finances'));
    }
}
