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
        {{-- <div class="row g-5">
            @foreach ($events as $Event)
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="{{ asset($Event->image) }}" alt="{{ $Event->titre }}" style="width: 500px; height:200px;">

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
        </div> --}}
        <div class="row g-5">
            @for ($i = 0; $i < 3; $i++)
                @if (isset($events[$i]))
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset($events[$i]->image) }}"
                                    alt="{{ $events[$i]->titre }}" alt=""
                                    class="rounded-circle img-fluid"
                                    style="width: 500px; height:200px; object-fit: cover;">
                            </div>
                            <div class="bg-secondary d-flex">
                                <div
                                    class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                                    <span>{{ date('d', strtotime($events[$i]->date)) }}</span>
                                    <h5 class="text-uppercase m-0">{{ date('M', strtotime($events[$i]->date)) }}
                                    </h5>
                                    <span>{{ date('Y', strtotime($events[$i]->date)) }}</span>
                                </div>
                                <div class="d-flex flex-column justify-content-center py-3 px-4">
                                    <div class="d-flex mb-2">
                                        <small class="text-uppercase me-3"><i class="bi bi-shop" style="margin-right: 7px;"></i>{{ $events[$i]->place }}</small>
                                        <small class="text-uppercase me-3"><i class="bi bi-calendar2-check" style="margin-right: 5px;"></i> {{ $events[$i]->duration }}</small>
                                    </div>
                                    <a class="h4" href="">{{ $events[$i]->titre }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endfor
        </div>
    </div>
    </section>
    <!-- Blog End -->
<br><br><br>

@endsection
