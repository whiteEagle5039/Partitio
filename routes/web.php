<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SongsController;
use Illuminate\Support\Facades\Route;


/**********************
 * building page
***********************/

Route::get('/building', function () {
    return view('welcome');
});

/*****************************************
 *      ROute Acceuil
 *****************************************/
//Route::get('/', 'home')->name('home')->controller(HomeController::class);

Route::prefix('/home')->name('acceuil.')->controller(HomeController::class)->group(function(){
    Route::get('/', 'home')->name('home');
});

/**********************
 * route users
***********************/

Route::prefix('/user')->name('auth.')->controller(AuthController::class)->group(function(){
    Route::get('/auth/login', 'AuthLogin')->name('login');
    Route::patch('/auth/login', 'authlogine');
    Route::get('/inscription', 'AuthInscription')->name('inscription');
    Route::patch('/inscription', 'doinscription');
    //..ajouts de routes postes

});

/************************************
 * Route Courses
 ************************************/
Route::prefix('/Course')->name('courses.')->controller(CoursesController::class)->group(function(){
    Route::get('/', 'courses')->name('home');
});

/************************************
 * Route Community
 ************************************/
Route::prefix('/Community')->name('community.')->controller(CommunityController::class)->group(function(){
    Route::get('/', 'community')->name('home');
    Route::get('/chat', 'communityChat')->name('chat');
    Route::get('/create', 'communityCreate')->name('create');
});
/************************************
 * Route Songs
 ************************************/
 Route::prefix('/Songs')->name('songs.')->controller(SongsController::class)->group(function(){
    Route::get('/', 'songs')->name('home');
    Route::get('/{slug}/{id}', 'showSheet')->name('sheet');
});
/************************************
 * Route profile
 ************************************/
Route::prefix('/Profil')->name('profil.')->controller(AuthController::class)->group(function(){
    Route::get('/', 'profil')->name('home');
});