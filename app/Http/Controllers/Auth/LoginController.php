<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectTo()
    {
        $role = auth()->user()->role; // obtiene el rol del usuario autenticado
        switch ($role) {
            case 'admin':
                return route('admin.dashboard'); // redirigir al panel de admin
            case 'instructor':
                return route('instructor.dashboard'); // redirigir al panel de trabajador
            case 'administrativos':
                return route('administrativos.dashboard'); // redirigir al panel de administrador
            default:
                return route('home'); // redirigir al home si no tiene un rol específico
        }
    }
}
