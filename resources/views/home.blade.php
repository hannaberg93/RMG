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
