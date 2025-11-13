@extends('template')
@section('content')
    <div class="card">
        <div class="card-header">
ajouter un filme
        </div>
        <div class="card-body">

           <form action="{{route('films.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="category_id" class="form-label">Catégorie</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="">Sélectionner une catégorie</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{$category->name}}
                        </option>
                    @endforeach
                     </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" value="{{old('title')}}" class="form-control" id="title" name="title" required>
                @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Année</label>
                <input type="number" min="1920" value="{{old('year')}}" class="form-control" id="year" name="year">
                    @error('year')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description">
                    {{old('description')}}
                </textarea>
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
           </form>
    </div>
@endsection
