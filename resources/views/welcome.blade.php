@extends('layouts.front.master')

@section('title', 'liste des etudiants')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8 d-flex justify-content-center">
            <div>
                @if (session('status'))
                    <div class="alert alert-success" id="flash-message">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
        {{-- <section >
            <div class="container-fluid p-0">
                <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($events_carousel as $Event)
                            <div class="carousel-item ">
                                <img class="w-100" src="{{ asset($Event->image) }}" alt="{{ $Event->titre }}">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 900px;">
                                        <h5 class="text-white text-uppercase">{{ $Event->titre }}</h5>
                                        <h1 class="display-1 text-white mb-md-4">{{ $Event->description }}</h1>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section> --}}
        <section id="home">
            <div class="container-fluid p-0">
                <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($events_carousel as $key => $event)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                <img class="w-100" src="{{ asset($event->image) }}" alt="{{ $event->titre }}">
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 900px;">
                                        <h5 class="text-white text-uppercase">{{ $event->titre }}</h5>
                                        <h1 class="display-1 text-white mb-md-4">{{ $event->description }}</h1>
                                        <!-- Add buttons or links here if needed -->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>



        <section id="club">
            <div class="container-fluid pt-6 px-5">
                <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                    <h1 class="display-5 mb-0">Our Clubs</h1>
                    <hr class="w-25 mx-auto bg-primary">
                </div>

                <div class="row g-5">
                    @foreach ($clubs as $club )
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item bg-secondary text-center px-5">
                            <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4"
                                style="width: 210px; height: 210px;">
                                <img src="{{ asset($club->image) }}" alt="{{ $club->nom }}" alt="Image"
                                    class="rounded-circle img-fluid"
                                    style="width: 200px; height: 200px; object-fit: cover;">
                            </div>
                            <h3 class="mb-3">{{ $club->name }}</h3>
                            <p class="mb-0">{{ $club->description }}</p>

                        </div>
                        <div class="text-end">
                            <a  href="{{ route('one_club',['club' => $club->id ]) }}" style="font-size: 16px;color: rgb(62, 62, 128);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                                </svg>
                            </a>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="event">
            <div class="container-fluid py-6 px-5">
                <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                    <h1 class="display-5 mb-0">Our Events</h1>
                    <hr class="w-25 mx-auto bg-primary">
                </div>
                <div class="row g-5">
                    @foreach ($events as $event)

                    <div class="col-lg-6">
                        <div class="blog-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="{{ asset($event->image) }}"
                                    alt="{{ $event->titre }}" alt=""
                                    class="rounded-circle img-fluid"
                                    style="width: 600px; height:200px; object-fit: cover;">
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
                                        <small class="text-uppercase me-3"><i class="bi bi-shop"
                                                style="margin-right: 7px;"></i>{{ $event->titre }}</small>
                                        <small class="text-uppercase me-3"><i class="bi bi-calendar2-check"
                                                style="margin-right: 5px;"></i>
                                            {{ $event->duration }}</small>



                                    </div>
                                    <a class="h4" href="">{{ $event->description }}</a>

                                </div>
                                <div
                                class="flex-shrink-0 d-flex flex-column justify-content-center text-center  px-4 text-end">
                                <img src="{{ asset($event->image_club) }}" alt="HTML5 Icon" style="width:60px;height:60px;border-radius: 50%;overflow: hidden; ">

                            </div>

                            <a   href="{{ route('one_event',['event' => $event->id ]) }}" style="font-size: 16px;color: rgb(62, 62, 128);">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                              </svg>
                            </a>

                            </div>

                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>

@endsection
<script>
        document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                flashMessage.style.transition = 'opacity 0.3s ease-out';
                flashMessage.style.opacity = '0';
                setTimeout(function() {
                    flashMessage.remove();
                }, 300); // Temps pour finir la transition
            }
        }, 3000); // 5 secondes
    });
</script>
