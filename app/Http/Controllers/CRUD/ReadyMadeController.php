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
            'name' => 'required|unique:readymade_main,name'
        ]);

        if ( !empty($request->get('id'))) {
            $category = ReadymadeMain::findOrFail($request->get('id'));
        } else {
            $category = new ReadymadeMain();
        }


        $category->name = $data['name'];
        $category->brand = 0;
        $category->save();

        return redirect()->route('category.ready-made.index');
    }

    public function destroy($id)
    {
        ReadymadeMain::where('id', $id)->delete();

        return redirect()->route('category.ready-made.index');
    }
}
