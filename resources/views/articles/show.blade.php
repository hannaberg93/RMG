@extends('layouts/app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-5 mb-4">
            <img src="https://slag1gymauktioner.se/wp-content/uploads/2018/10/placeholder.png" class="img-fluid mx-auto d-block"  style="height:400px; width:400px;">
        </div>

        <div class="article-info col-md-5 mb-4">
            <button class="btn btn-warning float-right"><a href="/articles/{{$article->id}}/edit">Redigera/Ta Bort Artikel</a></button>

            <p class="mb-0">Upplagd av Username</p>
            <p class="mt-0">{{ $article->created_at }}</p>
            <h2>{{ $article->title }}</h2>
            <hr>
            <span class="badge badge-secondary p-2"><i class="fas fa-map-marker-alt"></i>{{ $article->city }}</span>
            <span clqass="badge badge-secondary p-2">{{ $article->category->name }}</span>

            <hr>

            <div class="row prices text-center justify-content-center m-2">
                <div class="col p-3 m-1 bg-light">

                </div>
            </div> <!--  END .row -->
        </div> <!-- END .article-info -->
    </div> <!-- END .row -->


    <div class="row justify-content-center">
        <div class="description col-10">
            <p class="mt-4">Beskrivning</p>
            <p>{{ $article->desc }}</p>
        </div>
    </div> <!-- END .row -->

    <hr>

    <div class="container">
    <h1 class="text-center">Skicka förfrågan</h1>
        <div class="row justify-content-center">
            <form class="col-md-9">

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlInput1">Förnamn</label>
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1">Efternamn</label>
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div> <!-- END .row -->

                <div class="row">
                    <div class="col">
                        <label for="exampleFormControlInput1">E-post</label>
                        <input type="email" class="form-control" placeholder="example@google.se">
                    </div>
                    <div class="col">
                        <label for="exampleFormControlInput1">Address</label>
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div> <!-- END .row -->

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Meddelande</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <button type="submit" class="btn btn-warning mt-4">Skicka</button>
                </div>
            </form>
        </div>
    </div> <!-- END .container -->


</div>  <!-- END "main" .container -->




@endsection

<style>


@media (max-width: 764px) {
    .article-info{
        text-align: center;
    }
 }
</style>

