@extends('layouts.app')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <h1 class="text-center mb-5 fw-bold fs-2">📸 Photo Galleries</h1>

            <div class="row g-4">
                @foreach ($galleries as $gallery)
                    @php
                        $firstPhoto = $gallery->media->firstWhere('type', 'photo');
                        $cover = null;

                        if ($firstPhoto) {
                            $paths = is_array($firstPhoto->file_path)
                                ? $firstPhoto->file_path
                                : (!empty($firstPhoto->file_path)
                                    ? json_decode($firstPhoto->file_path, true) ?? [$firstPhoto->file_path]
                                    : []);
                            $cover = count($paths) ? $paths[0] : null;
                        }
                    @endphp

                    <div class="col-12 col-lg-6">
                        <a href="{{ route('galleries.show', $gallery->id) }}" class="text-decoration-none text-dark">
                            <div
                                class="d-flex align-items-center bg-white border rounded-3 shadow-sm p-3 h-100 hover-shadow transition">

                                <!-- Square image on left -->
                                <div class="flex-shrink-0 me-3" style="width:120px; height:120px;">
                                    @if ($cover)
                                        <img src="{{ asset('storage/' . ltrim($cover, '/')) }}"
                                            class="img-fluid w-100 h-100 object-fit-cover rounded-2"
                                            alt="{{ $gallery->title }}">
                                    @else
                                        <img src="{{ asset('images/placeholder.png') }}"
                                            class="img-fluid w-100 h-100 object-fit-cover rounded-2" alt="No image">
                                    @endif
                                </div>

                                <!-- Content on right -->
                                <div class="flex-grow-1">
                                    <h5 class="fw-semibold mb-1">{{ $gallery->title }}</h5>
                                    <p class="text-muted mb-2">📅 {{ $gallery->year }}</p>
                                    <span class="badge bg-light text-dark border">View Gallery →</span>
                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
