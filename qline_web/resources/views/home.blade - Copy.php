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
            <ul class="nav navbar-nav ml-auto navbar-right">
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
    
<!-- /header -->
<!-- /.nav-bar -->
<!-- /.Main Header -->
 
<!-- section -->
<div class="row">
    
    <!-- Left side column. contains the logo and sidebar -->
    <div class="col-md-4">
        
        <!-- --------------- -->
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            <span class="glyphicon glyphicon-folder-close"></span>Content
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-pencil text-primary"></span>
                                    <a href="http://www.jquery2dotnet.com">Articles</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-flash text-success"></span>
                                    <a href="http://www.jquery2dotnet.com">News</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-file text-info"></span>
                                    <a href="http://www.jquery2dotnet.com">Newsletters</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-comment text-success"></span>
                                    <a href="http://www.jquery2dotnet.com">Comments</a>
                                    <span class="badge">42</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                            <span class="glyphicon glyphicon-th"></span>Modules
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Orders</a> 
                                    <span class="label label-success">$ 320</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Invoices</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Shipments</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Tex</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            <span class="glyphicon glyphicon-user"></span>Account
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Change Password</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Notifications</a> 
                                    <span class="label label-info">5</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="http://www.jquery2dotnet.com">Import/Export</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-trash text-danger"></span>
                                    <a href="http://www.jquery2dotnet.com" class="text-danger">Delete Account</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            <span class="glyphicon glyphicon-file"></span>Reports
                        </a>
                    </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-usd"></span>
                                    <a href="http://www.jquery2dotnet.com">Sales</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-user"></span>
                                    <a href="http://www.jquery2dotnet.com">Customers</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-tasks"></span>
                                    <a href="http://www.jquery2dotnet.com">Products</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                    <a href="http://www.jquery2dotnet.com">Shopping Cart</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- --------------- -->
        
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