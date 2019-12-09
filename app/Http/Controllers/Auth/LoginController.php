<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;
 
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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'account';
    }

    // public function login(Request $request)
    // {
    //     // , 'is_active' => '1'
    //     if (Auth::attempt(['account' => $request->username, 'password' => $request->password])) {

    //     session_start();
    //     $_SESSION['loggedIn'] = true;
    //     return redirect()->intended('/admin');
    //     }else{
    //         return redirect('/admin/loans');
    //     }
    // }

    protected function authenticated(Request $request, $user)
    {
        session_start();
        $_SESSION['loggedIn'] = true;

    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        session_start();
        session_destroy();

        return $this->loggedOut($request) ?: redirect('/admin');
    }
}

// if (Auth::check()) {

//     Auth::logout();
    
//     };

//     Auth::logout();