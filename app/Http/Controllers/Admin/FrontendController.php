<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Result;
use App\Models\Candidate;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        $user = User::all();
        $voter = Result::all();
        $candidate = Candidate::all();
        return view('admin.index', compact('user','voter','candidate'));
    }
}
