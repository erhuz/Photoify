<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
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
     * Show a placeholder view
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('placeholder');
    }

    /**
     * Show the post upload form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showCreateForm()
    {
        return view('posts.new');
    }

    /**
     * Handle a post upload for the application
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        dd($request);
    }
}
