@extends('layouts.main')


@section('title', 'Mymovies')

@section('content')

<section id="movies-card">
    <div class="container my-5">
        @forelse ($movies as $movie)
        <div class="card my-3">
            <div class="card-body">
              <h5 class="card-title">{{ $movie->title }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
              <div class="card-text">
                <p>{{ $movie->nationality }}</p>
                <address>{{ $movie->date }}</address>
                <address>{{ $movie->vote }}</address>
              </div>
            </div>
          </div>
          
        @empty
            <h2 class="text-center">Nessun libro disponibile</h2>
        @endforelse
    </div>


</section>



