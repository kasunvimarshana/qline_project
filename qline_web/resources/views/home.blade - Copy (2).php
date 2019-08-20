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
    
<div class="container">
  <h2>Accordion Example</h2>
  <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Collapsible Group Item #1
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Collapsible Group Item #2
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          Collapsible Group Item #3
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
    
<!-- /div -->
<!-- /.wrapper -->
</body>
</html>