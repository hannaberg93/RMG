@extends('layouts/app')

@section('content')



<div class="container main-article-container mt-5">


    <div class="row justify-content-center">
        <div class="col-md-5 mb-4">
            <img src="{{ $article->images_url }}" class="img-fluid mx-auto d-block"  style="height:400px; width:400px;">

        </div>
    </div> <!-- END .row -->

    <div class="row justify-content-center">
        <div class="article-info col-md-7 mb-4"">


            <h2 class="mt-1 mb-2">{{ $article->title }}</h2>
            <p class="mb-0">Upplagd av {{ $article->user->name }}</p>
            <p class="mt-0">{{ \Carbon\Carbon::parse($article->created_at)->format('d F, Y H:i') }}</p>
            <hr>
            <span class="badge badge-secondary p-2"><i class="fas fa-map-marker-alt"></i> {{ $article->city }}</span>
            <span class="badge badge-secondary p-2"> {{ $article->category->name }}</span>

            <hr>
            <div class="description">
                <p class="mt-4">Beskrivning</p>
                <p>{{ $article->desc }}</p>
            </div>
            <hr>

            <div class="row prices mt-5 mb-3 text-center">

                <div class="col m-2 p-3 bg-light">
                    <i class="far fa-3x p-3 fa-clock"></i>
                    <h4>{{ number_format($article->price_per_hour ,0, ',', ' ') }}kr</h4>
                    <p>/timme</p>
                </div>

                <div class="col m-2 p-3 bg-light">
                    <i class="fas fa-3x p-3 fa-calendar-day"></i>
                    <h4>{{ number_format($article->price_per_day,0, ',', ' ') }}kr</h4>
                    <p>/dag</p>
                </div>

                <div class="col m-2 p-3 bg-light">
                    <i class="fas fa-3x p-3 fa-calendar-week"></i>
                    <h4>{{ number_format($article->price_per_week,0, ',', ' ') }}kr</h4>
                    <p>/vecka</p>
                </div>

            </div> <!--  END .row -->
        </div> <!-- END .article-info -->
    </div> <!-- END .row -->




    <hr>

    <div class="container">
    <h1 class="text-center">Skicka förfrågan</h1>
        <div class="row justify-content-center">
            <form method="POST" action="/articles/{{ $article->id }}" class="col-md-9">
                @method('PATCH')
                @csrf
                <!-- error & status meddelande -->
                @include('partials/validation_errors')
                @include('partials/status')

                <div class="row">
                    <div class="col-6 m-1">
                        <label for="name">Namn</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div> <!-- END .row -->

                <div class="row">
                    <div class="col m-1">
                        <label for="adress">Address</label>
                        <input type="text" name="adress" class="form-control">
                    </div>
                    <div class="col m-1">
                        <label for="city">Stad</label>
                        <input type="text" name="city" class="form-control" required>
                    </div>
                </div> <!-- END .row -->

                <div class="row">
                    <div class="col m-1">
                        <label for="phone">Telefon</label>
                        <input type="phone" name="phone" class="form-control" placeholder="" required>
                    </div>
                    <div class="col m-1">
                        <label for="email">E-post</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div> <!-- END .row -->

                <div class="row">
                    <div class="col">
                        <label for="date_start">Från</label>
                        <input type="date" name="date_start" class="form-control" placeholder="" required>
                    </div>
                    <div class="col">
                        <label for="date_end">Till</label>
                        <input type="date" name="date_end" class="form-control" placeholder="" required>
                    </div>
                </div> <!-- END .row -->

                <div class="form-group m-1">
                    <label for="message">Meddelande</label>
                    <textarea class="form-control" rows="3" name ="message" required></textarea>
                    <button type="submit" class="btn btn-warning mt-4">Skicka</button>
                </div>
            </form>
        </div>
    </div> <!-- END .container -->


</div>  <!-- END "main" .container -->

<form method="POST" action="/articles">

@csrf


@endsection

<style>
.description p{
    margin:0;
}
@media (max-width: 764px) {
    .article-info{
        text-align: center;
    }
 }
</style>

