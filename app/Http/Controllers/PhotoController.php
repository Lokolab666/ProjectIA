<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    
function getPhoto(){
    return view("nino.fotonino");
}

function getIndex(){
    return view("nino.inicionino");
}


}
