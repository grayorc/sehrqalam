<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Kavenegar;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'phone_number' => ['required', 'unique:users'],
            'password' => ['required', 'string', 'min:4'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     */
    protected function register_account(Request $data)
    {
        $data = $data->validate([
            'phone_number' => ['required', 'unique:users', 'numeric'],
            'password' => ['required', 'string', 'min:4'],
        ]);
//        $this->validator($data->all());
        $token = mt_rand(10000, 99999);
        $this->send_sms_for($data['phone_number'], $token);
        User::create([
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['password']),
            'verification_token' => $token
        ]);
        return redirect()->route('verify.account.get');
    }

    public function send_sms_for($number, $token)
    {
        try {
            $sender = "10008663";
            $message = "کد تایید شما: " . $token . " می باشد.";
            $receptor = array($number);
            $result = Kavenegar::Send($sender, $receptor, $message);
        } catch (ApiException $e) {
            // در صورتی که خروجی وب سرویس 200 نباشد این خطا رخ می دهد
            return $e->errorMessage();
        } catch (HttpException $e) {
            // در زمانی که مشکلی در برقرای ارتباط با وب سرویس وجود داشته باشد این خطا رخ می دهد
            return $e->errorMessage();
        }
    }

    public function verify_account_get()
    {
        return view('auth.verify');
    }

    public function verify_account(Request $request)
    {
        $current_user = User::where('verification_token', '=', $request['code'])->firstOrfail();
        $current_user->is_disabled = 0;
        $current_user->update();
        Auth::login($current_user);
        return redirect()->route('home');
    }
}
