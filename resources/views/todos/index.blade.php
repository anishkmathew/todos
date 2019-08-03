@extends('layouts.app')

@section('content')
<h1>Todos</h1>
<div class="row">
    @foreach ($todos as $todo)
    <div class="card col-md-9 m-2">
        <div class="card-body">
            <h5 class="card-title">{{ $todo->name}}</h5>
            <p class="card-text">{{ $todo->description}}</p>
            <a href="/todos/{{$todo->id}}"><button class="btn btn-primary">View</button></a>
        </div>
    </div>

    @endforeach
</div>
@endsection
