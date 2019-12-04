<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class itemController extends Controller
{
   
    public function index()
    {
        $itemdata = item::all()->toArray();
        return view('crime-view.missing-items-table', compact('itemdata'));  
    }

    
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
        
           // dd($fileNameToStore);

        $items = new item();
        $items->owner_name = $request->item_own_name;
        $items->address = $request->address;
        $items->phone_no = $request->phone_number;
        $items->item_name = $request->item_name;
        $items->description = $request->description;

        $items->image = $fileNameToStore;
       

       $items->save();

         return redirect()->route('itemstable');
    }

    
     
    public function show($id)
    {
        //
    }

    
 
    public function edit($id)
    {
     
        $item = item::find($id);
        return view('item.item-edit', compact('item','id'));

    } 

    
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

        $items =  student::find($id);      
       $items->owner_name = $request->item_own_name;
        $items->address = $request->address;
        $items->phone_no = $request->phone_number;
        $items->item_name = $request->item_name;
        $items->description = $request->description;

        if($request->hasFile('cover_image')){
            $items->cover_image = $fileNameToStore;
        } 
  
        $items->save();

        return redirect()->route('show');
        }

    }

   
    public function destroy($id)
    {
        //
    }
}
