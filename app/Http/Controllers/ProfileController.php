<?php

namespace App\Http\Controllers;

use App\Models\UserActivity;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    return view('discussions.activity');
    }

}
