<?php

namespace App\Http\Controllers\Voter\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('voter.contact.index');
    }
}
