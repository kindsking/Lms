<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appointmentController extends Controller
{
    public function index(){
        return view('appoinments');
    }

    public function appointment(Request $request){
        $data = new appointmentController;
        $data->dokter = $request->dokter;
        $data->user = $request->user;
        $data->time = $request->time;
        $data->date = $request->date;
      
        return redirect()->route('index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
