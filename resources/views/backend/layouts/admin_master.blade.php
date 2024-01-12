@extends('backend.layouts.admin_app')

@section('main_section')

<!-- Preloader -->


<!-- Navbar -->
@includeIf('backend.partials.nav')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
@includeIf('backend.partials.sidebar')
<!-- / Main Sidebar Container -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


  <!-- Main content -->
  <section class="content " style="margin-top: 75px;">
    <div class="container-fluid">


      <div class="row">
        <div class="col-md-12">
          <div class="card" style="min-height: 825px; border-radius:3px;">

            <!-- <div class="card-body"> -->


            @yield('main_content')



            <!-- </div> -->

          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>

      <!-- /.row -->
    </div><!--/. container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar and Footer -->
@includeIf('backend.partials.footer')
<!-- /.control-sidebar and Footer -->
@stop