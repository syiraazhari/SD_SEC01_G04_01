<?php

namespace App\Http\Controllers\Voter\JoinMPP;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('voter.joinmpp.register.index');
    }
}
