<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //

    public function index(){
        return view('homepage.index');
    }

    public function home(){
        return view('homepage.home');
    }

    public function login(){
        return view('homepage.login');
    }

    public function register(){
        return view('homepage.register');
    }

}
