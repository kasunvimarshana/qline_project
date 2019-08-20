<header class="main-header">

    <!-- Logo -->
    <!-- {{ url('/') }} -->
    <a href="
             @if( Route::has('home') )
                {!! route('home') !!}
             @else
                {!! url('/') !!}
             @endif
             " class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>{{ config('app.display_name', 'Title') }}</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{ config('app.display_name', 'Title') }}</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <!-- /.notifications-menu -->

                <!-- Tasks Menu -->
                <!-- /.tasks-menu -->

                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        @if( (isset($auth_user)) && ($auth_user->image_uri) )
                            <img src="{!! $auth_user->image_uri !!}" class="user-image" alt="User Image"/>
                        @else
                            <img src="{!! URL::asset('node_modules/admin-lte/dist/img/avatar5.png') !!}" class="user-image" alt="User Image"/>
                        @endif
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">
                            @isset($auth_user)
                                {{ $auth_user->email }}
                            @endisset
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            @if( (isset($auth_user)) && ($auth_user->image_uri) )
                                <img src="{!! $auth_user->image_uri !!}" class="img-circle" alt="User Image"/>
                            @else
                                <img src="{!! URL::asset('node_modules/admin-lte/dist/img/avatar5.png') !!}" class="img-circle" alt="User Image"/>
                            @endif

                            <p>
                            @isset($auth_user)
                                {{ $auth_user->display_name }}
                                @isset($auth_user->phone_mobile)
                                    - {{ $auth_user->phone_mobile }}
                                @endisset
                                <small>{{ $auth_user->email }}</small>
                            @endisset
                            </p>
                        </li>
                        @section('menu_body')
                        <!-- Menu Body -->
                        <!-- li class="user-body">
                        </li -->
                        <!-- ./menu-body -->
                        @show
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <!-- a href="#" class="btn btn-info btn-flat">Profile</a -->
                            </div>
                            <div class="pull-right">
                                <a href="{!! route('login.doLogout') !!}" class="btn btn-info btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li -->
                <!-- ./control-sidebar-toggle-button -->
            </ul>
        </div>
    </nav>
    
</header>