<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.Name', 'Dashboard') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('vendors/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendors/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        {{-- Top Menu --}}
        @include('layouts.topMenu')

        {{-- Left Menu --}}
        @include('layouts.leftMenu')

        {{-- Main Content (Body) --}}
        <div class="content-wrapper">
            
            <!-- Main Content -->
            <section class="content">
                @yield('content')
            </section>
        </div>

        {{-- Right Menu --}}
        @include('layouts.rightMenu')

        {{-- Footer --}}
        @include('layouts.footer')

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('vendors/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendors/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
