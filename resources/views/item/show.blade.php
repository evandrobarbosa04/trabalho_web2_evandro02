@extends('layout.app')

@section('title', 'Item:')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-sm-8" style="transform: translateY(50%);">
                    <h3 class="panel-title">{{ $item->id }} - {{ $item->title }}</h3>
                </div>
                <div class="col-sm-4 text-right">
                    <a href="{{ url('item/'.$item->id.'/edit') }}" class="btn btn-default"><i
                                class="fa fa-pencil"></i></a>

                    <form style="display: inline-block" action="{{ url('item/' . $item->id) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" id="delete-item-{{ $item->id }}" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <p class="small" style="margin-top: 5px">{{ $item->subtitle }}</p>

            <p class="small">Created at: {{ $item->created_at }}, Updated at: {{ $item->updated_at  }}</p>
            <hr>
            <p>{{ $item->description }}</p>
        </div>
    </div>
@endsection