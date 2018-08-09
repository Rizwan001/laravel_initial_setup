<?php

namespace App\Http\Controllers;


use Auth;

class ForumController extends Controller
{


    public function discussion()
    {

        return view('discussions.discussionForum');
    }

}
