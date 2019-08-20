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
<body>
    
<!-- nav -->
<nav class="navbar navbar-expand-sm navbar-light bg-danger sticky-top fixed-top d-print" role="navigation">
    <!-- container-fluid -->
    <!-- div class="container container-fluid" -->
        <!-- div class="navbar-header" -->
            <!-- Brand/logo -->
            <a class="navbar-brand text-center font-weight-bold text-white" href="#">Brandix</a>
            <!-- a class="nav-link active disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a -->
            <!-- /.Brand/logo -->
            <!-- button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false" aria-controls="collapsibleNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </span>
            </button -->
            <!-- button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <!-- /div -->

        <!-- navbar-collapse -->
        <div class="collapse navbar-collapse justify-content-left" id="collapsibleNavbar">
            <!-- nav lists -->
            <!-- ul class="nav navbar-nav mr-auto navbar-left">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>  
            </ul -->
            <!-- /.nav lists -->
            <!-- nav lists -->
            <ul class="list-unstyled nav navbar-nav ml-auto navbar-right">
                <li class="nav-item">
                    <span class="navbar-text text-center text-uppercase font-weight-bold text-white"> <span id="span_time">0</span> &nbsp;&nbsp;&nbsp;</span>
                </li>
                <li class="nav-item">
                    <span class="navbar-text text-center text-uppercase font-weight-bold text-white"> <span id="span_date">0</span> </span>
                </li>
                <!-- li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Action1</a>
                        <a class="dropdown-item" href="#">Action2</a>
                        <a class="dropdown-item" href="#">Action3</a>
                        <a class="dropdown-item active disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </div>
                </li -->
            </ul>
            <!-- /.nav lists -->
            <!-- nav form >
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            < /.nav form -->
            <!-- nav text >
            <span class="navbar-text">Navbar text with an inline element</span>
            < /.nav text -->
        </div>
        <!-- /.navbar-collapse -->
    <!-- /div -->
    <!-- /.container-fluid -->
</nav>
<!-- /.nav -->

<!-- column-break -->
<div class="w-100 d-none d-md-block"></div>
<!-- /.column-break -->
    
<!-- container -->
<div class="container container-fluid">
    <!-- --- -->
    <!-- row -->
    <div class="row clearfix" style="min-height: 10em;">
    </div>
    <!-- /.row -->
    <!-- row -->
    <div class="row justify-content-center align-self-center align-items-cente">

        <!-- col -->
        <div class="col-sm-12">
            <!-- form -->
            <form action="" method="POST" class="col-sm-12" autocomplete="off" id="form1" enctype="multipart/form-data">
            @csrf
                <!-- form-group -->
                <div class="form-group row col-sm-12">
                    <label for="user_id" class="col-lg-4 control-label col-form-label col-form-label-lg text-justify font-weight-bold text-lg-right">User ID</label>
                    <div class="col-lg-6">
                        <!-- p class="form-control-static"></p -->
                        <input type="text" class="form-control form-control-lg" id="user_id" name="user_id" placeholder="User ID" value="{{ old('user_id') }}" required/>
                    </div>
                    <!-- span id="form-control" class="help-block"></span -->
                </div>
                <!-- /.form-group -->
                
                <!-- form-group -->
                <div class="form-group row col-sm-12">
                    <label for="password" class="col-lg-4 control-label col-form-label col-form-label-lg text-justify font-weight-bold text-lg-right">Passsword</label>
                    <div class="col-lg-6">
                        <!-- p class="form-control-static"></p -->
                        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" value="{{ old('password') }}" required/>
                    </div>
                    <!-- span id="form-control" class="help-block"></span -->
                </div>
                <!-- /.form-group -->

                <!-- form-group -->
                <div class="form-group row col-sm-12">
                    <!-- btn-toolbar -->
                    <div class="col col-sm-10">
                        <!-- div class="btn-group btn-group-lg pull-right" -->
                            <div class="text-right mb-3">
                                <button type="submit" class="btn btn-danger float-right pull-right ml-auto" id="submit">Login</button>
                            </div>               
                        <!-- /div -->
                    </div>
                </div>
                <!-- /.form-group -->

            </form>
            <!-- /.form -->
        </div>
        <!-- /.col -->

    </div>
    <!-- /.row -->
    <!-- --- -->
</div>
<!-- /.container -->
    
<!-- nav -->
<!-- nav class="navbar navbar-expand-sm navbar-light bg-danger sticky-bottom fixed-bottom navbar-light d-print" -->
    <!-- Footer -->
    <footer class="page-footer font-small bg-danger fixed-bottom">

        <!-- Copyright -->
        <div class="footer-copyright text-lg-left py-0">
            <span class="text-secondary font-weight-normal text-lg-right">TQMS - Total Quality Management System - ©BLI</span>
            <!-- a class="navbar-brand text-reset text-muted font-weight-normal" href="#">Fixed bottom</a -->
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
<!-- /nav -->
<!-- /.nav -->

<script>
function updateClock(){
    var span_time = $('#span_time');
    var span_date = $('#span_date');
    var momentObject = moment();
    //var momentObjectClone = momentObject.clone();
    var span_time_value = momentObject.clone().format("DD-MMM-YYYY");
    var span_date_value = momentObject.clone().format("hh:mm A");

    span_time.text( span_time_value );
    span_date.text( span_date_value );
    // call this function again in 1000ms
    setTimeout(updateClock, 1000);
}
$(function(){
    "use strict";
    
    updateClock(); // initial call
});
</script>
    
</body>
</html>
