<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Adova Pharmaceuticals Ltd.</title>

    <!-- Favicon icon -->
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('backend/plugins/images/favicon.png')}}
    "> -->
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/img/fav.png') }}">
    <!-- Custom CSS -->
    <!-- <link href="{{URL::asset('backend/plugins/bower_components/chartist/dist/chartist.min.css')}}" rel="stylesheet">
    <link rel="stylesheet"
        href="backend/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css"> -->
    <!-- Custom CSS -->
    <link href="{{URL::asset('backend/css/style.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    @stack('css')
</head>

<body>
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        @include('backend.partials.topbar')
        <!-- ============================================================== -->
        @include('backend.partials.sidebar')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        @yield('x')
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="backend/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="backend/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="backend/js/app-style-switcher.js"></script>
    <script src="backend/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="backend/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="backend/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="backend/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <!-- <script src="backend/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="backend/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"> -->
    </script>
    <!-- <script src="backend/js/pages/dashboards/dashboard1.js"></script> -->
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

    @stack('js')
    <script>
       
        ClassicEditor
            .create( document.querySelector( '#compostion' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#indication' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#dosage' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#contraindication' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#effects' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#others' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#precaution' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#interaction' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#storage' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#supply' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#safety' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#withdral' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#desc' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>

</html>