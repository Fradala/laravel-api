@extends('admin.projects.layout.create-or-edit')

@section('page-title', 'Aggiorna  progetto')

@section('form-action')
    {{ route('admin.projects.update', $project) }}
@endsection

@section('form-method')
    @method('PUT')
@endsection