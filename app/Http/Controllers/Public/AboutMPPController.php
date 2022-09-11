<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutMPPController extends Controller
{
    public function index()
    {
        return view('public.aboutmpp.index');
    }
}
