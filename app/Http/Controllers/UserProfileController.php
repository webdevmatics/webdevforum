<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Thread;
use App\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index(User $user)
    {
       $feeds=$user->feeds;
       return view('profile.index',compact('feeds'));
       
    }
}
