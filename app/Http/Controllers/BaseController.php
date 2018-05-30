<?php

namespace App\Http\Controllers;


use App\Maintext;
use App\BookOnline;
class BaseController extends Controller
{
     public function getIndex($id=null)
        { 

                $obj=Maintext::where('url',$id)->first();
                return view('static',compact('obj')); 
        }

         public function postIndex($id=null)
            {
            	$onln=new BookOnline;
            	$onln->name=$_POST['name'];
            	$onln->email=$_POST['email'];
            	$onln->number=$_POST['number'];
            	$onln->data=$_POST['bookingDate'];
            	$onln->time=$_POST['reservationtime'];
            	$onln->message=$_POST['message2'];
            	$onln->save();

            }
}


