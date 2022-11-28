<?php

namespace Modules\Dashboard\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\Register\Models\Register;

class DashboardController extends Controller
{

    public function index()
    {
        if(session()->has('loginId')){
            $user = Register::where('user_id', session()->get('loginId'))->first();
        }
        
        $info = [
            'menu' => 'Rides',
            'sub' => '',
        ];
        return view('dashboard::layouts.master')->with([
            'title' => 'Dashboard Template',
            'user' => $user,
            'info' => $info
        ]) ;   
    }

    public function dashboard($menu, $sub = null)
    {

        if(session()->has('loginId')){
            $user = Register::where('user_id', session()->get('loginId'))->first();
        }

        $info = [
            'menu' => $menu,
            'sub' => '',

        ];
        return view('dashboard::layouts.master')->with([
            'title' => 'Dashboard Template',
            'user' => $user,
            'info' => $info,
        ]) ; 
    }

    public function dashboard_all($menu = null, $sub = null)
    {

        if(session()->has('loginId')){
            $user = Register::where('user_id', session()->get('loginId'))->first();
        }

        $info = [
            'menu' => $menu,
            'sub' => '- '.$sub.'',
        ];
        return view('dashboard::layouts.master')->with([
            'title' => 'Dashboard Template',
            'user' => $user,
            'info' => $info,
        ]) ; 
    }

    public function logout()
    {
        if(Session()->has('loginId')){
            Session()->pull('loginId'); 
            return redirect('login');           
        }
    }

}
