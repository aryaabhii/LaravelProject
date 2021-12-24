<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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


/*---------------------ADMIN START-----------------------------*/
//Login page view
Route::get('/', function () {
    return view('admin.AdminLogin');
});

Route::get('/adminlogin', function () {
    return view('admin.AdminLogin');
});

Route::post('/adminlogin',[LoginController::class,'AdminLogin']);

// //Session Check
Route::get('/admin', function () {
   if(!session()->has('admin')){
    session()->flash('error','Login to access');
    return redirect('adminlogin');
   }else{
    Route::view('admin.AdminDashboard');
   }
});

//Dashboard view
Route::get('/admin', function () {
    return view('admin.AdminDashboard');
});


//Logout
Route::get('/adminlogout', function () {
    session()->forget('Admin');
    session()->flash('error','Logout Successfully');
    return redirect('adminlogin');
});

//Add member
Route::get('/addmember', function () {
    return view('admin.members.AddMember');
});

/*---------------------ADMIN END-------------------------------*/


/*---------------------MEMBER START----------------------------*/
//Login page view
Route::get('/memberlogin', function () {
    return view('member.MemberLogin');
});

Route::post('/memberlogin',[LoginController::class,'MemberLogin']);

//Dashboard view
Route::get('/member', function () {
    return view('member.MemberDashboard');
});


//Logout
Route::get('/memberlogout', function () {
    session()->forget('Member');
    session()->flash('error','Logout Successfully');
    return redirect('memberlogin');
});
/*-----------------------MEMBER END----------------------------*/

Route::get('/member/create','App\Http\Controllers\MemberController@create')->name('members.create');
Route::post('/member/create','App\Http\Controllers\MemberController@store')->name('members.store');

 
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
