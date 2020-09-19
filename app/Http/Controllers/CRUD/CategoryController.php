<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('add-category');
    }
}
