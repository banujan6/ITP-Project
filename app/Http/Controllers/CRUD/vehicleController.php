<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\vehicle;
//use App\Models\vehicle_finance;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Response;
//use Illuminate\Support\Facades\Validator;
//
//
//class vehicleController extends Controller
//{
//    public function index()
//    {
////        if (request('eager')) {
////            $vehicles = vehicle::with('vehicle_finance')->get();
////        } else {
////            $vehicles = vehicle::all();
////        }
////        return view('vehicles.index', compact('vehicles'));
//
//        $vehicle_finances = Vehicle_finance::all();
//        return view('vehicle-management',[
//            "vehicle-management" => $vehicle_finances
//        ]);
//    }
//
//
//    public function update(Request $request){
//        $id= $request->input("updateId");
//
//        if(empty($id)){
//            return abort(400);
//        }
//
//        $vehicle = Vehicle::find($id);
//
//        $validator = Validator::make($request->all(), [
//            'make' => 'required',
//            'model' => 'required',
//            'year_of_purchase'=> 'required',
//            'registered_number'=> 'required',
//            'colour'=> 'required',
//            'capacity'=> 'required'
//        ]);
//
//        if ($validator->fails()) {
//            return Response::json([
//                'success'=> false,
//                'errors'=> $validator->errors()
//            ],400);
//        }
//
//        $vehicle->update([
//            "make"=> $request->input("make"),
//            "model"=> $request->input("model"),
//            "year_of_purchase"=> $request->input("year_of_purchase"),
//            "registered_number"=> $request->input("registered_number"),
//            "colour"=> $request->input("colour"),
//            "capacity"=> $request->input("capacity")
//
//        ]);
//
//        return [
//            'success'=> true,
//            "vehicle_finance"=> [
//                "id"=> $vehicle->getKey(),
//                "make"=> $vehicle->make,
//                "model"=> $vehicle->model,
//                "year_of_purchase"=> $vehicle->year_of_purchase,
//                "registered_number"=> $vehicle->registered_number,
//                "colour"=> $vehicle->colour,
//                "capacity"=> $vehicle->capacity,
//            ]
//        ];
//    }
//
//
//    public function create(Request $request){
//
//        $validator = Validator::make($request->all(), [
//            'make' => 'required',
//            'model' => 'required',
//            'year_of_purchase'=> 'required',
//            'registered_number'=> 'required',
//            'colour'=> 'required',
//            'capacity'=> 'required',
//
//        ]);
//
//        if ($validator->fails()) {
//            return Response::json([
//                'success'=> false,
//                'errors'=> $validator->errors()
//            ],400);
//        }
//
//        $vehicle = Vehicle::create([
//            "make"=> $request->input("make"),
//            "model"=> $request->input("model"),
//            "year_of_purchase"=> $request->input("year_of_purchase"),
//            "registered_number"=> $request->input("registered_number"),
//            "colour"=> $request->input("colour"),
//            "capacity"=> $request->input("capacity")
//        ]);
//
////       $vehicle_finance = vehicle_finance::$id;
//
//        return [
//            'success'=> true,
//            "vehicle_finance"=> [
//                "id"=> $vehicle->getKey(),
//                "make"=> $vehicle->make,
//                "model"=> $vehicle->model,
//                "year_of_purchase"=> $vehicle->year_of_purchase,
//                "registered_number"=> $vehicle->registered_number,
//                "colour"=> $vehicle->colour,
//                "capacity"=> $vehicle->capacity
//
//            ]
//
//        ];
//    }
//
//
//
//
//
//    public function delete(Request $request)
//    {
//        $id = $request->input("id");
//
//        if (empty($id)) {
//            return abort(400);
//        }
//
//        $vehicle= vehicle::$id;
//
//        if (empty($vehicle)) {
//            return abort(404);
//        }
//
//        $vehicle->delete();
//
//        return [
//            "success" => true
//        ];
//    }
//
//
//
//}
