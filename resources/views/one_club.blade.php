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


        {{-- <livewire:comment-section/>  --}}
        @livewire('comment-section', ['club_id' => $club->id])







    </section>
    <br><br><br>


@endsection



