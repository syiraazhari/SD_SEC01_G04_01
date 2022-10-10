<?php

namespace App\Http\Controllers\Voter\Vote;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VotingFTIRController extends Controller
{
    public function index()
    {
        return view('voter.vote.votingftir.index');
    }
}
