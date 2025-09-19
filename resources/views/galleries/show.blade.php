@extends('layouts.app')

@section('content')
    <section class="py-5 bg-white">
        <div class="container">
            <a href="{{ route('galleries.index') }}"
                class="d-inline-flex align-items-center text-decoration-none text-primary mb-4">
                ← Back to Galleries
            </a>

            <h1 class="fw-bold fs-2 text-dark mb-2">{{ $gallery->title }}</h1>
            <p class="text-muted mb-5">📅 {{ $gallery->year }}</p>

            <div class="row g-4">
                @foreach ($gallery->media as $media)
                    @if ($media->type === 'photo')
                        @php
                            $paths = is_array($media->file_path)
                                ? $media->file_path
                                : (!empty($media->file_path)
                                    ? json_decode($media->file_path, true) ?? [$media->file_path]
                                    : []);
                        @endphp

                        @foreach ($paths as $path)
                            <div class="col-6 col-md-4 col-lg-3">
                                <div class="ratio ratio-1x1 overflow-hidden rounded-3 shadow-sm position-relative">
                                    <img src="{{ asset('storage/' . ltrim($path, '/')) }}" alt="{{ $gallery->title }}"
                                        class="w-100 h-100 object-fit-cover transition transform-hover">
                                </div>
                            </div>
                        @endforeach
                    @elseif ($media->type === 'video')
                        <div class="col-12">
                            <div class="ratio ratio-16x9 rounded-3 shadow-sm overflow-hidden">
                                <iframe src="{{ $media->video_url }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>

    {{-- Optional custom CSS for hover zoom --}}
    <style>
        .transform-hover {
            transition: transform 0.4s ease;
        }

        .transform-hover:hover {
            transform: scale(1.05);
        }
    </style>
@endsection
