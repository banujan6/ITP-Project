<?php

namespace App\Http\Controllers\CRUD;

use App\Models\ReadymadeMain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ReadymadeSub;
use App\Models\Colour;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Intervention\Image\ImageManagerStatic as Image;

class ReadymadeSubController extends Controller
{
    //
    public function index($mainId){

        //return view("readymade-sub-product-view");

        $readymade_Sub = ReadymadeSub::get()->where('main_id','=',$mainId);

        return view("readymade-sub-product",[
            "product"=> $readymade_Sub,
            "mainId"=>$mainId
        ]);
    }

    public function create(Request $request){


        //$request->image->store('public');
//        $readymadeSub = new ReadymadeSub();
//        if($request->hasFile('image')){
//
//            $file = $request->file('image');
//            $extension = $file->getClientOriginalExtension();
//            $fileName = time().','.$extension;
//            $file->move('uploads/highlights/', $fileName);
//            $highligths->image = $fileName;
//        }else{
//            return $request;
//            $highligths->image = '';
//        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'material' => 'required',
            'colour'=> 'required',
            'initialStock' => 'required',
            'retailPrice'=> 'required',
            'wholeSalePrice'=> 'required',
            'mainId'=>'required',
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $readymadeSub = ReadymadeSub::create([
            "name"=> $request->input("name"),
            "material"=> $request->input("material"),
            "colour_id"=> $request->input("colour"),
            "main_id"=> $request->input("mainId"),
            "initial_stocks"=> $request->input("initialStock"),
            "retail_price"=> $request->input("retailPrice"),
            "whole_sale_price"=> $request->input("wholeSalePrice"),
            //"available_size"=> $request->input("size"),
            "description"=> $request->input("description"),
            'image'=> $request->input('image')
        ]);

        return [
            "success"=> true,
            "readymadeSub"=> [
                "id"=> $readymadeSub->getKey(),
                "name"=> $readymadeSub->name,
                "material"=> $readymadeSub->material,
                "initialStock"=> $readymadeSub->initial_stocks,
                "retailPrice"=> $readymadeSub->retail_price,
                "wholeSalePrice"=> $readymadeSub->whole_sale_price,
                "description"=> $readymadeSub->description,
                "colour"=> $readymadeSub->colour_id,
                "mainId"=> $readymadeSub->main_id

//                "mainId"=> [
//                    "id"=> $readymadeSub->main->getKey()
//              ]
//
//
            ]
        ];

    }//create

    public function indexView(){

        $subId = 1;
        $readymade_Sub = ReadymadeSub::get()->where('id','=',$subId);

        return view("readymade-sub-product-view",[
            "products"=> $readymade_Sub,
            //"id" => $id
        ]);
    }



    public function update(Request $request){

        $id = $request->input("updateId");

        if(empty($id)){
            return abort(400);
        }

        $readyMadeSub = ReadymadeSub::find($id);

        if(empty($readyMadeSub)){
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required|required|string|min:3',
            'material' => 'required',
            'colour'=> 'required',
            'initialStock' => 'required',
            'retailPrice'=> 'required',
            'wholeSalePrice'=> 'required',
            'mainId'=>'required'
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $readyMadeSub->update([
            "name"=> $request->input("name"),
            "image"=> $request->input("image"),
            "material"=> $request->input("material"),
            "colour_id"=> $request->input("colour"),
            "main_id"=> $request->input("mainId"),
            "initial_stocks"=> $request->input("initialStock"),
            "retail_price"=> $request->input("retailPrice"),
            "whole_sale_price"=> $request->input("wholeSalePrice"),
            //"available_size"=> $request->input("size"),
            "description"=> $request->input("description")
        ]);

        return [
            "success"=> true,
            "readyMadeSub"=> [
                "id"=> $readyMadeSub ->getKey(),
                "name"=> $readyMadeSub->name,
                "material"=> $readyMadeSub->material,
                "mainId"=> $readyMadeSub->main_id,
                "initialStock"=> $readyMadeSub->initial_stocks,
                "retailPrice"=> $readyMadeSub->retail_price,
                "wholeSalePrice"=> $readyMadeSub->whole_sale_price,
                "description"=> $readyMadeSub->description

            ]
        ];
    }

    public function delete(Request $request){
        $id = $request->input("id");

        if(empty($id)){
            return abort(400);
        }

        $readyMadeSub = ReadymadeSub::find($id);

        if(empty($readyMadeSub)){
            return abort(404);
        }

        $readyMadeSub->delete();

        return [
            "success"=> true,
            //app()->call('App\Http\Controllers\CRUD\ReadymadeSubController@index')
        ];
    }

    public function fileUpload(Request $request){

        if($request->hasFile('file')) {

            $image       = $request->file('file');
            $filename = time().".jpg";

            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300, 300);
            $image_resize->save(storage_path('app/public/images/readyMade/' .$filename));

            return [
                "success"=> true,
                "filename"=> $filename
            ];

        } else {
            return [
                "success"=> false,
            ];
        }
    }


}
