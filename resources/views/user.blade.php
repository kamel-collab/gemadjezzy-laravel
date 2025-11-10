@extends('template')
@section('content')
    <form action="{{url('users')}}" method="POST">
        @csrf
        <label for="user">Entrez votre nom</label>
        <input type="text" name="nom">
        <input type="submit" value="Envoyer">
    </form>
@endsection 