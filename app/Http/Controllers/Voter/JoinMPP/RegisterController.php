<?php

namespace App\Http\Controllers\Voter\JoinMPP;

use App\Models\User;
use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Models\CandidateManifesto;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('voter.joinmpp.register.index');
    }

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

    public function register(Request $request)
    {
        $candidate = new Candidate;
        $candidate->user_id = Auth::user()->id;
        $candidate->fullName = $request->fullName;
        $candidate->yearCourse = $request->yearCourse;
        $candidate->matricsNum = $request->matricsNum;
        $candidate->faculty = $request->faculty;
        $candidate->phoneNum = $request->phoneNum;
        $candidate->seat = $request->seat;
        $candidate->save();
        return redirect('voter/joinmpp/manifesto')->with('status', 'Candidate Register Form Data Has Been inserted');
    }

    public function manifesto(Request $request)
    {
        $data = new CandidateManifesto;

        $this->validate($request, [
            'formalPhoto' => 'required',
            'formalPhoto.*' => 'mimes:doc,pdf,docx,zip,png,jpge,jpg'
        ]);

        if($request->hasfile('formalPhoto'))
        {
            $file = $request->file('formalPhoto');
            $filename = date('Ymd').('_').$file->getClientOriginalName();
            $file-> move(public_path('/storage/app/public/formalPhoto'), $filename);
            $data['formalPhoto']= $filename;
        }

        $this->validate($request, [
            'matricCardPhoto' => 'required',
            'matricCardPhoto.*' => 'mimes:doc,pdf,docx,zip,png,jpge,jpg'
        ]);

        if($request->hasfile('matricCardPhoto'))
        {
            $file = $request->file('matricCardPhoto');
            $filename = date('Ymd').('_').$file->getClientOriginalName();
            $file-> move(public_path('/storage/app/public/matricCardPhoto'), $filename);
            $data['matricCardPhoto']= $filename;
        }
        
        $data->user_id = Auth::user()->id;
        $data->manifesto = $request->manifesto;
        $data->save();
        
        return redirect('voter/joinmpp/payment')->with('status', 'Candidate Register Form Data Has Been inserted');
    }
}
