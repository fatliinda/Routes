<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $title='Welcome to my laravel app';
        $desc='Created by me';

        return view('products.index',compact('title','desc'));
    }
}
