@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h2>Movie Collection</h2>
        <div class="cards">
            @foreach ($movies as $movie)    
                <div class="card">
                    <h3>{{ $movie['title'] }}</h3>
                    <h5>{{ $movie['original_title'] }}</h5>
                    <div>Nationality: <span>{{ $movie['nationality'] }}</span></div>
                    <div>Date: <span>{{ $movie['date'] }}</span></div>
                    <div>Vote: <span>{{ $movie['vote'] }}</span></div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection