@extends('layouts.admin.master')

@section('title', 'liste des etudiants')

@section('content')
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body" style="width: 700px; ">
                <form class="row g-0" action="{{ route('admin.admin.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::name-->
                    <div class="fv-row mb-7 ">
                        <label class="required fw-bold fs-6 mb-2">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control form-control-solid mb-3 mb-lg-0 " placeholder="Full name"
                            value="{{ $user->name }} " />
                    </div>
                    <!--end::name-->
                    <!--end::email-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com"
                            value="{{ $user->email }}" />
                        <!--end::email-->
                    </div>
                    <!--begin::password-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">password</label>
                        <input type="password" name="password" id="password"
                            class="form-control form-control-solid mb-3 mb-lg-0 " value="{{ $user->password }}" />
                    </div>
                    <!--end::password-->
                    <!--begin::Image input-->
                    <div class="form-group">
                        <label for="image" class="required fw-bold fs-6 mb-2">Image</label>
                        <input type="file" style="border: none" id="image" name="image">
                    </div>
                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    <!--end::Image input-->
                    <!--begin::role-->
                    <br>
                    <br>
                    <div class="mb-7">
                        <label class="required fw-bold fs-6 mb-5">Role</label>
                        @foreach ($roles as $role)
                            <div class="d-flex fv-row">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3 " name="role_id" type="radio"
                                        value="{{ $role->id }}" id="kt_modal_update_role_option_0" checked='checked' />
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
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                Submit
                            </button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::role-->
                </form>


            </div>
        </div>
    </div>
@endsection
