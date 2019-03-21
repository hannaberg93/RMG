@extends('layouts/app')

@section('content')
    <div class="container mt-3">


        <h1 class="create-artikel text-center">Skapa en artikel</h1>

        @include('partials/validation_errors')

        <form method="POST" action="/articles">

            @csrf

            <div class="form-group">
                <label for="title">Titel *</label>
                <input type="text" class="form-control" name="title" placeholder="Titel" required value="{{ old('title') }}">
            </div>

            <label><i>Välj en kategori *</i></label><br>
            <div class="form-check form-check-inline">
                @foreach($categorys as $category)
                    <input class="form-check-input" type="radio" name="category_id" id="inlineRadio1" required value="{{ $category->id }}">
                    <label class="form-check-label" for="inlineRadio1">{{ $category->name }}</label>
                @endforeach
            </div>
            <br>

            <div class="form-group">
                <label for="desc">Beskrivning *</label>
                <input type="text" class="form-control" name="desc" placeholder="Beskrivning" required value="{{ old('desc') }}">
            </div>

            <div class="form-group">
                <label for="desc">Artikelns lokalisering *</label>
                <input type="text" class="form-control" name="city" placeholder="Plats" required value="{{ old('city') }}">
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

           <div class="obligatory"> <label><i>* Obligatoriska</i></label></div>

            <div class="form-group m-2">
                <input type="submit" class="btn btn-outline-info" name="submit" placeholder="Skicka!">
            <div>

        </form>
        <div class="go-back my-4">
        <a href="/articles">&laquo; Tillbaka</a>
        </div>



    </div>
@endsection

<style>

@import url('https://fonts.googleapis.com/css?family=Roboto');

.container{
    font-family: Roboto;
}

label {

    color: gray;
}

h1{
    color:#17a2b8;

}




.go-back a{
    color: gray;
    font-size: 1.5em;
}
    body > div > form > div > label{
        margin-left: 0px;
        margin-right:15px;
    }

    input#inlineRadio1.form-check-input {
        margin-right: 5px;
    }

}
</style>
