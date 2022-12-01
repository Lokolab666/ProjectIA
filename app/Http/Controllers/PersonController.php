<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class PersonController extends Controller
{
    public function post(Request $request)
    {

        $post = new Person;
        $post->card_Id = $request->card_Id;
        $post->name = $request->name;
        $post->last_name = $request->lastName;
        $post->age = $request->age;
        $post->user_person = $request->email;
        $post->address = $request->direccion;
        $post->phone = $request->phone;

        $post->save();
        
        User::create([
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => $request['type'],
        ]);

        $typeCond = $request['type'];

        if ($typeCond == '0') {
            return redirect('/PasoDos');
        }elseif ($typeCond == '1') {
            return redirect('/PasoTres');
        }else {
            return redirect('/inicioAdmin');
        }
        
        
        
    }
}
