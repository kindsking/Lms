<?php

namespace App\Http\Controllers;
use App\Models\dokter;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
     

        $dokter = dokter::all();
        return view ('index', compact('dokter'));

        
    }
    
}
