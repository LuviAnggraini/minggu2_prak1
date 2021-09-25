<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function prodi($hal){
        return view('prodi',['hal' => $hal]);
    }
    
}
