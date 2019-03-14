@extends('layouts/app')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <h1 class="mb-4">Kategorier</h1>
        <div class="container text-center">
            @foreach($categorys as $category)
                <span class="badge badge-info p-2 m-1">
                    <a href="/articles/category/{{ $category->id }}">
                        {{ $category->name }}
                    </a>
                </span>
            @endforeach
        </div>
    </div> <!-- END .row -->
</div> <!-- END .container -->




<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        @foreach($articles as $article)
            <a href="/articles/{{ $article->id }}" style="text-decoration:none; color:black;">

                <div class="article m-3 p-3">
                    <img src="{{ $article->images_url }}"/>
                    <div class="article-short-info text-center p-2">
                        <h5 class="mb-3" style="text-transform: uppercase; font-weight: 300;">{{ $article->title }}</h5>
                        <p>{{ \Carbon\Carbon::parse($article->created_at)->locale('sv')->isoFormat('LLL') }}</p>
                        <p><i class="fas fa-map-marker-alt p-1"></i>{{ $article->city }}</p>
                        <p style="color:green;" class="m-2">{{ number_format($article->price_per_day,0, ',', ' ') }} kr/dag</p>
                    </div> <!-- END .article-short-info -->
                </div> <!-- END .article -->

            </a>
        @endforeach
    </div> <!-- END .row -->
</div> <!-- END .container -->

@endsection

<style>

  @import url('https://fonts.googleapis.com/css?family=Roboto');

  .container{
      font-family: Roboto;
  }
.article {
    min-width: 200px;
    min-height: 480px;
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

h1 {
    color: gray;
}

.article:hover{
    -webkit-transform: translateY(-5px);
    transform: translateY(-5px);
}

body > div > div > div > span > a{
    color:white;
}

body > div > div > div > span > a:hover{
    color:white;
}




</style>
