<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
    // public $image;

    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this->name = $user->name;
        $this->email = $user->email;
        $this->studID = $user->profile->studID;
        $this->year = $user->profile->year;
        $this->course = $user->profile->course;
        $this->phoneNum = $user->profile->phoneNum;
        $this->gender = $user->profile->gender;
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find(Auth::user()->id);
        $user->name = $request->input('name');
        $user->save();

        $user->profile->studID = $this->studID;
        // if($this->newimage)
        // {
        //     if($this->image)
        //     {
        //         unlink('assets/images/profile/'.$this->image);
        //     }
        //     $imageName = Carbon::now()->timestamp . '.' . $this->newimage->extension();
        //     $this->newimage->storeAs('profile',$imageName);
        //     $user->profile->image = $imageName;
        // }
        $user->profile->year = $request->input('year');
        $user->profile->course = $request->input('course');
        $user->profile->phoneNum = $$request->input('phoneNum');
        $user->profile->gender = $request->input('gender');
        $user->profile->save();
        session()->flash('message','Profile has been updated successfully');

    }

    
}
