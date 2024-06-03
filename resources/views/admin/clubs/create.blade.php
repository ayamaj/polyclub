@extends('layouts.admin.master')

@section('title', 'create_club')

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
                <form id="kt_modal_add_user_form" class="form" action="{{ route('admin.club.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <!--begin::name-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror"
                            placeholder=" name" />
                        <br>
                        <div class="container_message">
                            @error('name')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::name-->

                    <!--begin::description-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Section</label>
                        <input type="text" name="description" id="description"
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('description') is-invalid @enderror"
                            placeholder=" section"></input>
                        <br>
                        <div class="container_message">
                            @error('description')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::description-->

                    <!--begin::Club president -->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Club President</label>
                        <input type="text" name="president" id="president"
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('president') is-invalid @enderror"
                            placeholder="precident" />
                        <br>
                        <div class="container_message">
                            @error('president')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::club president-->

                    <!--begin::Meeting date-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Meeting Date</label>
                        <input type="text" name="date" id="date"
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('date') is-invalid @enderror"
                            placeholder=" date" />
                        <br>
                        <div class="container_message">
                            @error('date')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::Meeting date-->

                    <!--begin::Image input-->
                    <div class="form-group">
                        <label for="image" class="required fw-bold fs-6 mb-2">Image</label>
                        <input type="file" style="border: none" id="image" name="image"
                            class="@error('image') is-invalid @enderror">
                        <br>
                        <div class="container_message">
                            @error('image')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    <!--end::Image input-->

                    <!--begin::Submit-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3"
                            data-kt-users-modal-action="cancel">Discard</button>
                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Submit</span>
                        </button>
                    </div>
                    <!--end::Submit-->

                </form>
            </div>
        </div>
    </div>
@endsection
