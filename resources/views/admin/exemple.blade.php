@extends('layouts.admin.master')

@section('title', 'liste des etudiants')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="container1">
            <div class="card1">
                <div class="modal-content">
                    <div class="modal-header" id="kt_modal_add_user_header">
                        <!--begin::Modal title-->
                        <h2 class="fw-bolder">Add User</h2>
                        <!--end::Modal title-->

                    </div>
                    <!--end::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                        <!--begin::Form-->

                        <form id="kt_modal_add_user_form" class="form" action="{{ route('admin.user.store') }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <!--begin::Scroll-->
                            <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll"
                                data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">

                                    {{-- <div class="image-input image-input-outline" data-kt-image-input="true"
                                        style="background-image: url('../../../assets/media/svg/avatars/blank.svg')">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px"
                                            style="background-image: url(../../../assets/media/avatars/300-6.jpg);"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                            title="Change avatar"  >
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs -->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg"
                                                id="image" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                            title="Cancel avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                            title="Remove avatar">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div> --}}
                                    <!--end::Image input-->
                                    <!--begin::Hint-->

                                    <!--end::Hint-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="input-group mb-3">
                                    <div class="fv-row mb-7 ">
                                        <label class="required fw-bold fs-6 mb-2">Name</label>
                                        <input type="text" name="name" id="name"
                                            class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror"
                                            placeholder="Full name" />
                                        <br>
                                        <div class="container_message">
                                            @error('name')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>


                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="required fw-bold fs-6 mb-2">Email</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="email" name="email" id="email"
                                            class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror"
                                            placeholder="example@domain.com" />
                                        <br>
                                        <div class="container_message">
                                            @error('name')
                                                <span style="color: red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">number</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="number" id="number"
                                        class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror" />
                                    <br>
                                    <div class="container_message">
                                        @error('name')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">cin</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="number" name="cin" id="cin"
                                        class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror" />
                                    <br>
                                    <div class="container_message">
                                        @error('name')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                </div>

                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">class</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="class" id="class"
                                        class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror" />
                                    <br>
                                    <div class="container_message">
                                        @error('name')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-2">password</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="password" name="password" id="password"
                                        class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror" />
                                    <br>
                                    <div class="container_message">
                                        @error('name')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--begin::Image input-->
                                <div class="form-group">
                                    <label for="image" class="required fw-bold fs-6 mb-2">Image</label>
                                    <input type="file" style="border: none" class="btn1" id="image" name="image">

                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                <style>
                                    input::file-selector-button {
                                        background-image: linear-gradient(to right,
                                                #2e1698,
                                                #8695f7,
                                                #c8592d 100%,
                                                #d36224 200%);
                                        background-position-x: 0%;
                                        background-size: 200%;
                                        border: 0;
                                        border-radius: 8px;
                                        color: #fff;
                                        padding: 1rem 1.25rem;
                                        text-shadow: 0 1px 1px #333;
                                        transition: all 0.25s;
                                    }

                                    input::file-selector-button:hover {
                                        background-position-x: 100%;
                                        transform: scale(1.1);
                                    }

                                    .btn1 {
                                        color: rgb(13, 5, 87);
                                        text-transform: uppercase;
                                        text-decoration: none;
                                        border: 2px solid rgb(4, 23, 87);
                                        padding: 10px 20px;
                                        font-size: 10px;
                                        font-weight: bold;
                                        background: transparent;
                                        position: relative;
                                        transition: all 1s;
                                        overflow: hidden;
                                    }

                                    .btn1:hover {
                                        color: white;
                                    }

                                    .btn1::before {
                                        content: '';
                                        position: absolute;
                                        height: 100%;
                                        width: 0%;
                                        top: 0;
                                        left: -40px;
                                        transform: skewX(45deg);
                                        background-color: rgb(6, 3, 54);
                                        z-index: -1;
                                        transition: all 1s;
                                    }

                                    .btn1:hover::before {
                                        width: 160%;
                                    }
                                </style>

                                <!--end::Input group-->
                                <!--begin::Input group-->
                                {{-- *****role ***** --}}
                                <br>
                                <div class="mb-7">
                                    <!--begin::Label-->
                                    <label class="required fw-bold fs-6 mb-5">Role</label>
                                    <!--end::Label-->
                                    <!--begin::Roles-->
                                    @foreach ($roles as $role)
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3 @error('name') is-invalid @enderror"
                                                    name="role_id" type="radio" value="{{ $role->id }}"
                                                    id="kt_modal_update_role_option_0" checked='checked' />
                                                <br>
                                                <div class="container_message">
                                                    @error('role_id')
                                                        <span style="color: red">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                    <div class="fw-bolder text-gray-800">{{ $role->name }}</div>
                                                    <div class="text-gray-600">Best for business owners and company
                                                        administrators
                                                    </div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                    @endforeach


                                </div>
                                {{-- *****end role ***** --}}
                                <!--end::Input group-->
                            </div>
                            <!--end::Scroll-->
                            <!--begin::Actions-->
                            <div class="text-center pt-15">
                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                    Submit
                                </button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
        </div>
    </div>
    <!--end::Content-->
@endsection


  {{-- <!--begin::Update-->
                                        <a class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" href="{{ route('role.edit',['id' =>$Role->id]) }}">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                  </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--end::Update--> --}}

                                         {{-- <!--begin::Delete-->
                                        <button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row"   data-bs-toggle="modal" data-bs-target="#kt_modal_delete_user-{{ $Role->id }}">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                            <span class="svg-icon svg-icon-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                  </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Delete--> --}}
