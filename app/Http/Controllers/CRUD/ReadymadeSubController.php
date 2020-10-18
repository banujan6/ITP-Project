<?php

namespace App\Http\Controllers\CRUD;

use App\Models\ProductSupplier;
//use App\Models\ReadymadeMain;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ReadymadeSub;
//use App\Models\Colour;
use App\Models\ProductSize;
use App\Models\Size;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Intervention\Image\ImageManagerStatic as Image;

class ReadymadeSubController extends Controller
{
    //
    public function index($mainId){


        $readymade_Sub = ReadymadeSub::get()->where('main_id','=',$mainId);

        $sizes = Size::all();
        $suppliers = Supplier::all();

        $sizesFormatted = array();


        foreach($sizes as $size){
            $exploded = explode("-",$size->size);
            $mainCategory = count($exploded)>1?$exploded[0]: "Other";

            if(!isset($sizesFormatted[$mainCategory])){
                $sizesFormatted[$mainCategory] = [];
            }

            array_push($sizesFormatted[$mainCategory], $size);
        }

        return view("readymade-sub-product",[
            "product"=> $readymade_Sub,
            "mainId"=>$mainId,
            "sizesCategories"=> $sizesFormatted,
            "suppliers"=>$suppliers
        ]);
    }

    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:3',
            'itemCode' => 'required|unique:readymade_sub,item_code|min:3',
            'material' => 'required|min:3',
            'colour'=> 'required|min:4',
            'initialStock' => 'required|numeric|min:1',
            'retailPrice'=> 'required|numeric',
            'wholeSalePrice'=> 'required|numeric',
            'mainId'=>'required',
            'size'=> 'required|array'
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $readymadeSub = ReadymadeSub::create([
            "name"=> $request->input("name"),
            "item_code"=> $request->input("itemCode"),
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



        ProductSupplier::create([
            "product_id"=> $readymadeSub->getKey(),
            "supplier_id"=>$request->input("linkOfSupplier"),
            "product_type"=>"Readymade"
        ]);

        foreach($request->input('size') as $sizeId){
            ProductSize::create([
                "product_id"=> $readymadeSub->getKey(),
                "size_id"=>$sizeId,
                "product_type"=>"Readymade"
            ]);
        }

        $productSizes = ProductSize::with("size")->where("product_id",$readymadeSub->getKey())->get();
       // $suplier = ProductSupplier::with("linkOfSupplier")->where("product_id",$readymadeSub->getKey())->get();
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
                "mainId"=> $readymadeSub->main_id,
                "size"=> $productSizes->map(function($productSize){
                    return $productSize->size->getKey();
                }),
//                "linkOfSupplier"=>$suplier->map(function($productSupplier){
//                    return $productSupplier->linkOfSupplier->getKey();
//                })
            ]
        ];

    }//create

    public function indexView(Request $request, $subId){

        $readymade_Sub = ReadymadeSub::with(['productSizes','productSizes.size'],['productSupplier','productSupplier'])->where('id','=',$subId)->get();

        $sizes = Size::all();
        $suppliers = Supplier::all();

        $sizesFormatted = array();


        foreach($sizes as $size) {
            $exploded = explode("-", $size->size);
            $mainCategory = count($exploded) > 1 ? $exploded[0] : "Other";

            if (!isset($sizesFormatted[$mainCategory])) {
                $sizesFormatted[$mainCategory] = [];
            }

            array_push($sizesFormatted[$mainCategory], $size);
        }


        //$supplier = Supplier::get()->where('productSizes.');
        return view("readymade-sub-product-view",[
            "products"=> $readymade_Sub,
            "sizesCategories"=> $sizesFormatted,
            "suppliers"=>$suppliers

        ]);
    }



    public function update(Request $request){

        $id = $request->input("updateId");



        if(empty($id)){
            return abort(400);
        }

        $readyMadeSub = ReadymadeSub::find($id);
        $supplier = ProductSupplier::find('product_id', '=', $id);

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

        $supplier->update([
            "supplier_id"=>$request->input("linkOfSupplier"),
        ]);
//        ProductSupplier::update([
//            "product_id"=> $readyMadeSub->getKey(),
//            "supplier_id"=>$request->input("linkOfSupplier"),
//            "product_type"=>"Readymade"
//        ]);
//
//        foreach($request->input('size') as $sizeId){
//            ProductSize::update([
//                "product_id"=> $readyMadeSub->getKey(),
//                "size_id"=>$sizeId,
//                "product_type"=>"Readymade"
//            ]);
//        }

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
