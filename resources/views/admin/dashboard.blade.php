@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')

<div class="container">
    <div class="row">
        <div>
            <h2>
                welcome in your Admin dashboard, {{ Auth::user()->name }}
            </h2>
        </div>

    </div>

</div>
    
@endsection