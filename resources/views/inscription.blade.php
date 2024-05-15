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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
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
                            <a href="../../index.html">
                                <img alt="Logo" src= "{{ asset('design/assets/media/image/logo.svg') }}"
                                    class="logo" />
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
            <a  href="" class="btn btn-lg  btn-lg-square rounded-circle back-to-top" >
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  fill="gray"  class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                  </svg>

            </a>
            <div class="d-flex flex-column flex-lg-row-fluid py-10">
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <div class="w-lg-600px p-10 p-lg-15 mx-auto">
                        <form class="form w-100" method="POST" action="{{ route('inscription.store') }}">
                            @csrf
                            <div class="mb-10 text-center">
                                <h1 class="text-dark mb-3">Form </h1>
                                {{-- <div class="text-gray-400 fw-bold fs-4">Already have an account?
                                    <a href="../sign-in/basic.html" class="link-primary fw-bolder">Sign in here</a>
                                </div> --}}
                            </div>

                            <!--begin::name-->
                            <div class=" fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6"
                                    for="name">{{ __('Full Name') }}</label>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('name') is-invalid @enderror"
                                    id="name" type="text" name="name" value="{{ old('name') }}" />
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
                                    for="name">{{ __('Number') }}</label>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('number') is-invalid @enderror"
                                    id="number" type="number" name="number" value="{{ old('number') }}" />
                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::number-->

                            <!--begin::class-->
                            <div class=" fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6"
                                    for="class">{{ __('Class') }}</label>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('class') is-invalid @enderror"
                                    id="class" type="text" name="class" value="{{ old('class') }}" />
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
                                    id="email" type="email" name="email" value="{{ old('email') }}" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!--end::email-->
                            <!--begin::password-->
                            {{-- <div class="fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6 "
                                    for="password">{{ __('Password') }}</label>
                                <input
                                    class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                    id="password" type="password" name="password" value="{{ old('password') }}" />
                                    <span
                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div> --}}
                            <div class="fv-row mb-7">
                                <label class="form-label fw-bolder text-dark fs-6"
                                    for="password">{{ __('Password') }}</label>
                                <div class="position-relative">
                                    <input
                                        class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                        id="password" type="password" name="password"
                                        value="{{ old('password') }}" />
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <span
                                        class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2 toggle-password"
                                        style="cursor: pointer;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                            <path
                                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                        </svg>
                                    </span>
                                </div>

                            </div>

                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    const togglePassword = document.querySelector('.toggle-password');
                                    const passwordInput = document.getElementById('password');
                                    const showPasswordIcon = togglePassword.querySelector('.bi-eye');
                                    const hidePasswordIcon = togglePassword.querySelector('.bi-eye-slash');

                                    togglePassword.addEventListener('click', function() {
                                        if (passwordInput.type === 'password') {
                                            passwordInput.type = 'text';
                                            showPasswordIcon.classList.add('d-none');
                                            hidePasswordIcon.classList.remove('d-none');
                                        } else {
                                            passwordInput.type = 'password';
                                            showPasswordIcon.classList.remove('d-none');
                                            hidePasswordIcon.classList.add('d-none');
                                        }
                                    });
                                });
                            </script>


                            <!--end::password-->
                            {{-- <div class="mb-7">
                                <label class="required fw-bold fs-6 mb-5">Role</label>
                                @foreach ($roles as $role)
                                    <div class="d-flex fv-row">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3 @error('name') is-invalid @enderror" name="role_id"
                                                type="radio" value="{{ $role->id }}" id="kt_modal_update_role_option_0"
                                                />
                                            <br>
                                            <div class="container_message">
                                                @error('role_id')
                                                    <span style="color: red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                <div class="fw-bolder text-gray-800">{{ $role->name }}</div>
                                                <div class="text-gray-600">Best for business owners and company
                                                    administrators
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class='separator separator-dashed my-5'></div>
                                @endforeach
                            </div> --}}

                            <div class="mb-7">
                                <label class="required fw-bold fs-6 mb-5">Club</label>
                                @foreach ($clubs as $club)
                                    <div class="d-flex fv-row">
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input me-3" type="checkbox"
                                                value="{{ $club->id }}" id="club_id_{{ $club->id }}"
                                                name="club_id[]" @error('clubs') is-invalid @enderror />
                                            <label class="form-check-label" for="club_id_{{ $club->id }}">
                                                <div class="fw-bolder text-gray-800">{{ $club->name }}</div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class='separator separator-dashed my-5'></div>
                                @endforeach
                                <div class="container_message">
                                    @error('clubs')
                                        <span style="color: red">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>



                            <!--begin::club-->
                            {{-- <label class="required fw-bold fs-6 mb-5">Permission</label>
                            @foreach ($permissions as $permission)
                            <div class="d-flex fv-row">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3" type="checkbox"
                                           value="{{ $permission->id }}" id="permission_{{ $permission->id }}"
                                           name="permissions[]" />
                                    <label class="form-check-label" for="permission_{{ $permission->id }}">
                                        <div class="fw-bolder text-gray-800">{{ $permission->name }}</div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                            @endforeach --}}
                            <!--end::club-->

                            <br><br>
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary" style="width: 70%;">
                                    {{ __('Submit') }}

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
