<?php

namespace App\Http\Controllers\Voter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ElectionResultController extends Controller
{
    public function index()
    {
        return view('voter.electionresult.index');
    }

}
