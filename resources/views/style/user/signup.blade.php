<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ trans('admin.login') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('design/adminLte')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('design/adminLte')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('design/adminLte')}}/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>User</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
      <div class="card-body login-card-body">
      @include('admin.layouts.message')
      <p class="login-box-msg">Sign Up For New Account</p>

    {!! Form::open(['url' => 'signup', 'mathod' => 'POST']) !!}
        <div class="form-group">
            {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Name'] )}}
        </div>
        <div class="form-group">
            {{ Form::text('username', old('username'), ['class' => 'form-control', 'placeholder' => 'username'] )}}
        </div>
        <div class="form-group">
            {{ Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Email']) }}
        </div>
        <div class="form-group">
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
        </div>
        {{ Form::submit('Sign Up', ['class' => 'btn btn-primary'] )}}
    {!! Form::close() !!}

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('design/adminLte')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('design/adminLte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('design/adminLte')}}/dist/js/adminlte.min.js"></script>

</body>
</html>
