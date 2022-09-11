<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElectionResultController extends Controller
{
    public function index()
    {
        return view('candidate.electionresult.index');
    }

}
