<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('index');
    }



    public function about_us(){
        return view('about');
    }

    public function service(){
        return view('service');
    }
}
