<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function stepOne(Request $request)
    {

        $post = new Patient;
        $post->card_Id = $request->card_Id;
        $post->score = $request->score;
        $post->level = $request->level;

        $post->save();
        
        return redirect('/CrearPersona');
    }
}
