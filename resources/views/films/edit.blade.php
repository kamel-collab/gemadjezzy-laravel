@extends('template')
@section('content')
    <div class="card">
        <div class="card-header">
            modifier un filme
        </div>
        <div class="card-body">

            <form action="{{ route('films.update', $film->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="category_id" class="form-label">Catégorie</label>
                    <select class="form-select" id="category_id" name="cats[]" multiple >

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ in_array($category->id, old('cats', $film->categories->pluck('id')->toArray())) ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" value="{{ old('title', $film->title) }}" class="form-control" id="title"
                        name="title" required>
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Année</label>
                    <input type="number" min="1920" value="{{ old('year', $film->year) }}" class="form-control"
                        id="year" name="year">
                    @error('year')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description">
                    {{ old('description', $film->description) }}
                </textarea>
                    @error('title')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">modifier</button>
            </form>
        </div>
    @endsection
