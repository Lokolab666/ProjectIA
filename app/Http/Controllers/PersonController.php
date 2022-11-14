<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function post(Request $request)
    {

        $post = new Person;
        $post->card_Id = $request->card_Id;
        $post->name = $request->name;
        $post->last_name = $request->lastName;
        $post->age = $request->age;
        $post->user_person = $request->user;
        $post->address = $request->direccion;
        $post->phone = $request->phone;

        $post->save();
        
        return redirect('/CrearPersona');
    }
}
