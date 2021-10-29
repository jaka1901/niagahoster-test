<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Control Panel | @yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/control-panel/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/control-panel/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/control-panel/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/control-panel/images/favicon.ico" />

    @yield('scripts-top')
    
    <style type="text/css">
      pre{
        white-space: normal !important;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('control-panel/base/parts/navbar')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('control-panel/base/parts/sidebar')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            @yield('content')
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates </a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/control-panel/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/control-panel/vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/control-panel/js/off-canvas.js"></script>
    <script src="/control-panel/js/hoverable-collapse.js"></script>
    <script src="/control-panel/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/control-panel/js/dashboard.js"></script>
    <script src="/control-panel/js/todolist.js"></script>
    <!-- End custom js for this page -->
    @yield('scripts-bottom')
  </body>
</html>