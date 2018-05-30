<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Maintext;

class SearchController extends Controller
{
    public function getIndex() 
        { 
        	$search=$_GET['search'];
        	$ar=Maintext::where('body','LIKE','%'.$search.'%')->get();
               return view('search',compact('ar')); 
          }
}
