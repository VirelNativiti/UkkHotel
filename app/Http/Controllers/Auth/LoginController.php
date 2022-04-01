<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    
    public function index()
    {
        return view('auth.login', [
            "title" => "Login"
        ]);
        
    }
    public function indexx()
    {
        return view('auth.register', [
            "title" => "Register"
        ]);
    }

    public function authenticated(Request $request, $user)
    {
        if($user->hasRole('admin')){
            return redirect()->route('dkamar.index');
        }
        
        elseif($user->hasRole('resepsionis')){
            return redirect()->route('resepsionis');
        }
            return redirect()->route('tamu');
    }
}
