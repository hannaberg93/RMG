@extends('layouts/app')

@section('content')
    <div class="container mt-3">
        <h1>Artiklar</h1>

        <ul>
        @foreach($articles as $article)
            <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li>
        @endforeach
        </ul>
        
        <a href="/articles/create">Skapa en ny artikel</a>

    </div>
@endsection