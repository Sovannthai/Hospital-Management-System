<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('backends.layout.head')
{{-- <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed"> --}}
<body class="layout-fixed layout-navbar-fixed text-sm">

<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    @include('backends.layout.header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('backends.layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      @yield('contents')
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer text-center">
    <div class="float-right d-none d-sm-block">
      {{-- <b>Version</b> 3.2.0 --}}
    </div>

    <strong>©Copyright-KAKNISET || @ 2024</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="width: 300px;">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('backends.layout.script')
@yield('backends.script')

<!-- Page level plugins -->
<script src="{{asset("plugins/chart.js/Chart.min.js")}}"></script>
<!-- Page level custom scripts -->
<script src="{{asset("js/charts/chart-area-demo.js")}}"></script>
<script src="{{asset("js/charts/chart-pie-demo.js")}}"></scrip>

<script>
    $('#myModal').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('action', $(e.relatedTarget).data('href'));
        });
    $('#rejectModal').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('action', $(e.relatedTarget).data('href'));
    });
    $('#approveModal').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('action', $(e.relatedTarget).data('href'));
    });
</script>
<script>
    $(document).on('click', '.delete-btn', function(e) {
        e.preventDefault();
        var form = $(this).closest('form');
        Swal.fire({
            title: "Are you sure?"
                // , text: "You won't be able to revert this!"
            , icon: "warning"
            , showCancelButton: true
            , confirmButtonColor: "#3085d6"
            , cancelButtonColor: "#d33"
            , confirmButtonText: "OK!"
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });

</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
