<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddleController extends Controller
{
    //

    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index ()
    {
    	$a="Syifa";
    	return "Nama Saya Adalah :".$a;
    }




}
