<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <!-- Language Dropdown Menu -->
        {{-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="flag-icon flag-icon-us"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right p-0">
                <a href="#" class="dropdown-item active">
                    <i class="flag-icon flag-icon-us mr-2"></i> English
                </a>
                <a href="#" class="dropdown-item">
                    <i class="flag-icon flag-icon-de mr-2"></i> German
                </a>
                <a href="#" class="dropdown-item">
                    <i class="flag-icon flag-icon-fr mr-2"></i> French
                </a>
                <a href="#" class="dropdown-item">
                    <i class="flag-icon flag-icon-es mr-2"></i> Spanish
                </a>
            </div>
        </li> --}}

        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('uploads/all_photo/'.auth()->user()->photo) }}" class="user-image img-circle" alt="User Image">
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                <!-- User image -->
                <li class="user-header">
                    <img src="{{ asset('uploads/all_photo/'.auth()->user()->photo) }}" style="width: 110px;height:115px;" class="img-circle" alt="User Image">

                    <p><b>
                            {{ auth()->user()->name }}
                        </b></p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="{{ route('profile.edit',['id'=>auth()->user()->id]) }}" class="btn  btn-flat btn-outline-primary">Profile</a>
                    <form action="{{ route('logout') }}" method="post" style="display: inline-block;">
                        @csrf
                        <button type="submit" class="btn  btn-flat btn-outline-danger" style="position: relative;
                        left: 130px;">Sing out</button>
                    </form>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>
