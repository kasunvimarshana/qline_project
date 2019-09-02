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
                                    <!-- container -->
                                    <div class="container">
                                        <!-- tab-nav -->
                                        <div class="row">
                                        <!-- --- -->
                                        <ul class="nav nav-pills nav-pills-danger nav-fill nav-justified flex-column flex-sm-row w-100" id="id_nav" role="tablist">
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_1" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_cutting') !!}" role="tab" aria-controls="id_tab_content_1" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> Cutting</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_2" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_rqc') !!}" role="tab" aria-controls="id_tab_content_2" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> RQC</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_3" class="nav-link m-1 btn btn-outline-danger active" data-toggle="false" href="{!! url('quality_stage_sewing_hundred_percent') !!}" role="tab" aria-controls="id_tab_content_3" aria-selected="true">
                                                    <span><i class="fas fa-anchor"></i> SC 100%</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_4" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_sewing_aql_audit') !!}" role="tab" aria-controls="id_tab_content_4" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> Sewing AQL Audit</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_5" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_finishing') !!}" role="tab" aria-controls="id_tab_content_5" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> Finishing</span>
                                                </a>
                                            </li>
                                            <li class="nav-item flex-sm-fill text-sm-center" tabindex="1">
                                                <a id="id_nav_link_6" class="nav-link m-1 btn btn-outline-danger" data-toggle="false" href="{!! url('quality_stage_cni') !!}" role="tab" aria-controls="id_tab_content_6" aria-selected="false">
                                                    <span><i class="fas fa-anchor"></i> CNI</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- --- -->
                                        </div>
                                        <!-- /.tab-nav -->
                                        
                                        <!-- tab-content -->
                                        <div class="row">
                                        <!-- --- -->
                                        <div class="tab-content w-100" id="id_nav_tab_content">
                                            <div id="id_tab_content_3" class="container tab-pane fade show active" role="tabpanel" aria-labelledby="id_nav_link_3"><br>
                                                
                                                <!-- ************************************************ -->
                                                <!-- row -->
                                                <div class="row">

                                                    <!-- col -->
                                                    <div class="col-sm-12 p-0 m-0">
                                                        <!-- form -->
                                                        <!-- form action="{!! route('home') !!}" method="POST" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data" -->
                                                            <!-- @csrf -->
                                                            <!-- form-group-row -->
                                                            <div class="row col p-0 m-0">
                                                                
                                                                <div class="row w-100 justify-content-between p-0 m-0">
                                                                    <!-- col -->
                                                                    <div class="col col-md-3 p-0 m-0">
                                                                        <!-- card-group -->
                                                                        <div class="card-group">
                                                                            <div class="card bg-light">
                                                                                <div class="card-body text-center p-0 m-0">
                                                                                    
                                                                                    <!-- list-group -->
                                                                                    <ul class="list-group">
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-transparent">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break">Team </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">#Team</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-transparent">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break">Buyer </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">#Buyer</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-transparent">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break">Style </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">#Style</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-transparent">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break">Colour </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">#Colour</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-transparent">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break">Export </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">#Export</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                    </ul>
                                                                                    <!-- /.list-group -->
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.card-group -->
                                                                    </div>
                                                                    <!-- /.col -->
                                                                    <!-- col -->
                                                                    <div class="col col-md-6 p-0 m-0">
                                                                        <div class="card-group">
                                                                            <div class="card bg-light">
                                                                                <div class="card-body text-center p-0 m-0">
                                                                                    
                                                                                    <!-- list-group -->
                                                                                    <ul class="list-group">
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start p-0 m-0 bg-transparent">
                                                                                            <div class="d-flex w-100 justify-content-center">
                                                                                                <!-- + -->
        <!-- +++++++++++++++++++++++++++++++++++++++++++ -->
        <!-- row -->
        <div class="row w-100">

            <!-- col -->
            <div class="col col-sm-12">
                <!-- form -->
                <form action="{!! route('home') !!}" method="POST" class="col col-sm-12 p-0 m-0" autocomplete="off" id="form1" enctype="multipart/form-data">
                    @csrf
                    <!-- form-group-row -->
                    <div class="row col">

                        <!-- container -->
                        <div class="container mt-3 mb-3">
                            <!-- h2 class="text-danger"> - </h2 -->
                            <!-- p> - </p -->
                        </div>
                        <!-- /.container -->
                        <!-- form-group-col -->
                        <div class="col col-sm-12 row p-0 m-0">
                            <!-- -->
                            <!-- form-group -->
                            <div class="form-group row col col-12">
                                <label for="operaion" class="col col-lg-12 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Operation /Area /POM</label>
                                <div class="col col-lg-12">
                                    <!-- p class="form-control-static"></p -->
                                    <select class="form-control form-control-md select2" id="operaion" name="operaion" value="{{ old('operaion') }}" data-placeholder="Operaion" style="width: 100%;" required>

                                        <!-- @for($i =1; $i <= 5; $i++) -->
                                        <option>Operaion {{ $i }}</option>
                                        <!-- @endfor -->

                                    </select>
                                </div>
                                <!-- span id="form-control" class="help-block"></span -->
                            </div>
                            <!-- /.form-group -->
                            
                            <!-- form-group -->
                            <div class="form-group row col col-12">
                                <label for="defect_category" class="col col-lg-12 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Defect Category</label>
                                <div class="col col-lg-12">
                                    <!-- p class="form-control-static"></p -->
                                    <select class="form-control form-control-md select2" id="defect_category" name="defect_category" value="{{ old('defect_category') }}" data-placeholder="Defect Category" style="width: 100%;" required>

                                        <!-- @for($i =1; $i <= 5; $i++) -->
                                        <option>Defect Category {{ $i }}</option>
                                        <!-- @endfor -->

                                    </select>
                                </div>
                                <!-- span id="form-control" class="help-block"></span -->
                            </div>
                            <!-- /.form-group -->
                            
                            <!-- form-group -->
                            <div class="form-group row col col-12">
                                <label for="defect" class="col col-lg-12 control-label col-form-label col-form-label-md text-justify font-weight-bold text-md-left">Defect</label>
                                <div class="col col-lg-12">
                                    <!-- p class="form-control-static"></p -->
                                    <select class="form-control form-control-md select2" id="defect" name="defect" value="{{ old('defect') }}" data-placeholder="Defect" style="width: 100%;" required>

                                        <!-- @for($i =1; $i <= 5; $i++) -->
                                        <option>Defect {{ $i }}</option>
                                        <!-- @endfor -->

                                    </select>
                                </div>
                                <!-- span id="form-control" class="help-block"></span -->
                            </div>
                            <!-- /.form-group -->

                            <!-- form-group-row -->
                            <div class="row col col-12 w-100">
                                <!-- -->
                                <!-- form-group -->
                                <div class="form-group row col-sm-12">
                                    <!-- btn-toolbar -->
                                    <div class="col text-center">
                                        <!-- div class="btn-group btn-group-lg pull-right" -->
                                            <button type="submit" class="btn btn-primary ml-auto mr-auto" id="submit">Submit</button>
                                        <!-- /div -->
                                    </div>
                                </div>
                                <!-- /.form-group -->
                                <!-- -->
                            </div>
                            <!-- /.form-group-row -->
                            <!-- -->
                        </div>
                        <!-- /.form-group-col -->

                    </div>
                    <!-- /.form-group-row -->
                </form>
                <!-- /.form -->
            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
        <!-- +++++++++++++++++++++++++++++++++++++++++++ -->
                                                                                                <!-- + -->
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->    
                                                
                                                                                    </ul>
                                                                                    <!-- /.list-group -->
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.col -->
                                                                    <!-- col -->
                                                                    <div class="col col-md-3 p-0 m-0">
                                                                        <!-- card-group -->
                                                                        <div class="card-group">
                                                                            <div class="card bg-light">
                                                                                <div class="card-body text-center p-0 m-0">
                                                                                    
                                                                                    <!-- list-group -->
                                                                                    <ul class="list-group">
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-transparent">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break">Now </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break">TTL</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-transparent">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break">Prod Qty </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">000</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-transparent">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break">Check Qty </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">000</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-transparent">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break">Defect Qty </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">000</span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                        
                                                                                        <!-- list-group-item -->
                                                                                        <li class="list-group-item flex-column align-items-start bg-transparent">
                                                                                            <div class="d-flex w-100 justify-content-between">
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="text-wrap text-break">Defect 
                                                                                                        <span>%</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                                <span class="text-monospace text-justify">
                                                                                                    <span class="badge badge-secondary text-wrap text-break">0
                                                                                                        <span>%</span>
                                                                                                    </span>
                                                                                                </span>
                                                                                            </div>
                                                                                        </li>
                                                                                        <!-- /.list-group-item -->
                                                                                    </ul>
                                                                                    <!-- /.list-group -->
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.card-group -->
                                                                    </div>
                                                                    <!-- /.col -->
                                                                </div>
                                                                
                                                            </div>
                                                            <!-- /.form-group-row -->
                                                        <!-- /form -->
                                                        <!-- /.form -->
                                                    </div>
                                                    <!-- /.col -->

                                                </div>
                                                <!-- /.row -->
                                                <!-- ************************************************ -->
                                                
                                            </div>
                                        </div>
                                        <!-- --- -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div>
                                    <!-- /.container -->
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