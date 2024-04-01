@extends('layouts.admin.master')

@section('title', 'liste des etudiants')

@section('content')
    <div class="container mt-5 mb-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body" style="width: 700px; ">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger">{{ $error }}</li>
                    @endforeach
                </ul>
                <form id="kt_modal_add_user_form" class="form" action="{{ route('admin.event.update') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="id" style="display: none;" value="{{ $event->id }}">
                    <!--begin::titre-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Titre</label>
                        <input type="text" name="titre" id="titre"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Titre" value="{{ $event->titre }}"  />
                    </div>
                    <!--end::titre-->

                    <!--begin::description-->
                    <div class="fv-row mb-7">
                        <label
                            class="required fw-bold fs-6 mb-2">Description</label>
                        <input type="text" name="description" id="description"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=" description"  value="{{ $event->description }}"  />
                    </div>
                    <!--end::description-->

                    <!--begin::date-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Date</label>
                        <input type="date" name="date" id="date"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Date" value="{{ $event->date }}"  />
                    </div>
                     <!--end::date-->

                    <!--begin::duration-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2 ">Duration</label>
                        <input type="text" name="duration" id="duration"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Duration" value="{{ $event->duration }}" />
                    </div>
                    <!--end::duration-->

                    <!--begin::place-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2 ">Place</label>
                        <input type="text" name="place" id="place"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Place"  value="{{ $event->place }}" />
                    </div>
                     <!--end::place-->
                       <!--begin::Image input-->
                    <div class="form-group">
                        <label for="image" class="required fw-bold fs-6 mb-2">Image</label>
                        <input type="file" style="border: none" id="image" name="image">
                    </div>
                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                    <!--end::Image input-->

             <!--begin::submit-->
             <div class="text-center pt-15">
             
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
