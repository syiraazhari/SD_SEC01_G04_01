<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes(['verify' => true]);

// Route::get('/voter', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/voter','App\Http\Controllers\HomeController@index');
Route::get('/voter/profiles','App\Http\Controllers\Voter\ProfileController@index');

Route::get('/mppalumni','App\Http\Controllers\Public\MPPAlumniController@index');
Route::get('/aboutmpp','App\Http\Controllers\Public\AboutMPPController@index');
Route::get('/contact','App\Http\Controllers\Public\ContactController@index');


Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/adminpanel','App\Http\Controllers\Admin\FrontendController@index');

    Route::get('adminpanel/profiles','App\Http\Controllers\Admin\ProfileController@index');

    Route::get('adminpanel/votingpage','App\Http\Controllers\Admin\VotingPageController@index');
    
});

Route::middleware(['auth','isCandidate'])->group(function () {
    Route::get('/candidate','App\Http\Controllers\Candidate\FrontendController@index');

    Route::get('candidate/profiles','App\Http\Controllers\Candidate\ProfileController@index');
});
 