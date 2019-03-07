@extends('layouts/app')

@section('content')


<div class="container mt-4">
    <h1 class="text-center mb-4">Redigera artikel</h1>

        <div class="row justify-content-center">
            <form method="POST" action="/articles/{{ $article->id }}" class="col-md-9">
                @include('partials/validation_errors')
                @method('PATCH')
                @csrf

                <div class="row">
                    <div class="col">
                        <label for="">Titel</label>
                        <input type="text" class="form-control" required value="{{ old('title') ? old('title') : $article->title }}">
                    </div>
                </div> <!-- END .row (titel)-->


                <div class="row mt-3">
                    <div class="col">
                        <label for="price_per_hour">Pris/timme</label>
                        <input type="text" class="form-control" required value="{{ old('price_per_hour') ? old('price_per_hour') : $article->price_per_hour }} kr">
                    </div>
                    <div class="col">
                        <label for="price_per_day">Pris/dag</label>
                        <input type="text" class="form-control" required value="{{ old('price_per_day') ? old('price_per_day') : $article->price_per_day }} kr">
                    </div>
                    <div class="col">
                        <label for="price_per_week">Pris/vecka</label>
                        <input type="text" class="form-control" required value="{{ old('price_per_week') ? old('price_per_week') : $article->price_per_week }} kr">
                    </div>
                </div> <!-- END .row (pris)-->


                <div class="form-group mt-3">
                    <label for="exampleFormControlTextarea1">Beskrivning</label>
                    <textarea name="desc" class="form-control" required rows="4">{{ old('desc') ? old('desc') : $article->desc }}</textarea>
                </div>


                <button type="submit" class="btn btn-warning mt-4">Spara ändringar</button>

            </form>

            <div class="col-md-9">
                <form method="POST" action="/articles/{{ $article->id }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-warning mt-4">Radera</button>
                </form>
            </div>
        </div>
        <a href="/articles/{{$article->id}}"><p>Tillbaka till artikeln</p></a>

    </div> <!-- END .container -->


@endsection
