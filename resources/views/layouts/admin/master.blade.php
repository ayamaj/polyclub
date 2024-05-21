<!DOCTYPE html>

<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Gestion Des Club Universitaire | </title>
    <meta charset="utf-8" />
    <meta name="description"
        content="Good admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Good, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard, bootstrap dark mode" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Good - Bootstrap 5 HTML Admin Dashboard Template" />
    <meta property="og:url"
        content="https://themes.getbootstrap.com/product/good-bootstrap-5-admin-dashboard-template" />
    <meta property="og:site_name" content="Keenthemes | Good" />
    <link rel="canonical" href="https://preview.keenthemes.com/good" />
    <link rel="shortcut icon" href= "{{ asset('design/assets/media/logos/favicon.ico') }}"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href= "{{ asset('design/assets/plugins/custom/leaflet/leaflet.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href= "{{ asset('design/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href= "{{ asset('design/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href= "{{ asset('design/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">

{{-- ********* --}}
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/css/bootstrap.min.css" rel="stylesheet">
    {{-- ******* --}}
    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->

    <!--End::Google Tag Manager -->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="dark-mode aside-enabled ">

    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('layouts.admin.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid">
                @include('layouts.admin.header')
                    @yield('content')
            @include('layouts.admin.footer')

            </div>

        </div>
    </div>

    <!--end::Modal - Invite Friend-->
    <!--end::Modals-->
    <!--begin::Javascript-->

    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src= "{{ asset('design/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src= "{{ asset('design/assets/js/scripts.bundle.js') }} "></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src= "{{ asset('design/assets/plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
    <script src= "{{ asset('design/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src= "{{ asset('design/assets/js/custom/apps/support-center/tickets/create.js') }}"></script>
    <script src= "{{ asset('design/assets/js/custom/documentation/documentation.js') }}"></script>
    <script src= "{{ asset('design/assets/js/custom/pages/general/contact.js') }}"></script>
    <script src= "{{ asset('design/assets/js/widgets.bundle.js') }} "></script>
    <script src= "{{ asset('design/assets/js/custom/widgets.js') }} "></script>
    <script src= "{{ asset('design/assets/js/custom/apps/chat/chat.js') }} "></script>
    <script src= "{{ asset('design/assets/js/custom/intro.js') }} "></script>
    <script src= "{{ asset('design/assets/js/custom/utilities/modals/create-project/type.js')}}"></script>
    <script src= "{{ asset('design/assets/js/custom/utilities/modals/create-project/budget.js')}}"></script>
    <script src= "{{ asset('design/assets/js/custom/utilities/modals/create-project/settings.js')}}"></script>
    <script src= "{{ asset('design/assets/js/custom/utilities/modals/create-project/team.js')}}"></script>
    <script src= "{{ asset('design/assets/js/custom/utilities/modals/create-project/targets.js')}}"></script>
    <script src= "{{ asset('design/assets/js/custom/utilities/modals/create-project/files.js')}}"></script>
    <script src= "{{ asset('design/assets/js/custom/utilities/modals/create-project/complete.js')}} "></script>
    <script src= "{{ asset('design/assets/js/custom/utilities/modals/create-project/main.js')}}"></script>
    <script src= "{{ asset('design/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
    <script src= "{{ asset('design/assets/js/custom/utilities/modals/users-search.js')}}"></script>
    <script src= "{{ asset('design/assets/js/moi.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->



</html>
