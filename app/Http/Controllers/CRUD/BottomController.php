<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Bottom;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BottomController extends Controller
{
    public function index()
    {
        $bottoms = Bottom::all();
        return view('botttom-main-product', [
            'bottoms' => $bottoms
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'item_code' => 'required',
            'name' => 'required',
            'brand' => 'required',
            'colors' => 'required',
            'init_stocks' => 'required|integer',
            'suppliers' => 'required',
            'sizes' => 'required',
            'wholesale_price' => 'required|numeric',
            'retail_price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image'
        ]);

        $bottom = Bottom::where('item_code', $validatedData['item_code'])->first();

        if ( !$bottom ) {
            $bottom = new Bottom();
            $bottom->item_code = $validatedData['item_code'];
        }

        $bottom->name = $validatedData['name'];
        $bottom->brand = $validatedData['brand'];
        $bottom->whole_sale_price = $validatedData['wholesale_price'];
        $bottom->retail_price = $validatedData['retail_price'];
        $bottom->description = $validatedData['description'];
        $bottom->colors = $validatedData['colors'];
        $bottom->initial_stocks = $validatedData['init_stocks'];
        $bottom->suppliers = $validatedData['suppliers'];
        $bottom->sizes = implode(',', $validatedData['sizes']);
        $bottom->image = $request->file('image')->store('bottoms/'.$validatedData['item_code'], 'public');
        $bottom->save();

        return redirect()->back()->with([
            'create_update_status' => true
        ]);
    }

    public function destroy($id)
    {
        Bottom::find($id)->delete();
        return redirect()->back()->with([
            'delete_status' => true
        ]);
    }

    public function report()
    {
        $queryResult = DB::select(DB::raw("SELECT bottoms.item_code, bottoms.name, bottoms.initial_stocks, SUM(transaction.quantity_or_peices) as sold from bottoms INNER JOIN transaction ON transaction.item_code = bottoms.item_code GROUP BY bottoms.name, bottoms.initial_stocks, bottoms.item_code ORDER BY bottoms.item_code"));
        return view('botttom-main-product-report', ['data' => $queryResult]);
    }
}
