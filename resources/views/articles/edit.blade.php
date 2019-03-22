@extends('layouts/app')

@section('content')


<div class="container mt-4">
<h1 class="text-center mb-4" style="color:#17a2b8">Redigera artikel</h1>
        <div class="row justify-content-center">
            <form method="POST" action="/articles/{{ $article->id }}" class="col-md-9">
                @method('PATCH')
                @csrf
                <!-- error & status meddelande -->
                @include('partials/validation_errors')
                @include('partials/status')

                <div class="row">
                    <div class="col">
                        <label for="title">Titel</label>
                        <input type="text" name ="title" class="form-control" required value="{{ old('title') ? old('title') : $article->title }}">
                    </div>
                </div> <!-- END .row (titel)-->

                <label> Välj kategori</label>
                <select class="selectpicker form-control" data-live-search="true" name="category_id">
                    @foreach($categorys as $category)
                        <option data-subtext="{{ $category->name }}" required value="{{ old('category_id') ? old('category_id') : $category->id }}"">{{ $category->name }}</option>
                    @endforeach 
                </select>

                <div class="row mt-3">
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

                <div class="form-group mt-3">
                    <label for="city">City</label>
                    <textarea type="text" name="city" class="form-control" rows="1" required>{{ old('city') ? old('city') : $article->city }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="images_url">Bild URL</label>
                        <input type="text" name ="images_url" class="form-control" required value="{{ old('images_url') ? old('images_url') : $article->images_url }}">
                    </div>
                </div> 


                <button type="submit" class="btn btn-outline-info mt-4">Spara ändringar</button>

            </form>

            <div class="col-md-9">
                <form method="POST" action="/articles/{{ $article->id }}">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger mt-2">Radera</button>
                </form>
            </div>
        </div>
        <hr>
        <a href="/articles/{{$article->id}}" style="color:#17a2b8;" class="m-3"><p>Tillbaka till artikeln</p></a>
    </div> <!-- END .container -->

@endsection

<style>

@import url('https://fonts.googleapis.com/css?family=Roboto');

.container{
 font-family: Roboto;
}

h1 {
    color: gray;
}

</style>
