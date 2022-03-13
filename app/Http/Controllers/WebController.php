<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    public function index(){
        return view('website.home.home');
    }
    public function detail(){
        return view('website.course.detail');
    }

}
