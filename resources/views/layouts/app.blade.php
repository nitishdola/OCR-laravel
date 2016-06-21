<!DOCTYPE html>
<html lang="en" class="app">
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
  <link rel="stylesheet" href="{{ asset('js/select2/select2.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('js/select2/theme.css') }}" type="text/css" />

  <link rel="stylesheet" href="{{ asset('js/calendar/bootstrap_calendar.css') }}" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
</head>
<body>
  <section class="vbox">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
      @include('admin.layouts.header')      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-dark lter aside-md hidden-print" id="nav">          
          @include('admin.layouts.left_nav')    
        </aside>
        <!-- /.aside -->
        <section id="content">
          <div class="col-md-12">
              @if(Session::has('message'))

              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <i class="fa fa-ban-circle"></i><strong>{!! Session::get('message') !!}</strong> 
              </div>
              @endif
              @yield('content')
          </div>
          @yield('content')
        </section>
    </section>
  </section>

  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <!-- App -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/app.plugin.js') }}"></script>
  <script src="{{ asset('js/slimscroll/jquery.slimscroll.min.js') }}"></script>

  <script src="{{ asset('js/charts/easypiechart/jquery.easy-pie-chart.js') }}"></script>
  <script src="{{ asset('js/charts/sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('js/charts/flot/jquery.flot.min.js') }}"></script>
  <script src="{{ asset('js/charts/flot/jquery.flot.tooltip.min.js') }}"></script>
  <script src="{{ asset('js/charts/flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('js/charts/flot/jquery.flot.grow.js') }}"></script>
  <script src="{{ asset('js/charts/flot/demo.js') }}"></script>

  <script src="{{ asset('js/calendar/bootstrap_calendar.js') }}"></script>
  <script src="{{ asset('jjs/calendar/demo.js') }}"></script>

  <script src="{{ asset('js/sortable/jquery.sortable.js') }}"></script>
  <!-- select2 -->
  <script src="{{ asset('js/select2/select2.min.js') }}"></script>
</body>
</html>