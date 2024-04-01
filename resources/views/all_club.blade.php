
@extends('layouts.front.master')

@section('title', 'liste des etudiants')

@section('content')

    <!-- Blog Start -->
    <section id="event">
    <div class="container-fluid py-4 px-2">
        <div class="text-center mx-auto mb-4" style="max-width: 600px;">
            <h1 class="display-8 mb-0">Our Clubs</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            @foreach ($clubs as $Club)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-secondary text-center px-5">
                        <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                            style="width: 210px; height: 210px;">
                            <img src="{{ asset($Club->image) }}" alt="{{ $Club->nom }}" alt="Image"
                                class="rounded-circle img-fluid"
                                style="width: 200px; height: 200px; object-fit: cover;">
                        </div>
                        <h3 class="mb-3">{{ $Club->name }}</h3>
                        <p class="mb-0">{{ $Club->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </section>
    <!-- Blog End -->
<br><br><br>

@endsection
