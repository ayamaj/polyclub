@extends('layouts.front.master')

@section('title', $club->name)

@section('content')
{{-- section all eclub --}}
    <section id="one_club">
        <div class="container-fluid bg-secondary my-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img class="img-fluid w-100" src="{{ asset($club->image) }}" alt="{{ $club->nom }}"
                            style=" border: 2px solid rgb(177, 168, 168)">
                        <div class="bg-primary text-dark text-center p-4">
                            <h3 class="m-0">{{ $club->name }}</h3>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h5 class="text-primary text-uppercase font-weight-bold">About Us</h5>
                        <h3 class= "mb-4"> club president : {{ $club->president }}</h3>
                        <p class="mb-4">section : {{ $club->description }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        @livewire('comment-section', ['club_id' => $club->id])
    </section>
{{--  end section all club --}}
@endsection
