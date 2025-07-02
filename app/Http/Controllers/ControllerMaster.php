<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMaster extends Controller
{
    public function mahasiswa(){
        return view('master/mahasiswa');
    }
         
    public function matakuliah(){
        return view('master/matakuliah');
    }
         
    public function nilai(){
        return view('master/nilai');
    }
}
