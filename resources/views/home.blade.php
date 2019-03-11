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

                <h4>Mina artiklar</h4>

                    <div class="container mt-2">
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
                        <div class="row">
                            <h4>Inkommande bokningsförfrågningar</h4>

                            @foreach($bookings as $booking)
                                <div class="container mt-2">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <p>Från: {{ $booking->user->name}}</p>
                                            <p>Artikel:  {{ $booking->article_id }}</p>
                                        </div>

                                        <div class="col-md-2 text-right">
                                            @if($booking->confirmed == true)
                                                <span class="badge badge-success" style="min-width:99px;">Godkänd</span>
                                            @else
                                                <span class="badge badge-secondary" style="min-width:99px;">Ej godkänd</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                        </div>
                    </div>

                    <div class="container mt-5">
                        <div class="row">
                            <h4>Utgående bokningsförfrågningar</h4>

                            @foreach($bookings as $booking)
                                <div class="container mt-2">
                                    <div class="row">
                                        <div class="col-md-9">

                                            {{ $booking->article_id }}

                                        </div>

                                        <div class="col-md-2 text-right">
                                            @if($booking->confirmed == true)
                                                <span class="badge badge-success" style="min-width:99px;">Godkänd</span>
                                            @else
                                                <span class="badge badge-secondary" style="min-width:99px;">Ej godkänd</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                        </div>
                    </div>


                <div class="card-body">
                <button type class="btn btn-secondary"><a href="/articles/create">Lägg till en artikel</a></button>
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

@endsection
