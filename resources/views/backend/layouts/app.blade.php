<!doctype html>
<html lang="en">


    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--favicon-->
        <link rel="icon" href="assets/images/logo.png" type="image/png" />
        <!--plugins-->
        {{-- <link href="{{url('assets/plugins/simplebar/css/simplebar.css" rel="stylesheet')}}" /> --}}
        <link href="{{url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
        <link href="{{url('assets/plugins/highcharts/css/highcharts.css" rel="stylesheet')}}" />
        <link href="{{url('assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet')}}" />
        <link href="{{url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet" />
        <!-- loader-->
        {{-- <link href="{{url('assets/css/pace.min.css')}}" rel="stylesheet" />
        <script src="{{url('assets/js/pace.min.js')}}"></script> --}}
        <!-- Bootstrap CSS -->
        <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
        <link href="{{url('assets/css/app.css')}}" rel="stylesheet">
        <link href="{{url('assets/css/icons.css')}}" rel="stylesheet">
        <!-- Theme Style CSS -->
        <link rel="stylesheet" href="{{url('assets/css/dark-theme.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/semi-dark.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/header-colors.css')}}" />
        <title>@yield('title','devripon | Hotel Management Solution')</title>
    </head>

    <body>

        @section('main')
        @show

        <!-- Bootstrap JS -->
        <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
        <!--plugins-->
        <script src="{{url('assets/js/jquery.min.js')}}"></script>
        {{-- <script src="{{url('assets/plugins/simplebar/js/simplebar.min.js')}}"></script> --}}
        <script src="{{url('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
        <script src="{{url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
        <script src="{{url('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{url('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <script src="{{url('assets/plugins/highcharts/js/highcharts.js')}}"></script>
        <script src="{{url('assets/plugins/highcharts/js/exporting.js')}}"></script>
        <script src="{{url('assets/plugins/highcharts/js/variable-pie.js')}}"></script>
        <script src="{{url('assets/plugins/highcharts/js/export-data.js')}}"></script>
        <script src="{{url('assets/plugins/highcharts/js/accessibility.js')}}"></script>
        <script src="{{url('assets/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
        <script>
            new PerfectScrollbar('.dashboard-top-countries');
        </script>
        <script src="{{url('assets/js/index.js')}}"></script>
        <!--app JS-->
        <script src="{{url('assets/js/app.js')}}"></script>
    </body>


</html>