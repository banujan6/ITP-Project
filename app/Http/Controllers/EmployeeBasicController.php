<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\BloodGroup;
use App\Models\Education;
use App\Models\EmployeeBasicDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class EmployeeBasicController extends Controller
{
    //
    public function index(){

        $employees = EmployeeBasicDetails::all();
        $bank = Bank::all();
        $bloodGroup = BloodGroup::all();
        $education = Education::all();

        return view('employee',["employees" =>$employees, "banks"=>$bank, "bloodGroups"=>$bloodGroup,"educations"=>$education]);

    }

    public function create(Request $request){

        $validator = Validator::make($request->all(), [

            'name'=>'required',
            'age'=>['required','regex:/^([1-4][0-9]|[5-5][0-0])$/'],
            'dob'=>'required',
            'gender'=>'required',
            'marital'=>'required',
            'blood_group'=>'required|exists:blood_groups,id',
            'education_qualification'=>'required|exists:education,id',
            'address'=>'required',
            'nic'=>['required','regex:/[0-9]{9}(v)\b/'],
            'lic_no'=>'required',
            'bcard_number'=>'required',
            'employee_id'=>'required',
            'doj'=>'required',
            'employee_type'=>'required',
            'status'=>'required',
            'bank'=>'required|exists:banks,id',
            'bank_account_number'=>'required',
            'contact_number'=>['required','regex:/(0)[0-9]{2}(-)[0-9]{7}\b/'],
            'email'=>['required','regex:/\b[\w\.-]+@[\w\.-]+\.\w{2,4}\b/'],
            'address_correspondent'=>'required',
            'emergency_contact_number'=>['required','regex:/(0)[0-9]{2}(-)[0-9]{7}\b/'],
            'emergency_contact_person'=>'required',
            'emergency_contact_person_relationship'=>'required',
            'mediclaim'=>'required'


        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }



        $employee = EmployeeBasicDetails::create([


            'name' => $request->input("name"),
            'age' => $request->input("age"),
            'dob' => $request->input("dob"),
            'gender' => $request->input("gender"),
            'marital_status' => $request->input("marital"),
            'blood_group_id' => $request->input("blood_group"),
            'education_qualification_id' => $request->input("education_qualification"),
            'address' => $request->input("address"),
            'nic' => $request->input("nic"),
            'driving_licence_no' => $request->input("lic_no"),
            'bcard_no' => $request->input("bcard_number"),
            'employee_id' => $request->input("employee_id"),
            'doj' => $request->input("doj"),
            'employee_type' => $request->input("employee_type"),
            'employee_status' => $request->input("status"),
            'bank_id' => $request->input("bank"),
            'account_number' => $request->input("bank_account_number"),
            'phone_number' => $request->input("contact_number"),
            'email' => $request->input("email"),
            'correspondent_address' => $request->input("address_correspondent"),
            'emergency_contact_number' => $request->input("emergency_contact_number"),
            'emergency_contact_person' => $request->input("emergency_contact_person"),
            'emergency_contact_person_relationship' => $request->input("emergency_contact_person_relationship"),
            'mediclaim' => $request->input("mediclaim"),


        ]);



        return [

            'success' => true,

            "employee"=> [
                "id"=> $employee->getKey(),
                "name"=> $employee->name,
                "age" => $employee->age,
                "dob" => $employee->dob,
                "gender" => $employee->gender,
                "marital" => $employee->marital_status,
                "blood_group" => [
                    "id" => $employee->bloodGroup->getKey(),
                    "name"=>$employee->bloodGroup->name],
                "education_qualification" => [
                    "id" => $employee->education->getKey(),
                    "name"=>$employee->education->name],
                "address" => $employee->address,
                "nic" => $employee->nic,
                "lic_no" => $employee->driving_licence_no,
                "bcard_number" => $employee->bcard_no,
                "employee_id" => $employee->employee_id,
                "doj" => $employee->doj,
                "employee_type" => $employee->employee_type,
                "status" => $employee->employee_status,
                "bank"=> [
                    "id"=> $employee->bank->getKey(),
                    "name"=> $employee->bank->name
                ],
                "bank_account_number" => $employee->account_number,
                "contact_number" => $employee->account_number,
                "email" => $employee->email,
                "address_correspondent" => $employee->correspondent_address,
                "emergency_contact_number" => $employee->emergency_contact_number,
                "emergency_contact_person" => $employee->emergency_contact_person,
                "emergency_contact_person_relationship" => $employee->emergency_contact_person_relationship,
                "mediclaim" => $employee->mediclaim
            ]


        ];

    }

    public function update(Request $request){
        $id = $request->input("updateId");

        if(empty($id)){
            return abort(400);
        }

        $employee = EmployeeBasicDetails::with("education","bank","bloodGroup")->find($id);

        $validator = Validator::make($request->all(), [

            'name'=>'required',
            'age'=>['required','regex:/^([1-4][0-9]|[5-5][0-0])$/'],
            'dob'=>'required',
            'gender'=>'required',
            'marital'=>'required',
            'blood_group'=>'required|exists:blood_groups,id',
            'education_qualification'=>'required|exists:education,id',
            'address'=>'required',
            'nic'=>['required','regex:/[0-9]{9}(v)\b/'],
            'lic_no'=>'required',
            'bcard_number'=>'required',
            'employee_id'=>'required',
            'doj'=>'required',
            'employee_type'=>'required',
            'status'=>'required',
            'bank'=>'required|exists:banks,id',
            'bank_account_number'=>'required',
            'contact_number'=>['required','regex:/(0)[0-9]{2}(-)[0-9]{7}\b/'],
            'email'=>['required','regex:/\b[\w\.-]+@[\w\.-]+\.\w{2,4}\b/'],
            'address_correspondent'=>'required',
            'emergency_contact_number'=>['required','regex:/(0)[0-9]{2}(-)[0-9]{7}\b/'],
            'emergency_contact_person'=>'required',
            'emergency_contact_person_relationship'=>'required',
            'mediclaim'=>'required'


        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $employee -> update([


            'name' => $request->input("name"),
            'age' => $request->input("age"),
            'dob' => $request->input("dob"),
            'gender' => $request->input("gender"),
            'marital_status' => $request->input("marital"),
            'blood_group_id' => $request->input("blood_group"),
            'education_qualification_id' => $request->input("education_qualification"),
            'address' => $request->input("address"),
            'nic' => $request->input("nic"),
            'driving_licence_no' => $request->input("lic_no"),
            'bcard_no' => $request->input("bcard_number"),
            'employee_id' => $request->input("employee_id"),
            'doj' => $request->input("doj"),
            'employee_type' => $request->input("employee_type"),
            'employee_status' => $request->input("status"),
            'bank_id' => $request->input("bank"),
            'account_number' => $request->input("bank_account_number"),
            'phone_number' => $request->input("contact_number"),
            'email' => $request->input("email"),
            'correspondent_address' => $request->input("address_correspondent"),
            'emergency_contact_number' => $request->input("emergency_contact_number"),
            'emergency_contact_person' => $request->input("emergency_contact_person"),
            'emergency_contact_person_relationship' => $request->input("emergency_contact_person_relationship"),
            'mediclaim' => $request->input("mediclaim"),


        ]);



        return [

            'success' => true,

            "employee"=> [
                "id"=> $employee->getKey(),
                "name"=> $employee->name,
                "age" => $employee->age,
                "dob" => $employee->dob,
                "gender" => $employee->gender,
                "marital" => $employee->marital_status,
                "blood_group" => [
                    "id" => $employee->bloodGroup->getKey(),
                    "name"=>$employee->bloodGroup->name],
                "education_qualification" => [
                    "id" => $employee->education->getKey(),
                    "name"=>$employee->education->name],
                "address" => $employee->address,
                "nic" => $employee->nic,
                "lic_no" => $employee->driving_licence_no,
                "bcard_number" => $employee->bcard_no,
                "employee_id" => $employee->employee_id,
                "doj" => $employee->doj,
                "employee_type" => $employee->employee_type,
                "status" => $employee->employee_status,
                "bank"=> [
                    "id"=> $employee->bank->getKey(),
                    "name"=> $employee->bank->name
                ],
                "bank_account_number" => $employee->account_number,
                "contact_number" => $employee->account_number,
                "email" => $employee->email,
                "address_correspondent" => $employee->correspondent_address,
                "emergency_contact_number" => $employee->emergency_contact_number,
                "emergency_contact_person" => $employee->emergency_contact_person,
                "emergency_contact_person_relationship" => $employee->emergency_contact_person_relationship,
                "mediclaim" => $employee->mediclaim
            ]


        ];
    }

    public function delete(Request $request){
        $id = $request->input("id");

        if(empty($id)){
            return abort(400);
        }

        $employee = EmployeeBasicDetails::with("education","bank","bloodGroup")->find($id);

        if(empty($employee)){
            return abort(404);
        }

        $employee->delete();

        return [
            "success"=> true
        ];
    }
}
