<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

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
    protected $redirectTo = '/admin';

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'confirmation_code' => str_random(30),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        
        try {
            \DB::beginTransaction();
            
            $user = $this->create($request->all());
            
            $this->sendVerificationEmail($user);
            
            \DB::commit();
        } catch (PHPMailerException $e) {
            \DB::rollBack();
            
            return redirect()->back()
                ->withInput(['name', 'email'])
                ->withErrors(['email' => 'Failed to send email']);
        }
        
        event(new Registered($user));
        
        return redirect('/login')->with('status', 'Thanks for signing up! Please check your email.');
    }

    /**
     * Send verification email
     * 
     * @param User $user
     * @throws \Exception
     */
    private function sendVerificationEmail(User $user)
    {
        $mail = new PHPMailer(true);
        
        if (getenv('MAIL_DRIVER') === 'smtp')
        {
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = getenv('MAIL_HOST');
            $mail->Port = getenv('MAIL_PORT');
            $mail->Username = getenv('MAIL_USERNAME');
            $mail->Password = getenv('MAIL_PASSWORD');
        }
        
        $mail->Subject = 'Verify Your Email Address [Newsstand]';
        $mail->setFrom(getenv('MAIL_FROM_ADDRESS'), getenv('MAIL_FROM_NAME'));
        $mail->addAddress($user->email, $user->name);
        $mail->msgHTML(view('auth.email', ['confirmation_code' => $user->confirmation_code])->render());
        $mail->send();
    }

}
