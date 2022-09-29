<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function countUser()
    {
        $posts = DB::table('voting')->where("role_as",1)->count();
        return view('admin.profile.index', compact($posts));
    }

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
        $profile->studentID = $request->input('studID');
        $profile->year = $request->input('year');
        $profile->course = $request->input('course');
        $profile->phoneNum = $request->input('phoneNum');
        $profile->gender = $request->input('gender') == TRUE ? '1':'0';
        $profile->save();
        return redirect('/adminpanel/profiles')->with('status', "Profile Updated Successfully");
    }
}
