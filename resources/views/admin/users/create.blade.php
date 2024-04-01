@extends('layouts.admin.master')

@section('title', 'liste des etudiants')

@section('content')
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body" style="width: 700px; ">
                <form class="row g-0" action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--begin::name-->
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
                    <!--end::name-->
                    <!--end::email-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror"
                            placeholder="example@domain.com" />
                        <br>
                        <div class="container_message">
                            @error('name')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <!--end::email-->
                    </div>
                    <!--begin::number-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">number</label>
                        <input type="tel" name="number" id="number"
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror" />
                        <br>
                        <div class="container_message">
                            @error('name')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::number-->
                    <!--begin::cin-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">cin</label>
                        <input type="number" name="cin" id="cin"
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror" />
                        <br>
                        <div class="container_message">
                            @error('name')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::cin-->
                    <!--end::class-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">class</label>
                        <input type="text" name="class" id="class"
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror" />
                        <br>
                        <div class="container_message">
                            @error('name')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::class-->
                    <!--begin::password-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">password</label>
                        <input type="password" name="password" id="password"
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror" />
                        <br>
                        <div class="container_message">
                            @error('name')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::password-->
                    <!--begin::Image input-->
                    <div class="form-group">
                        <label for="image" class="required fw-bold fs-6 mb-2 @error('name') is-invalid @enderror">Image</label>
                        <input type="file" style="border: none" id="image" name="image" >
                        <br>
                        <div class="container_message">
                            @error('name')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
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
                                    <input class="form-check-input me-3 @error('name') is-invalid @enderror" name="role_id"
                                        type="radio" value="{{ $role->id }}" id="kt_modal_update_role_option_0"
                                        checked='checked' />
                                    <br>
                                    <div class="container_message">
                                        @error('role_id')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
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

