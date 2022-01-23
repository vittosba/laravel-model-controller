@extends('layouts.main')

@section('main-content')
    <div class="container">
        <h2 class="text-center">Movie Collection</h2>
        <div class="cards">
            @foreach ($movies as $movie)    
                <div class="card p-2">
                    <h3 class="text-center mb-half">{{ $movie['title'] }}</h3>
                    <h5 class="text-center mb-2">{{ $movie['original_title'] }}</h5>
                    <div class="mb-50">Nationality: <span>{{ $movie['nationality'] }}</span></div>
                    <div class="mb-50">Date: <span>{{ $movie['date'] }}</span></div>
                    <div class="mb-50">Vote: <span>{{ $movie['vote'] }}</span></div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection