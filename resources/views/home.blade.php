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
            <div class="card mt-3 col-12">
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



                <p>Uthyrda artiklar:</p>

                <p>Bokningsförfrågningar:</p>

                <p>Artikler som jag hyr:</p>

                <button type="button" class="btn btn-success col-3"><a href="/articles/create">Hyra ut en artikel</a></button>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
<a  class="btn btn-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

<style>

    a{
        color: white;
    }
</style>
@endsection
