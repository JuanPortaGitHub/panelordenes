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
        protected $redirectTo = '/ordenes';

        /**
         * Create a new controller instance.
         *
         * @return void
         */
        public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /*public function login(LoginRequest $request)
    {

        $user = User::select('id')->where('user_name', $request->user_name)->where('pin', $request->pin)->first();

        if ($user) {
            Auth::loginUsingId($user->id);
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back()->with('app_warning', 'Credenciales Invalidas!')->withInput();
        }

    }*/
}
