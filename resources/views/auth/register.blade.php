<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Good - Bootstrap 5 HTML Admin Dashboard Template
Purchase: https://themes.getbootstrap.com/product/good-bootstrap-5-admin-dashboard-template
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<!-- Mirrored from preview.keenthemes.com/good/authentication/sign-up/basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 10:09:20 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Good – Bootstrap 5 HTML Admin Dashboard Template by Keenthemes</title>
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
    <link rel="shortcut icon" href= "{{ asset('design/assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href= "{{ asset('design/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href= "{{ asset('design/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!--End::Google Tag Manager -->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="auth-bg">
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--End::Google Tag Manager (noscript) -->
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-up -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px">
                    <!--begin::Header-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
                        <!--begin::Logo-->
                        <div class="container_logo">
                        <a href="../../index.html" >
                            <img alt="Logo" src= "{{ asset('design/assets/media/image/logo.svg') }}" class="logo" />
                        </a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Illustration-->

                    <img alt="image" src= "{{ asset('design/assets/media/image/img1.svg') }}" class="img1" />

                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-600px p-10 p-lg-15 mx-auto">
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" method="POST"
                            action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-10 text-center">
                                <h1 class="text-dark mb-3">SIGN IN TO YOUR ACCOUNT</h1>
                                <div class="text-gray-400 fw-bold fs-4">Already have an account?
                                    <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a>
                                </div>
                            </div>

                            <!--begin::name-->
                            <div class=" fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6"
                                    for="name">{{ __('Name') }}</label>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror"
                                    id="name" type="text" name="name" value="{{ old('name') }}" required
                                    autocomplete="name" autofocus />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::name-->

                            <!--begin::number-->
                            <div class=" fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6"
                                    for="name">{{ __('number') }}</label>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('number') is-invalid @enderror"
                                    id="number" type="text" name="number" value="{{ old('number') }}" required
                                    autocomplete="number" autofocus />
                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::number-->
                            <!--begin::role-->
                            <div class=" fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6"
                                    for="role">{{ __('Role') }}</label>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('role') is-invalid @enderror"
                                    id="role" type="text" name="role" value="{{ old('role') }}"
                                    required autocomplete="role" autofocus />
                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::role-->
                            <!--begin::cin-->
                            <div class=" fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6"
                                    for="cin">{{ __('Cin') }}</label>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('cin') is-invalid @enderror"
                                    id="cin" type="text" name="cin" value="{{ old('cin') }}"
                                    required autocomplete="cin" autofocus />
                                @error('cin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::cin-->
                            <!--begin::class-->
                            <div class=" fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6"
                                    for="class">{{ __('Class') }}</label>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('class') is-invalid @enderror"
                                    id="class" type="text" name="class" value="{{ old('class') }}"
                                    required autocomplete="class" autofocus />
                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::class-->

                            <!--begin::email-->
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6 "
                                    for="email">{{ __('Email Address') }}</label>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                                    id="email" type="email" name="email" value="{{ old('email') }}"
                                    required autocomplete="email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::email-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row" data-kt-password-meter="true">
                                <!--begin::Wrapper-->
                                <div class="mb-1">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bolder text-dark fs-6"
                                        for="password">{{ __('Password') }}</label>
                                    <!--end::Label-->
                                    <!--begin::Input wrapper-->
                                    <div class="position-relative mb-3">
                                        <input
                                            class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                            id="password" type="password" name="password" required
                                            autocomplete="new-password" />
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <span
                                            class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                            data-kt-password-meter-control="visibility">
                                            <i class="bi bi-eye-slash fs-2"></i>
                                            <i class="bi bi-eye fs-2 d-none"></i>
                                        </span>
                                    </div>
                                    <!--end::Input wrapper-->
                                    <!--begin::Meter-->
                                    <div class="d-flex align-items-center mb-3"
                                        data-kt-password-meter-control="highlight">
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                        </div>
                                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                    </div>
                                    <!--end::Meter-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Hint-->
                                <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp;
                                    symbols.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Input group=-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-5">
                                <label class="form-label fw-bolder text-dark fs-6"
                                    for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input class="form-control form-control-lg form-control-solid" id="password-confirm"
                                    type="password" name="password_confirmation" required
                                    autocomplete="new-password" />
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                            <br>

                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <label class="form-check form-check-custom form-check-solid form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                    <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                                        <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
                                </label>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="submit"  class="btn btn-lg btn-primary" style="width: 70%;">
                                   {{ __('Register') }}

                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <!--begin::Links-->
                    <div class="d-flex flex-center fw-bold fs-6">
                        <a href="https://keenthemes.com/" class="text-muted text-hover-primary px-2"
                            target="_blank">About</a>
                        <a href="https://devs.keenthemes.com/" class="text-muted text-hover-primary px-2"
                            target="_blank">Support</a>
                        <a href="https://themes.getbootstrap.com/product/good-bootstrap-5-admin-dashboard-template"
                            class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "../../assets/index.html";
    </script>
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('design/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('design/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('design/assets/js/custom/authentication/sign-up/general.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

<!-- Mirrored from preview.keenthemes.com/good/authentication/sign-up/basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Feb 2022 10:09:21 GMT -->

</html>
