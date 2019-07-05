<!Doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/app.css">
  <title>Sign in/Sign up</title>
</head>
<body class="page">
<div class="header">
  @include('inc.navbar')
</div>
<div class="container">
  <div>
    <h1>Login into your account</h1>
  </div>
  <div class="form-group">
    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          {{$error}}
        </div>
      @endforeach
    @endif
    <form action="/login/submit" method="post">
      @csrf
      <div class="row">
        <span class="col-md-2 col-sm-12">
          <label>User Name: </label>
        </span>
        <span class="col-md-6 col-sm-12">
          <input type="text" name="username" placeholder="User name"/>
        </span>
      </div>
      <div class="row">
        <span class="col-md-2 col-sm-12">
          <label>Password: </label>
        </span>
        <span class="col-md-6 col-sm-12">
          <input type="password" name="password" placeholder="Password"/>
        </span>
      </div>
      <div class="row">
        <div class="col-md-5 col-xs-5 align-center">
          <input type="submit" name="login" value="Sign In">
          <input type="reset" name="reset">
        </div>
      </div>
    </form>
  </div>
  <div>
    <h1>Sign up new account</h1>
  </div>
  <div class="form-group">
    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          {{$error}}
        </div>
      @endforeach
    @endif
    <form action="/login/signUp" method="post">
      @csrf
      <div class="row">
        <span class="col-md-2 col-sm-12">
          <label>User Name: </label>
        </span>
        <span class="col-md-6 col-sm-12">
          <input type="text" name="username" placeholder="User name"/>
        </span>
      </div>
      <div class="row">
        <span class="col-md-2 col-sm-12">
          <label>E-mail: </label>
        </span>
        <span class="col-md-6 col-sm-12">
          <input type="email" name="email" placeholder="E-mail"/>
        </span>
      </div>
      <div class="row">
        <span class="col-md-2 col-sm-12">
          <label>Password: </label>
        </span>
        <span class="col-md-6 col-sm-12">
          <input type="password" name="password" placeholder="Password"/>
        </span>
      </div>
      <div class="row">
        <div class="col-md-5 col-xs-5 align-center">
          <input type="submit" name="login" value="Sign Up">
          <input type="reset" name="reset">
        </div>
      </div>
    </form>
  </div>
</div>
<footer class="footer fixed-bottom">This is an illegal copy, not any right!</footer>
</body>
</html>