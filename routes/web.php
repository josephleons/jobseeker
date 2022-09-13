<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\WelcomeConctroller;
use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AllocateController;



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


// user auth?
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login']);
Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'register']);
// Route::post('/users',[RegisterController::class,'index']);
Route::get('/logout',[LogoutController::class,'logout']);

// sites and home
Route::get('/',[SiteController::class,'index']);
// Route::get('/posts',[SiteController::class,'post']);
Route::get('/about',[SiteController::class,'about']);
Route::get('/contact',[SiteController::class,'contact']);
Route::get('/services',[SiteController::class,'services']);

Route::get('/users',[SiteController::class,'dashboard']);
Route::get('/inc',[SiteController::class,'footer']);

// return all post index
Route::get('/posts',[PostsController::class,'index']);
Route::get('/create',[PostsController::class,'create']);
Route::post('/create',[PostsController::class,'store']);
Route::post('/dashboard',[PostsController::class,'store']);
// Route::get('user_dashboard',[PostsController::class,'user']);

Route::resource('posts',PostsController::class);
Route::get('/show/{id}',[PostsController::class,'show']);
// Route::get('/applicant',[UserController::class,'applicant']);
Route::post('/edit/{id}',[PostsController::class,'update']);
Route::get('destroy/{id}',[PostsController::class,'destroy']);


Route::get('delete/{id}',[DeleteController::class,'delete']);
Route::resource('users',UserController::class);
Route::get('account',[UserController::class,'account']);
Route::post('/users',[UserController::class,'store']);

Route::controller(UserController::class)->group(function(){
    // Route::get('/users','role_depart');

});
// Route::post('/users',[UserController::class,'index']);

// middleware for authentication
Route::view('/denied','denied');
Route::group(['middleware'=>'VerifyMiddleware'], function(){
    // Route::view('posts',PostsController::class);

});

Route::get('/dashboard',[WelcomeConctroller::class,'dashboard']);

// admin dashboard
Route::get('/admin',[AdminController::class,'index']);

// profile
Route::get('/profile',[UserController::class,'profile']);

//add users
Route::get('/user_form',[UserController::class,'user_send']);
Route::get('/add_user',[UserController::class,'create']);

// company_form
Route::controller(CompanyController::class)->group(function(){
    Route::resource('company',CompanyController::class);
    Route::get('/company','index');
    Route::delete('destroy/{id}','destroy');
    Route::post('/company','store');
    Route::get('/show/{id}','show');
});

//applicant controller
Route::controller(ApplicantController::class)->group(function(){
    Route::resource('/applicant',ApplicantController::class);
    Route::get('/applicant_register','create');
    Route::post('/applicant_register','store');
    // Route::get('/myapp','index');
});

// EmployeeController
// Route::controller(EmployeeController::class)->group(function(){
//     // Route::get('employee','create');
//     Route::post('employee','store');
    
//     Route::get('/profile','profile');
//     Route::get('employee','country');
//     Route::get('allocate','companys');

// });

//allocated controller

Route::controller(AllocateController::class)->group(function(){
    Route::get('/edit/{id}','edit');
    Route::post('/edit/{id}','store');
    Route::get('/allocateList','allocateList');
});


//FeedbackController
Route::controller(FeedbackController::class)->group(function(){
    Route::resource('site',FeedbackController::class);
    Route::get('/','index');
    Route::post('/','store');
});

// Group middleware
Route::group(['middleware'=>'auth'],function(){
    Route::resource('allocate',AllocateController::class);
    Route::get('/edit/{id}',[AllocateController::class,'edit']);
    Route::post('/edit/{id}',[AllocateController::class,'store']);
    Route::get('/allocateList',[AllocateController::class,'allocateList']);

});
