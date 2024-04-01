
@extends('layouts.admin.master')

@section('title', 'liste des clubs')

@section('content')
    @if (session('status'))
        <div id="alertContainer" class="d-flex justify-content-center">
            <div class="alert alert-primary" role="alert">
                {{ session('status') }}
            </div>
        </div>
    @endif
    <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger" role="alert">
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
                                    class="form-control form-control-solid w-250px ps-15"
                                    placeholder="Search Clubs" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <div class="card-toolbar">
                     
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">Name</th>
                                    <th class="min-w-250px">Email</th>
                                    <th class="min-w-125px">Number</th>
                                    <th class="min-w-125px">Class</th>
                                    <th class="min-w-125px">Password</th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                            </thead>
                            @foreach ($forms as $Form)
                                <tbody class="fw-bold text-gray-600">
                                    <tr>
                                        <td>{{ $Form->name }}</td>
                                        <td>{{ $Form->email }}</td>
                                        <td>{{ $Form->number }}</td>
                                        <td>{{ $Form->class }}</td>
                                        <td>{{ $Form->password }}</td>

                                        <td class="text-end">

                                            <!--begin::Update-->
                                            <a class="btn btn-icon btn-secondary"
                                                href="{{ route('admin.form.edit', ['id' => $Form->id]) }}">
                                                <i class="fas fa-solid fa-pen fs-4 ml-1"></i>
                                                </span>
                                            </a>
                                            <!--end::Update-->
                                            <!--begin::Delete-->
                                            <a type="button" class="btn btn-icon btn-danger" class="btn btn-primary"
                                                data-kt-permissions-table-filter="delete_row" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_delete_user-{{ $Form->id }}">
                                                <i class="fas fa-solid fa-trash fs-4 ml-1"></i>
                                                </span>
                                            </a>
                                            <!--end::Delete-->
                                        </td>
                                    </tr>
                                    <!--begin::modele delete-->
                                    <div class="modal fade" id="kt_modal_delete_user-{{ $Form->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered mw-400px">
                                            <div class="modal-content">
                                                <div class="modal-header" id="kt_modal_add_user_header-{{ $Form->id }}">
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
                                                            {{ $Form->name }}?</div>
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
                                                                action="{{ route('admin.form.delete', ['id' => $Form->id]) }}"
                                                                method="post">
                                                                @csrf

                                                                <button type="submit"
                                                                    class="swal2-confirm btn fw-bold btn-danger"
                                                                    aria-label="" style="display: inline-block;">Yes,
                                                                    delete!</button>
                                                            </form>
                                                            <button type="button" class="swal2-deny" aria-label=""
                                                                style="display: none;">No</button>
                                                            <a type="button"
                                                                class="swal2-cancel btn fw-bold btn-active-light-primary"
                                                                aria-label="" style="display: inline-block;"
                                                                href="{{ route('admin.form.index') }}">No,
                                                                cancel </a>
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
                                    <!--end::modele delete-->
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
