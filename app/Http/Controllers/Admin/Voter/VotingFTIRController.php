<?php

namespace App\Http\Controllers\Admin\Voter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VotingFTIRController extends Controller
{
    public function index()
    {
        return view('admin.votingpage.votingftir.index');
    }
}
