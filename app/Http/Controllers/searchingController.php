<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchingController extends Controller
{
    public function search(){
    	return view('searching/searching');
    }
}
