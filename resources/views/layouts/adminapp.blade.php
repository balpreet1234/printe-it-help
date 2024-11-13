<!doctype html>
<html lang="en" class="minimal-theme">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="{{ asset('public/new-admin/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="{{ asset('public/new-admin/assets/css/pace.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/dark-theme.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/light-theme.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/semi-dark.css')}}" rel="stylesheet" />
  <link href="{{ asset('public/new-admin/assets/css/header-colors.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Allprinter Ithelp - Admin Template</title>
  @yield('heads')
</head>

<body>
  <div class="wrapper">
    @include('includes.admin.header')
    <div class="container-fluid">
      <div class="row">
    
        <div class="col-md-3">
          @include('includes.sidebar')
        </div>
        
        <div class="col-md-9 content_section">
          @yield('content')
        </div>
      </div>
    </div>
  </div>


  <script src="{{asset('public/new-admin/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/easyPieChart/jquery.easypiechart.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/peity/jquery.peity.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/js/pace.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/js/table-datatable.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/js/app.js')}}"></script>
  <script src="{{asset('public/new-admin/assets/js/index.js')}}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")
  </script>
  <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>

  @yield('scripts')
</body>

</html>
