
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ruang Baca Pras dan Rafi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Selamat Datang Di<br></b>Ruang Baca Pras Dan Rafi</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registrasi Terlebih Dahulu!!</p>

      <form action="{{route('register')}}" method="post">
      @csrf

        <div class="input-group mb-3">
          <input type="text" class="form-control form-control-user {{$errors->has('name')?'is-invalid':''}}" id="exampleFirstName" placeholder="Full Name" name="name" value="{{old('name')}}">
          @if($errors->has('name'))
            <div class="invalid-feedback">
              {{$errors->first('name')}}
            </div>
          @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control form-control-user {{$errors->has('email')?'is-invalid':''}}" id="exampleInputEmail" placeholder="Email Address" name="email" value="{{old('email')}}">
          @if($errors->has('email'))
            <div class="invalid-feedback">
              {{$errors->first('email')}}
            </div>
          @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="password" class="form-control form-control-user {{$errors->has('password ')?'is-invalid':''}}" id="exampleInputPassword" placeholder="Password" name="password">
          @if($errors->has('password'))
            <div class="invalid-feedback">
              {{$errors->first('password')}}
            </div>
          @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>   
        </div>
        
        <div class="input-group mb-3">
          <input type="password" class="form-control form-control-user {{$errors->has('password_confirmation')?'is-invalid':''}}" id="exampleRepeatPassword" placeholder="Repeat Password" name="password_confirmation">
          @if($errors->has('password_confirmation'))
            <div class="invalid-feedback">
                {{$errors->first('password_confirmation')}}
            </div>
          @endif
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <legend>Pilih Sebagai :</legend>
          <div>
            <input type="radio" id="exampleInputEmail" name="role" value="admin">
            <label for="L">Admin</label>
          </div>
          <div>
            <input type="radio" id="exampleInputEmail" name="role" value="user">
            <label for="P">Anggota</label>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{route('login')}}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
