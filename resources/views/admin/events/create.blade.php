@extends('layouts.admin.master')

@section('title', 'create_event')

@section('content')
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body" style="width: 700px; ">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                {{-- <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul> --}}
                <form id="kt_modal_add_user_form" class="form" action="{{ route('admin.event.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf

                    <!--begin::titre-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2 @error('titre') is-invalid @enderror">Titre</label>
                        <input type="text" name="titre" id="titre"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=" Titre" />
                        <br>
                        <div class="container_message">
                            @error('titre')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::titre-->
                    <!--begin::description-->
                    <div class="fv-row mb-7">
                        <label
                            class="required fw-bold fs-6 mb-2 @error('description') is-invalid @enderror">Section</label>
                        <input type="text" name="description" id="description"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=" description" />
                        <br>
                        <div class="container_message">
                            @error('description')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::description-->

                    <!--begin::date-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2 @error('date') is-invalid @enderror">Date</label>
                        <input type="date" name="date" id="date"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="date" />
                        <br>
                        <div class="container_message">
                            @error('date')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::date-->

                    <!--begin::duration-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2 @error('duration') is-invalid @enderror">Duration</label>
                        <input type="duration" name="duration" id="duration"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Duration" />
                        <br>
                        <div class="container_message">
                            @error('duration')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::duration-->
                    <!--begin::place-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2 @error('place') is-invalid @enderror">Place</label>
                        <input type="text" name="place" id="place"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Place" />
                        <br>
                        <div class="container_message">
                            @error('place')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::place-->
                    <!--begin::place-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2 ">link google Form
                        </label>
                        <input type="text" name="link" id="link"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Link" />
                        <br>

                    </div>
                    <!--end::place-->
                    <!--begin::Image input-->
                    <div class="form-group">
                        <label for="image" class="required fw-bold fs-6 mb-2">Image Event</label>
                        <input type="file" style="border: none" id="image" name="image"
                            class="@error('image') is-invalid @enderror">
                        <br>
                        <div class="container_message">
                            @error('image')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    <!--end::Image input-->
                    <!--begin::logo club input-->
                    <div class="form-group">
                        <label for="image_club" class="required fw-bold fs-6 mb-2">logo club</label>
                        <input type="file" style="border: none" id="image_club" name="image_club"
                            class="@error('image_club') is-invalid @enderror">
                        <br>
                        <div class="container_message">
                            @error('image_club')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    <!--end::logo club input-->

                    <!--begin::submit-->
                    <div class="text-center pt-15">
                        <a type="button" class="btn btn-light me-3" href="{{ route('admin.event.index') }}"
                            data-kt-users-modal-action="cancel">Discard</a>
                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                            <span class="indicator-label">Submit</span>

                        </button>
                    </div>
                    <!--end::submit-->


                </form>
            </div>
        </div>
    </div>
@endsection
