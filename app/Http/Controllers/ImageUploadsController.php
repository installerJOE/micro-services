<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImageUpload;

class ImageUploadsController extends Controller
{
    //create a new image in storage
    public function store(Request $request)
    {
        // Validate the inputs
        // $request->validate([
        //     'image' => 'required',
        // ]);

        // ensure the request has a file before we attempt anything else.
        // if ($request->hasFile('image')) {
        //     $request->validate([
        //         'image' => 'mimes:jpeg,bmp,png,jpg,svg' // Only allow .jpg, .bmp and .png file types.
        //     ]);

        //     // Save the file locally in the storage/public/ folder under a new folder named /images
        //     $request->file('image')->store('images', 'public');

        //     // Store the record, using the new file hashname which will be it's new filename identity.
        //     $image = new ImageUpload;
        //     $image->name = $request->file('image'); //trap name of the image and joins the name with dash(es)
        //     $image->image_url = $request->file('image')->hashName();
        //     $image->save(); // Finally, save the record.
        //     return back()->with('success', "Image has been successfully uploaded and added to record");
        // }
        // else{
        //     return back()->with('error', 'The uploaded file format is invalid');
        // }

        return redirect('/')->with('success', "Image has been successfully uploaded and added to record");
        

        $folderPath = public_path('images/');
 
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = uniqid() . '.png';
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);
 
        $image = new ImageUpload;
        $image->name = $imageName;
        $image->image_url = $imageFullPath;

        $image->save();

        return back()->with('success', "Image has been successfully uploaded and added to record");

    }

    
    //Update the image in storage.
    public function update(Request $request, $id)
    {
        //
    }

    
    //Remove the image from storage.
    public function destroy($id)
    {
        //
    }
}
