@extends('layouts.front.master')

@section('title', $club->name)

@section('content')
    <!-- Blog Start -->
    <section id="one_club">
        <!-- About Start -->
        <div class="container-fluid bg-secondary my-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img class="img-fluid w-100" src="{{ asset($club->image) }}" alt="{{ $club->nom }}" style=" border: 2px solid rgb(177, 168, 168)" >
                        <div class="bg-primary text-dark text-center p-4">
                            <h3 class="m-0">{{ $club->name }}</h3>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6>
                        <h1 class= "mb-4">{{ $club->description }}</h1>
                        <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum.Sadip sea amet diam dolore sed et. Sit
                            rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat
                            duo eos et erat sed diam duo</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-secondary p-5">
            <h2 class="mb-4">Leave a message here</h2>
            <form>
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                    </div>

                    <div class="col-12">
                        <textarea class="form-control bg-white border-0" rows="5" placeholder="message"></textarea>
                    </div>
                </div>
                <br>
                <div class="col-6 mx-auto">
                    <button class="btn btn-primary w-100 h-100" type="submit">send the message</button>
                </div>
            </form>
        </div>

        <div class="bg-secondary p-5">
            <h2 class="mb-4">messages </h2>
            <div class="d-flex mb-4">

                <div class="ps-3">
                    <h5><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h5>
                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>

                </div>
            </div>
            <div class="d-flex mb-4">

                <div class="ps-3">
                    <h5><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h5>
                    <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>

                </div>
            </div>

        </div>

     



    </section>
    <br><br><br>


@endsection



