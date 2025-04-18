<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Smkn 1 Sumenep</title>

    <!-- color-modes:js -->
    {{-- <script src="{{ asset('') }}admin/assets/js/color-modes.js"></script> --}}
    <!-- endinject -->

    <!-- Fonts -->
    <link rel="preconnect" href="{{ asset('') }}admin/assets/fonts.googleapis.com/index.html">
    <link rel="preconnect" href="{{ asset('') }}admin/assets/fonts.gstatic.com/index.html" crossorigin>
    <link
        href="{{ asset('') }}admin/assets/fonts.googleapis.com/css20466.css?family=Roboto:wght@300;400;500;700;900&amp;display=swap"
        rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendors/core/core.css">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendors/flatpickr/flatpickr.min.css">
    <!-- End plugin css for this page -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/fonts/feather-font/css/iconfont.css">
    <!-- endinject -->
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('') }}admin/assets/css/demo1/style.css">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('') }}admin/assets/images/smkn-1-sumenep.png" />
</head>

    <div class="main-wrapper">
        @include('layout.sidebar')

        <div class="page-wrapper">
            @include('layout.Header');


            @yield('content')


            <!-- partial:partials/_footer.html -->
            <footer
                class="footer d-flex flex-row align-items-center justify-content-between px-4 py-3 border-top small">
                <p class="text-secondary mb-1 mb-md-0">Copyright © 2024 <a href="https://www.smkn1sumenep.sch.id/"
                        target="_blank">IT CLUB</a>.</p>
                <p class="text-secondary">PENS PSDKU <i class="mb-1 text-primary ms-1 icon-sm"
                        data-feather="heart"></i></p>
            </footer>
            <!-- partial -->

        </div>
    </div>
    <!-- core:js -->
    <script src="{{ asset('') }}admin/assets/vendors/core/core.js"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('') }}admin/assets/vendors/flatpickr/flatpickr.min.js"></script>
    <script src="{{ asset('') }}admin/assets/vendors/apexcharts/apexcharts.min.js"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('') }}admin/assets/vendors/feather-icons/feather.min.js"></script>
    <script src="{{ asset('') }}admin/assets/js/app.js"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('') }}admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->

    <!-- DataTables CDN -->

    <script src="{{ asset('') }}admin/assets/vendors/datatables.net/dataTables.js"></script>
    <script src="{{ asset('') }}admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
    <script src="{{ asset('') }}admin/assets/js/data-table.js"></script>


</body>


</html>
