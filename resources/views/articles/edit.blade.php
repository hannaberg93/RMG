@extends('layouts/app')

@section('content')


<div class="container mt-4">
<h1 class="text-center mb-4">Redigera artikel</h1>
    @include('partials/validation_errors')
    @include('partials/status')
        <div class="row justify-content-center">
            <form method="POST" action="/articles/{{ $article->id }}" class="col-md-9">
                @method('PUT')
                @csrf


                <div class="row">
                    <div class="col">
                        <label for="title">Titel</label>
                        <input type="text" name ="title" class="form-control" required value="{{ old('title') ? old('title') : $article->title }}">
                    </div>
                </div> <!-- END .row (titel)-->


                <div class="row mt-3">
                    <div class="col">
                        <label for="price_per_hour">Pris/timme(kr)</label>
                        <input type="text" name="price_per_hour" class="form-control" required value="{{ old('price_per_hour') ? old('price_per_hour') : $article->price_per_hour }}">
                    </div>
                    <div class="col">
                        <label for="price_per_day">Pris/dag(kr)</label>
                        <input type="text" name ="price_per_day" class="form-control" required value="{{ old('price_per_day') ? old('price_per_day') : $article->price_per_day }}">
                    </div>
                    <div class="col">
                        <label for="price_per_week">Pris/vecka(kr)</label>
                        <input type="text" name="price_per_week" class="form-control" required value="{{ old('price_per_week') ? old('price_per_week') : $article->price_per_week }}">
                    </div>
                </div> <!-- END .row (pris)-->


                <div class="form-group mt-3">
                    <label for="desc">Beskrivning</label>
                    <textarea type="text" name="desc" class="form-control" rows="4" required>{{ old('desc') ? old('desc') : $article->desc }}</textarea>
                </div>


                <button type="submit" class="btn btn-warning mt-4">Spara ändringar</button>

            </form>

            <div class="col-md-9">
                <form method="POST" action="/articles/{{ $article->id }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger mt-4">Radera</button>
                </form>
            </div>
        </div>
        <a href="/articles/{{$article->id}}" style="" class="m-3"><p>Tillbaka till artikeln</p></a>
    </div> <!-- END .container -->

@endsection
