<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>PolyClub - @yield('title')</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="{{ asset('dashboard/img/favicon.ico') }}" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('dashboard/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet">

    </head>

<body id="kt_body" class="dark-mode aside-enabled">
{{--
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('layouts.admin.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid">
                @include('layouts.admin.header')
                    @yield('content')
            @include('layouts.admin.footer')

            </div>

        </div>
    </div> --}}
    @include('layouts.front.header')
    @yield('content')
    @include('layouts.front.footer')


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src= "{{ asset('dashboard/lib/easing/easing.min.js') }}"></script>
    <script src= "{{ asset('dashboard/lib/waypoints/waypoints.min.js') }}"></script>
    <script src= "{{ asset('dashboard/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src= "{{ asset('dashboard/js/main.js') }}"></script>
</body>
<!--end::Body-->



</html>
