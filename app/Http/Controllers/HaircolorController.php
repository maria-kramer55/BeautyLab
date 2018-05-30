<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HaircolorController extends Controller
{
    public function index(Request $request) 
        { 
               return view('works_haircolor'); 
          }
}
