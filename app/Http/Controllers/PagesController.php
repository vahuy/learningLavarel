<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function getPhpInfo() {
    return view('phpInfo');
  }
  public function getHome() {
    return view('home');
  }

  public function getTop100() {
    return view('top100');
  }

  public function getMV() {
    return view('mv');
  }

  public function getAddSong() {
    return view('newsong');
  }
}
