@extends('layouts.admin.master')

@section('title', 'liste des etudiants')

@section('content')
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body" style="width: 700px; ">
                {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger" role="alert">{{ $error }}</li>
                    @endforeach
                </ul> --}}
                <form id="kt_modal_add_user_form" class="form" action="{{ route('admin.club.update') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" style="display: none;" value="{{ $club->id }}">
                    <!--begin::name-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control form-control-solid mb-3 mb-lg-0 " placeholder=" name"
                            value="{{ $club->name }}" />
                    </div>
                    <!--end::name-->

                    <!--begin::description-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">description</label>
                        <input type="text" name="description" id="description"
                            class="form-control form-control-solid mb-3 mb-lg-0 " placeholder=" description"
                            value="{{ $club->description }}" />
                    </div>
                    <!--end::description-->

                       <!--begin::club president -->
                       <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Club President</label>
                        <input type="text" name="president" id="president"
                            class="form-control form-control-solid mb-3 mb-lg-0 " placeholder="Club Precident"
                            value="{{ $club->president }}" />
                    </div>
                    <!--end::club president-->

                       <!--begin::description-->
                       <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Meeting date</label>
                        <input type="text" name="date" id="date"
                            class="form-control form-control-solid mb-3 mb-lg-0 " placeholder=" date"
                            value="{{ $club->date }}" />
                    </div>
                    <!--end::description-->

                     <!--begin::Image input-->
                     <div class="form-group">
                        <label for="image" class="required fw-bold fs-6 mb-2">Image</label>
                        <input type="file" style="border: none" id="image" name="image">
                    </div>
                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    <!--end::Image input-->


                    <!--begin::submit-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3"
                            data-kt-users-modal-action="cancel">Discard</button>
                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                    <!--end::submit-->

                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
@endsection