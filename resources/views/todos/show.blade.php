@extends('layouts.app')

@section('content')
<h1>Todos Details</h1>
<div class="row">
    <div class="card col-md-9 m-2">
        <div class="card-body">
            <h5 class="card-title">{{ $todo->name}}</h5>
            <p class="card-text">{{ $todo->description}}</p>
        </div>
    </div>
</div>
@endsection
