@extends('layouts.admin.master')

@section('title', 'liste des etudiants')

@section('content')
    @if (session('status'))
        <div class="d-flex justify-content-center">
            <div class="alert alert-primary">
                {{ session('status') }}
            </div>
        </div>
    @endif
    <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">
                {{ $error }}
            </li>
        @endforeach
    </ul>
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div id="kt_content_container" class="container-fluid">
                <div class="card card-flush">
                    <div class="card-header mt-6">
                        <div class="card-title">

                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button add -->
                            <a type="button" class="btn btn-light-primary" href="{{ route('admin.role.create') }}">
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
                                </span> Add Role</a>
                            <!--end::Button add -->
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <!--begin::Table roles-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                            <thead>
                                <!--begin::Table 1-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px">Name</th>
                                    <th class="min-w-250px">Description</th>
                                    <th class="min-w-125px"></th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                                <!--end::Table 1-->
                            </thead>
                            @foreach ($roles as $Role)
                                <tbody class="fw-bold text-600">
                                    <tr>
                                        <td>{{ $Role->name }}</td>
                                        <td>{{ $Role->description }}</td>
                                        <td>
                                            @foreach ($Role->permissions as $permission)
                                                {{ $permission->name }}
                                                @if (!$loop->last)
                                                    <br> <!-- Ajoute un saut de ligne après chaque permission, sauf la dernière -->
                                                @endif
                                            @endforeach
                                        </td>
                                        <td></td>
                                        <!--begin::action-->
                                        <td class="text-end">
                                            <!--begin::Update-->
                                            <a class="btn btn-icon btn-primary"
                                                href="{{ route('admin.role.edit', ['id' => $Role->id]) }}">
                                                <i class="fas fa-solid fa-pen fs-4 ml-1"></i>
                                                </span>
                                            </a>
                                            <!--end::Update-->
                                            <!--begin::Delete-->
                                            <a type="button" class="btn btn-icon btn-danger" class="btn btn-primary"
                                                data-kt-permissions-table-filter="delete_row" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_delete_user-{{ $Role->id }}">
                                                <i class="fas fa-solid fa-trash fs-4 ml-1"></i>
                                                </span>
                                            </a>
                                            <!--end::Delete-->
                                        </td>
                                        <!--end::Action=-->
                                    </tr>
                                    <!--begin::model delete-->
                                    <div class="modal fade" id="kt_modal_delete_user-{{ $Role->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered mw-400px">
                                            <div class="modal-content">
                                                <div class="modal-header" id="kt_modal_add_user_header-{{ $Role->id }}">
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
                                                            {{ $Role->name }}?</div>
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
                                                                action="{{ route('admin.role.delete', ['id' => $Role->id]) }}"
                                                                method="post">
                                                                @csrf

                                                                <button type="submit"
                                                                    class="swal2-confirm btn fw-bold btn-danger"
                                                                    aria-label="" style="display: inline-block;"
                                                                    href="">Yes, delete!</button>
                                                            </form>
                                                            <button type="button" class="swal2-deny" aria-label=""
                                                                style="display: none;">No</button>
                                                            <a type="button"
                                                                class="swal2-cancel btn fw-bold btn-active-light-primary"
                                                                aria-label="" style="display: inline-block;"
                                                                href="{{ route('admin.role.index') }}">No, cancel</a>
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
                                    <!--end::model delete-->
                                </tbody>
                            @endforeach
                        </table>
                        <!--end::Table roles-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Content-->
@endsection
