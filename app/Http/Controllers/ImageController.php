<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Auth;

class ImageController extends Controller
{
    public function post(Request $request)
    {
        $this->validate($request, [
            'image' => 'required'
        ]);
        $images = $request->image;
        foreach($images as $image) {
            $image_new_name = time() . $image->getClientOriginalName();
            $image->move('images', $image_new_name);
            $post = new Image;
            $post->image = 'images/' . $image_new_name;
            $post->category_id = 1;
            $post->patient_id = 1;
            
            $post->save();
        }
        return redirect('/FotoNueva');
    }
}
