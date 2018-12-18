<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function getUser(Request $request)
    {
        return view('users.profile');
    }
}
