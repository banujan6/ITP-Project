<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\ReadymadeMain;
use Illuminate\Http\Request;

class ReadyMadeController extends Controller
{
    public function index()
    {
        $data = ReadymadeMain::orderBy('name')->get();
        return view('readymade-main-product', [
            'categories' => $data
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required'
        ]);

        $category = new ReadymadeMain();
        $category->name = $data['name'];
        $category->brand = 0;
        $category->save();

        return redirect()->route('category.ready-made.index');
    }
}
