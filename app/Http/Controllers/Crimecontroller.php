<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Crimecontroller extends Controller
{
    public function dashboard()
    {
        return view('dashboard');  
    }

     public function persons()
    {
     	 return view('crime-view.Missing-person');   
	}

	 public function vehicles()
    {
     	 return view('crime-view.Missing-vehicle');   
	}

         public function items()
    {
         return view('crime-view.Missing-item');   
    }
}
    
       
