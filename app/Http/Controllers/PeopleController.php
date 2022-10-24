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
        
        $collection = array('');
        $collection=$request->input('registerRole');
        echo $collection[0];

        $post->role_id = $collection[0];

        $post->save();
        
        return redirect('/LoginUser');
    }
}
