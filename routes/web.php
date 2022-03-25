<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\UserController;
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
    return view('home');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::get('/login', function () {
    return view('home');
});
Route::get('/editmyuser', function () {
    // Session::forget('user');
    return view('edituser');
});
Route::get('/editmyuser', [UserController::class, 'getuser']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/useredit', [UserController::class, 'edituser']);
// Route::get('/userget', function () {
//     return view('edituser');
// });
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [UserController::class, 'register']);
Route::get('/userlist', function () {
    return view('viewuser');
});
Route::get('/userlist', [UserController::class, 'listuser']);
Route::get('/userdelete', [UserController::class, 'deleteuser']);
Route::post('/userlist', [UserController::class, 'search']);