<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\admin\ProfileEditController;
use App\Http\Controllers\Admin\AboutMPP\EditAboutMPPController;
use App\Http\Controllers\Admin\MPPAlumni\EditMPPAlumniController;

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


Route::get('testing', 'App\Http\Controllers\TestingController@index');

Route::get('/status', 'App\Http\Controllers\StatusController@index');

Route::get('/change-password', 'App\Http\Controllers\ChangePasswordController@index');
Route::post('/change-password', 'App\Http\Controllers\ChangePasswordController@store')->name('change.password');

Route::middleware(['auth', 'isVoter'])->group(function () {
    Route::get('/voter', 'App\Http\Controllers\HomeController@index');
    Route::get('/voter/profiles', 'App\Http\Controllers\Voter\ProfileController@index');

    Route::get('voter/electionresult', 'App\Http\Controllers\Voter\ElectionResultController@index');
    Route::get('voter/aboutmpp', 'App\Http\Controllers\Voter\AboutMPP\AboutMPPController@index');
    Route::get('voter/mppalumni', 'App\Http\Controllers\Voter\MPPAlumni\MPPAlumniController@index');
    Route::get('voter/contact', 'App\Http\Controllers\Voter\Contact\ContactController@index');

    Route::get('voter/joinmpp', 'App\Http\Controllers\Voter\JoinMPP\JoinMPPController@index');
    Route::get('voter/joinmpp/register', 'App\Http\Controllers\Voter\JoinMPP\RegisterController@index');
    Route::post('saveForm', 'App\Http\Controllers\Voter\JoinMPP\RegisterController@register');
    Route::get('voter/joinmpp/manifesto', 'App\Http\Controllers\Voter\JoinMPP\ManifestoController@index');
    Route::post('upload', 'App\Http\Controllers\Voter\JoinMPP\RegisterController@manifesto');
    Route::get('voter/joinmpp/payment', 'App\Http\Controllers\Voter\JoinMPP\PaymentController@index');

    Route::post('voterFeedback', 'App\Http\Controllers\FeedbackController@feedbackvoter');

    Route::post('generalVote', 'App\Http\Controllers\VotingController@general');
    Route::post('ahibsVote', 'App\Http\Controllers\VotingController@ahibs');
    Route::post('ftirVote', 'App\Http\Controllers\VotingController@ftir');
    Route::post('mjiitVote', 'App\Http\Controllers\VotingController@mjiit');
    Route::post('spaceVote', 'App\Http\Controllers\VotingController@space');

    Route::get('voter/votingpage', 'App\Http\Controllers\Voter\Vote\VotingController@index');
    Route::get('voter/votingpage/votingregulation', 'App\Http\Controllers\Voter\Vote\VotingRegulationController@index');
    Route::get('voter/votingpage/votinggeneral', 'App\Http\Controllers\Voter\Vote\VotingGeneralController@index');
    Route::get('voter/votingpage/votingahibs', 'App\Http\Controllers\Voter\Vote\VotingAHIBSController@index');
    Route::get('voter/votingpage/votingftir', 'App\Http\Controllers\Voter\Vote\VotingFTIRController@index');
    Route::get('voter/votingpage/votingmjiit', 'App\Http\Controllers\Voter\Vote\VotingMJIITController@index');
    Route::get('voter/votingpage/votingspace', 'App\Http\Controllers\Voter\Vote\VotingSPACEController@index');
    Route::get('voter/votingpage/votingsubmit', 'App\Http\Controllers\Voter\Vote\VotingSubmitController@index');

    Route::get('voter/candidateinfo', 'App\Http\Controllers\Voter\CandidateInfo\CandidateInfoGeneralController@index');
    Route::get('voter/candidateinfo/candidateahibs', 'App\Http\Controllers\Voter\CandidateInfo\CandidateInfoAHIBSController@index');
    Route::get('voter/candidateinfo/candidateftir', 'App\Http\Controllers\Voter\CandidateInfo\CandidateInfoFTIRController@index');
    Route::get('voter/candidateinfo/candidatemjiit', 'App\Http\Controllers\Voter\CandidateInfo\CandidateInfoMJIITController@index');
    Route::get('voter/candidateinfo/candidatespace', 'App\Http\Controllers\Voter\CandidateInfo\CandidateInfoSPACEController@index');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/adminpanel', 'App\Http\Controllers\Admin\FrontendController@index');

    Route::get('adminpanel/profiles', 'App\Http\Controllers\Admin\ProfileController@index');
    Route::get('adminpanel/profiles/edit/{id}', [ProfileEditController::class, 'edit']);
    Route::post('updateProfile/{id}', 'App\Http\Controllers\Admin\ProfileEditController@updateProfile');


    Route::get('adminpanel/votingpage', 'App\Http\Controllers\Admin\VotingPageController@index');

    // Route::post('update-users','App\Http\Controllers\Admin\ProfileController@insert');

    Route::get('adminpanel/candidatelist', 'App\Http\Controllers\Admin\Candidate\CandidateListController@index');
    Route::get('adminpanel/viewtransaction', 'App\Http\Controllers\Admin\Candidate\ViewTransactionController@index');

    Route::get('adminpanel/aboutmpp', 'App\Http\Controllers\Admin\AboutMPP\AboutMPPController@index');
    Route::get('adminpanel/aboutmpp/editaboutmpp/{id}', [EditAboutMPPController::class, 'edit']);
    Route::pUT('update-aboutmpp/{id}', [EditAboutMPPController::class, 'update']);

    Route::get('adminpanel/mppalumni', 'App\Http\Controllers\Admin\MPPAlumni\MPPAlumniController@index');
    Route::get('adminpanel/mppalumni/editmppalumni/{id}', [EditMPPAlumniController::class, 'edit']);
    Route::pUT('update-mppalumni/{id}', [EditMPPAlumniController::class, 'update']);


    Route::get('adminpanel/contact', 'App\Http\Controllers\Admin\Contact\ContactController@index');


    Route::get('adminpanel/votingpage/votingregulation', 'App\Http\Controllers\Admin\Voter\VotingRegulationController@index');
    Route::get('adminpanel/votingpage/votinggeneral', 'App\Http\Controllers\Admin\Voter\VotingGeneralController@index');
    Route::get('adminpanel/votingpage/votingahibs', 'App\Http\Controllers\Admin\Voter\VotingAHIBSController@index');
    Route::get('adminpanel/votingpage/votingftir', 'App\Http\Controllers\Admin\Voter\VotingFTIRController@index');
    Route::get('adminpanel/votingpage/votingmjiit', 'App\Http\Controllers\Admin\Voter\VotingMJIITController@index');
    Route::get('adminpanel/votingpage/votingspace', 'App\Http\Controllers\Admin\Voter\VotingSPACEController@index');

    // Route::get('adminpanel/candidatepage/candidategeneral','App\Http\Controllers\Admin\Candidate\CandidateGeneralController@index');
    Route::get('adminpanel/candidatepage', 'App\Http\Controllers\Admin\Candidate\CandidatePage\CandidateGeneralController@index');
    Route::get('adminpanel/candidatepage/candidateahibs', 'App\Http\Controllers\Admin\Candidate\CandidatePage\CandidateAHIBSController@index');
    Route::get('adminpanel/candidatepage/candidateftir', 'App\Http\Controllers\Admin\Candidate\CandidatePage\CandidateFTIRController@index');
    Route::get('adminpanel/candidatepage/candidatemjiit', 'App\Http\Controllers\Admin\Candidate\CandidatePage\CandidateMJIITController@index');
    Route::get('adminpanel/candidatepage/candidatespace', 'App\Http\Controllers\Admin\Candidate\CandidatePage\CandidateSPACEController@index');
});

Route::middleware(['auth', 'isCandidate'])->group(function () {
    Route::get('/candidate', 'App\Http\Controllers\Candidate\FrontendController@index');

    Route::get('candidate/profiles', 'App\Http\Controllers\Candidate\ProfileController@index');
    Route::get('candidate/profiles/edit/{id}', [ProfileEditController::class, 'edit']);
    Route::post('updateProfile/{id}', 'App\Http\Controllers\Candidate\ProfileEditController@updateProfile');

    Route::get('candidate/electionresult', 'App\Http\Controllers\Candidate\ElectionResultController@index');

    Route::post('candidateFeedback', 'App\Http\Controllers\FeedbackController@feedbackcandidate');

    Route::get('candidate/aboutmpp', 'App\Http\Controllers\Candidate\AboutMPP\AboutMPPController@index');
    Route::get('candidate/mppalumni', 'App\Http\Controllers\Candidate\MPPAlumni\MPPAlumniController@index');
    Route::get('candidate/contact', 'App\Http\Controllers\Candidate\Contact\ContactController@index');
});
