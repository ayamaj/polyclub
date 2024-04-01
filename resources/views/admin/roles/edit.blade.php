@extends('layouts.admin.master')

@section('title', 'liste des etudiants')

@section('content')
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body" style="width: 700px; ">
                {{-- @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif --}}
                <form class="row g-0" class="form" action="{{ route('admin.role.update') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" style="display: none;" value="{{ $role->id }}">
                    <!--begin::name-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control form-control-solid mb-3 mb-lg-0 "
                            placeholder=" name" value="{{ $role->name }}" />
                    </div>
                    <!--end::name-->
                    <!--begin::description-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Description</label>
                        <input type="text" name="description" id="description"
                            class="form-control form-control-solid mb-3 mb-lg-0 "
                            placeholder=" description" value="{{ $role->description }}" />
                    </div>
                    <!--end::description-->
                    <!--begin::permission-->
                    <label class="required fw-bold fs-6 mb-5">Permission</label>
                    @foreach ($permissions as $permission)
                    <div class="d-flex fv-row">
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input me-3" type="checkbox"
                                   value="{{ $permission->id }}" id="permission_{{ $permission->id }}"
                                   name="permissions[]" {{ $role->permissions->contains($permission->id) ? 'checked' : '' }} />
                            <label class="form-check-label" for="permission_{{ $permission->id }}">
                                <div class="fw-bolder text-gray-800">{{ $permission->name }}</div>
                            </label>
                        </div>
                    </div>
                    <div class='separator separator-dashed my-5'></div>
                    @endforeach

                        <!--end::permission-->
            </div>




            <!--begin::Actions-->
            <div class="text-center pt-15">
                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                    Submit
                </button>
            </div>
            <!--end::Actions-->
            </form>
        </div>
    </div>
@endsection
