<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->type == 'admin') {
            $users = User::where('type','user')->where('activation', 0)->get()->all();
            return view('adminHome')->with('users', $users);
        } else {
            return view('home');
        }
    }

    /**
     * Update User Activation Status
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userActive(User $user)
    {
        $user->update(['activation'=> 1]);
        return redirect()->back();
    }
}
