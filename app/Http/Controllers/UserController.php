<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class UserController extends Controller
{

  public function getLogin() {
    return view('login');
  }

  public function login(Request $request) {
    $this->validate($request,[
      'username' => 'required',
      'password' => 'required'
    ]);
    return 'Success';
  }

  public function signUp(Request $request) {
    $this->validate($request,[
      'username' => 'required',
      'email' => 'required',
      'password' => 'required'
    ]);
    //    Create new user
    $user = new User;
    $user->id = uniqid();
    $user->username = $request->input('username');
    $user->password = base64_encode($request->input('password'));
    $user->email = $request->input('email');

    try {
      $result = $user->save();
    } catch (\Illuminate\Database\QueryException $e) {
      return $e->getMessage();
    }

    return strval($result);
  }
}
