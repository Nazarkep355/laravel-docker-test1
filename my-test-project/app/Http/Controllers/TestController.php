<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\AuthRequest;

class TestController extends Controller
{

    public function test()
    {   echo 'hello';
    }

    public function login(AuthRequest $request)
    {
        $data = $request->validated();
        $email = $data['email'];
        $password = $data['password'];
       if( auth()->attempt($request->only('email','password'))){
           return redirect('test');
       }
       else
           return redirect(route('loginForm'));
    }
    public function loginForm()
    {
        return view('login');
    }

}
