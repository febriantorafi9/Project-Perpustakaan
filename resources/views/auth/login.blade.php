
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ruang Baca Pras dan Rafi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    @extends('cssdesign.layout.cssglobal')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Selamat Datang Di <br></b>Ruang Baca Pras Dan Rafi</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="{{ route('login') }}">
       {{@csrf_field()}}
        <div class="input-group mb-3">
          <input id="email" value="{{ old('email') }}" type="email" name="email" class="form-control" placeholder="Username">
          @if ($errors->has('email'))
          <span class="help-block" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3 {{ $errors->has('password') ? ' has-error' : ''}}">
          <input id="password" value="{{ old('password') }}" type="password" name="password" class="form-control" placeholder="Password">
          @if ($errors->has('password'))
          <span class="help-block" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
          @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <label for="remember">
              <input type="checkbox" name="remember" id="remember">  Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
        <p class="mb-1">
        <a href="{{route('password.request')}}">I forgot my password</a>
        </p>
        <p class="mb-0">
        <a href="{{route('register')}}" class="text-center">Register a new membership</a>
        </p>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
