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

Route::get('voter/joinmpp','App\Http\Controllers\Voter\JoinMPP\JoinMPPController@index');
Route::get('voter/joinmpp/register','App\Http\Controllers\Voter\JoinMPP\RegisterController@index');
Route::get('voter/joinmpp/manifesto','App\Http\Controllers\Voter\JoinMPP\ManifestoController@index');
Route::get('voter/joinmpp/payment','App\Http\Controllers\Voter\JoinMPP\PaymentController@index');

Route::get('voter/votingpage','App\Http\Controllers\Voter\Vote\VotingController@index');
Route::get('voter/votingpage/votingregulation','App\Http\Controllers\Voter\Vote\VotingRegulationController@index');
Route::get('voter/votingpage/votinggeneral','App\Http\Controllers\Voter\Vote\VotingGeneralController@index');
Route::get('voter/votingpage/votingahibs','App\Http\Controllers\Voter\Vote\VotingAHIBSController@index');
Route::get('voter/votingpage/votingftir','App\Http\Controllers\Voter\Vote\VotingFTIRController@index');
Route::get('voter/votingpage/votingmjiit','App\Http\Controllers\Voter\Vote\VotingMJIITController@index');
Route::get('voter/votingpage/votingspace','App\Http\Controllers\Voter\Vote\VotingSPACEController@index');
Route::get('voter/votingpage/votingsubmit','App\Http\Controllers\Voter\Vote\VotingSubmitController@index');

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

    Route::get('adminpanel/candidatelist','App\Http\Controllers\Admin\Candidate\CandidateListController@index');
    Route::get('adminpanel/viewtransaction','App\Http\Controllers\Admin\Candidate\ViewTransactionController@index');

    Route::get('adminpanel/aboutmpp','App\Http\Controllers\Admin\AboutMPP\AboutMPPController@index');
    Route::get('adminpanel/mppalumni','App\Http\Controllers\Admin\MPPAlumni\MPPAlumniController@index');
    Route::get('adminpanel/contact','App\Http\Controllers\Admin\Contact\ContactController@index');

    Route::get('adminpanel/votingpage/votingregulation','App\Http\Controllers\Admin\Voter\VotingRegulationController@index');
    Route::get('adminpanel/votingpage/votinggeneral','App\Http\Controllers\Admin\Voter\VotingGeneralController@index');
    Route::get('adminpanel/votingpage/votingahibs','App\Http\Controllers\Admin\Voter\VotingAHIBSController@index');
    Route::get('adminpanel/votingpage/votingftir','App\Http\Controllers\Admin\Voter\VotingFTIRController@index');
    Route::get('adminpanel/votingpage/votingmjiit','App\Http\Controllers\Admin\Voter\VotingMJIITController@index');
    Route::get('adminpanel/votingpage/votingspace','App\Http\Controllers\Admin\Voter\VotingSPACEController@index');

    // Route::get('adminpanel/candidatepage/candidategeneral','App\Http\Controllers\Admin\Candidate\CandidateGeneralController@index');
    Route::get('adminpanel/candidatepage','App\Http\Controllers\Admin\Candidate\CandidatePage\CandidateGeneralController@index');
    Route::get('adminpanel/candidatepage/candidateahibs','App\Http\Controllers\Admin\Candidate\CandidatePage\CandidateAHIBSController@index');
    Route::get('adminpanel/candidatepage/candidateftir','App\Http\Controllers\Admin\Candidate\CandidatePage\CandidateFTIRController@index');
    Route::get('adminpanel/candidatepage/candidatemjiit','App\Http\Controllers\Admin\Candidate\CandidatePage\CandidateMJIITController@index');
    Route::get('adminpanel/candidatepage/candidatespace','App\Http\Controllers\Admin\Candidate\CandidatePage\CandidateSPACEController@index');
    
});

Route::middleware(['auth','isCandidate'])->group(function () {
    Route::get('/candidate','App\Http\Controllers\Candidate\FrontendController@index');

    Route::get('candidate/profiles','App\Http\Controllers\Candidate\ProfileController@index');

    Route::get('candidate/aboutmpp','App\Http\Controllers\Candidate\AboutMPP\AboutMPPController@index');
    Route::get('candidate/mppalumni','App\Http\Controllers\Candidate\MPPAlumni\MPPAlumniController@index');
    Route::get('candidate/contact','App\Http\Controllers\Candidate\Contact\ContactController@index');
});
 