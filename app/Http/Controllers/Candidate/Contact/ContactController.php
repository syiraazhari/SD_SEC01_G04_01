<?php

namespace App\Http\Controllers\Candidate\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('candidate.contact.index');
    }
}
