@extends('layouts.app')

@section('content')
    @session('deleted')
        <div class="alert alert-danger">
            {{ session('deleted') }}
        </div>
    @endsession

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession
    @session('updated')
        <div class="alert alert-warning">
            {{ session('updated') }}
        </div>
    @endsession
    @auth
         <a class="btn btn-primary" href="{{ route('films.create') }}">Ajouter un film</a>  
    @endauth
 
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
                            <td><a href="{{ route('films.show', $film->id) }}" class="btn btn-outline-success">afficher</a>
                            </td>
                            <td><a href="{{ route('films.edit', $film->id) }}" class="btn btn-outline-warning">modifier</a>
                            </td>
                            <td>
                                <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
