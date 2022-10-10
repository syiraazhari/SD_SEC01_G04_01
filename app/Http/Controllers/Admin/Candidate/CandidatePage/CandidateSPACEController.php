<?php

namespace App\Http\Controllers\admin\candidate\candidatepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateSPACEController extends Controller
{
    public function index()
    {
        return view('admin.candidate.candidatepage.candidatespace.index');
    }
}
