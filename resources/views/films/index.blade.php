@extends('template')

@section('content')
    <div class="card">
        <div class="card-header">
            Films
        </div>
        <div class="card-body">
            <table class="table is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>

                        <th>Année</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($films as $film)
                        <tr>
                            <td>{{ $film->id }}</td>
                            <td>{{ $film->title }}</td>

                            <td>{{ $film->year }}</td>
                            <td><a href="{{route('films.show',$film->id)}}" class="btn btn-outline-success">afficher</a></td>
                            <td><a href="" class="btn btn-outline-warning">modifier</a></td>
                            <td><a href="" class="btn btn-outline-danger">delete</a></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
