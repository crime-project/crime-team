<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;


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
        // return view('crime-view.missing-vehicles-table');   
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

     public function registereduser()
    {
         return view('crime-view.registered-user-table');   
    }
    public function criminal()
    {
         return view('crime-view.most-wanted-criminals');   
    }
    public function criminalstable()
    {
         return view('crime-view.most-wanted-criminals-table');   
    }
        public function criminalsui()
    {
         return view('crime-view.most-wanted-criminals-ui');   
    }

    public function crimereporting()
    {
         return view('crime-view.crime-reportinga');   
    }

    public function datetime()
    {
         return view('crime-view.date-time');   
    }

    public function crimtable()
    {
        return view('item.test-item');
    }
    
     public function crimetest()
    {
     
        $connect = mysqli_connect("localhost", "root", "", "crime_reporting");
     

       $query = mysqli_query( $connect, "SELECT * FROM items");

        $number=mysqli_num_rows($query);

        echo "Total records in Student table= ". $number;

    
    }

}
       
