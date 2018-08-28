<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use App\Mail\VerifyMail;
use App\User;
use App\UserVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;
use App\Http\Controllers\Controller;
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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function redirectPath()
    {
        return '/';
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'phone_number' => 'string|required|unique:users',
            'email' => '|email|max:255',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'role' => 'customer',
            'verified' => 0
        ]);

        Customer::create([
            'user_id' => $user->id,
            'location' => $data['location'],
            'description' => $data['description'],
            'enabled' => 0
        ]);

        $verifyUser = UserVerification::create([
            'user_id' => $user->id,
            'token' => str_random(40)
        ]);

        return $user;

    }

    public function registered(Request $request, $user)
    {
        auth()->logout();
        return redirect()->route('login')->with('status' , 'We have sent you an activation code, please check your email');
    }

    public function verifyUser($token)
    {
        $verifyUser = UserVerification::where('token' , $token )->first();

        if(isset($verifyUser))
        {
            $user = $verifyUser->user;

            if (!$user->verified)
            {
                $user->verified = true;
                $user->save();
                $status = 'Your email is now verified, you can now login';
            }
            else
            {
                $status = 'You email has alraedy been verified, log in';
            }
        }
        else
        {
            return redirect()->route('login')->with('warning' , 'Sorry! your email cannot be identified');
        }

        return redirect()->route('login')->with('status' , $status);
    }
}
