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

        @if (Auth::user())
            @include('include.header')
            <x-sidebar />
        @endif    
        @if( Auth::guard('doctor')->user()) 
            @include('include.doctor_header')
            @include('include.doctor_sidebar')
        @endif
        @if( Auth::guard('patient')->user()) 
            @include('include.patient_header')
            @include('include.patient_sidebar')
        @endif
       

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
    <script src="{{asset('contents/admin')}}/vendor_components/datatable/datatables.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('contents/admin')}}/vendor_components/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script>


    
    
    <script src="{{asset('contents/admin')}}/plugin/toastr.min.js"></script>
    <script src="{{asset('contents/admin')}}/plugin/sweetalert.min.js"></script>
    <script src="{{asset('contents/admin')}}/js/template.js"></script>
    <script src="{{asset('contents/admin')}}/js/pages/dashboard3.js"></script>
    <script src="{{asset('contents/admin')}}/js/pages/dashboard4.js"></script>
    <script src="{{asset('contents/admin')}}/js/pages/dashboard.js"></script>
    <script src="{{asset('contents/admin')}}/js/pages/calendar.js"></script> 
    <script src="{{asset('contents/admin')}}/js/pages/patients.js"></script>
    <script type="text/javascript">

        $(document).on("click","#delete",function(e) {
            e.preventDefault();
            var link = $(this).attr("href");    
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location.href = link;
                    
                } else {
                    swal("Your file is safe!");
                }
            }); 
        });


            
     
   </script>
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
    

<script type="text/javascript">
    $(document).ready(function(){
       
        $("#add_more").click(function () {
            var html= '';
                html+= '<tr>';
                html+= '<td class="form-group"><input type="text" name="medicine[]" placeholder="Napa" class="form-control" required></td>';
                html+= '<td class="form-group"><input type="text" name="strength[]" placeholder="655mg" class="form-control" required></td>';
                html+= '<td class="form-group"><input type="text" name="dose[]" placeholder="1+0+1" class="form-control" required> </td>';
                html+= '<td><select style="width: 125px;" class="form-select "  aria-label=".form-select-lg example" name="advice[]" required><option></option><option value="After Meal">After Meal</option><option value="Before Meal">Before Meal</option></select></td>';
                html+= '<td class="form-group"><input type="text" name="duration[]" placeholder="7-Days" class="form-control" required></td>';
                html+= '<td><button style="background-color: #fc0e0e;" type="button" name="remove" id="remove" class="btn btn-outline-primary">Delete</button></td>';
                html+= '</tr>';
            $('tbody').append(html);    
            
        })
    });
   
    $(document).on('click', '#remove', function () {
        $(this).parents('tr').remove();
    });
</script>

    

</body>

</html>
