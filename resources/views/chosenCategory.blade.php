@extends('layouts/app')

@section('content')


<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <h1 class="mb-4"> {{ $category->name }} </h1>
    </div> <!-- END .row -->
</div> <!-- END .container -->




<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
         @if($category->products->count())
             @foreach($category->products as  $product)
             <a href="/articles/{{ $article->id }}" style="text-decoration:none; color:black;">

                <div class="article m-3 p-3">
                    <img src="{{ $article->images_url }}"/>
                    <div class="article-short-info text-center p-2">
                        <h5 class="mb-3" style="text-transform: uppercase; font-weight: 300;">
                        {{ $article->title }}</h5>
                        <p>{{ \Carbon\Carbon::parse($article->created_at)->format('d F, Y H:i') }}</p>
                        <p><i class="fas fa-map-marker-alt p-1"></i>{{ $article->city }}</p>
                        <p style="color:green;" class="m-2">{{ number_format($article->price_per_day,0, ',', ' ') }} kr/dag</p>
                    </div> <!-- END .article-short-info -->
                </div> <!-- END .article -->

                </a>
             @endforeach
        @endif
        @foreach($articles as $article)

    </div> <!-- END .row -->
</div> <!-- END .container -->

@endsection

<style>
.article {
    min-width: 200px;
    min-height: 450px;
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
