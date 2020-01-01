<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TestController extends Controller
{
    //
    public function test(){
        echo "home下的test";
    }
    
    public function test2(){
        //echo 'sdsda';
        $al= Input::all();
        print_r($al);
    }
}
