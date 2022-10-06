<?php

namespace App\Http\Controllers\Admin\AboutMPP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutMPPController extends Controller
{
    public function index()
    {
        return view('admin.aboutmpp.index');
    }
}
