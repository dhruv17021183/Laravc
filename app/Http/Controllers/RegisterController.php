<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
Use Nexmo\Laravel\Facade\Nexmo;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        
        // dd($user);
        // $data = new User;
        $OtpNumber = random_int(100000,999999);

        Nexmo::message()->send([
            'to' => '918320520364',
            'from' => '918320520364',
            'text' => $OtpNumber,
        ]);

        $data = User::create([
            'name' => $request->input('name'),
            'MobileNumber' => $request->input('number'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            // 'otp' => $OtpNumber,

        ]);
        User::where('MobileNumber','8320520364')->update(array('otp' => $OtpNumber));
        // return $data;
        // return redirect()->route('otp');
        return view('otp');
        
    }
}
