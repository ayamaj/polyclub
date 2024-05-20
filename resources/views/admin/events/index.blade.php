@extends('layouts.admin.master')

@section('title', 'liste des etudiants')

@section('content')
    @if (session('status'))
        <div class="d-flex justify-content-center">
            <div class="alert alert-primary" id="flash-message">
                {{ session('status') }}
            </div>
        </div>
    @endif
    <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger" id="flash-message">
                {{ $error }}
            </li>
        @endforeach
    </ul>
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div id="kt_content_container" class="container-fluid">
                <div class="card card-flush">
                    <div class="card-header mt-6">
                        <div class="card-title">
                            <!--begin::Search-->
                              <!--begin::Search-->
                              <form class="d-flex align-items-center position-relative my-1 me-5" method="post" action="{{ route('admin.event.search') }}" >
                                @csrf
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                            rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                                        <path
                                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <input type="text" data-kt-permissions-table-filter="search" name="search"
                                    class="form-control form-control-solid w-250px ps-15" placeholder="Search Event" />
                                    <button style="display: none" type="submit"></button>
                            </form>
                            <!--end::Search-->
                            <!--end::Search-->
                        </div>
                        @permission('create_event')
                        <div class="card-toolbar">
                            <!--begin::Button aadd event -->
                            <a type="button" class="btn btn-light-primary" href="{{ route('admin.event.create') }}">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                            fill="black" />
                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                            transform="rotate(-90 10.8891 17.8033)" fill="black" />
                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                            fill="black" />
                                    </svg>
                                </span> Add Event</a>
                            <!--end::Button Add event-->
                        </div>
                        @endpermission
                    </div>
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">image</th>

                                    <th class="min-w-220px">Description</th>
                                    <th class="min-w-125px">Date</th>
                                    <th class="min-w-125px">Duration</th>
                                    @permission('action_event')
                                    <th class="text-end min-w-100px">Actions</th>
                                    @endpermission
                                </tr>
                            </thead>
                            @foreach ($events as $Event)
                                <tbody class="fw-bold text-gray-600">
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <!--begin::image -->
                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                <a href="view.html">
                                                    <div class="symbol-label">
                                                        <img src="{{ asset($Event->image) }}" alt="{{ $Event->titre }}"
                                                            class="w-100" />
                                                    </div>
                                                </a>
                                            </div>
                                            <!--end::image-->
                                            <!--begin::name et email-->
                                            <div class="d-flex flex-column">
                                                <a href="view.html"
                                                    class="text-gray-800 text-hover-primary mb-1">{{ $Event->titre }}</a>
                                                <span>{{ $Event->place }}</span>
                                            </div>
                                            <!--end::name et email-->
                                        </td>
                                        <td>{{ $Event->description }}</td>
                                        <td>{{ $Event->date }}</td>
                                        <td>{{ $Event->duration }}</td>
                                        @permission('action_event')
                                        <td class="text-end">
                                            <!--begin::Update-->
                                            <a class="btn btn-icon btn-primary"
                                                href="{{ route('admin.event.edit', ['id' => $Event->id]) }}">
                                                <i class="fas fa-solid fa-pen fs-4 ml-1"></i>
                                                </span>
                                            </a>
                                            <!--end::Update-->
                                            <!--begin::Delete-->
                                            <a type="button" class="btn btn-icon btn-danger" class="btn btn-primary"
                                                data-kt-permissions-table-filter="delete_row" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_delete_user-{{ $Event->id }}">
                                                <i class="fas fa-solid fa-trash fs-4 ml-1"></i>
                                                </span>
                                            </a>
                                            <!--end::Delete-->
                                        </td>
                                        @endpermission
                                    </tr>
                                    <!--begin::model delete* -->
                                    <div class="modal fade" id="kt_modal_delete_user-{{ $Event->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered mw-400px">
                                            <div class="modal-content">
                                                <div class="modal-header"
                                                    id="kt_modal_add_user_header-{{ $Event->id }}">
                                                    <div aria-labelledby="swal2-title"
                                                        aria-describedby="swal2-html-container"
                                                        class="swal2-popup swal2-modal swal2-icon-warning swal2-show"
                                                        tabindex="-1" role="dialog" aria-live="assertive"
                                                        aria-modal="true" style="display: grid;"><button type="button"
                                                            class="swal2-close" aria-label="Close this dialog"
                                                            style="display: none;">
                                                        </button>
                                                        <ul class="swal2-progress-steps" style="display: none;"></ul>
                                                        <div class="swal2-icon swal2-warning swal2-icon-show"
                                                            style="display: flex;">
                                                            <div class="swal2-icon-content">!
                                                            </div>
                                                        </div>

                                                        <img class="swal2-image" style="display: none;">
                                                        <h2 class="swal2-title" id="swal2-title" style="display: none;">
                                                        </h2>
                                                        <div class="swal2-html-container" id="swal2-html-container"
                                                            style="display: block;">Are you sure you want to delete
                                                            {{ $Event->titre }}?</div>
                                                        <input class="swal2-input" style="display: none;"><input
                                                            type="file" class="swal2-file" style="display: none;">
                                                        <div class="swal2-range" style="display: none;">
                                                            <input type="range"><output></output>
                                                        </div>
                                                        <select class="swal2-select" style="display: none;"></select>
                                                        <div class="swal2-radio" style="display: none;"></div>
                                                        <label for="swal2-checkbox" class="swal2-checkbox"
                                                            style="display: none;">
                                                            <input type="checkbox">
                                                            <span class="swal2-label"></span>
                                                        </label>
                                                        <textarea class="swal2-textarea" style="display: none;"></textarea>
                                                        <div class="swal2-validation-message"
                                                            id="swal2-validation-message" style="display: none;">
                                                        </div>


                                                        <div class="swal2-actions" style="display: flex;">
                                                            <div class="swal2-loader"></div>
                                                            <form
                                                                action="{{ route('admin.event.delete', ['id' => $Event->id]) }}"
                                                                method="post">
                                                                @csrf

                                                                <button type="submit"
                                                                    class="swal2-confirm btn fw-bold btn-danger"
                                                                    aria-label="" style="display: inline-block;">Yes,
                                                                    delete!</button>
                                                            </form>

                                                            <a type="button"
                                                                class="swal2-cancel btn fw-bold btn-active-light-primary"
                                                                aria-label style="display: inline-block;" href="{{ route('admin.event.index') }}">No,cancel </a>
                                                        </div>

                                                        <div class="swal2-footer" style="display: none;">
                                                        </div>
                                                        <div class="swal2-timer-progress-bar-container">
                                                            <div class="swal2-timer-progress-bar" style="display: none;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::model delete* -->
                            @endforeach
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
