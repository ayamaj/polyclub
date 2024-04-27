<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::search-->
    {{-- <div class="aside-toolbar py-5" id="kt_aside_toolbar">
        <!--begin::search select-->
        <div class="d-flex align-items-center flex-stack">
            <!--begin::Select-->
            <select class="form-select form-select-custom border-0 fw-bolder" data-control="select2"
                data-placeholder="Select Project" data-hide-search="true">
              <option value="1" selected="selected">Select Project</option>
                <option value="2">Good CRM App</option>
                <option value="3">Oppo Booking Site</option>
                <option value="4">FinOptima SaaS</option>
                <option value="5">Degree Mobile App</option>
            </select>
            <!--end::Select-->
            <!--begin::Button-->
            <a href="#" class="btn btn-icon btn-custom border-0 fw-bolder flex-shrink-0 ms-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                <span class="svg-icon svg-icon-2qx">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="black" />
                        <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </a>
            <!--end::Button-->
        </div>
        <!--end::search select-->
 </div> --}}
    <!--end::search-->
    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y px-8 my-5 my-lg-9" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}"
            data-kt-scroll-offset="0">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold"
                id="#kt_aside_menu" data-kt-menu="true">
                      {{-- Dashboard --}}
                      <div class="menu-item">
                        <a class="menu-link " href="{{ route('admin.dashboard') }}">
                            <span class="menu-icon">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                <span class="svg-icon svg-icon-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                            fill="black" />
                                        <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                        </a>
                    </div>
                    {{-- end dashboard --}}
                {{-- User --}}
                <div class="menu-item">
                    <a class="menu-link " href="{{ route('admin.user.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                        fill="black" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Users</span>
                    </a>
                    </a>
                </div>
                {{-- end User --}}
                {{-- Role --}}
                <div class="menu-item">
                    <a class="menu-link " href="{{ route('admin.role.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                        fill="black" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Roles</span>
                    </a>
                    </a>
                </div>
                {{-- end Role --}}
                {{-- permission --}}
                <div class="menu-item">
                    <a class="menu-link " href="{{ route('admin.permission.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                        fill="black" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Permissions</span>
                    </a>
                    </a>
                </div>
                {{-- end permission --}}
                {{-- Club --}}
                <div class="menu-item">
                    <a class="menu-link " href="{{ route('admin.club.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                        fill="black" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Clubs</span>
                    </a>
                    </a>
                </div>
                {{-- end Club --}}
                {{-- Event --}}
                <div class="menu-item">
                    <a class="menu-link " href="{{ route('admin.event.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                        fill="black" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Events</span>
                    </a>
                    </a>
                </div>
                {{-- end Event  --}}

                 {{-- demande --}}
                 <div class="menu-item">
                    <a class="menu-link " href="{{ route('admin.form.index') }}">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                            <span class="svg-icon svg-icon-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                        fill="black" />
                                    <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Request</span>
                    </a>
                    </a>
                </div>
                {{-- end demande --}}
            </div>
        </div>
    </div>
    <div class="aside-footer flex-column-auto pb-5" id="kt_aside_footer">
        <div class="aside-user">
            <div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
                <!--begin::User image-->
                <div class="me-5">
                    {{-- <div class="symbol symbol-40px cursor-pointer"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
                        data-kt-menu-overflow="true">
                        <img src="{{ asset('design/assets/media/avatars/300-1.jpg') }}" alt="" />
                    </div> --}}
                </div>
                <!--end::User image-->
                <div class="flex-row-fluid flex-wrap">
                    <div class="d-flex align-items-center flex-stack">
                        <div class="me-2">
                            {{-- <a href="#"
                                class="text-gray-800 text-hover-primary fs-6 fw-bold lh-0">{{ auth()->user()->name }}</a>
                            <span class="text-gray-400 fw-bold d-block fs-8">{{ auth()->user()->email }}</span> --}}
                        </div>
                        <form action="{{ route('logout') }}" method="POST"
                            class="btn btn-icon btn-active-color-primary me-n4" data-bs-toggle="tooltip"
                            title="End session and singout">
                            @csrf
                            <button style="border: none" class="svg-icon svg-icon-2 svg-icon-gray-400"
                                type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" width="12" height="2" rx="1"
                                        transform="matrix(-1 0 0 1 15.5 11)" fill="black" />
                                    <path
                                        d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z"
                                        fill="black" />
                                    <path
                                        d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
                                        fill="#C4C4C4" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
