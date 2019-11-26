<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Crimecontroller extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');  
    }

     public function persons()
    {
     	 return view('crime-view.Missing-person');   
	}

        public function persontable()
    {
         return view('crime-view.Missing-person-table');   
    }
     public function personui()
    {
         return view('crime-view.Missing-person-ui');   
    }


	 public function vehicles()
    {
     	 return view('crime-view.Missing-vehicle');   
	}

         public function items()
    {
         return view('crime-view.Missing-item');   
    }

        public function itemstable()
    {
         return view('crime-view.Missing-items-table');   
    }


}
    
       
