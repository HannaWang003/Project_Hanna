<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BabyController extends Controller
{
    public function baby(){
        return view('baby.index');
    }
}
