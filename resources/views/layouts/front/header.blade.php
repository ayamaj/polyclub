 <!-- Topbar Start -->
    {{-- <div class="container-fluid bg-secondary ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <a class="text-body py-2 pe-3 border-end" href=""><small>FAQs</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Support</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Privacy</small></a>
                    <a class="text-body py-2 px-3 border-end" href=""><small>Policy</small></a>
                    <a class="text-body py-2 ps-3" href=""><small>Career</small></a>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@example.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
            <img src="{{ asset('dashboard/img/logoo.svg') }}"  style='width:150px'></img>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 me-n3">

               <a href="{{ route('home') }}"class="nav-item nav-link">Home</a>
                {{-- <a href="{{ route('login') }}" class="nav-item nav-link">Sign-In<a> --}}
                <a href="{{ route('inscription') }}" class="nav-item nav-link">Register</a>
                <a href="{{ route('clubs') }}" class="nav-item nav-link">Clubs</a>
                <a href="{{ route('events') }}" class="nav-item nav-link">Events</a>
                @auth
                <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
            @endauth


            </div>
        </div>
    </nav>

