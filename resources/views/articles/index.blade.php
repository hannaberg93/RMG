@extends('layouts/app')

@section('content')


<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        @foreach($articles as $article)
            <a href="/articles/{{ $article->id }}" style="text-decoration:none; color:black;">

                <div class="article m-3 p-3">
                    <img src="https://slag1gymauktioner.se/wp-content/uploads/2018/10/placeholder.png"/>
                    <div class="article-short-info text-center p-2">
                        <h4 class="mb-3" style="text-transform: uppercase; font-weight: 300;">
                           {{ $article->title }}</h4>
                        <p>{{ $article->created_at }}</p>
                        <p><i class="fas fa-map-marker-alt p-1"></i>{{ $article->location_id }}</p>
                        <p style="color:green;" class="m-2">{{ $article->price_per_day }} kr/dag</p>
                    </div> <!-- END .article-short-info -->
                </div> <!-- END .article -->

            </a>
        @endforeach
    </div> <!-- END .row -->
</div> <!-- END .container -->

@endsection

<style>
.article {
    min-width: 200px;
    max-width: 280px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    font-size: 16px;
    -webkit-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
}

.article img {
    max-width: 100%;
    vertical-align: top;
    position: relative;
}

.article h3, .article p {
    margin: 1px;
}

.article:hover{
    -webkit-transform: translateY(-5px);
    transform: translateY(-5px);
}
</style>
