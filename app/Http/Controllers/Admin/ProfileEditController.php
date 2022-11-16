<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileEditController extends Controller
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

        return view('admin.profile.edit', compact('user'));
    }

    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('admin.profile.edit', compact('profile'));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->email;
        $profile = Profile::find($id);
        $profile->studID = $request->input('studID');
        $profile->year = $request->input('year');
        $profile->course = $request->input('course');
        $profile->phoneNum = $request->input('phoneNum');
        $profile->gender = $request->input('gender');
        $profile->update();
        return redirect('adminpanel/profiles')->with('status', "Profile Updated Successfully");
    }
}
