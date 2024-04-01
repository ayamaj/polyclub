@extends('layouts.admin.master')

@section('title', 'liste des etudiants')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div id="kt_content_container" class="container-fluid">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-title">
                               <!--begin::Search-->
                               <div class="d-flex align-items-center position-relative my-1 me-5">
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
                                <input type="text" data-kt-permissions-table-filter="search"
                                    class="form-control form-control-solid w-250px ps-15" placeholder="Search Admins" />
                            </div>
                            <!--end::Search-->
                    </div>
                    <!--begin::Add user-->
                    <div class="card-toolbar">
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <a type="button" class="btn btn-primary" href="{{ route('admin.admin.create') }}">
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2"
                                            rx="1" transform="rotate(-90 11.364 20.364)" fill="black" />
                                        <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                            fill="black" />
                                    </svg>
                                </span>Add Admin</a>
                        </div>
                    </div>
                    <!--end::Add user-->
                </div>
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <thead>
                            <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                                            data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">User</th>
                                {{-- <th class="min-w-125px">Number</th> --}}
                                <th class="min-w-125px">Role</th>
                                {{-- <th class="min-w-125px">Cin</th>
                                <th class="min-w-125px">Class</th> --}}
                                <th class="text-end min-w-100px">Actions</th>
                            </tr>
                        </thead>
                        @foreach ($admins as $Admin)
                            <tbody class="text-gray-600 fw-bold">
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->
                                    <!--begin::User=-->
                                    <td class="d-flex align-items-center">
                                        <!--begin::image -->
                                        <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                            <a href="view.html">
                                                <div class="symbol-label">
                                                    <img src="{{ asset($Admin->image) }}" alt="{{ $Admin->nom }}"
                                                        class="w-100" />
                                                </div>
                                            </a>
                                        </div>
                                        <!--end::image-->
                                        <!--begin::name et email-->
                                        <div class="d-flex flex-column">
                                            <a href="view.html"
                                                class="text-gray-800 text-hover-primary mb-1">{{ $Admin->name }}</a>
                                            <span>{{ $Admin->email }}</span>
                                        </div>
                                        <!--end::name et email-->
                                    </td>
                                    {{-- <td>{{ $Admin->number }}</td> --}}
                                    <td>{{ $Admin->role->name }}</td>
                                    {{-- <td>{{ $Admin->cin }}</td>
                                    <td>{{ $Admin->class }}</td> --}}
                                    <!--begin::action-->
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                            <span class="svg-icon svg-icon-5 m-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                            data-kt-menu="true">
                                            <div class="menu-item px-3">
                                                <a href="{{ route('admin.admin.edit', ['id' => $Admin->id]) }}"
                                                    class="menu-link px-3">Edit</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_delete_user-{{ $Admin->id }}">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <!--begin::model delete-->
                            <div class="modal fade" id="kt_modal_delete_user-{{ $Admin->id }}" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered mw-400px">
                                    <div class="modal-content">
                                        <div class="modal-header" id="kt_modal_add_user_header-{{ $Admin->id }}">
                                            <div aria-labelledby="swal2-title" aria-describedby="swal2-html-container"
                                                class="swal2-popup swal2-modal swal2-icon-warning swal2-show"
                                                tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true"
                                                style="display: grid;"><button type="button" class="swal2-close"
                                                    aria-label="Close this dialog" style="display: none;">
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
                                                    {{ $Admin->name }}?</div>
                                                <input class="swal2-input" style="display: none;"><input type="file"
                                                    class="swal2-file" style="display: none;">
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
                                                <div class="swal2-validation-message" id="swal2-validation-message"
                                                    style="display: none;">
                                                </div>
                                                <div class="swal2-actions" style="display: flex;">
                                                    <div class="swal2-loader"></div>
                                                    <form action="{{ route('admin.admin.delete', ['id' => $Admin->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit"
                                                            class="swal2-confirm btn fw-bold btn-danger" aria-label=""
                                                            style="display: inline-block;" href="">Yes,
                                                            delete!</button>
                                                    </form>
                                                    <button type="button" class="swal2-deny" aria-label=""
                                                        style="display: none;">No</button>
                                                    <a type="button"
                                                        class="swal2-cancel btn fw-bold btn-active-light-primary"
                                                        aria-label="" style="display: inline-block;"
                                                        href="{{ route('admin.admin.index') }}">No, cancel</a>
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
                            <!--end::Modal delete-->
                        @endforeach
                    </table>
                    <!--end::Table-->
                </div>
            </div>
        </div>
    </div>
@endsection
