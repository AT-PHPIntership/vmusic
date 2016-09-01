<?php

namespace App\Http\Controllers\Auth;

use Validator;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Contracts\Repositories\UserRepository;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $user;
    protected $username = 'username';
    protected $loginView = 'frontend/index';
    protected $redirectAfterLogout = '/';

    /**
     * User Repository.
     *
     * @param UserRepository $user repository
     *
     * @return void
     */
    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * Where to redirect users after login.
     *
     * @param \Illuminate\Http\Request $request input value
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
            $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            ]);
            if (Auth::attempt($request->only('username', 'password'), $request->has('remember'))) {
                if (Auth::user()->role_id == config('define.admin_id')) {
                    return redirect()->route('admin');
                } else {
                    return redirect()->intended();
                }
            }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data request data to validate
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data the data to create user
     *
     * @return User
     */
    protected function create(array $data)
    {
        return $this->user->create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
