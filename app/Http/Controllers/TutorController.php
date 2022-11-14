<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;

class TutorController extends Controller
{
    public function post(Request $request)
    {

        $post = new Tutor;
        $post->patient_id  = $request->patient_id ;
        $post->person_id  = $request->person_id ;

        $post->save();
        
        return redirect('/CrearPersona');
    }
}
