<?php

namespace App\Http\Controllers\Admin\Voter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VotingAHIBSController extends Controller
{
    public function index()
    {
        return view('admin.votingpage.votingahibs.index');
    }
}
