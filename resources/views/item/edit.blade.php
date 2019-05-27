@extends('layout.app')

@section('title', 'Edit item:')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    {!! Form::model($item, ['method' => 'PATCH', 'action' => ['ItemController@update', $item->id]]) !!}

    @include('item.form', ['submitButtonText' => 'Edit item'])

    {!! Form::close() !!}

@endsection