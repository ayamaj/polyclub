@extends('layouts.front.master')

@section('title', 'liste des etudiants')

@section('content')

    {{-- section all event --}}
    <section id="event">
        <div class="container-fluid py-4 px-2">
            <div class="text-center mx-auto mb-4" style="max-width: 600px;">
                <h1 class="display-8 mb-0">Our Events</h1>
                <hr class="w-25 mx-auto bg-primary">
            </div>
            <div class="row g-5">
                @foreach ($events as $event)
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset($event->image) }}" alt="{{ $event->titre }}"
                                    alt="" class="rounded-circle img-fluid"
                                    style="width: 500px; height:200px; object-fit: cover;">
                            </div>
                            <div class="bg-secondary d-flex">
                                <div
                                    class="flex-shrink-0 d-flex flex-column justify-content-center text-center bg-primary text-white px-4">
                                    <span>{{ date('d', strtotime($event->date)) }}</span>
                                    <h5 class="text-uppercase m-0">{{ date('M', strtotime($event->date)) }}
                                    </h5>
                                    <span>{{ date('Y', strtotime($event->date)) }}</span>
                                </div>
                                <div class="d-flex flex-column justify-content-center py-3 px-4">
                                    <div class="d-flex mb-2">
                                        <small class="text-uppercase me-1"><i class="bi bi-shop"
                                                style="margin-right: 7px;"></i>{{ $event->place }}</small>
                                        <small class="text-uppercase me-2"><i class="bi bi-calendar2-check"
                                                style="margin-right: 5px;"></i> {{ $event->duration }}</small>
                                        <img src="{{ asset($event->image_club) }}" alt="HTML5 Icon"
                                            style="width:50px;height:50px;border-radius: 50%;">
                                    </div>
                                    <a class="h4" href="{{ route('one_event', ['event' => $event->id]) }}">{{ $event->titre }}</a>
                                </div>
                                <a
                                    href="{{ route('one_event', ['event' => $event->id]) }}"style="font-size: 16px;color: rgb(62, 62, 128);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- section all  event --}}


@endsection
