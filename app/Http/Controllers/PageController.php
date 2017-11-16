<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  function welcome() {
    return view('welcome');
  }

  function signIn() {
    return view('sign-in');
  }

  function signUp() {
    return view('sign-up');
  }
    //
}
