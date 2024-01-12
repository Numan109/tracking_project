<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <a href="index3.html" class="brand-link ">
        <img src="{{ asset('assets') }}/dist/img/AdminLTELogo.png" alt="Logo" class="brand-image ">

    </a>
    @php
        $prefix = Request::route()->getPrefix();
        $route = Route::current()->getName();
    @endphp


    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-3">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}"
                                class="nav-link @if (Route::currentRouteName() == 'dashboard') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dashboard</p>
                            </a>


                        </li>
                        <li class="nav-item {{ $prefix == '/administrators' ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Administrator
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                               
                                    <li class="nav-item">
                                        <a href="#" class="nav-link @if (Route::currentRouteName() == '#') active @endif">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p> Test</p>
                                        </a>
                                    </li>
                               

 
 

                            </ul>
                        </li>

                    </ul>
                </li>





            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
