<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('settings.title') ? config('settings.title') : env('APP_NAME') }} - @yield('title')</title>

    <!-- Site favicon -->
   
    <!-- /site favicon -->

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{asset('contents/admin')}}/css/vendors_css.css">

    <!-- Style-->
    <link rel="stylesheet" href="{{asset('contents/admin')}}/css/font-awesome.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/plugin/toastr.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/css/skin_color.css">
    <link rel="stylesheet" href="{{asset('contents/admin')}}/css/custom.css">

</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div id="loader"></div>

        <!-- Header -->
        @include('include.doctor_header')
        <!-- /header -->

        <!-- Sidebar -->
        @include('include.doctor_sidebar')
        <!-- /sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper rounded-0">
            <div class="container-full ">
                <!-- Main content -->
                 @yield('content')
                <!-- /.content -->
            </div>
        </div>
        <!-- Footer -->
        @include('include.footer')
        <!-- /Footer -->


    </div>
    <!-- ./wrapper -->



    <!-- Page Content overlay -->


    <!-- Vendor JS -->
    <script src="{{asset('contents/admin')}}/js/vendors.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/pages/chat-popup.js"></script>
    <script src="{{asset('contents/admin')}}/icons/feather-icons/feather.min.js"></script>

    <script src="{{asset('contents/admin')}}/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
    <script src="{{asset('contents/admin')}}/vendor_components/raphael/raphael.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendor_components/morris.js/morris.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendor_components/fullcalendar/lib/moment.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendor_components/fullcalendar/fullcalendar.min.js"></script>



    <script src="{{asset('contents/admin')}}/plugin/toastr.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/template.js"></script>
    <script src="{{asset('contents/admin')}}/js/pages/dashboard4.js"></script>
    <script src="{{asset('contents/admin')}}/js/pages/calendar.js"></script>
    <script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>

    
</body>

</html>
