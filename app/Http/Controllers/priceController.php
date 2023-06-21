<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class priceController extends Controller
{
    public function index(){
        return view('price');
    }
}
