@extends('layouts/app')

@section('content')
    <div class="container mt-3">

        <h1>Redigera {{ $article->title }}</h1>

        <form method="POST" action="/articles/{{ $article->id }}">

            @csrf
            @method('PUT')

            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Titel" value="{{ $article->title }}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="desc" placeholder="Beskrivning" value="{{ $article->desc }}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="price_per_hour" placeholder="Pris per timme" value="{{ $article->price_per_hour }}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="price_per_day" placeholder="Pris per dag" value="{{ $article->price_per_day }}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="price_per_week" placeholder="Pris per vecka" value="{{ $article->price_per_week }}">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="images_url" placeholder="Bild URL" value="{{ $article->images_url }}">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" placeholder="Spara!">
            <div>

        </form>

        <a href="/articles">&laquo; Tillbaka</a>

    </div>
@endsection