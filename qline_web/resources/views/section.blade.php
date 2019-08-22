<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
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
    <!-- glyphicon -->
    <link rel="stylesheet" href="{!! asset('node_modules/glyphicons-only-bootstrap/css/bootstrap.min.css') !!}"/>
    <!-- link rel="stylesheet" href="{!! asset('node_modules/glyphicons-only-bootstrap/css/bootstrap-theme.min.css') !!}"/ -->
    
    <link rel="stylesheet" href="{!! asset('css/custom_scrollbar.css') !!}"/>
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
    
    <!-- optional-style -->
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('node_modules/admin-lte/bower_components/select2/dist/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css') }}" />
    <!-- DataTable -->
    <link rel="stylesheet" href="{{ asset('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('node_modules/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('node_modules/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}" />
    <!-- Bootstrap Datepicker -->
    <link rel="stylesheet" href="{{ asset('node_modules/admin-lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" />
    <!-- Bootstrap FileInput -->
    <link href="{!! asset('node_modules/bootstrap-fileinput/css/fileinput.min.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <!-- link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous" -->
    <!-- link href="{!! asset('node_modules/bootstrap-fileinput/themes/explorer-fas/theme.min.css') !!}" media="all" rel="stylesheet" type="text/css"/ -->
    <!-- /.optional-style -->
    <!-- optional-script -->
    <!-- Select2 -->
    <script src="{{ asset('node_modules/admin-lte/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- DataTable -->
    <script src="{{ asset('node_modules/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('node_modules/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('node_modules/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('node_modules/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('node_modules/datatables.net-scroller-bs4/js/scroller.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('node_modules/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
    <!-- Bootstrap Datepicker -->
    <script src="{{ asset('node_modules/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script src="{{ asset('node_modules/admin-lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <!-- Bootstrap FileInput -->
    <script src="{!! asset('node_modules/bootstrap-fileinput/js/plugins/piexif.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('node_modules/bootstrap-fileinput/js/plugins/sortable.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('node_modules/bootstrap-fileinput/js/fileinput.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('node_modules/bootstrap-fileinput/js/locales/fr.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('node_modules/bootstrap-fileinput/js/locales/es.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('node_modules/bootstrap-fileinput/themes/fa/theme.min.js') !!}" type="text/javascript"></script>
    <!-- script src="{!! asset('node_modules/bootstrap-fileinput/themes/fas/theme.js') !!}" type="text/javascript"></script -->
    <!-- script src="{!! asset('node_modules/bootstrap-fileinput/themes/explorer-fas/theme.js') !!}" type="text/javascript"></script -->
    <!-- /.optional-script -->
</head>
<body class="hold-transition h-100 bg-light bg-gradient-light">
<!-- wrapper -->
<div class="wrapper container-fluid h-100 d-flex flex-column p-0 m-0">
<!-- Main Header -->
<!-- nav-bar -->
<!-- header -->
    
<!-- nav -->
<nav class="navbar navbar-expand-sm navbar-light bg-danger sticky-top fixed-top d-print s-navbar" role="navigation">
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
<div class="row wrapper flex-fill p-0 m-0">
    
    <!-- Left side column. contains the logo and sidebar -->
    <div class="col-md-2 pl-0 bg-danger">
        
        <!-- accordion -->
        <div id="accordion_nav" class="text-wrap text-break">
            <!-- card-group -->
            <div class="card-group">
                <!-- card -->
                <div class="card bg-danger">
                    <div class="card-header" id="idCard1">
                        <h5 class="mb-0">
                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse1" aria-expanded="false" aria-controls="idCollapse1" role="button" type="button">
                            <i class="fa fa-bold fa-fw"></i>
                            <span class="text-decoration-none text-justify small"> TQMS</span>
                            </button>
                        </h5>
                    </div>

                    <div id="idCollapse1-temp" class="collapse hide" aria-labelledby="idCard1" data-parent="#accordion_nav">
                        <div class="card-body" id="idCollapse1_body">
                            <table class="table">
                                <!-- table-tr -->
                                <tr>
                                    <td class="p-0 m-0">
                                        <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                        <span>
                                            <a class="text-decoration-none text-justify text-white small" href="#">Link 1</a>
                                        </span>
                                    </td>
                                </tr>
                                <!-- /.table-tr -->
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card-group -->
            
            <!-- card-group -->
            <div class="card-group">
                <!-- card -->
                <div class="card bg-danger">
                    <div class="card-header" id="idCard2">
                        <h5 class="mb-0">
                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2" aria-expanded="false" aria-controls="idCollapse2" role="button" type="button">
                            <i class="fa fa-atom fa-fw"></i>
                            <span class="text-decoration-none text-justify small"> Backstage</span>
                            </button>
                        </h5>
                    </div>

                    <div id="idCollapse2" class="collapse hide" aria-labelledby="idCard2" data-parent="#accordion_nav">
                        <div class="card-body" id="idCollapse2_body">
                            <table class="table">
                                <!-- table-tr -->
                                <tr>
                                    <td class="p-0 m-0">

                                        <!-- nested accordion -->
                                        <div id="accordion_nav_2_1">
                                            <!-- card-group -->
                                            <div class="card-group">
                                                <!-- card -->
                                                <div class="card bg-danger">
                                                    <div class="card-header" id="idCard2_1">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2_1" aria-expanded="false" aria-controls="idCollapse2_1" role="button" type="button">
                                                            <i class="fa fa-band-aid fa-fw"></i>
                                                            <span class="text-decoration-none text-justify small"> Company</span>
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="idCollapse2_1" class="collapse hide" aria-labelledby="idCard2_1" data-parent="#idCollapse2_body">
                                                        <div class="card-body">
                                                            <table class="table">
                                                                <tr>
                                                                    <td class="p-0 m-0">
                                                                        <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                                                        <span>
                                                                            <a class="text-decoration-none text-justify text-white small" href="#"> Add</a>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                            <!-- /.card-group -->
                                        </div>
                                        <!-- /.nested accordion -->

                                    </td>
                                </tr>
                                <!-- /.table-tr -->

                                <!-- table-tr -->
                                <tr>
                                    <td class="p-0 m-0">

                                        <!-- nested accordion -->
                                        <div id="accordionn_nav_2_2">
                                            <!-- card-group -->
                                            <div class="card-group">
                                                <!-- card -->
                                                <div class="card bg-danger">
                                                    <div class="card-header" id="idCard2_2">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2_2" aria-expanded="false" aria-controls="idCollapse2_2" role="button" type="button">
                                                            <i class="fa fa-briefcase fa-fw"></i>
                                                            <span class="text-decoration-none text-justify small"> Department</span>
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="idCollapse2_2" class="collapse hide" aria-labelledby="idCard2_2" data-parent="#idCollapse2_body">
                                                        <div class="card-body">
                                                            <table class="table">
                                                                <tr>
                                                                    <td class="p-0 m-0">
                                                                        <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                                                        <span>
                                                                            <a class="text-decoration-none text-justify text-white small" href="#"> Add</a>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                            <!-- /.card-group -->
                                        </div>
                                        <!-- /.nested accordion -->

                                    </td>
                                </tr>
                                <!-- /.table-tr -->

                                <!-- table-tr -->
                                <tr>
                                    <td class="p-0 m-0">

                                        <!-- nested accordion -->
                                        <div id="accordionn_nav_2_3">
                                            <!-- card-group -->
                                            <div class="card-group">
                                                <!-- card -->
                                                <div class="card bg-danger">
                                                    <div class="card-header" id="idCard2_3">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2_3" aria-expanded="false" aria-controls="idCollapse2_3" role="button" type="button">
                                                            <i class="fa fa-boxes fa-fw"></i>
                                                            <span class="text-decoration-none text-justify small"> Factory</span>
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="idCollapse2_3" class="collapse hide" aria-labelledby="idCard2_3" data-parent="#idCollapse2_body">
                                                        <div class="card-body">
                                                            <table class="table">
                                                                <tr>
                                                                    <td class="p-0 m-0">
                                                                        <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                                                        <span>
                                                                            <a class="text-decoration-none text-justify text-white small" href="#"> Add</a>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                            <!-- /.card-group -->
                                        </div>
                                        <!-- /.nested accordion -->

                                    </td>
                                </tr>
                                <!-- /.table-tr -->

                                <!-- table-tr -->
                                <tr>
                                    <td class="p-0 m-0">

                                        <!-- nested accordion -->
                                        <div id="accordionn_nav_2_4">
                                            <!-- card-group -->
                                            <div class="card-group">
                                                <!-- card -->
                                                <div class="card bg-danger">
                                                    <div class="card-header" id="idCard2_4">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2_4" aria-expanded="false" aria-controls="idCollapse2_4" role="button" type="button">
                                                            <i class="fa fa-box-open fa-fw"></i>
                                                            <span class="text-decoration-none text-justify small"> Line</span>
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="idCollapse2_4" class="collapse hide" aria-labelledby="idCard2_4" data-parent="#idCollapse2_body">
                                                        <div class="card-body">
                                                            <table class="table">
                                                                <tr>
                                                                    <td class="p-0 m-0">
                                                                        <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                                                        <span>
                                                                            <a class="text-decoration-none text-justify text-white small" href="#"> Add</a>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                            <!-- /.card-group -->
                                        </div>
                                        <!-- /.nested accordion -->

                                    </td>
                                </tr>
                                <!-- /.table-tr -->

                                <!-- table-tr -->
                                <tr>
                                    <td class="p-0 m-0">

                                        <!-- nested accordion -->
                                        <div id="accordionn_nav_2_5">
                                            <!-- card-group -->
                                            <div class="card-group">
                                                <!-- card -->
                                                <div class="card bg-danger">
                                                    <div class="card-header" id="idCard2_5">
                                                        <h5 class="mb-0">
                                                            <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse2_5" aria-expanded="false" aria-controls="idCollapse2_5" role="button" type="button">
                                                            <i class="fa fa-user-alt fa-fw"></i>
                                                            <span class="text-decoration-none text-justify small"> User</span>
                                                            </button>
                                                        </h5>
                                                    </div>

                                                    <div id="idCollapse2_5" class="collapse hide" aria-labelledby="idCard2_5" data-parent="#idCollapse2_body">
                                                        <div class="card-body">
                                                            <table class="table">
                                                                <tr>
                                                                    <td class="p-0 m-0">
                                                                        <i class="fa fa-arrow-alt-circle-right fa-fw text-white"></i>
                                                                        <span>
                                                                            <a class="text-decoration-none text-justify text-white small" href="#"> Add</a>
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card -->
                                            </div>
                                            <!-- /.card-group -->
                                        </div>
                                        <!-- /.nested accordion -->

                                    </td>
                                </tr>
                                <!-- /.table-tr -->
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card-group -->
        </div>
        <!-- /.accordion -->
        
    </div>
    <!-- /.Left side column. contains the logo and sidebar -->
    
    <!-- Right side column -->
    <div class="col bg-light bg-gradient-light p-0 m-0">
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
        <!-- Main content -->
        <section class="content container-fluid" id="container_fluid">

        <!--------------------------
        | Your Page Content Here |
        -------------------------->
        
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col col-sm-12 p-0 m-0">
                
                <!-- accordion -->
                <div id="accordion_1_content">
                    <!-- card-group -->
                    <div class="card-group">
                        <!-- card -->
                        <div class="card bg-secondary border-light">
                            <div class="card-header" id="idCard_accordion_1_content_1">
                                <h5 class="mb-0">
                                    <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_1" aria-expanded="true" aria-controls="idCollapse_accordion_1_content_1" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> Create New ( Section )</span>
                                    </button>
                                </h5>
                            </div>

                            <div id="idCollapse_accordion_1_content_1" class="collapse show" aria-labelledby="idCard_accordion_1_content_1" data-parent="#idCollapse_accordion_1_content_1">
                                <div class="card-body bg-light" id="idCollapse_content_1_body">
                                    
                                    <!-- row -->
                                    <div class="row">

                                        <!-- col -->
                                        <div class="col-sm-12">
                                            <!-- form -->
                                            <form action="{!! route('home') !!}" method="POST" class="col col-sm-8" autocomplete="off" id="form1" enctype="multipart/form-data">
                                                @csrf
                                                <!-- form-group-row -->
                                                <div class="row">
                                                    <!-- -->
                                                    <!-- form-group -->
                                                    <div class="form-group row col-sm-12 m-1">
                                                        <label for="company" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Company</label>
                                                        <div class="col">
                                                            <!-- p class="form-control-static"></p -->
                                                            <select class="form-control form-control-md select2" id="company" name="company" value="{{ old('company') }}" data-placeholder="Company" style="width: 100%;" required>

                                                                <!-- @for($i =1; $i <= 5; $i++) -->
                                                                <option>Company {{ $i }}</option>
                                                                <!-- @endfor -->

                                                            </select>
                                                        </div>
                                                        <!-- span id="form-control" class="help-block"></span -->
                                                    </div>
                                                    <!-- /.form-group -->

                                                    <!-- form-group -->
                                                    <div class="form-group row col-sm-12 m-1">
                                                        <label for="department" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Department</label>
                                                        <div class="col">
                                                            <!-- p class="form-control-static"></p -->
                                                            <select class="form-control form-control-md select2" id="department" name="department" value="{{ old('department') }}" data-placeholder="Department" style="width: 100%;" required>

                                                                <!-- @for($i =1; $i <= 5; $i++) -->
                                                                <option>Department {{ $i }}</option>
                                                                <!-- @endfor -->

                                                            </select>
                                                        </div>
                                                        <!-- span id="form-control" class="help-block"></span -->
                                                    </div>
                                                    <!-- /.form-group -->

                                                    <!-- form-group -->
                                                    <div class="form-group row col-sm-12 m-1">
                                                        <label for="name" class="col-lg-4 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-right">Name</label>
                                                        <div class="col">
                                                            <!-- p class="form-control-static"></p -->
                                                            <input type="text" class="form-control form-control-md" id="name" name="name" placeholder="Name" value="{{ old('name') }}" required/>
                                                        </div>
                                                        <!-- span id="form-control" class="help-block"></span -->
                                                    </div>
                                                    <!-- /.form-group -->

                                                    <!-- form-group -->
                                                    <div class="form-group row col-sm-12">
                                                        <!-- btn-toolbar -->
                                                        <div class="col text-right">
                                                            <!-- div class="btn-group btn-group-lg pull-right" -->
                                                                <button type="submit" class="btn btn-primary ml-auto" id="submit">Submit</button>
                                                            <!-- /div -->
                                                        </div>
                                                    </div>
                                                    <!-- /.form-group -->
                                                    <!-- -->
                                                </div>
                                                <!-- /.form-group-row -->
                                            </form>
                                            <!-- /.form -->
                                        </div>
                                        <!-- /.col -->

                                    </div>
                                    <!-- /.row -->
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card-group -->
                    
                    <!-- card-group -->
                    <div class="card-group">
                        <!-- card -->
                        <div class="card bg-secondary border-light">
                            <div class="card-header" id="idCard_accordion_1_content_2">
                                <h5 class="mb-0">
                                    <button class="btn btn-default m-0 p-0 text-white" data-toggle="collapse" data-target="#idCollapse_accordion_1_content_2" aria-expanded="false" aria-controls="idCollapse_accordion_1_content_2" role="button" type="button">
                                    <i class="fab fa-buromobelexperte fa-fw"></i>
                                    <span class="text-decoration-none text-justify small"> List</span>
                                    </button>
                                </h5>
                            </div>

                            <div id="idCollapse_accordion_1_content_2" class="collapse hide" aria-labelledby="idCard_accordion_1_content_2" data-parent="#idCollapse_accordion_1_content_2">
                                <div class="card-body bg-light" id="idCollapse_content_2_body">
                                    
                                    
                                    <!-- --- -->
                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-sm-12 table-responsive-sm">
                                            <!-- table -->
                                            <!-- class="table table-striped table-bordered dt-responsive nowrap" -->
                                            <table id="tableId_1" class="table table-bordered" style="width:100%" width="100%" cellspacing="0" border="1" align="left">
                                                
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <!-- @for($i =1; $i <= 5; $i++) -->                 
                                                   <!-- tr -->
                                                   <tr>
                                                        <th scope="row"># {{ $i }}</th>
                                                        <td>Section {{ $i }}</td>
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown" tabindex="-1">
                                                                <div class="btn-group" role="group">
                                                                    <!-- button type="button" role="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split">Action</button -->
                                                                    <button id="btnGroupDrop_1_{{ $i }}" type="button" role="button" class="btn btn-outline-primary" data-toggle="dropdown"
                                                                    aria-haspopup="true" aria-expanded="false">
                                                                        <i class="fas fa-cogs fa-fw" aria-hidden="true"></i>
                                                                        <span class="sr-only">Toggle Dropdown</span>
                                                                    </button>
                                                                    <div class="dropdown-menu text-wrap text-break bg-light border-light" aria-labelledby="btnGroupDrop_1_{{ $i }}">
                                                                        <!-- span class="dropdown-item-text ">Title</span -->
                                                                        <!-- div class="dropdown-item dropdown-divider"></div -->
                                                                        <div class="dropdown-item btn-group  pl-1 pr-1 m-0" role="group" aria-label="Button Group">
                                                                            <button type="button" role="button" class="btn btn-outline-primary btn-block waves-effect">
                                                                            <i class="far fa-edit fa-fw" aria-hidden="true"></i>
                                                                            <span class="sr-only">Action</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="dropdown-item btn-group  pl-1 pr-1 m-0" role="group" aria-label="Button Group">
                                                                            <button type="button" role="button" class="btn btn-outline-primary btn-block waves-effect">
                                                                            <i class="far fa-trash-alt fa-fw" aria-hidden="true"></i>
                                                                            <span class="sr-only">Action</span>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- /.tr -->                 
                                                    <!-- @endfor -->
                                                </tbody>
                                                
                                            </table>
                                            <!-- /.table -->
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                    <!-- --- -->
                                    
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.card-group -->
                </div>
                <!-- /.accordion -->
                
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
            
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
<script>
$(document).ready(function(){
    $('#tableId_1').DataTable();
    $.fn.select2.defaults.set( "theme", "bootstrap" );
    $('#company').select2();
    $('#department').select2();
}); 
</script>
<!-- REQUIRED JS SCRIPTS -->


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
      
</div>
<!-- /.wrapper -->
</body>
</html>