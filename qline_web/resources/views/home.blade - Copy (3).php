<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>{{ config('app.name', 'Title') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/ -->
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" id="meta-viewport"/>
    
    <!-- link rel="stylesheet" href="{!! asset('node_modules/bootstrap/dist/css/bootstrap-reboot.min.css') !!}"/ -->
    <link rel="stylesheet" href="{!! asset('node_modules/bootstrap/dist/css/bootstrap.min.css') !!}"/>
    <!-- link rel="stylesheet" href="{!! asset('theme/simplex/bootstrap.min.css') !!}"/ -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{!! asset('node_modules/jquery/dist/jquery.min.js') !!}"><\/script>')</script>
    <script src="{!! asset('node_modules/popper.js/dist/umd/popper.min.js') !!}"></script>
    <script src="{!! asset('node_modules/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
    
    <!-- bootbox -->
    <script src="{{ asset('node_modules/bootbox/dist/bootbox.min.js') }}"></script>
    <script src="{{ asset('node_modules/bootbox/dist/bootbox.locales.min.js') }}"></script>
    <!-- Moment -->
    <script src="{{ asset('node_modules/admin-lte/bower_components/moment/min/moment.min.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('node_modules/admin-lte/plugins/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('node_modules/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
    <!-- Jquery Easy Loading -->
    <script src="{{ asset('node_modules/jquery-easy-loading/dist/jquery.loading.min.js') }}"></script>
    <!-- Bootstrap Validation -->
    <script src="{{ asset('node_modules/bootstrap-validator/dist/validator.min.js') }}"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition">
<!-- wrapper -->
<!-- div class="row wrapper" -->
<!-- Main Header -->
<!-- nav-bar -->
<!-- header -->
    
<ul id="accordion1" class="nav nav-pills flex-column">
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#item-1" data-parent="#accordion1">Item 1</a>
    <div id="item-1" class="collapse show">
      <ul class="nav flex-column ml-3">
        <li class="nav-item">
          <a class="nav-link" href="#">Sub 1-1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sub 1-2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sub 1-3</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#item-2" data-parent="#accordion1">Item 2</a>
    <div id="item-2" class="collapse">
      <ul class="nav flex-column ml-3">
        <li class="nav-item">
          <a class="nav-link" href="#">Sub 2-1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sub 2-2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sub 2-3</a>
        </li>
      </ul>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#item-3" data-parent="#accordion1">Item 3</a>
    <div id="item-3" class="collapse">
      <ul class="nav flex-column ml-3">
        <li class="nav-item">
          <a class="nav-link" href="#">Sub 3-1</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sub 3-2</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Sub 3-3</a>
        </li>
      </ul>
    </div>
  </li>
</ul>



<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
    
<!-- /div -->
<!-- /.wrapper -->
</body>
</html>