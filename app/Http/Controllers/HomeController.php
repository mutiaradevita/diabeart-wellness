<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index()
    {
        $users = Auth::user();
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'admin') {
                return redirect()->route('dashboard');
            } else {
                return view('home');
            }

        } else {
            return view('home', ['users'=>$users]);
        }
    } 
}
