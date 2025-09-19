@extends('layouts.app')

@section('content')
    <section class="page-header text-center py-5 bg-light">
        <div class="container">
            <h1 class="display-5 fw-bold">{{ $event->title }}</h1>
            <p class="text-muted mb-1">
                <i class="fa fa-calendar"></i>
                {{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}
            </p>
            <p class="text-muted">
                <i class="fa fa-map-marker-alt"></i>
                {{ $event->location }}
            </p>
        </div>
    </section>

    <section class="event-details py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Event Images -->
                @if ($event->photos && count($event->photos) > 0)
                    <div class="col-lg-6">
                        <div id="eventGallery" class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($event->photos as $photo)
                                    <div class="swiper-slide">
                                        <img src="{{ asset('storage/' . $photo) }}" class="img-fluid rounded shadow"
                                            alt="{{ $event->title }}">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Swiper Pagination Only -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                @endif

                <!-- Event Content -->
                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <h3 class="fw-semibold mb-3">About this Event</h3>
                    <p class="mb-4">{!! nl2br(e($event->description)) !!}</p>

                    <ul class="list-unstyled mb-4">
                        <li class="mb-2">
                            <i class="fa fa-calendar text-primary"></i>
                            <strong>Date:</strong> {{ \Carbon\Carbon::parse($event->date)->format('F j, Y') }}
                        </li>
                        <li class="mb-2">
                            <i class="fa fa-map-marker-alt text-danger"></i>
                            <strong>Location:</strong> {{ $event->location }}
                        </li>
                    </ul>

                    <a href="{{ route('events.index') }}" class="btn btn-outline-primary rounded-pill px-4">
                        <i class="fa fa-arrow-left"></i> Back to Events
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            new Swiper("#eventGallery", {
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true
                }
            });
        });
    </script>
@endpush
