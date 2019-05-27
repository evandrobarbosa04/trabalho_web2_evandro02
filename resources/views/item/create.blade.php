@extends('layout.app')

@section('title', 'Inserir Novo Item:')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::open(['url' => 'item']) !!}

    @include('item.form', ['submitButtonText' => 'Cadastrar Solicitação'])

    {!! Form::close() !!}

@endsection