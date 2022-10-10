<?php

namespace App\Http\Controllers\Voter\Vote;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VotingMJIITController extends Controller
{
    public function index()
    {
        return view('voter.vote.votingmjiit.index');
    }
}
