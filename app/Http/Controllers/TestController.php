<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        $ip = '168.45.78.218';
        echo sprintf('select * from user where ip = %s',$ip);
    }
}
