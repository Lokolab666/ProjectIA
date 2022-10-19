<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function post(Request $request)
    {
        $post = new People;
        $post->name = $request->registerName;
        $post->last_name = $request->registerLastName;
        $post->age = $request->registerAge;
        $post->user = $request->registerUsername;
        $post->password = $request->registerPassword;
        $post->role_id = $request->registerRole1;

        $post->save();
        
        return redirect('/LoginUser');
    }
}
