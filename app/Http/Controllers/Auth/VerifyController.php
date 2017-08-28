<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class VerifyController extends Controller
{

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
     * Get a validator for an incoming verification request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Show the application's verify form.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($confirmationCode)
    {
        return view('auth.verify', ['confirmation_code' => $confirmationCode]);
    }

    /**
     * Handle a verification request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request, $confirmationCode)
    {
        $this->validator($request->all())->validate();
        
        $user = User::whereConfirmationCode($confirmationCode)->first();
        
        if (!$user)
        {
            return redirect()->back()
                ->withInput(['confirmation_code'])
                ->withErrors(['confirmation_code' => 'Invalid confirmation code']);
        }
        
        $user->password = bcrypt($request->request->get('password'));
        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();
        
        return redirect('/login')->with('status', 'You have successfully verified your account.');
    }

}
