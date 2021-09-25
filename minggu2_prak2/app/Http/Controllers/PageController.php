<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
    return  ('Selamat Datang');
    }
public function about(){
    return ('Luvi Anggraini 2031710044');
}
    public function articles($id){
        return ('Halaman Artikel dengan id '.$id);
    }
    
}
