@extends('layouts.front.master')

@section('title', 'liste des etudiants')

@section('content')

    <!-- Blog Start -->
    <section id="event">
    <div class="container-fluid py-4 px-2">
        <div class="text-center mx-auto mb-4" style="max-width: 600px;">
            <h1 class="display-8 mb-0">Our Events</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row g-5">
            @foreach ($events as $Event)
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset($Event->image) }}" alt="{{ $Event->titre }}" style="width: 500px; height:500px;">

                    </div>
                    <div class="bg-secondary d-flex">
                        <div class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                            <span>01</span>
                            <h5 class="text-uppercase m-0">Jan</h5>
                            <span>2045</span>
                        </div>
                        <div class="d-flex flex-column justify-content-center py-3 px-4">
                            <div class="d-flex mb-2">
                                <small class="text-uppercase me-3"><i class="bi bi-person me-2"></i>{{ $Event->titre }}</small>
                                <small class="text-uppercase me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small>
                            </div>
                            <a class="h4" href="">{{ $Event->description }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>
    <!-- Blog End -->
<br><br><br>

@endsection
