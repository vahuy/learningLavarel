<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;

class SongController extends Controller
{

  public function submitSong(Request $request) {

    $this->validate($request, [
      'name' => 'required',
      'writer' => 'required',
      'artist' => 'required',
      'genres' => 'required',
    ]);
    $song = new Song;

    $song->id = uniqid();
    $song->name = $request->input('name');
    $song->writer = $request->input('writer');
    $song->artist = $request->input('artist');
    $song->genres = $request->input('genres');
    $song->lyric = $request->input('lyric');

    $result = $song->save();

    return strval($result);
  }
}
