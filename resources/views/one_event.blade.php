@extends('layouts.front.master')

@section('title', $event->titre)

@section('content')

    {{-- section all event --}}
    <section id="one_event">
        <div class="container-fluid bg-secondary my-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img class="img-fluid w-90" src="{{ asset($event->image) }}" alt="{{ $event->title }}" style=" border: 2px solid rgb(177, 168, 168)" >
                        <div class="bg-primary text-dark text-center p-4">
                            <h3 class="m-0">{{ $event->titre }}</h3>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6>
                        <h1 class= "mb-4">{{ $event->date }}</h1>
                        <p class="mb-4">{{ $event->description }}</p>
                        <a href="{{ $event->link }}" class="btn btn-primary mt-2 py-2 px-5">rejoin the event </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   {{-- end section all event --}}
<br><br><br>

@endsection
