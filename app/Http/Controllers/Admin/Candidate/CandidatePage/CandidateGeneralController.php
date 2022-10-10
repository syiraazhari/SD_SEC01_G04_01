<?php

namespace App\Http\Controllers\admin\candidate\candidatepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateGeneralController extends Controller
{
    public function index()
    {
        return view('admin.candidate.candidatepage.candidategeneral.index');
    }
}
