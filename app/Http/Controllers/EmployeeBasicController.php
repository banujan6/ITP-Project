<?php

namespace App\Http\Controllers;

use App\Models\EmployeeBasicDetails;
use Illuminate\Http\Request;

class EmployeeBasicController extends Controller
{
    //
    public function index(){

        $employees = EmployeeBasicDetails::all();

        return view('employee',["employees" =>$employees]);

    }

    public function create(Request $request){

        $employee = EmployeeBasicDetails::create([

            "name"=> $request->input("name"),
            "phone_number"=> $request->input("ContactNo"),
            "nic"=>$request->input("NIC"),
            "gender"=>$request->input("Gender")

        ]);

//        return [
//
//            'success' => true,
//
//            $employee =>[
//
//                "name"=> $employee->name,
//                "NIC"=> $employee->nic,
//                "ContactNo"=>$employee->phone_number,
//                "Gender"=>$employee->gender
//
//            ]
//
//
//        ];

    }
}
