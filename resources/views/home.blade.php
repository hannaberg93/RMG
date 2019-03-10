@extends('layouts.app')



@section('content')
{{--  <li class="nav-item dropdown">  --}}
                                {{--  <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>  --}}

<div>


    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>
                            {{--  </li>  --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-3 col-12 p-3 bg-light text-dark">

                <h4>Välkommen {{ Auth::user()->name }}<br></h4><p> Du är inloggad!</p><hr>
                <h5>Mina sidor</h5>

                {{-- <ul>
                @foreach($articles as $article)
                    <li>
                        <a href="/articles/{{ $articles->id }}">

                            {{ $articles->title }}
                        </a>
                    </li>
                @endforeach


                </ul> --}}





                <p>Bokningsförfrågningar:</p>

                <p>Artikler som jag hyr:</p><hr>


                <div class="card-body">
                <button class="btn btn-secondary col-3.5"><a href="/articles/index">Boka en artikel</a></button>
                <button type class="btn btn-secondary col-3 mt-10"><a href="/articles/create">Hyra ut en artikel</a></button>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>

                <a  class="btn btn-danger col-2" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

            </div>
        </div>
    </div>
</div>


<style>

    a{
        color: white;
    };


</style>
@endsection
