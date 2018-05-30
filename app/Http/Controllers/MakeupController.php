<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MakeupController extends Controller
{
	public function index(Request $request) 
        { 
               return view('works_makeup'); 
          }
}
