<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('jen/pages/register');
    }

    public function indexClient(){
        return view('jen/pages/registerClient');
    }
}
