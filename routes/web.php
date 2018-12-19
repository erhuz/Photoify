<?php declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(!Auth::check()) {
        return view('welcome');
    }
    return Redirect::route('home');
})->name('welcome');


// Authentication Routes...
// $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
// $this->post('login', 'Auth\LoginController@login');
// $this->post('logout', 'Auth\LoginController@logout')->name('logout');
//
// Registration Routes...
// $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// $this->post('register', 'Auth\RegisterController@register');
//
// Password Reset Routes...
// $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
// $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
// $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
// $this->post('password/reset', 'Auth\ResetPasswordController@reset');
Auth::routes(); // This bit of code corresponds with all commented routes above

Route::get('/home', 'HomeController@index')->name('home');

// User routes
Route::get('profile', 'UserController@profile')->name('profile');

// Users routes
Route::get('users', 'UsersController@index')->name('users');
Route::get('user/{id}', 'UsertsController@getUser');

// Posts routes (user posts)
Route::get('posts', 'PostsController@index')->name('my posts');
Route::get('posts/new', 'PostsController@showCreateForm')->name('new post');
Route::post('posts/new', 'PostsController@create');
