<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SIDAKEDES PENDUDUK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('minton/dist/') }}/assets/images/favicon.ico">
    @include('partials.vp_css')
</head>


<body class="loading" data-layout-mode="two-column"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>
</body>

<!-- Begin page -->
<div id="wrapper">

    @include('partials.vpp_header')

    @include('partials.vpp_sidebar')

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">

        @yield('content')

    </div>
    @include('partials.vpp_footer')

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->


<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

@stack('prepend-script')

@include('partials.vp_js')

@stack('addon-script')

</body>
<script>
    function logout() {
        document.getElementById("logout").submit();
    }
</script>

</html>
