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
    <style>
        body{background-color:#fff;}
        .card-header, .card-link,.card-link:hover{background-color:#000;text-align:left;color:hotpink;}
        .card-body{padding:10px 10px;}
        .card{width:500px;}
        p{position:absolute;top:5px;right:20px;font-size:20px;color:white;
        -webkit-animation: minus 0.5s;}

        @keyframes minus {
        from {
        transform:rotate(0deg);
        }
        to {
        transform:rotate(360deg);
        }
        }

        [aria-expanded="false"] > .expanded, [aria-expanded="true"] > .collapsed {display: none;}
    </style>
</head>
<body class="hold-transition">
<!-- wrapper -->
<!-- div class="row wrapper" -->
<!-- Main Header -->
<!-- nav-bar -->
<!-- header -->
    
<div class="container">
     <div id="accordion">

      <div class="card">
        <div class="card-header">
  <a class="card-link" data-toggle="collapse"  href="#menuone" aria-expanded="true" aria-controls="menuone">Menu 1<span class="collapsed"><p><b>></b></p></span>
<span class="expanded"><p><b><</b></p></span></a>
        </div>
        <div id="menuone" class="collapse show">
          <div class="card-body">
Taj Mahal is built on the banks of river Yamuna and is surrounded by a beautiful garden. Mughal Emperor Shah Jahan constructed it for the commemoration of his wife Mumtaz Mahal. The construction was started in 1631 and in 1643, the construction of main building was completed. The construction of the whole complex was completed in 1653. Mumtaz Mahal is buried in Taj Mahal.
          </div>
        </div>
      </div>

<br>

      <div class="card">
        <div class="card-header">
  <a class="card-link" data-toggle="collapse"  href="#menutwo" aria-expanded="false" aria-controls="menutwo">Menu 2<span class="collapsed"><p><b>></b></p></span>
<span class="expanded"><p><b><</b></p></span></a>
        </div>
        <div id="menutwo" class="collapse">
          <div class="card-body">
Taj Mahal is built on the banks of river Yamuna and is surrounded by a beautiful garden. Mughal Emperor Shah Jahan constructed it for the commemoration of his wife Mumtaz Mahal. The construction was started in 1631 and in 1643, the construction of main building was completed. The construction of the whole complex was completed in 1653. Mumtaz Mahal is buried in Taj Mahal.
          </div>
        </div>
      </div>

<br>

      <div class="card">
        <div class="card-header">
  <a class="card-link" data-toggle="collapse"  href="#menu3" aria-expanded="false" aria-controls="menu3">Menu 1<span class="collapsed"><p><b>></b></p></span>
<span class="expanded"><p><b><</b></p></span></a>
        </div>
        <div id="menu3" class="collapse">
          <div class="card-body">
Taj Mahal is built on the banks of river Yamuna and is surrounded by a beautiful garden. Mughal Emperor Shah Jahan constructed it for the commemoration of his wife Mumtaz Mahal. The construction was started in 1631 and in 1643, the construction of main building was completed. The construction of the whole complex was completed in 1653. Mumtaz Mahal is buried in Taj Mahal.
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