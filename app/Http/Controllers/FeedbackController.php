<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index()
    {
        //
    }

    public function feedbackvoter(Request $request)
    {
        $feedback = new Feedback;
        $feedback->user = Auth::user()->role_as;
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->good = $request->good;
        $feedback->average = $request->average;
        $feedback->poor = $request->poor;
        $feedback->comment = $request->comment;
        $feedback->save();
        return redirect('voter/contact')->with('status','Feedback sent successfully');
    }

    public function feedbackcandidate(Request $request)
    {
        $feedback = new Feedback;
        $feedback->user = Auth::user()->role_as;
        $feedback->name = $request->name;
        $feedback->email = $request->email;
        $feedback->good = $request->good;
        $feedback->average = $request->average;
        $feedback->poor = $request->poor;
        $feedback->comment = $request->comment;
        $feedback->save();
        return redirect('candidate/contact')->with('status','Feedback sent successfully');
    }
}
