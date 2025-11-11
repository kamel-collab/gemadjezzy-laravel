@extends('template')
@section('content')
    <div class="card">
        <div class="card-header">
{{$film->title}}
        </div>
        <div class="card-body">
           
            <p>Année :{{$film->year}}  </p>
            <p>description :{{$film->description}}</p>
    </div>
@endsection