@extends('backends.master')
@section('page_title')
Admin Dashboard
@endsection
<style>
    .home-dash {
        transition: 0.5s;
    }

    .home-dash:hover {
        transform: 1.5s;
        transform: translateY(-15px);
    }

    .home-dash-3 {
        transition: 0.5s;
    }

    .home-dash-3:hover {
        transform: 1.5s;
        transform: translateY(15px);
    }

</style>
@section('contents')
<div class="container-fluid">
    <div>
        <h3>Welcome, {{ auth()->user()->name }}</h3>
    </div>
    <!-- Content Row -->
    <div class="row">
        <!-- Income -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2 home-dash">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Patain</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">500</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-user-injured fa-2x text-gray-300"></i>
                            {{-- <i class="fas fa-database fa-2x text-gray-300"></i> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Expenses -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2 home-dash">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Expenses</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$ 500</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pending Expense Requests -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2 home-dash">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Expense Requests</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Customers -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2 home-dash">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Customers</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">20</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script>
    $(document).ready(function() {
        // config sidebar menu
        $('#sidebar-menu li').removeClass(' menu-is-opening menu-open');
        $('#sidebar-menu li a').removeClass('active');
        $('#sidebar-menu li ul li a').removeClass('active');

        $('#menu_dashboard').addClass(' menu-is-opening menu-open');
        $('#menu_dashboard_bg').addClass('active');

    })

</script>
@endpush
