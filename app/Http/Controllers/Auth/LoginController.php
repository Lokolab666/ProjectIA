<?php

namespace App\Http\Controllers\Auth;
/*
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
*/
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        error_log('Solicitud3');
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        error_log('Solicitud2');
        if (Auth::attempt($credentials)) {
            error_log('Solicitud1');
            $request->session()->regenerate();
            error_log('Solicitud');
            if (auth()->user()->type == 'patient') {
                error_log('Paciente');
                return redirect()->route('nino.inicionino');
            }else if (auth()->user()->type == 'tutor') {
                error_log('Tutor');
                return redirect()->route('nino.tarjetaAlimento');
            }else if (auth()->user()->type == 'admin'){
                error_log('Administrador');
                return redirect()->route('nino.fotonino');
            }


            return redirect()->intended('register');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    



    

    /**
 * Log the user out of the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function logout(Request $request)
    {
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('register');
    }
}
