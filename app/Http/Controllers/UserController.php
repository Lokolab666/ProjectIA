<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        
        $users = User::all();
        
        return view ('admin.gestionarUsuario', compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.editUser',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'user_id' => 'required',
            'email' => 'required',
            'password' => 'required',
            'type' => 'required',
        ]);
      
        $user->update([
            'user_id' => $request[''],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => $request['type'],
        ]);
      
        return redirect()->route('GestionarUsuario')
                        ->with('success','User updated successfully');
    }

    public function destroy(User $user)
    {
        error_log('ELIMINAR');
        $user->delete();
        return redirect()->route('GestionarUsuario')->with('success','User has been deleted successfully');
    }
}
