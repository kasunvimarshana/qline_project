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
    
    <link rel="stylesheet" href="{!! asset('node_modules/bootstrap/dist/css/bootstrap-reboot.min.css') !!}"/>
    <link rel="stylesheet" href="{!! asset('node_modules/bootstrap/dist/css/bootstrap.min.css') !!}"/>
    <!-- link rel="stylesheet" href="{!! asset('theme/simplex/bootstrap.min.css') !!}"/ -->
    <!-- link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/ -->
    <link rel="stylesheet" href="{!! asset('node_modules/@fortawesome/fontawesome-free/css/all.css') !!}"/>
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
        .bs-example{
            margin: 20px;
        }
        .accordion .fa{
            margin-right: 0.5rem;
        }
    </style>
    <script>
        $(document).ready(function(){
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function(){
                $(this).prev(".card-header").find(".fa")
                    .addClass("fa-minus")
                    //.addClass("fa-fw")
                    .removeClass("fa-plus");
            });

            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function(){
                $(this).prev(".card-header").find(".fa")
                    .removeClass("fa-plus")
                    //.addClass("fa-fw")
                    .addClass("fa-minus");
            }).on('hide.bs.collapse', function(){
                $(this).prev(".card-header").find(".fa")
                    .removeClass("fa-minus")
                    //.addClass("fa-fw")
                    .addClass("fa-plus");
            });
        });
    </script>
</head>
<body class="hold-transition">
<!-- wrapper -->
<!-- div class="row wrapper" -->
<!-- Main Header -->
<!-- nav-bar -->
<!-- header -->
    
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
            <!-- ul class="list-unstyled nav navbar-nav mr-auto navbar-left">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>  
            </ul -->
            <!-- /.nav lists -->
            
            <!-- nav lists -->
            <ul class="list-unstyled nav navbar-nav ml-auto navbar-right">
                <!-- li class="nav-item">
                    <span class="navbar-text text-center text-uppercase font-weight-bold text-white"> <span id="span_time">0</span> &nbsp;&nbsp;&nbsp;</span>
                </li -->
                <!-- li class="nav-item">
                    <span class="navbar-text text-center text-uppercase font-weight-bold text-white"> <span id="span_date">0</span> </span>
                </li -->
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
            
            <!-- nav lists -->
            <ul class="list-unstyled nav navbar-nav ml-auto navbar-right">
                <li class="nav-item">
                    <span class="navbar-text text-center font-weight-bold text-white">
                        <i class="fa fa-user-alt fa-fw"></i>
                        <span> User</span>
                    </span>
                </li>
                
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger text-white">
                            <i class="fa fa-power-off fa-fw" aria-hidden="true"></i>
                        </button>
                    </div>
                </li>  
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
    
<!-- /header -->
<!-- /.nav-bar -->
<!-- /.Main Header -->
    
<!-- column-break -->
<div class="w-100 d-none d-md-block"></div>
<!-- /.column-break --> 
 
<!-- section -->
<div class="wrapper">
    
    <!-- Left side column. contains the logo and sidebar -->
    <div class="col-md-2 pl-0">
        
        <!-- accordion -->
        <div id="accordion">
            <!-- card -->
            <div class="card bg-danger">
                <div class="card-header" id="idCard1">
                    <h5 class="mb-0">
                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse1" aria-expanded="true" aria-controls="idCollapse1">
                        <i class="fa fa-plus fa-fw"></i>
                        <span class="text-decoration-none text-justify small"> Collapsible Group Item #1</span>
                        </button>
                    </h5>
                </div>

                <div id="idCollapse1" class="collapse hide" aria-labelledby="idCard1" data-parent="#idCollapse1">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-pencil text-primary"></span>
                                    <a class="text-decoration-none text-justify text-white small" href="http://www.jquery2dotnet.com">Articles</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-pencil text-primary"></span>
                                    <a class="text-decoration-none text-justify text-white small" href="http://www.jquery2dotnet.com">Articles</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
            
            <!-- card -->
            <div class="card bg-danger">
                <div class="card-header" id="idCard2">
                    <h5 class="mb-0">
                        <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2" aria-expanded="true" aria-controls="idCollapse2">
                        <i class="fa fa-plus fa-fw"></i>
                        <span class="text-decoration-none text-justify small"> Collapsible Group Item #2</span>
                        </button>
                    </h5>
                </div>

                <div id="idCollapse2" class="collapse hide" aria-labelledby="idCard2" data-parent="#idCollapse2">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-pencil text-primary"></span>
                                    <a class="text-decoration-none text-justify text-white small" href="http://www.jquery2dotnet.com">Articles</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.accordion -->
        
    </div>
    <!-- /.Left side column. contains the logo and sidebar -->
    
    <!-- Right side column -->
    <div class="col-md-8">
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Main content -->
        <section class="content container-fluid" id="container_fluid">

        <!--------------------------
        | Your Page Content Here |
        -------------------------->
        
        <!--------------------------
        | Your Page Content Here |
        -------------------------->

        </section>
        <!-- /.Main content -->
        </div>
        <!-- /.Content Wrapper. Contains page content -->
        
    </div>
    <!-- /.Right side column -->
    
</div>
<!-- /.section -->
    
<!-- column-break -->
<div class="w-100 d-none d-md-block"></div>
<!-- /.column-break --> 
    
<!-- nav -->
<!-- nav class="navbar navbar-expand-sm navbar-light bg-danger sticky-bottom fixed-bottom navbar-light d-print" -->
    <!-- Footer -->
    <footer class="page-footer font-small bg-light fixed-bottom">

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

<!-- REQUIRED JS SCRIPTS -->
<script></script>
<!-- REQUIRED JS SCRIPTS -->


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
    
<!-- /div -->
<!-- /.wrapper -->
</body>
</html>