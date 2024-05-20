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
                        <label class="required fw-bold fs-6 mb-2">Full Name</label>
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
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('email') is-invalid @enderror"
                            placeholder="example@domain.com" />
                        <br>
                        <div class="container_message">
                            @error('email')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <!--end::email-->
                    </div>
                    <!--begin::number-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">number</label>
                        <input type="text" name="number" id="number"
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('number') is-invalid @enderror"
                            placeholder="25822699" />
                        <br>
                        <div class="container_message">
                            @error('number')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::number-->

                    <!--end::class-->
                    <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">class</label>
                        <input type="text" name="class" id="class"
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('class') is-invalid @enderror"placeholder="3LGL" />
                        <br>
                        <div class="container_message">
                            @error('class')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!--end::class-->

                    <!--begin::password-->
                    {{-- <div class="fv-row mb-7">
                        <label class="required fw-bold fs-6 mb-2">password</label>
                        <input type="password" name="password" id="password"
                            class="form-control form-control-solid mb-3 mb-lg-0 @error('password') is-invalid @enderror"
                            placeholder="$Password1" />
                        <br>
                        <div class="container_message">
                            @error('password')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div> --}}
                    <div class="mb-10 fv-row" data-kt-password-meter="true">
                        <!--begin::Wrapper-->
                        <div class="mb-1">
                            <!--begin::Label-->
                            <label class="required fw-bold fs-6 mb-2" for="password">{{ __('Password') }}</label>
                            <!--end::Label-->
                            <!--begin::Input wrapper-->
                            <div class="position-relative mb-3">
                                <input
                                    class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                                    id="password" type="password" name="password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <span
                                class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2 toggle-password"
                                style="cursor: pointer;" data-kt-password-meter-control="visibility">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                
                                    fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                            </span>

                            </div>
                            <!--end::Input wrapper-->
                            <!--begin::Meter-->
                            {{-- <div class="d-flex align-items-center mb-3"
                                data-kt-password-meter-control="highlight">
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                </div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                </div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                </div>
                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                            </div> --}}
                            <!--end::Meter-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Hint-->
                        <div class="text-muted">Use 8 or more characters .</div>
                        <!--end::Hint-->
                    </div>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror


                    {{-- <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div> --}}




                    <!--begin::Image input-->
                    {{-- <div class="form-group">
                        <label for="image" class="required fw-bold fs-6 mb-2 @error('name') is-invalid @enderror">Image</label>
                        <input type="file" style="border: none" id="image" name="image" >
                        <br>
                        <div class="container_message">
                            @error('name')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div> --}}
                    <!--end::Image input-->

                    <!--begin::role-->

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
                                        <div class="text-gray-600">{{ $role->description }}
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
                                        id="club_{{ $club->id }}" name="clubs[]"
                                        @error('clubs') is-invalid @enderror />
                                    <label class="form-check-label" for="club_{{ $club->id }}">
                                        <div class="fw-bolder text-gray-800">{{ $club->name }}</div>
                                    </label>
                                </div>
                            </div>
                            <div class='separator separator-dashed my-5'></div>
                        @endforeach
                        <div class="container_message">
                            @error('clubs')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
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
{{-- eyes --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const togglePassword = document.querySelector('.toggle-password');
        const passwordInput = document.getElementById('password');
        const showPasswordIcon = togglePassword.querySelector('.bi-eye');
        const hidePasswordIcon = togglePassword.querySelector('.bi-eye-slash');

        togglePassword.addEventListener('click', function() {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                showPasswordIcon.classList.add('d-none');
                hidePasswordIcon.classList.remove('d-none');
            } else {
                passwordInput.type = 'password';
                showPasswordIcon.classList.remove('d-none');
                hidePasswordIcon.classList.add('d-none');
            }
        });
    });
</script>
{{--  end eyes --}}
