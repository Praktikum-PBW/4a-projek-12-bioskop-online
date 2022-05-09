@extends('layouts.main')

@section('content')
    {{-- Banner --}}
    <section class="banner">
        <section id="Banner" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>Cinematix is Part of Our Family</h1>
                        <p class="lead text-white" style="font-size: 18px;">
                            By using Cinematix, it can help you in the process of ordering movie tickets quickly and easily
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </section>
    {{-- Banner End --}}
    <div class="container mt-5">
        {{-- Populer Movie --}}
        <div class="popular">
            <h4 class="uppercase tracking-wider text-lg font-semibold" id="popular" style="color: #ffc300;">Popular Movies
            </h4>
            <div class="row mt-3">
                @forelse ($populers as $now)
                    <div class="col-6 col-sm-6 col-md-3 col-lg-2 mb-5 p-2 ms-0">
                        <a href="{{ route('film.show', ['movie' => $now->title]) }}">
                            <div class="card me-5" style="width: fit-content; border:0; background-color:transparent;">
                                <a href="{{ route('film.show', ['movie' => $now->title]) }}">
                                    <img src="{{ asset('/assets/img/posterfilm/' . $now->poster) }}" alt="poster"
                                        class="hover:opacity-75 transition ease-in-out duration-150" id="box-shadow"
                                        style="width: 180px">
                                </a>
                                <div class="card-body p-0">
                                    <a href="#" style="text-decoration: none"
                                        class="mt-3 hover:text-gray-300 text-white"><strong>{{ $now->title }}</strong></a>
                                    <div class="flex items-center text-white mt-1" style="font-size: 14px">
                                        <span class="ml-1"><i class="bi bi-star-fill" style="color: yellow"></i>
                                            {{ $now->rating }}</span>
                                        <span class="mx-1">|</span>
                                        <span>{{ $now->release_date }}</span>
                                        <span class="mx-1">|</span>
                                        <span class="certification">{{ $now->rating_usia }}</span>
                                    </div>
                                    <div class="text-white" style="font-size: 14px">

                                        {{ $now->genre }}

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <h3>Film Tidak Ada</h3>
                @endforelse
            </div>
        </div>
        <!-- end pouplar-movies -->
        {{-- Now Playing Movie --}}
        <div class="popular">
            <h4 class="uppercase tracking-wider text-lg font-semibold" id="nowplaying" style="color: #ffc300;">Now Playing
            </h4>
            <div class="row mt-3">
                @forelse ($nows as $now)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-5">
                        <a href="{{ route('film.show', ['movie' => $now->title]) }}">
                            <div class="card me-5" style="width: fit-content; border:0; background-color:transparent;">
                                <a href="{{ route('film.show', ['movie' => $now->title]) }}">
                                    <img src="{{ asset('/assets/img/posterfilm/' . $now->poster) }}" alt="poster"
                                        class="hover:opacity-75 transition ease-in-out duration-150" id="box-shadow"
                                        style="width: 180px">
                                </a>
                                <div class="card-body p-0">
                                    <a href="#" style="text-decoration: none"
                                        class="mt-3 hover:text-gray-300 text-white"><strong>{{ $now->title }}</strong></a>
                                    <div class="flex items-center text-white mt-1" style="font-size: 14px">
                                        <span class="ml-1"><i class="bi bi-star-fill" style="color: yellow"></i>
                                            {{ $now->rating }}</span>
                                        <span class="mx-1">|</span>
                                        <span>{{ $now->release_date }}</span>
                                        <span class="mx-1">|</span>
                                        <span class="certification">{{ $now->rating_usia }}</span>
                                    </div>
                                    <div class="text-white" style="font-size: 14px">

                                        {{ $now->genre }}

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <h3>Film Tidak Ada</h3>
                @endforelse
            </div>
        </div>
        <!-- end Now Playing movies -->
        {{-- Comingsoon Movie --}}
        <div class="popular">
            <h4 class="uppercase tracking-wider text-lg font-semibold" id="comingsoon" style="color: #ffc300;">Coming Soon
            </h4>
            <div class="row mt-3">
                @forelse ($comings as $movie)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-5">
                        <a href="{{ route('film.show', ['movie' => $movie]) }}">
                            <div class="card me-5" style="width: fit-content; border:0; background-color:transparent;">
                                <a href="{{ route('film.show', ['movie' => $movie->title]) }}">
                                    <img src="{{ asset('/assets/img/posterfilm/' . $movie->poster) }}" alt="poster"
                                        class="hover:opacity-75 transition ease-in-out duration-150" id="box-shadow"
                                        style="width: 180px">
                                </a>
                                <div class="card-body p-0">
                                    <a href="#" style="text-decoration: none"
                                        class="mt-3 hover:text-gray-300 text-white"><strong>{{ $movie->title }}</strong></a>
                                    <div class="flex items-center text-white mt-1" style="font-size: 14px">
                                        <span class="ml-1"><i class="bi bi-star-fill" style="color: yellow"></i>
                                            {{ $movie->rating }}</span>
                                        <span class="mx-1">|</span>
                                        <span>{{ $movie->release_date }}</span>
                                        <span class="mx-1">|</span>
                                        <span class="certification">{{ $movie->rating_usia }}</span>
                                    </div>
                                    <div class="text-white" style="font-size: 14px">

                                        {{ $movie->genre }}

                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <h3>Film Tidak Ada</h3>
                @endforelse
            </div>
        </div>
        <!-- end Comingsoon-movies -->
    </div>
@endsection
