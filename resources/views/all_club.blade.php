@extends('layouts.front.master')

@section('title', 'liste des etudiants')

@section('content')
    {{-- section all clubs --}}
    <section id="event">
        <div class="container-fluid py-4 px-2">
            <div class="text-center mx-auto mb-4" style="max-width: 600px;">
                <h1 class="display-8 mb-0">Our Clubs</h1>
                <hr class="w-25 mx-auto bg-primary">
            </div>
            <div class="row g-5">
                @foreach ($clubs as $club)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-secondary text-center px-5">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                                style="width: 210px; height: 210px;">
                                <a href="{{ route('one_club', ['club' => $club->id]) }}">
                                    <img src="{{ asset($club->image) }}" alt="{{ $club->nom }}" alt="Image"
                                        class="rounded-circle img-fluid"
                                        style="width: 200px; height: 200px; object-fit: cover;"></a>
                            </div>
                            <a href="{{ route('one_club', ['club' => $club->id]) }}">
                                <h3 class="mb-3">{{ $club->name }}</h3>
                            </a>
                            <p class="mb-0">{{ $club->description }}</p>
                        </div>
                        <div class="text-end">
                            <a href="{{ route('one_club', ['club' => $club->id]) }}"
                                style="font-size: 16px;color: rgb(62, 62, 128);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                    class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- end section all clubs --}}
@endsection
