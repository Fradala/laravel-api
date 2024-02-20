@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
<div class="container">
    <div class="row">
        <div>
            <h2>
                Ecco i tuoi progetti, {{ Auth::user()->name }}
            </h2>
        </div>

    </div>

</div>



<section class="container">
    <div class="col-12">
        <h2 class="mt-4" scope="row">
            {{ $project->name_project }}
        </h2>
       
        <p>
            {{ $project->author }}
        </p>
        <p>
            {{ $project->linguaggio_usato }}
        </p>
        <p>
            {{ $project->date }}
        </p>
        <img class="w-50" src="{{ $project->image }}" alt="">
        <p class="mt-4">
          
            <button class="btn btn-sm btn-success">
                Edit
            </button>
            <button class="btn btn-sm btn-warning">
                Delete
            </button>
        </p>

        
    </div>


@endsection