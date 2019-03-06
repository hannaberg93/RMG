@extends('layouts/app')

@section('content')
    <div class="container mt-3">

        <h1>Skapa en artikel</h1>

        <form method="POST" action="/articles">

            @csrf

            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Titel">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="desc" placeholder="Beskrivning">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="price_per_hour" placeholder="Pris per timme">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="price_per_day" placeholder="Pris per dag">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="price_per_week" placeholder="Pris per vecka">
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="images_url" placeholder="Bild URL">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" placeholder="Skicka!">
            <div>

        </form>

        <a href="/articles">&laquo; Tillbaka</a>

    </div>
@endsection