<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
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
     * Show the current users profile
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('user.profile');
    }
}
