@extends('layouts.home_layout')

@section('section_stylesheet_optional')
    @parent
@endsection

@section('section_script_optional')
    @parent
@endsection

@section('contant')
<!-- row -->
<div class="row pb-4">
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
                            <span class="text-decoration-none text-justify small"> Quality ( Stage )</span>
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
                                    <div class="container container-fluid">
                                    <!-- ---------------------------------------------------------------------------- -->
                                    <div class="container">
                                        <h2>Justified Tabs/Pills</h2>
                                        <p>To justify tabs/pills (equal width), use the .nav-justified class:</p>
                                        <ul class="nav nav-pills nav-justified flex-column flex-sm-row" id="id_nav" role="tablist">
                                            <li class="nav-item flex-sm-fill text-sm-center">
                                                <a id="id_nav_link_1" class="nav-link disabled active" data-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">Active</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center">
                                                <a id="id_nav_link_1" class="nav-link disabled active" data-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">Active</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center">
                                                <a id="id_nav_link_1" class="nav-link disabled active" data-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">Active</a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center">
                                                <a id="id_nav_link_1" class="nav-link disabled active" data-toggle="pill" href="#home" role="tab" aria-controls="home" aria-selected="true">Active</a>
                                            </li>
                                        </ul>
                                        
                                       
                                        
                                        
                                        <!-- -------------------------------------------- -->
                                        <!-- Tab panes -->
                                        <div class="tab-content" id="id_nav_tab_content">
                                            <div id="home" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_1"><br>
                                                <h3>HOME</h3>
                                                <p>Lorem ipsum dolor sit amet</p>
                                            </div>
                                            <div id="menu1" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_1"><br>
                                                <h3>Menu 1</h3>
                                                <p>Ut enim ad minim veniam</p>
                                            </div>
                                            <div id="menu2" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_1"><br>
                                                <h3>Menu 2</h3>
                                                <p>Sed ut perspiciatis unde omnis</p>
                                            </div>
                                        </div>
                                        <!-- -------------------------------------------- -->
                                    </div>
                                    <!-- ---------------------------------------------------------------------------- -->
                                    </div>
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
        </div>
        <!-- /.accordion -->

    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
@endsection