<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','Admin Dashboard')</title>
    <link rel="icon" href="{{ asset('uploads/all_photo/title.png') }}" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- flag-icon-css -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('backend/plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
      <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link rel="stylesheet" href="{{ asset('backend/sweetalert2/css/sweetalert2.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="{{ asset('backend/custom/css/app.css') }}">
    <link href="{{ asset("css/sb-admin-2.min.css")}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


@stack('css')
</head>

<style type="text/css">
.btn-style{
    border-radius: 100%;
}
.pagination{
            float: right;
            margin-top: 10px;
        }
  .bootstrap-tagsinput{
      width: 100%;
  }
  .label-info{
      background-color: #17a2b8;

  }
  .label {
      display: inline-block;
      padding: .25em .4em;
      font-size: 75%;
      font-weight: 700;
      line-height: 1;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: .25rem;
      transition: color .15s ease-in-out,background-color .15s ease-in-out;
      border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  }
  @font-face {
                font-family: 'Montserrat',sans-serif,'Hanuman';
                src:  url('public/font/Hanuman-Light.ttf') format('ttf');
                src:  url('public/font/Montserrat-Light.ttf') format('ttf');
            }
            :root {
                --system-font:  'Roboto', sans-serif;
            }
    body{
       font-family:  var(--system-font);
    }
    .text-sm .btn{
        font-size: 12px !important;
    }
  .dropdown-item {
    cursor: pointer;
  }
  /* collapse for sidebar menu  */
  .collapse .in{
    display: block;
  }
  #tableInformation_wrapper{
    padding: 15px !important;
  }
  .toolbox{
    float: right;
  }

  /* Custom Sidebar Style */
body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .content-wrapper, body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-footer, body:not(.sidebar-mini-md):not(.sidebar-mini-xs):not(.layout-top-nav) .main-header {
    transition: margin-left .3s ease-in-out;
    margin-left: 280px;
}
.sidebar-collapse .main-sidebar, .sidebar-collapse .main-sidebar::before {
    margin-left: -280px;
}
.custom-ml{
  width: 260px!important;
}
.sidebar{
  overflow-y: auto;
  width: 280px!important;

}
.width-nav{
  width: 280px!important;
  margin-top: 2.5rem!important;
}
.brand-link{
  width: 280px!important;
}
.form-control{
    border-radius: 0;
}
</style>
