@extends('layouts/app')

@section('content')
    <div class="container mt-3">
        <h1>Produkter</h1>

        <ul>
            <li>Titel: {{ $article->title }}</li>
            <li>Beskrivning: {{ $article->desc }}</li>
            <li>Pris per timme: {{ $article->price_per_hour }}</li>
            <li>Pris per dag: {{ $article->price_per_day }}</li>
            <li>Pris per vecka: {{ $article->price_per_week }}</li>
            <li>Användarnummer: {{ $article->user_id }}</li>
            <li>Plats: {{ $article->location_id }}</li>
            <li>Bild URL: {{ $article->images_url }}</li>
            <li>Skapad: {{ $article->created_at }}</li>
            <li>Senast ändrad: {{ $article->updated_at }}</li>
        </ul>

        <a href="/articles/{{ $article->id }}/edit" class="btn btn-secondary">Redigera artikel</a>

        <form method="POST" action="/articles/{{ $article->id }}">

            @csrf
            @method('DELETE')

            <input type="submit" value="Radera artikel" class="btn btn-danger">

        </form>

        <a href="/articles">&laquo; Tillbaka</a>

    </div>
@endsection