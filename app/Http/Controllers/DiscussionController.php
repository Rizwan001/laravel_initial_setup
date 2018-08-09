<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Notification;
use App\Models\User;
use Session;



class DiscussionController extends Controller
{

    public function sharePost(Request $request)
    {

        if (\Illuminate\Support\Facades\Auth::check()) {


        } else {

            return response()->json(['status'=>'false','message'=>'Please Login for activities.']);

        }
    }


}

