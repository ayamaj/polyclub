@extends('layouts.admin.master')

@section('title', 'liste des etudiants')

@section('content')
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body" style="width: 700px; ">
                <form class="row g-0" action="{{ route('admin.user.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" style="display: none;" value="{{ $user->id }}">
                    <!--begin::name-->
                    <div class="fv-row mb-7 ">
                        <label class="required fw-bold fs-6 mb-2">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control form-control-solid mb-3 mb-lg-0 " placeholder="Full name"
                            value="{{ $user->name }}" />
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
                    <!--begin::number-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">number</label>
                        <input type="number" name="number" id="number"
                            class="form-control form-control-solid mb-3 mb-lg-0 " value="{{ $user->number }}" />
                    </div>
                    <!--end::number-->

                    <!--end::class-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">class</label>
                        <input type="text" name="class" id="class"
                            class="form-control form-control-solid mb-3 mb-lg-0 " value="{{ $user->class }}" />
                    </div>
                    <!--end::class-->
                    <!--begin::password-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">password</label>
                        <input type="password" name="password" id="password"
                            class="form-control form-control-solid mb-3 mb-lg-0 " value="{{ $user->password }}" />
                    </div>
                    <!--end::password-->
                    <!--begin::role-->
                    <br>
                    <br>
                    {{-- <div class="mb-7">
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
                    </div> --}}
                    <div class="mb-7">
                        <label class="required fw-bold fs-6 mb-5">Role</label>
                        @foreach ($roles as $role)
                            <div class="d-flex fv-row">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3 @error('name') is-invalid @enderror" name="role_id"
                                        type="radio" value="{{ $role->id }}"  id="kt_modal_update_role_option_0"  @if ($role->id == $user->role_id) checked  @endif />
                                    <br>
                                    <div class="container_message">
                                        @error('role_id')
                                            <span style="color: red">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <label class="form-check-label" for="kt_modal_update_role_option_0">
                                        <div class="fw-bolder text-gray-800" >{{ $role->name }}</div>
                                        <div class="text-gray-600">Best for business owners and company
                                            administrators
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                        @endforeach
                    </div>
                    <div class="mb-7">
                        <!--begin::permission-->
                        <label class="required fw-bold fs-6 mb-5">Club</label>
                        {{-- @foreach ($clubs as $club)
                            <div class="d-flex fv-row">
                                <div class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input me-3" type="checkbox" value="{{ $club->id }}"
                                        id="permission_{{ $club->id }}" name="permissions[]" />
                                    <label class="form-check-label" for="permission_{{ $club->id }}">
                                        <div class="fw-bolder text-gray-800">{{ $club->name }}</div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                        @endforeach --}}
                        @foreach ($clubs as $club)
                        <div class="d-flex fv-row">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input me-3" type="checkbox"
                                       value="{{ $club->id }}" id="permission_{{ $club->id }}"
                                       name="clubs[]" {{ $user->clubs->contains($club->id) ? 'checked' : '' }} />
                                <label class="form-check-label" for="club_{{ $club->id }}">
                                    <div class="fw-bolder text-gray-800">{{ $club->name }}</div>
                                </label>
                            </div>
                        </div>
                        <div class='separator separator-dashed my-5'></div>
                        @endforeach
                        <!--end::permission-->
                    </div>


                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            Submit
                        </button>
                    </div>
                    <!--end::Actions-->
                    <!--end::role-->
                </form>


            </div>
        </div>
    </div>
@endsection
