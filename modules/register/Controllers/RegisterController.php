<?php

namespace Modules\Register\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Trait\HttpResponses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Modules\Register\Models\Register;
use Modules\Register\Requests\RegisterRequest;

class RegisterController extends Controller
{


    public function index()
    {
        return view('register::components.register');
    }

    public function submit(RegisterRequest $request)
    {
        $request->validated($request->all());
        $user = new Register([
            'business_name' => $request->business_name,
            'business_email' => $request->business_email,
            'phone_no' => $request->phone_no,
            'password' => Hash::make($request->password),
            'user_id' => (string) Str::uuid(),
        ]);
      if($user->save()){
        return back()->with('success', 'Successful registeration');
      }else{
        return back()->with('error', 'Signup error');
      }

        
    }

}
