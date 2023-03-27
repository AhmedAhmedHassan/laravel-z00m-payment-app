<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'ZaTa3r') }} - @yield('title')</title>

        <link rel="apple-touch-icon" href="{{asset('dashboard/images/ico/apple-icon-120.png')}}">
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('dashboard/images/ico/favicon.ico')}}">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    
        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/css/vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/css/charts/apexcharts.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/css/extensions/toastr.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/css/forms/select/select2.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/css/tables/datatable/dataTables.bootstrap5.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/css/tables/datatable/responsive.bootstrap5.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/css/tables/datatable/buttons.bootstrap5.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')}}">
        
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/bootstrap-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/colors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/components.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/themes/dark-layout.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/themes/bordered-layout.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/themes/semi-dark-layout.css')}}">

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/core/menu/menu-types/vertical-menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/pages/dashboard-ecommerce.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/plugins/charts/chart-apex.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/plugins/extensions/ext-component-toastr.css')}}">
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/style.css')}}">
        <!-- END: Custom CSS-->
        @yield('style')
        
        {{-- paddle js --}}
        @paddleJS
    </head>
    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">
        @include('includes.dashboard.header')
        @include('includes.dashboard.sidebar')
   
        <!-- BEGIN: Content-->
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <section class="app-user-list">
                        @yield('content')
                    </section>
                </div>
            </div>
        </div>
        <!-- END: Content-->
       
        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
        </footer>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
        <!-- END: Footer-->
        <!-- BEGIN: Vendor JS-->
        <script src="{{asset('dashboard/vendors/js/vendors.min.js')}}"></script>
        <script src="{{asset('dashboard/vendors/js/forms/select/select2.full.min.js')}}"></script>
        <script src="{{asset('dashboard/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('dashboard/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')}}"></script>
        <script src="{{asset('dashboard/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('dashboard/vendors/js/tables/datatable/responsive.bootstrap5.js')}}"></script>
        <script src="{{asset('dashboard/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
        <script src="{{asset('dashboard/vendors/js/tables/datatable/jszip.min.js')}}"></script>
        <script src="{{asset('dashboard/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
        <script src="{{asset('dashboard/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
        <script src="{{asset('dashboard/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
        <script src="{{asset('dashboard/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
        <script src="{{asset('dashboard/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="{{asset('dashboard/vendors/js/extensions/toastr.min.js')}}"></script>
        <script src="{{asset('dashboard/js/scripts/extensions/ext-component-toastr.js')}}"></script>
        <!-- END: Page Vendor JS-->
        <script src="{{asset('dashboard/js/scripts/pages/app-user-list.js')}}"></script>

        <!-- BEGIN: Theme JS-->
        <script src="{{asset('dashboard/js/core/app-menu.js')}}"></script>
        <script src="{{asset('dashboard/js/core/app.js')}}"></script>
        <!-- END: Theme JS-->

       @if ($msg=Session::get('success'))
        <script>
            toastr['success'](
            'You have successfully logged',
            '👋 Welcome'+' '+'{{auth()->user()->first_name}}',
            {
                closeButton: true,
                tapToDismiss: false,
            }
            );
        </script>
       @endif

        <script>
            $(window).on('load', function() {
                if (feather) {
                    feather.replace({
                        width: 14,
                        height: 14
                    });
                }
            })
        </script>
        @yield('admin-js')
    </body>
</html>   