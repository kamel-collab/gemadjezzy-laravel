@extends('template')
@section('content')
    <form action="{{url('users')}}" method="POST">
        @csrf
        <label for="user">Entrez votre nom</label>
        <input type="text" name="nom">
        @error('nom')
            <p>{{$message}}</p>
        @enderror
        <input type="text" name="email">
             @error('email')
            <p>{{$message}}</p>
        @enderror
        <input type="submit" value="Envoyer">
    </form>
@endsection 