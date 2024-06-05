@extends('layouts.admin.master')

@section('title', $club->name)

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Social - Activity -->
            <div class="d-flex flex-row">
                <!--begin::Start sidebar-->
                <div class="d-lg-flex flex-column flex-lg-row-auto w-lg-500px w-xxl-350px" data-kt-drawer="true"
                    data-kt-drawer-name="start-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}"
                    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_social_start_sidebar_toggle">
                    <!--begin::User menu-->
                    <div class="card mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body pt-15 px-0">
                            <!--begin::Member-->
                            <div class="d-flex flex-column text-center mb-9 px-9">
                                <!--begin::Photo-->
                                <div class="symbol symbol-80px symbol-lg-150px mb-4">
                                    <img src="{{ asset($club->image) }}" alt="{{ $club->nom }}" class="rounded-circle border" style="width: 130px; height: 130px; border-width: 10px; ">
                                </div>


                                <!--end::Photo-->
                                <!--begin::Info-->
                                <div class="text-center">
                                    <!--begin::Name-->
                                    <h5 href="../user-profile/overview.html"
                                        class="text-gray-800 fw-bolder text-hover-primary fs-4">{{ $club->name }}  </h5>
                                    <!--end::Name-->
                                    <!--begin::Position-->
                                    {{-- <span class="text-muted d-block fw-bold">Grade 8, AE3 Student</span> --}}
                                    <!--end::Position-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Member-->
                            <!--begin::Row-->
                            <div class="row px-9 mb-4">
                                <!--begin::Col-->
                                <div class="col-md-4 text-center">
                                    <div class="text-gray-800 fw-bolder fs-4">
                                      <div>{{ $club->date }}</div>
                                    </div>
                                    <span class="text-gray-500 fs-7 d-block fw-bolder">Date Interview</span>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 text-center">

                                    <div class="text-gray-800 fw-bolder fs-4">
                                        <span >{{ $club->users->count() }}</span>
                                    </div>
                                    <span class="text-gray-500 fs-7 d-block fw-bolder">Number Membre</span>

                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 text-center">
                                    <div class="text-gray-800 fw-bolder fs-4">
                                       <div>{{ $club->president }}</div>
                                    </div>
                                    <span class="text-gray-500 fs-7 d-block fw-bolder"> President Club</span>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Navbar-->
                            {{-- <div class="m-0">
                                <!--begin::Navs-->
                                <ul class="nav nav-pills nav-pills-custom flex-column border-transparent fs-5 fw-bolder">
                                    <!--begin::Nav item-->
                                    <li class="nav-item mt-5">
                                        <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0"
                                            href="feeds.html">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen010.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-muted me-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M2 21V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H3C2.4 22 2 21.6 2 21Z"
                                                        fill="black" />
                                                    <path
                                                        d="M2 10V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H3C2.4 11 2 10.6 2 10Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Feeds
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                                            <!--end::Bullet--></a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item mt-5">
                                        <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 active"
                                            href="activity.html">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr070.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-muted me-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5"
                                                        fill="black" />
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14"
                                                        rx="1.5" fill="black" />
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5"
                                                        fill="black" />
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Activity
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                                            <!--end::Bullet--></a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item mt-5">
                                        <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0"
                                            href="followers.html">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-muted me-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                        fill="black" />
                                                    <path
                                                        d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Followers
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                                            <!--end::Bullet--></a>
                                    </li>
                                    <!--end::Nav item-->
                                    <!--begin::Nav item-->
                                    <li class="nav-item mt-5">
                                        <a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0"
                                            href="settings.html">
                                            <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                                            <span class="svg-icon svg-icon-3 svg-icon-muted me-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
                                                        fill="black" />
                                                    <path
                                                        d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Settings
                                            <!--begin::Bullet-->
                                            <span
                                                class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
                                            <!--end::Bullet--></a>
                                    </li>
                                    <!--end::Nav item-->
                                </ul>
                                <!--begin::Navs-->
                            </div> --}}
                            <!--end::Navbar-->
                        </div>
                        <!--end::Body-->
                    </div>
                </div>

                <div class="d-lg-flex flex-column flex-lg-row-auto w-lg-400px w-xxl-370px" data-kt-drawer="true" data-kt-drawer-name="end-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_social_end_sidebar_toggle">
                    <div class="card mb-5 mb-xl-8">
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark"> Membres Club </span>
                                {{-- <span class="text-muted mt-1 fw-bold fs-7">8k social visitors</span> --}}
                            </h3>
                        </div>
                        <div class="card-body pt-5">
                            <!--begin::membre-->
                            @foreach ($club->users as $membre)
                            <div class="d-flex flex-stack">
                                <!--begin::Symbol-->
                                {{-- <div class="symbol symbol-40px me-5">
                                    <img src="../../assets/media/avatars/300-11.jpg" class="h-50 align-self-center" alt="" />
                                </div> --}}
                                <!--end::Symbol-->
                                <!--begin::Section-->
                                <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                    <div class="flex-grow-1 me-2">
                                        <div  class="text-gray-800 text-hover-primary fs-6 fw-bolder">{{ $membre->name }}</div>
                                        <span class="text-muted fw-bold d-block fs-7">{{ $membre->email }}</span>
                                    </div>
                                    <a href="../user-profile/overview.html" class="btn btn-sm btn-light fs-8 fw-bolder">{{ $membre->class }}</a>
                                </div>

                            </div>
                            <div class="separator separator-dashed my-4"></div>
                            @endforeach

                        </div>

                    </div>
                    <!--end::Social widget 1-->
                    <!--begin::Social widget 2-->
                    {{-- <div class="card card-flush mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark">Trending Feeds</span>
                                <span class="text-muted mt-1 fw-bold fs-7">8k social visitors</span>
                            </h3>
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="activity.html" class="btn btn-sm btn-light">View All</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Row-->
                            <div class="row g-3 g-lg-6">
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Img-->
                                    <a href="#">
                                        <img src="../../assets/media/stock/600x600/img-33.jpg" class="rounded w-100" alt="" />
                                    </a>
                                    <!--end::Img-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Img-->
                                    <a href="#">
                                        <img src="../../assets/media/stock/600x600/img-26.jpg" class="rounded w-100" alt="" />
                                    </a>
                                    <!--end::Img-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Img-->
                                    <a href="#">
                                        <img src="../../assets/media/stock/600x600/img-25.jpg" class="rounded w-100" alt="" />
                                    </a>
                                    <!--end::Img-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6">
                                    <!--begin::Img-->
                                    <a href="#">
                                        <img src="../../assets/media/stock/600x600/img-35.jpg" class="rounded w-100" alt="" />
                                    </a>
                                    <!--end::Img-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Body-->
                    </div> --}}
                    <!--end::Social widget 2-->
                </div>
            </div>
        </div>

    </div>


@endsection
