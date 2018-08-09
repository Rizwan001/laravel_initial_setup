<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Mail\VerifyMail;
use App\VerifyUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Notification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $user = User::newModelInstance();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => hash_hmac('sha256', str_random(), config('app.key'))
        ]);


        Mail::to($user->email)->send(new VerifyMail($user));


        return $user;
    }


    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();
        if (isset($verifyUser)) {
            $user = $verifyUser->user;
            if (!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
//                $status = "Your e-mail is verified. You can login now.";
                Auth::login($user);
            } else {
//                $status = "Your e-mail is verified.Now you can now login.";
            }
        } else {
            return redirect('/')->with('meassage', "Sorry your email cannot be identified.");
        }

        return redirect('/');
    }

    protected function registered(Request $request, $user)
    {

        $this->guard()->logout();

        return redirect('/')->with('success', 'We sent you an activation code. Check your email and click on the link to verify.');
    }
}
