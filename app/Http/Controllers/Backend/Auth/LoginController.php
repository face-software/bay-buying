<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = RouteServiceProvider::USER_HOME;
    public function showLoginForm()
    {
        return view('backend.pages.auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email|max:50',
            'password'=>'required',
        ]);
        switch ($request->guard) {
            case 'buyer':
                $this->loginFunction($request->guard,$request->email,$request->password);
                break;
            case 'supplier':
                $this->loginFunction($request->guard,$request->email,$request->password);
                break;
            case 'manufacturer':
                $this->loginFunction($request->guard,$request->email,$request->password);
                break;
            default:
                $this->loginFunction($request->guard,$request->email,$request->password);
                break;
        }
        
    }
    private function loginFunction($guard,$email,$password){
       if (Auth::guard($guard)->attempt(['email'=>$email,'password'=>$password,'status'=>1])) {
            session()->flash('login_success','Successfully Login');
            return redirect()->intended(route('admin.dashboard'));
        } else {
            session()->flash('login_error','Successfully Login');
            return back();
        } 
    }
}
