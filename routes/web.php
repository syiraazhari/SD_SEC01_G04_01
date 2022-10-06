<?php

use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\HomeController;
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

Route::get('voter/aboutmpp','App\Http\Controllers\Voter\AboutMPP\AboutMPPController@index');
Route::get('voter/mppalumni','App\Http\Controllers\Voter\MPPAlumni\MPPAlumniController@index');
Route::get('voter/contact','App\Http\Controllers\Voter\Contact\ContactController@index');
Route::get('testing','App\Http\Controllers\TestingController@index');


Route::get('/status','App\Http\Controllers\StatusController@index');

Route::get('/change-password', 'App\Http\Controllers\ChangePasswordController@index');
Route::post('/change-password', 'App\Http\Controllers\ChangePasswordController@store')->name('change.password');

Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/adminpanel','App\Http\Controllers\Admin\FrontendController@index');

    // Route::get('adminpanel/profiles','App\Http\Controllers\Admin\ProfileController@index');
    Route::get('adminpanel/profiles', 'App\Http\Controllers\Admin\ProfileController@index');
    Route::get('adminpanel/profiles/edit', 'App\Http\Controllers\Admin\ProfileController@updateProfile');

    Route::get('adminpanel/votingpage','App\Http\Controllers\Admin\VotingPageController@index');

    // Route::post('update-users','App\Http\Controllers\Admin\ProfileController@insert');

    Route::get('adminpanel/candidatepage','App\Http\Controllers\Admin\Candidate\CandidatePageController@index');
    Route::get('adminpanel/candidatelist','App\Http\Controllers\Admin\Candidate\CandidateListController@index');
    Route::get('adminpanel/viewtransaction','App\Http\Controllers\Admin\Candidate\ViewTransactionController@index');

    Route::get('adminpanel/aboutmpp','App\Http\Controllers\Admin\AboutMPP\AboutMPPController@index');
    Route::get('adminpanel/mppalumni','App\Http\Controllers\Admin\MPPAlumni\MPPAlumniController@index');
    Route::get('adminpanel/contact','App\Http\Controllers\Admin\Contact\ContactController@index');
    
});

Route::middleware(['auth','isCandidate'])->group(function () {
    Route::get('/candidate','App\Http\Controllers\Candidate\FrontendController@index');

    Route::get('candidate/profiles','App\Http\Controllers\Candidate\ProfileController@index');

    Route::get('candidate/aboutmpp','App\Http\Controllers\Candidate\AboutMPP\AboutMPPController@index');
    Route::get('candidate/mppalumni','App\Http\Controllers\Candidate\MPPAlumni\MPPAlumniController@index');
    Route::get('candidate/contact','App\Http\Controllers\Candidate\Contact\ContactController@index');
});
 