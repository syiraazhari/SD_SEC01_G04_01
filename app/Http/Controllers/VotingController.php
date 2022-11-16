<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotingController extends Controller
{
    public function general(Request $request)
    {
        $result = new Result;
        $result->voter_id = Auth::user()->id;
        $result->position_id = $request->position_id;
        $result->candidate_id = $request->candidate_id;
        $result->save();
        return redirect('voter/votingpage/votingahibs');
    }
    public function ahibs(Request $request)
    {
        $result = new Result;
        $result->voter_id = Auth::user()->id;
        $result->position_id = $request->position_id;
        $result->candidate_id = $request->candidate_id;
        $result->save();
        return redirect('voter/votingpage/votingftir');
    }
    public function ftir(Request $request)
    {
        $result = new Result;
        $result->voter_id = Auth::user()->id;
        $result->position_id = $request->position_id;
        $result->candidate_id = $request->candidate_id;
        $result->save();
        return redirect('voter/votingpage/votingmjiit');
    }
    public function mjiit(Request $request)
    {
        $result = new Result;
        $result->voter_id = Auth::user()->id;
        $result->position_id = $request->position_id;
        $result->candidate_id = $request->candidate_id;
        $result->save();
        return redirect('voter/votingpage/votingspace');
    }
    public function space(Request $request)
    {
        $result = new Result;
        $result->voter_id = Auth::user()->id;
        $result->position_id = $request->position_id;
        $result->candidate_id = $request->candidate_id;
        $result->save();
        return redirect('voter/votingpage/votingsubmit');
    }
}
