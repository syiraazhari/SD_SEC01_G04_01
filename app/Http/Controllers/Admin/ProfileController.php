<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    // public $image;
    
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

    public function updateProfile()
    {
        $user = User::find(Auth::user()->id);
        $user->name = $this->name;
        $user->save();

        $user->studID = $this->studID;
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
        $user->profile->year = $this->year;
        $user->profile->course = $this->course;
        $user->profile->phoneNum = $this->phoneNum;
        $user->profile->gender = $this->gender;
        $user->profile->save();
        session()->flash('message','Profile has been updated successfully');

    }

    // public function countUser()
    // {
    //     $posts = DB::table('voting')->where("role_as",1)->count();
    //     return view('admin.profile.index', compact($posts));
    // }

    // public function insert(Request $request)
    // {
    //     $profile = new Profile();
    //     if($request->hasFile('image'))
    //     {
    //         $file = $request->file('image');
    //         $ext = $file->getClientOriginalExtension();
    //         $filename = time().'.'.$ext;
    //         $file->move('assets/uploads/profile'.$filename);
    //         $profile->image = $filename;
    //     }
        
    //     $profile->name = $request->input('name');
    //     $profile->studID = $request->input('studentID');
    //     $profile->year = $request->input('year');
    //     $profile->course = $request->input('course');
    //     $profile->phoneNum = $request->input('phoneNum');
    //     $profile->gender = $request->input('gender') == TRUE ? '1':'0';
    //     $profile->save();
    //     return redirect('/adminpanel/profiles')->with('status', "Profile Updated Successfully");
    // }

    public function insert(Request $request)
    {
        $profile = new Profile();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/profile'.$filename);
            $profile->image = $filename;
        }
        
        $profile->name = $request->input('name');
        $profile->studID = $request->input('studentID');
        $profile->year = $request->input('year');
        $profile->course = $request->input('course');
        $profile->phoneNum = $request->input('phoneNum');
        $profile->gender = $request->input('gender') == TRUE ? '1':'0';
        $profile->save();
        return redirect('/adminpanel/profiles')->with('status', "Profile Updated Successfully");
    }
}
