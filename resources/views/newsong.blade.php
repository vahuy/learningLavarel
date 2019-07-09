<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/app.css">
  <title>Submit new song</title>
</head>
<body class="page">
<div class="header">
  @include('inc.navbar')
</div>
<div class="container">
  <div>
    <h1>Input new song info</h1>
  </div>
  <div class="form-group">
    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          {{$error}}
        </div>
      @endforeach
    @endif
    <form action="/song/submit" method="post">
      @csrf
      <div class="row">
            <span class="col-md-2 col-sm-12">
              <label>Song's Name: </label>
            </span>
        <span class="col-md-6 col-sm-12">
              <input type="text" name="name" placeholder="Song's Name"/>
            </span>
      </div>
      <div class="row">
        <span class="col-md-2 col-sm-12">
          <label>Writer: </label>
        </span>
        <span class="col-md-6 col-sm-12">
          <input type="text" name="writer" placeholder="Song's writer"/>
        </span>
      </div>
      <div class="row">
        <span class="col-md-2 col-sm-12">
          <label>Artist: </label>
        </span>
        <span class="col-md-6 col-sm-12">
          <input type="text" name="artist" placeholder="Song's Artist"/>
        </span>
      </div>
      <div class="row">
        <span class="col-md-2 col-sm-12">
          <label>Genres: </label>
        </span>
        <span class="col-md-6 col-sm-12">
          <input type="text" name="genres" placeholder="Genres"/>
        </span>
      </div>
      <div class="row">
        <span class="col-md-2 col-sm-12">
          <label>Lyric: </label>
        </span>
        <span class="col-md-6 col-sm-12">
          <textarea placeholder="Lyric" name="lyric"></textarea>
        </span>
      </div>
      <div class="row">
        <div class="col-md-5 col-xs-5 align-center">
          <input type="submit" name="submit" value="submit">
          <input type="reset" name="reset">
        </div>
      </div>
    </form>
  </div>
</div>
<footer class="footer fixed-bottom">This is an illegal copy, not any right!</footer>
</body>
</html>