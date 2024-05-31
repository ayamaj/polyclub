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
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div id="kt_content_container" class="container-fluid">
                <div class="card card-flush">
                    <div class="card-header mt-6">
                        <div class="card-title">

                        </div>

                    </div>
                    <div class="card-body pt-0">
                        <!--begin::Table roles-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                            <thead>
                                <!--begin::Table 1-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="min-w-125px"> Message Request resource </th>

                                    <th class="min-w-125px"></th>
                                    <th class="text-end min-w-100px">Actions</th>
                                </tr>
                                <!--end::Table 1-->
                            </thead>
                            @foreach ($resources as $Resource)
                                <tbody class="fw-bold text-600">
                                    <tr>
                                        <td>{{ $Resource->message }}</td>

                                        {{-- <td>
                                            @foreach ($Role->permissions as $permission)
                                                {{ $permission->name }}
                                                @if (!$loop->last)
                                                    <br> <!-- Ajoute un saut de ligne après chaque permission, sauf la dernière -->
                                                @endif
                                            @endforeach
                                        </td> --}}
                                        <td></td>
                                        <!--begin::action-->
                                        <td class="text-end">
                                            <!--begin::Update-->
                                            {{-- <a class="btn btn-icon btn-primary"
                                                href="{{ route('admin.resource.edit', ['id' => $Resource->id]) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z"/>
                                                  </svg>
                                                </span>
                                            </a> --}}

                                            <form
                                                action="{{ route('admin.resource.updateStatus_available', ['id' => $Resource->id]) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-icon btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28"
                                                        fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425z" />
                                                    </svg>
                                                </button>
                                            </form>


                                            <!--end::Update-->
                                            <!--begin::Delete-->
                                            <form
                                                action="{{ route('admin.resource.updateStatus_is_not_available', ['id' => $Resource->id]) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-icon btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23"
                                                        fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                                                    </svg>

                                                </button>
                                            </form>
                                            <!--end::Delete-->
                                        </td>
                                        <!--end::Action=-->
                                    </tr>
                                    <!--begin::model delete-->
                                    <div class="modal fade" id="kt_modal_delete_user-{{ $Resource->id }}" tabindex="-1"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered mw-400px">
                                            <div class="modal-content">
                                                <div class="modal-header" id="kt_modal_add_user_header-{{ $Resource->id }}">
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
                                                            {{ $Resource->name }}?</div>
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
                                                        <div class="swal2-validation-message" id="swal2-validation-message"
                                                            style="display: none;">
                                                        </div>


                                                        <div class="swal2-actions" style="display: flex;">
                                                            <div class="swal2-loader"></div>
                                                            <form
                                                                action="{{ route('admin.resource.delete', ['id' => $Resource->id]) }}"
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
                                                                href="{{ route('admin.resource.index') }}">No, cancel</a>
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
