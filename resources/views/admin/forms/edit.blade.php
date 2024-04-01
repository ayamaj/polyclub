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
                <form id="kt_modal_add_user_form" class="form" action="{{ route('admin.form.update') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id"  value="{{ $form->id }}">
                    <!--begin::name-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Name</label>
                        <input type="text" name="name" id="name"
                            class="form-control form-control-solid mb-3 mb-lg-0 " placeholder=" name"
                            value="{{ $form->name }}" />
                    </div>
                    <!--end::name-->
                    <!--begin::name-->
                      <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">class</label>
                        <input type="text" name="class" id="class"
                            class="form-control form-control-solid mb-3 mb-lg-0 " placeholder="class"
                            value="{{ $form->class }}" />
                    </div>
                    <!--end::name-->
                      <!--begin::number-->
                      <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Number</label>
                        <input type="text" name="number" id="number"
                            class="form-control form-control-solid mb-3 mb-lg-0 " placeholder=" number"
                            value="{{ $form->number }}" />
                    </div>
                    <!--end::name-->
                      <!--begin::email-->
                      <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control form-control-solid mb-3 mb-lg-0 " placeholder=" email"
                            value="{{ $form->email }}" />
                    </div>
                    <!--end::email-->


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
