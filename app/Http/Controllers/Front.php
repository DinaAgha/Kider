<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Front extends Controller
{
  public function home(){
    return view ('layouts.main');
  }

   public function about(){
    return view('layouts.about');
  } 

 public function classes (){
    return view('layouts.classes');
}

public function contact (){
  return view('layouts.contact');
}

public function join (){
  return view('layouts.join');
}
public function Sign (){
  return view('layouts.Sign');
}

public function dashboard (){
  return view('layouts.dashboard');
}
}
