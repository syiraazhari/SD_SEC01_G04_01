<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function countUser()
    {
        $posts = DB::table('voting')->where("role_as",1)->count();
        return view('admin.profile.index', compact($posts));
    }
}
