<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehicle;

class vehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $vehicledata = vehicle::all()->toArray();
       return view('crime-view.missing-vehicles-table', compact('vehicledata'));  

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
         

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        
            

        $vehicles = new vehicle();
        $vehicles->owner_name = $request->own_name;
        $vehicles->address = $request->address;
        $vehicles->phone_no = $request->phone_number;
        $vehicles->model_no = $request->mod_number;
        $vehicles->no_plate = $request->num_plate;
        $vehicles->description = $request->description;

        $vehicles->image = $fileNameToStore;
       
        //dd($vehicles);
       $vehicles->save();



         return redirect()->route('vehiclestable');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = vehicle::find($id);
       return view('vehicle.vehicle-edit', compact('vehicle','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                 // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore); 

        $vehicles = vehicle::find($id); 
        $vehicles->owner_name = $request->own_name;
        $vehicles->address = $request->address;
        $vehicles->phone_no = $request->phone_number;
        $vehicles->model_no = $request->mod_number;
        $vehicles->no_plate = $request->num_plate;
        $vehicles->description = $request->description;


        if($request->hasFile('cover_image')){
            $vehicles->cover_image = $fileNameToStore;
        } 
  
        $vehicles->save();

        return redirect()->route('show');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
