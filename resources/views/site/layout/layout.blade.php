<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Buraq </title>
  <link rel="icon" type="image/png" href="{{asset('assets/img/'.$setting->favicon)}}" />
  @include('site.layout.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed ">

@include('site.layout.navbar')


  @include('site.layout.Sidebar')


  @yield('body')

  @include('site.layout.footer')

  @stack('javascripts')


  @include('site.layout.footerScirpt')


</body>

</html>