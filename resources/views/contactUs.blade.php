@extends('layouts/app')

@section('content')
    <div class="container">
        <h1>Kontakta oss</h1>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
            {!! Form::open(['route'=>'contactus.store']) !!}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    {!! Form::label('Namn:') !!}
                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    {!! Form::label('Email:') !!}
                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                    {!! Form::label('Meddelande:') !!}
                    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                </div>
            <div class="form-group">
        <button class="btn btn-success">Skicka!</button>
    </div>
{!! Form::close() !!}
@endsection

