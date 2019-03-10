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
                <p>Välkommen {{ Auth::user()->name }}. Du är inloggad!<hr></p>

                <div class="container mt-3">

        <h1>Skapa en artikel</h1>

        @include('partials/validation_errors')

        <form method="POST" action="/articles">

            @csrf

            <div class="form-group">
                <label for="title">Titel *</label>
                <input type="text" class="form-control" name="title" placeholder="Titel" required value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="desc">Beskrivning *</label>
                <input type="text" class="form-control" name="desc" placeholder="Beskrivning" required value="{{ old('desc') }}">
            </div>

            <div class="form-group">
                <label for="price_per_hour">Pris per timme *</label>
                <input type="text" class="form-control" name="price_per_hour" placeholder="Pris per timme" 
                required value="{{ old('price_per_hour') }}">
            </div>

            <div class="form-group">
                <label for="price_per_day">Pris per dag *</label>
                <input type="text" class="form-control" name="price_per_day" placeholder="Pris per dag"
                required value="{{ old('price_per_day') }}">
            </div>

            <div class="form-group">
                <label for="price_per_week">Pris per vecka *</label>
                <input type="text" class="form-control" name="price_per_week" placeholder="Pris per vecka"
                required value="{{ old('price_per_week') }}">
            </div>

            <div class="form-group">
                <label for="images_url">Bild URL *</label>
                <input type="text" class="form-control" name="images_url" placeholder="Bild URL" required value="{{ old('images_url') }}">
            </div>

            <label><i>* Obligatoriska</i></label>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="submit" placeholder="Skicka!">
            <div>

        </form>

        <a href="/articles">&laquo; Tillbaka</a>

    </div>

                <p>Mina sidor</p>

                <p>Mina bokningsförfrågningar:</p>

                <button type="button" class="btn btn-success col-6" a href="/rent">Hyra ut en artikel</button>

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
@endsection
