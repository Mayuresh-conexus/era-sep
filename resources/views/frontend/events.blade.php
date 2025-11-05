@extends('layouts.app')

@section('content')
    <style>
        .courses-two__img {
            width: 100%;
            height: 250px;
            /* adjust height as needed */
            overflow: hidden;
            border-radius: 10px;
            /* optional for rounded corners */
        }

        .courses-two__img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* ensures image fills and crops neatly */
            display: block;
        }
    </style>

    <section class="courses-two">
        <div class="container">
            <div class="section-title-two text-left">
                <span class="section-title-two__tagline">Our Events</span>
            </div>

            <div class="courses-two__inner">
                <ul class="courses-two__filter style1 post-filter list-unstyled clearfix">
                    <li class="active">
                        <p>All</p>
                    </li>
                    <li>
                        <p>Organised for Rosarians</p>
                    </li>
                    <li>
                        <p>Social and Local</p>
                    </li>
                    <li>
                        <p>Upcoming</p>
                    </li>
                </ul>

                <div class="row filter-layout">
                    @forelse($events as $event)
                        <div class="col-xl-4 col-lg-6 col-md-6 filter-item design" style="position: relative;">
                            <div class="courses-two__single">
                                <div class="courses-two__img-box">
                                    <div class="courses-two__img">
                                        @if (!empty($event->photos))
                                            <img src="{{ asset('storage/' . $event->photos[0]) }}"
                                                alt="{{ $event->title }}">
                                        @else
                                            <img src="https://via.placeholder.com/400x250" alt="No Image">
                                        @endif
                                    </div>
                                </div>
                                <div class="courses-two__content">
                                    <div class="courses-two__doller-and-review">
                                        <div class="courses-two__doller">
                                            {{-- If you want to use registration fee as price --}}
                                            <p>
                                                @if ($event->registration_fee)
                                                    ₹{{ number_format($event->registration_fee, 2) }}
                                                @else
                                                    Free
                                                @endif
                                            </p>
                                        </div>
                                        <div class="courses-two__review">
                                            {{-- Example: if you later add rating/reviews --}}
                                            <p><i class="icon-star"></i> 4.5 <span>(129 Reviews)</span></p>
                                        </div>
                                    </div>
                                    <h3 class="courses-two__title">
                                        <a href="{{ route('events.show', $event->id) }}">
                                            {{ $event->title }}
                                        </a>
                                    </h3>
                                    <div class="courses-two__btn-and-client-box">
                                        <div class="courses-two__btn-box">
                                            <a href="{{ route('events.show', $event->id) }}" class="thm-btn-two">
                                                <span>Book Now</span>
                                                <i class="icon-angles-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>No events found.</p>
                    @endforelse
                </div>

            </div>
        </div>
    </section>
@endsection
