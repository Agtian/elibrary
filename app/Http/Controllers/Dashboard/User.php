<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {
        $users = ModelsUser::all();
        return view('dashboard.user.index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.user.create');
    }

    public function edit(int $product_id)
    {
        $users = ModelsUser::findOrFail($product_id);
        return view('dashboard.user.edit', compact('users'));
    }
}
