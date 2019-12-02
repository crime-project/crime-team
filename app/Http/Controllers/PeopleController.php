<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\people;

class PeopleController extends Controller
{
    
    public function index()
    {
        return view('crime-view.missing-person');
    }

    public function persontable()
    {
         return view('crime-view.missing-person-table');   
    }
    
    public function create()
    {
        
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

      //  dd($fileNameToStore);




        $people= new people();
        $people->fullname= $request->fullname;
        $people->address= $request->address;
        $people->phone_no= $request->phone_no;
        $people->gender = $request->gender;
        $people->image  = $request->image;
        $people->description = $request->description;

            $people->image = $fileNameToStore;
        

        $people->save();

         return redirect()->route('show');

    }

    
    public function show()
    {
    
        $peopledata = people::get();
                                    //associative array
        return view('crime-view.missing-person-table');
    }

    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
