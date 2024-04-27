@extends('layouts.front.master')

@section('title', 'liste des etudiants')

@section('content')

    <!-- Blog Start -->
    <section id="one_event">
        @foreach ($events as $Event)
        @if ($Event->id == 1)
        <div class="container-fluid bg-secondary my-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img class="img-fluid w-90" src="{{ asset($Event->image) }}" alt="{{ $Event->title }}" style=" border: 2px solid rgb(177, 168, 168)" >
                        <div class="bg-primary text-dark text-center p-4">
                            <h3 class="m-0">{{ $Event->titre }}</h3>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6>
                        <h1 class= "mb-4">{{ $Event->date }}</h1>
                        <p class="mb-4">{{ $Event->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </section>
    <!-- Blog End -->
<br><br><br>

@endsection
