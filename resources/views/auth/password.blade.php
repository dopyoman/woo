<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{!! Config::get('global.app-name') !!} | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset('plugins/adminLTE/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('plugins/adminLTE/dist/css/AdminLTE.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/adminLTE/plugins/iCheck/square/blue.css') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        @if (count($errors) > 0)          
              <strong>Whoops!</strong> There were some problems with your input.<br><br>
              <ul>
                @foreach ($errors->all() as $error)
                  <li class="text-danger">{{ $error }}</li>
                @endforeach
              </ul>
        @endif
        @if (isset($status))
          {{ $status }}
        @endif  
              @if (Session::has('message'))
          <strong>Notification:</strong> <span class="text-green">{!! Session::get('message') !!}</span><br>
      @endif 
        <p class="login-box-msg">Enter your E-mail to reset your password</p>
 <form method="POST" action="/auth/password/email">
    {!! csrf_field() !!}

    <div class="form-group">
      <div class="form-group has-feedback">
        <input name="email" id="email" type="email" class="form-control input-lg" value="{{ old('email') }}" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block btn-flat">
            Send Password Reset Link
        </button>
    </div>
    <div class="fsorm-group">
      <a href="{!! route('login') !!}">I already Know my password</a>
    </div>
</form>
  </body>
</html>
