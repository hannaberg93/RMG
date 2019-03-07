@extends('layouts/app')

@section('content')
    <div class="container mt-3">

        <h1>Skapa en artikel</h1>

        @include('partials/status')

        <form method="POST" action="/articles">

            @csrf

            <div class="form-group">
                <label for="title">Titel *</label>
                <input type="text" class="form-control" name="title" placeholder="Titel" required value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="desc">Beskrivning *</label>
                <input type="text" class="form-control" name="desc" placeholder="Beskrivning" required value="{{ old('desc') }}">
            </div>

            <div class="form-group">
                <label for="price_per_hour">Pris per timme *</label>
                <input type="text" class="form-control" name="price_per_hour" placeholder="Pris per timme" 
                required value="{{ old('price_per_hour') }}">
            </div>

            <div class="form-group">
                <label for="price_per_day">Pris per dag *</label>
                <input type="text" class="form-control" name="price_per_day" placeholder="Pris per dag"
                required value="{{ old('price_per_day') }}">
            </div>

            <div class="form-group">
                <label for="price_per_week">Pris per vecka *</label>
                <input type="text" class="form-control" name="price_per_week" placeholder="Pris per vecka"
                required value="{{ old('price_per_week') }}">
            </div>

            <div class="form-group">
                <label for="images_url">Bild URL</label>
                <input type="text" class="form-control" name="images_url" placeholder="Bild URL" required value="{{ old('images_url') }}">
            </div>

            <label><i>* Obligatoriska</i></label>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" placeholder="Skicka!">
            <div>

        </form>

        <a href="/articles">&laquo; Tillbaka</a>

    </div>
@endsection