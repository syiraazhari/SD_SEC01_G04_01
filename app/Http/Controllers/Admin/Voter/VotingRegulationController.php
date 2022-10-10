<?php

namespace App\Http\Controllers\Admin\Voter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VotingRegulationController extends Controller
{
    public function index()
    {
        return view('admin.votingpage.votingregulation.index');
    }
}
