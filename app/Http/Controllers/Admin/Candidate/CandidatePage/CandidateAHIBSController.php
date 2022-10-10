<?php

namespace App\Http\Controllers\admin\candidate\candidatepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateAHIBSController extends Controller
{
    public function index()
    {
        return view('admin.candidate.candidatepage.candidateahibs.index');
    }
}
