@extends('layouts.admin')

@section('head-title')
    @yield('page-title')
@endsection

@section('main-content')




<section class="container">
    <div class="col-12">

        @include('partials.errors')

        <form action="@yield('form-action')" method="POST">
            @csrf
            
            @yield('form-method')

            <div class="mb-3 input-group">
                <label for="name_project" class="input-group-text">Name project:</label>
                <input class="form-control" type="text" name="name_project" id="name_project" value="{{ old('name_project', $project->name_project) }}">
            </div>

            <div class="mb-3 input-group">
                <label for="author" class="input-group-text">Author:</label>
                <input class="form-control" type="text" name="author" id="author" value="{{ old('author', $project->author) }}">
            </div>

            <div class="mb-3 input-group">
                <label for="type_id" class="input-group-text">Type</label>
                <select class="form-select" type="text" name="type_id" id="type_id">
                    @foreach ($types as $type )
                        <option value="{{ $type->id }}"
                            {{ $type->id == old('type_id', $project->category_id) ? 'selected' : '' }}> {{ $type->name }}
                        </option>
                        
                    @endforeach
                </select>
            </div>

            <div class="mb-3 input-group">
                <div>
                    @foreach ($technologies as $technologie )
                        <input class="form-check-input" type="checkbox" name="technologies[]" id="technologies {{ $technologie->id }}" value="{{ $technologie->id }}"
                        {{ in_Array( $technologie->id, old('technologie', $project->technologies->pluck('id')->toArray())) ? 'checked' : '' }}>
                        <label for="technologies {{ $technologie->id }}">{{ $technologie->name }}</label>
                        
                    @endforeach
                </div>
            </div>

            <div class="mb-3 input-group">
                <label for="date" class="input-group-text">Date:</label>
                <input class="form-control" type="date" name="date" id="date" value="{{ old('date', $project->date) }}">
            </div>

            <div class="mb-3 input-group">
                <label for="image" class="input-group-text">Image Url:</label>
                <input class="form-control" type="text" name="image" id="image" value="{{ old('image', $project->image) }}">
            </div>

            <div class="mb-3 input-group">
                <label for="linguaggio_usato" class="input-group-text">Linguaggio usato:</label>
                <input class="form-control" type="text" name="linguaggio_usato" id="linguaggio_usato" value="{{ old('linguaggio_usato', $project->linguaggio_usato) }}">
            </div>

            <div class="mb-3  input-group">
                <button type="submit" class="btn btn-xl btn-primary">
                    @yield('page-title')
                </button>
            </div>
            <div class="mb-3  input-group">
                <button type="reset" class="btn btn-xl btn-warning">
                    Elimina progetto
                </button>
            </div>
        
        
        </form>
        

@endsection