<?php

namespace Modules\Login\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Modules\Login\Requests\LoginRequest;
use Modules\Register\Models\Register;

class LoginController extends Controller
{

    public function index()
    {
        return view('login::login');
    }


    public function submit(LoginRequest $request)
    {
       $validator = Validator::make($request->all(),[
        'business_email' => ['required', 'string'],
        'password' => ['required', 'string', 'min:5'],
       ]);
         if ($validator->fails()) {
            return response()->json(['status' => 400,'errors'=>$validator->errors()->toArray()]);
         }

        $user = Register::where('business_email', $request->business_email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->user_id);
        
                return redirect('dashboard');
      
            }else{
                return response()->json(['status' => 300, 'error' => 'Email or password is incorrect']);
                // return back()->with('error', 'Email or password is incorrect');
            }
        }else{
            return response()->json(['status' => 300, 'error' => 'Email or password is incorrect']);
            // return back()->with('error', 'Email or password is incorrect');
        }
    }


}
