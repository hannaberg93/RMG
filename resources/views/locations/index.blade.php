@extends('layouts/app')

@section('content')
    <ul>
        @foreach($categories as $category)
            <a href="/"><li>{{ $category->name }}</li></a>
		 @endforeach
@endsection

<style>

body > ul > a:nth-child(1) > li {
    font-weight:bold;
    text-decoration: underline;
}

body > ul > a:nth-child(5) > li {
    font-weight: bold;
    text-decoration: underline;
}

body > ul > a {
    color: black;
}

body > ul > a:hover {
    color: grey;
}

</style>