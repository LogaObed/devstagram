<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }
    public function index(User $user)
    {
        return view('dashboard',compact('user'));
    }
}
