<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Buraq </title>
    <link rel="icon" type="image/png" href="{{asset('assets/img/'.$setting->favicon)}}"/>
    @include('trader.layout.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed ">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <!-- <img class="animation__shake" src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60"> -->
            <img class="animation__shake" src="{{asset('assets/img/'.$setting->favicon)}}" alt="AdminLTELogo" height="70" width="70">

        </div>

        <!-- Navbar -->
        @include('trader.layout.navbar')
        <!-- /.navbar -->

        @include('trader.layout.sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('body')
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- @include('dashboard.layout.footer') -->


    @include('trader.layout.footerScript')


</body>

</html>
