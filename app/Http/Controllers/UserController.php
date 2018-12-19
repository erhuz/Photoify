<?php

declare (strict_types = 1);

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * Show the current users profile.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('user.profile');
    }

    public function setAvatar(Request $request)
    {
        $validatedData = $request->validate([
            'avatar' => 'required|mimes:jpeg,gif,png',
        ]);

        $avatar_path = $validatedData['avatar']->storeAs('public/avatars', $request->user()->id);

        Auth::user()->avatar = $avatar_path;
        Auth::user()->save();

        return back();
    }
}
