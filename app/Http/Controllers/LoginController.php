<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller {

    use AuthenticatesUsers;

    protected $username = 'username';
    protected $redirectTo = '/dashboard';
    protected $guard = 'web';

    public function login() {
        if (Auth::guard('web')->check()) {
            return redirect()->route('dashboard');
        }

        return view('home');
    }

    public function postLogin(Request $request) {

        $auth = Auth::guard('web')
                ->attempt([
            'email' => $request->username,
            'password' => $request->password,
            'statut' => 1]
        );

        if ($auth) {
          flashy()->success('Bienvenu dans votre tableau de bord '.Auth::user()->first_name.' '.Auth::user()->last_name, '');

            return redirect()->route('dashboard');
        }
        flashy()->error('Indentifiant incorrect, veuillez réesayer ou contactez les administrateurs','');

        return redirect()->route('main');
    }

    public function logout() {
        Auth::guard('web')->logout();
        return redirect()->route('main');
    }

}
