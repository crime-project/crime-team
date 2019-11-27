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
     	 return view('crime-view.missing-person');   
	}

        public function persontable()
    {
         return view('crime-view.missing-person-table');   
    }

     public function personui()
    {
         return view('crime-view.missing-person-ui');   
    }

	 public function vehicles()
    {
     	 return view('crime-view.missing-vehicle');   
	}

         public function vehiclestable()
    {
         return view('crime-view.missing-vehicles-table');   
    }

     public function vehicleui()
    {
         return view('crime-view.missing-vehicle-ui');   
    }
    
         public function items()
    {
         return view('crime-view.missing-item');   
    }

        public function itemstable()
    {
         return view('crime-view.missing-items-table');   
    }
     public function itemui()
    {
         return view('crime-view.missing-item-ui');   
    }

}
    
       
