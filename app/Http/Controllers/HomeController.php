<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function patientHome()
    {
        return view('nino.inicionino');
    }

    public function adminHome()
    {
        return view('admin.inicioadmin');
    }
   
    public function tutorHome()
    {
        return view('tutor.iniciotutor');
    }

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
                return redirect()->route('tutor.iniciotutor');
            }else if (auth()->user()->type == 'admin'){
                error_log('Administrador');
                return redirect()->route('admin.inicioadmin');
            }


            return redirect('register');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
