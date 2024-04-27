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
                            value="{{ $form->name ?: old('name') }}" />
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
                    <div class="mb-10 fv-row" data-kt-password-meter="true">
                        <!--begin::Wrapper-->
                        <div class="mb-1">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2"
                                for="password">{{ __('Password') }}</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative mb-3">
                                <input
                                    class="form-control form-control-solid mb-3 mb-lg-0  @error('password') is-invalid @enderror"
                                    id="password" type="password" name="password"  value="{{ $form->password }}" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span
                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                    data-kt-password-meter-control="visibility">
                                    <i class="bi bi-eye-slash fs-2"></i>
                                    <i class="bi bi-eye fs-2 d-none"></i>
                                </span>
                            </div>
                            <!--end::Input wrapper-->
                            <!--begin::Meter-->
                            <div class="d-flex align-items-center mb-3"
                                data-kt-password-meter-control="highlight">
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                </div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                </div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                </div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div>
                            <!--end::Meter-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Hint-->
                        <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp;
                            symbols.</div>
                        <!--end::Hint-->
                    </div>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                   @enderror

                   <div class="mb-7">
                    <label class="required fw-bold fs-6 mb-5">Role</label>
                    @foreach ($roles as $role)
                        <div class="d-flex fv-row">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input me-3 @error('name') is-invalid @enderror" name="role_id"
                                    type="radio" value="{{ $role->id }}" id="kt_modal_update_role_option_0" />
                                <br>

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
                    <div class="container_message">
                        @error('role_id')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                   </div>
                <div class="mb-7">
                    <!--begin::permission-->
                    <label class="required fw-bold fs-6 mb-5">Club</label>
                    @foreach ($clubs as $club)
                        <div class="d-flex fv-row">
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input me-3" type="checkbox" value="{{ $club->id }}"
                                    id="clubs_{{ $club->id }}" name="clubs[]"   @error('club_id') is-invalid @enderror/>
                                <label class="form-check-label" for="club_{{ $club->id }}">
                                    <div class="fw-bolder text-gray-800">{{ $club->name }}</div>
                                </label>
                            </div>
                        </div>
                        <div class='separator separator-dashed my-5'></div>
                    @endforeach
                    <div class="container_message">
                        @error('club_id')
                            <span style="color: red">{{ $message }}</span>
                        @enderror
                    </div>
                    <!--end::permission-->
                </div>


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
