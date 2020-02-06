<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->
        \Session::put('locale','en');
    }

    public function index($lang=null)
    {
      //dd(session('locale'));
      \App::setLocale($lang);
      \Session::put('locale', $lang);
      //return redirect()->back();
      return view('home');
    }

    public function language()
    {

    }
}
