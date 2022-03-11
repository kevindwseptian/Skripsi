<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PT DWI OLA | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('Aset/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Aset/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('Aset/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('Aset/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('Aset/plugins/iCheck/square/blue.css')}}">

    <style>
        .register-box{
            width:500px;
        }
        </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="register-box">
        <div class="login-logo">
            <a href="/"><b>PT</b>DWI OLA</a>
            <img width="100px" src="{{asset('Aset/dwiola.PNG')}}">
        </div>
        <!-- /.login-logo -->
        @if($errors->has('email'))
        <div class="alert alert-danger">
            <strong>Invalid e-mail or password</strong>
        </div>
        @endif
        <div class="login-box-body">
            <p class="login-box-msg">Register</p>

            <div class="row">
                <div class="col-md-12" >
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-group has-feedback">
                            <input placeholder="Nama" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                                    </div>
                        <div class="form-group has-feedback">
                            <input placeholder="NIK" id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" required autocomplete="nik" autofocus>

                             @error('nik')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                                </div>
                        <div class="form-group has-feedback">
                             <input placeholder="No Telepon" id="nohp" type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" required autocomplete="nohp" autofocus>

                              @error('nohp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                      @enderror
                                                  </div>
                        <div class="form-group has-feedback">
                             <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                                            </div>
                        <div class="form-group has-feedback">
                             <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                             @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                            </div>


                                            <div class="form-group has-feedback">
                                                <input placeholder="Password"id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                                               </div>


                        <div class="form-group has-feedback">
                            <input placeholder="Alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                     @enderror
                                            </div>


                        </select>

                </div>
                <div class="col-md-12">
                    <div class="row">


                        <!-- /.col -->
                        <div class="col-xs-12" style="float : left; margin-bottom:10px;">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar </button>

                        </div>

                        <!-- /.col -->
                    </div>
                </div>
            </form>
            </div>


        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="{{asset('Aset/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('Aset/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('Aset/plugins/iCheck/icheck.min.js')}}"></script>
    <script>
    $(".alert.alert-danger").fadeTo(2000, 500).slideUp(500, function(){
        $(".alert.alert-danger").slideUp(500);
    });
    </script>
</body>

</html>

