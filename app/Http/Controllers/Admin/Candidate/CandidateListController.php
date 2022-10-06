<?php

namespace App\Http\Controllers\Admin\Candidate;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateListController extends Controller
{
    public function index()
    {
        return view('admin.candidate.candidatelist.index');
    }
}
