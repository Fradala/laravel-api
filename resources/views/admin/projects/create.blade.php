@extends('admin.projects.layout.create-or-edit')

@section('page-title', 'Crea nuovo progetto')

@section('form-action')
    {{ route('admin.projects.store') }}
@endsection