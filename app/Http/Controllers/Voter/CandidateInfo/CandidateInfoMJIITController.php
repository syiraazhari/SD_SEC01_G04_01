<?php

namespace App\Http\Controllers\Voter\CandidateInfo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateInfoMJIITController extends Controller
{
    public function index()
    {
        return view('voter.candidateinfo.candidatemjiit.index');
    }
}
