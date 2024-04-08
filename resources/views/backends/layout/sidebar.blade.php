<aside class="main-sidebar elevation-4 sidebar-light-info" style="width: 280px">
    <!-- Brand Logo -->
    {{-- <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('uploads/business_logo/' . session('business_logo')) }}" alt="AdminLTE Logo" class="brand-image"
            style="width: 100%;
      object-fit: contain;margin-left: 0; height: 200px;max-height: 100px;">
    </a> --}}
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('uploads/all_photo/logo.png') }}" alt="AdminLTE Logo" class="brand-image"
            style="width: 100%;
      object-fit: contain;margin-left: 0; height: 200px;max-height: 100px;">
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                {{-- <img src="{{ Session::get('current_user')->profiles }}" class="img-circle elevation-2"
                alt="User Image"> --}}
            </div>
            <div class="info">
                {{-- <a href="#" class="d-block">{{ Session::get('current_user')->name }}</a> --}}
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-3 width-nav">
            <ul class="nav nav-pills nav-sidebar flex-column" id="sidebar-menu" data-widget="treeview" role="menu"
                data-accordion="true">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item" id="menu_dashboard">
                    {{-- menu-open --}}
                    <a href="{{ route('home') }}" class="nav-link custom-ml" id="menu_dashboard_bg">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item @if(Route::is('role.*')||Route::is('add_role*')||Route::is('edit_role*')||Route::is('user.*')) menu-open @endif" id="menu_employee_mg">
                    {{-- menu-open --}}
                    <a href="#" class="nav-link custom-ml" id="menu_employee_bg">
                        <i class="nav-icon fas fa-users"></i>
                        <p>User Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="collapse_employee">
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link custom-ml @if(Route::is('user.index')) active @endif" id="menu_employess">
                                <i class="fa-solid fa-plus nav-icon"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('role.index') }}" class="nav-link custom-ml @if(Route::is('role.index')) active @endif" id="menu_employess">
                                <i class="fa-solid fa-plus nav-icon"></i>
                                <p>Role</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" id="menu_setting">
                    {{-- menu-open --}}
                    <a href="#" class="nav-link custom-ml" id="menu_setting_bg">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>
                            Setting
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" id="collapse_setting">
                        <li class="nav-item">
                            <a href="" class="nav-link custom-ml">
                                <i class="fa-solid fa-plus nav-icon"></i>
                                <p>Business Setting</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
