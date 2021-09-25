<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function sarana($hal){
        return view('sarana',['hal' => $hal]);
    }
}
