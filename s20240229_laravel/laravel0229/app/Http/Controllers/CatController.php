<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View;

class CatController extends Controller
{
    public function hello()
    {
        return view('hello');
    }
    public function testAction()
    {
        dd('hello testAction');
    }
}
