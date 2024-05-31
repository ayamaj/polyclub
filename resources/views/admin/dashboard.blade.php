@extends('layouts.admin.master')

@section('title', 'liste des clubs')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div id="kt_content_container" class="container-fluid">

        <div class="row g-5 g-xxl-10">

            <div class="col-xl-5 col-xxl-4 mb-xl-5 mb-xxl-10">
                <!--begin::Card widget 4-->
                <div class="card card-flush h-xl-100">
              

                </div>
                <!--end::Card widget 4-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-7 col-xxl-8 mb-5 mb-xxl-10">
                <!--begin::Engage widget 2-->
                <div class="card bgi-position-y-bottom bgi-position-x-end bgi-no-repeat bgi-size-cover min-h-250px h-xl-100 bg-gray-200 border-0" style="background-position: 100% 100%;background-size: 500px auto;background-image:url('assets/media/misc/city.png')">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column justify-content-center ps-lg-15">
                        <!--begin::Title-->
                        <h3 class="text-gray-800 fs-2qx fw-boldest mb-4 mb-lg-8">Good admin theme
                        <br />is a tool of enthusiasm</h3>
                        <!--end::Title-->
                        <!--begin::Action-->
                        <div class="m-0">
                            <a href='#' class="btn btn-danger fw-bold" data-bs-target="#kt_modal_create_app" data-bs-toggle="modal">Create App</a>
                        </div>
                        <!--begin::Action-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 2-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->


    </div>
    <!--end::Container-->
</div>

     <div class="row container-fluid">
        <div class="row g-4 py-1 row-cols-1 row-cols-lg-3 justify-content-center">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-center">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 fs-3">Events</div>
                                </div>
                                <div class="text-center">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800 ">{{ $events->count() }}</div>
                                </div>
                            </div>

                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-calendar-event" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-center">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1 fs-3">Clubs
                                    </div>
                                </div>
                                <div class="text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $clubs->count() }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-shop-window" viewBox="0 0 16 16">
                                    <path
                                        d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h12V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5m2 .5a.5.5 0 0 1 .5.5V13h8V9.5a.5.5 0 0 1 1 0V13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9.5a.5.5 0 0 1 .5-.5" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
    @endsection
