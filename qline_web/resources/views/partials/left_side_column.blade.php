<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                @if( (isset($auth_user)) && ($auth_user->image_uri) )
                    <img src="{!! $auth_user->image_uri !!}" class="img-circle" alt="User Image"/>
                @else
                    <img src="{!! URL::asset('node_modules/admin-lte/dist/img/avatar5.png') !!}" class="img-circle" alt="User Image"/>
                @endif
            </div>
            <div class="pull-left info">
                @isset($auth_user)
                    <p> {{ $auth_user->email }} </p>
                @endisset
                <!-- p>user</p -->
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            
            <!-- li class="header">ACTIVITIES</li -->
            <!-- Optionally, you can add icons to the links -->
            <!-- li class="{!! set_active(['home/']) !!}"><a href="{!! route('home') !!}"><i class="fa fa-edit"></i> <span>Home</span></a></li -->
            <li class="header">ACTIVITIES</li>
            <li class="treeview {!! set_active(['pdcas', 'pdcas/*']) !!}">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>{{ config('app.display_name', 'Title') }}</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{!! set_active(['pdcas/create', 'pdcas/create/*']) !!}"><a href="{!! route('home') !!}"> <i class="fa fa-arrow-circle-o-right"></i> Create New</a></li>
                    <li class="{!! set_active(['pdcas/show-created-pdcas', 'pdcas/show-created-pdcas/*']) !!}"><a href="{!! route('home') !!}"> <i class="fa fa-arrow-circle-o-right"></i> Created PDCAS</a></li>
                </ul>
            </li>
            <li class="treeview {!! set_active(['team/departments', 'team/departments/*']) !!}">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>My Department</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{!! set_active(['team/departments/show', 'team/departments/*']) !!}"><a href="{!! route('home') !!}"> <i class="fa fa-arrow-circle-o-right"></i> Status</a></li>
                </ul>
            </li>
            <li class="treeview {!! set_active(['team/companies', 'team/companies/*']) !!}">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>My SBU</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{!! set_active(['team/companies/departments', 'team/companies/departments/*']) !!}"><a href="{!! route('home') !!}"> <i class="fa fa-arrow-circle-o-right"></i> Status</a></li>
                </ul>
            </li>
            
            <!-- backstage navigation -->
            
            <li class="treeview {!! set_active(['backstage', 'backstage/*']) !!}">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Backstage</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="treeview {!! set_active(['backstage/meeting-categories', 'backstage/meeting-categories/*']) !!}">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>Meeting Category</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{!! set_active(['backstage/meeting-categories/create', 'backstage/meeting-categories/create/*']) !!}"><a href="{!! route('home') !!}"> <i class="fa fa-arrow-circle-o-right"></i> Control</a></li>
                        </ul>
                    </li>
                    
                    <li class="treeview {!! set_active(['backstage/user-roles', 'backstage/user-roles/*']) !!}">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>Admin User</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{!! set_active(['backstage/user-roles/create', 'backstage/user-roles/create/*']) !!}"><a href="{!! route('home') !!}"> <i class="fa fa-arrow-circle-o-right"></i> Control</a></li>
                        </ul>
                    </li>
                    
                    <li class="treeview {!! set_active(['backstage/notification-schedules', 'backstage/notification-schedules/*']) !!}">
                        <a href="#">
                            <i class="fa fa-circle-o"></i> <span>Notification Schedule</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="{!! set_active(['backstage/notification-schedules/create', 'backstage/notification-schedules/create/*']) !!}"><a href="{!! route('home') !!}"> <i class="fa fa-arrow-circle-o-right"></i> Control</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            
            <!-- /.backstage navigation -->
            
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
    
</aside>