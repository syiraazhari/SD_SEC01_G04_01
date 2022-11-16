<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public $name;
    public $email;
    public $studID;
    public $year;
    public $course;
    public $phoneNum;
    public $gender;
    
    public function index()
    {
        $userProfile = Profile::where('user_id', Auth::user()->id)->first();
        if (!$userProfile) {
            $profile = new Profile();
            $profile->user_id = Auth::user()->id;
            $profile->save();

        }
        $user = User::find(Auth::user()->id);

        return view('admin.profile.index', compact('user'));
    }
}