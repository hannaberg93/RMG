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
            <div class="card mt-3 col-12 p-3 bg-light">

                <h1 class="inloggad text-center">Välkommen {{ Auth::user()->name }}<br></h1><!--<p> Du är inloggad!</p>--><hr>


                    <div class="container mt-2 text-dark bg-white p-4 text-center">
                        <h2 class="my-stuff-rubrik">Mina artiklar</h2>
                            @foreach($articles as $article)
                            <div class="row my-stuff d-flex justify-content-center">
                                <div class="col-md-8">
                                    <a style="color:black" href="/articles/{{$article->id}}">{{ $article->title }}</a>
                                </div>

                                <div class="col-md-2 text-center">
                                <a href="/articles/{{$article->id}}/edit"><i class="far fa-edit"></i></i></a>
                                </div>
                            </div> <!-- END.row -->
                            @endforeach
                    </div>

                    <div class="container mt-3 bg-white p-3">
                        <h2>Inkommande bokningsförfrågningar</h2><hr>
                            @foreach($bookings as $booking)
                                <div class="container mt-2 bg-white p-3">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <p>Användare: {{ $booking->user->name}}. </p>
                                            <p>Kontaktuppgifter: {{ $booking->user->phone}}, {{ $booking->user->email}}</p>
                                            <br>
                                            <p>Artikel:  {{ $booking->article->title }}</p>
                                            <p>Meddelande: {{ $booking->message}}</p>
                                            <p>Från:  {{ $booking->date_start->isoFormat('LLL') }}<br>
                                            Till: {{ $booking->date_end->isoFormat('LLL') }}</p>

                                        </div>

                                    </div>
                                </div>
                            @endforeach
                    </div>

                    <div class="container mt-3 bg-white p-3">
                      <h2>Utgående bokningsförfrågningar</h2><hr>


                             @foreach ($sentBookings as $booking)
                            @if ($booking->user_id == Auth::user()->id)
                                <div class="container bg-white p-2">
                                    <div class="row">
                                        <div class="col-md">
                                        <h5><a style="color:black" href="articles/{{$booking->article->id}}">{{ $booking->article->title }}</a></h5>

                            <ul>
                                Till: {{ $booking->article->user->name }}
                                <li>Plats: {{ $booking->article->city }}</li>
                                <li>Pris per timme: {{ $booking->article->price_per_hour }} kr /dag: {{ $booking->article->price_per_day }} kr /vecka: {{ $booking->article->price_per_week }} kr</li>
                                <li>Kategori: {{ $booking->article->category->name }}</li>

                            </ul><hr>

                                        </div>

                                    </div>
                                </div>
                                  @endif
                            @endforeach
                    </div>

                <button type class="btn btn-outline-info mt-3">
                    <a href="/articles/create">Lägg till en ny artikel</a></button>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                    @endif


                </div>



            </div>
        </div>
    </div>
</div>

@endsection

<style>

  @import url('https://fonts.googleapis.com/css?family=Roboto');

  .container{
      font-family: Roboto;
  }

h1{
    color: #17a2b8;
}

h2{
    color: #17a2b8;
    font-family: Roboto;
}

h5{
    color: gray;
}

.my-stuff-rubrik {
    color: gray;
}
li{
    color: gray;
}


   body > div.container > div > div > div > button > a {
        color: #17a2b8;
    }

p{
    font-size: 1em;
    font-family:Roboto;
    color: gray;

}




</style>
