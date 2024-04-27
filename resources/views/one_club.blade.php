@extends('layouts.front.master')

@section('title', 'liste des etudiants')

@section('content')
    <!-- Blog Start -->
    <section id="one_club">
        <!-- About Start -->
        @foreach ($clubs as $Club)
        @if ($Club->id == 1)
        <div class="container-fluid bg-secondary my-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img class="img-fluid w-90" src="{{ asset($Club->image) }}" alt="{{ $Club->nom }}" style=" border: 2px solid rgb(177, 168, 168)" >
                        <div class="bg-primary text-dark text-center p-4">
                            <h3 class="m-0">{{ $Club->name }}</h3>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6>
                        <h1 class= "mb-4">{{ $Club->description }}</h1>
                        <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum.Sadip sea amet diam dolore sed et. Sit
                            rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat
                            duo eos et erat sed diam duo</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
        <div class="card mb-5 mb-xxl-8">
            <!--begin::Body-->
            <div class="card-body pb-0">
                <!--begin::Header-->
                <div class="d-flex align-items-center">
                    <!--begin::Section-->
                    <div class="d-flex align-items-center flex-grow-1">
                        <!--begin::Symbol-->
                        {{-- <div class="symbol symbol-45px me-5">
                            <img src="../../assets/media/avatars/300-5.jpg" alt="" class="" />
                        </div> --}}
                        <!--end::Symbol-->
                        <!--begin::Info-->
                        <div class="d-flex flex-column">
                            <a href="#" class="text-gray-800 text-hover-primary mb-1 fs-6 fw-bolder">Brad Dennis</a>
                            <span class="text-gray-400 fw-bold">Yestarday at 5:06 PM</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Section-->
               
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="pt-5">
                    <!--begin::Text-->
                    <p class="text-gray-800 fs-6 fw-normal mb-2">Outlines keep you honest. They stop you from indulging in poorly thought-out metaphors about driving and keep you focused on the overall structure of your post</p>
                    <!--end::Text-->
                    <!--begin::Action-->
                    <div class="d-flex align-items-center">
                        <a href="#" class="btn btn-sm btn-color-muted btn-active-light-primary fw-bolder fs-6 py-1 px-2 me-4">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
                                <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->24</a>
                        <a href="#" class="btn btn-sm btn-color-muted btn-active-light-danger fw-bolder fs-6 py-1 px-2">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen030.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M18.3721 4.65439C17.6415 4.23815 16.8052 4 15.9142 4C14.3444 4 12.9339 4.73924 12.003 5.89633C11.0657 4.73913 9.66 4 8.08626 4C7.19611 4 6.35789 4.23746 5.62804 4.65439C4.06148 5.54462 3 7.26056 3 9.24232C3 9.81001 3.08941 10.3491 3.25153 10.8593C4.12155 14.9013 9.69287 20 12.0034 20C14.2502 20 19.875 14.9013 20.7488 10.8593C20.9109 10.3491 21 9.81001 21 9.24232C21.0007 7.26056 19.9383 5.54462 18.3721 4.65439Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->75</a>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Body-->
                <!--begin::Separator-->
                <div class="separator pt-4 mb-3"></div>
                <!--end::Separator-->

            </div>
            <!--end::Body-->
        </div>
    </section>
    <br><br><br>


@endsection



