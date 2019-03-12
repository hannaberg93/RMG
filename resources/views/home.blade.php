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
                

                    <div class="container mt-2">
                        <h4>Mina artiklar</h4>
                            @foreach($articles as $article)
                            <div class="row ">
                                <div class="col-md-9">
                                    <a href="/articles/{{$article->id}}">{{ $article->title }}</a>
                                </div>

                                <div class="col-md-2 text-center">
                                <a href="/articles/{{$article->id}}/edit"><i class="far fa-edit"></i></i></a>
                                </div>
                            </div> <!-- END.row -->
                            @endforeach
                    </div>

                    <div class="container mt-5">
                        <h4>Inkommande bokningsförfrågningar</h4>
                            @foreach($bookings as $booking)
                                <div class="container mt-2">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <p>Användare: {{ $booking->user->name}}</p>
                                            <p>Artikel:  {{ $booking->article->title }}</p>
                                            <p>Från:  {{ $booking->date_start->isoFormat('LLL') }}<br>
                                            Till: {{ $booking->date_end->isoFormat('LLL') }}</p>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                    </div>

                    <div class="container mt-5">
                        <div class="row">
                            <h4>Utgående bokningsförfrågningar</h4>




                        </div>
                    </div>


                <button type class="btn btn-secondary">
                    <a href="/articles/create">Lägg till en ny artikel</a></button>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                    @endif


                </div>

                <a  class="btn btn-danger col-2" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logga ut') }}
                                                    </a>

            </div>
        </div>
    </div>
</div>

@endsection

<style>
   body > div.container > div > div > div > button > a {
        color: white;
    }

    body > div.container > div > div > div > button {
        margin-top: 10vh;
        border: 1px solid black;
    }

    body > div.container > div > div > a{
        margin-top: 20px;
        border: 1px solid black;
    }

  
</style>