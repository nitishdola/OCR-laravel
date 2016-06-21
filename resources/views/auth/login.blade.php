<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>OCR Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="index.html">OCR</a>
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <strong>Sign in</strong>
        </header>
        <form class="panel-body wrapper-lg form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {!! csrf_field() !!}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="col-md-3 control-label">Email</label>

                <div class="col-md-9">
                    <input type="text" class="form-control" name="email" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="col-md-3 control-label">Password</label>

                <div class="col-md-9">
                    <input type="password" class="form-control" name="password">

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i>Login
                    </button>

                   
                </div>
            </div>
          <div class="line line-dashed"></div>
          
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small></small>
      </p>
    </div>
  </footer>
  <!-- / footer -->
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <!-- App -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/app.plugin.js') }}"></script>
  <script src="{{ asset('js/slimscroll/jquery.slimscroll.min.js') }}"></script>
  
</body>
</html>