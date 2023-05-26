<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {
        return view('dashboard.user.index');
    }

    public function create()
    {
        return view('dashboard.user.create');
    }
}
