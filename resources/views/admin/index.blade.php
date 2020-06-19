<!DOCTYPE html>
<html lang="en">

@include('admin.partials.head')

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            @include('admin.partials.profile')
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            @include('admin.partials.sidebar')
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
       @include('admin.partials.navbar')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->


      </div>
    </div>

   @include('admin.partials.js')
  </body>
</html>
