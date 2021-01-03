<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
     * @return user post
     */
    public function index()
    {
        return (Auth::user()->user_type==1)?$this->buyerUserProfile():$this->allUserProfile();
    }
    private function allUserProfile(){
        return view('components.maincontent');
    }
     private function buyerUserProfile(){
        return view('components.buyer-profile');
    }
}
