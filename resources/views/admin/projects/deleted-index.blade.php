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

    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome Progetto</th>
                    <th scope="col">Autore</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
               @forelse ($projects as $project )
              
                    <tr>
                        <th scope="row">
                            {{ $project->id }}
                        </th>
                        <td>
                            {{ $project->name_project }}
                        </td>
                        <td>
                            {{ $project->author }}
                        </td>
                        <td>
                            {{ $project->date }}
                        </td>
                        <td>
                            <a href="{{ route('admin.projects.deleted.show', $project) }}">
                                <button class="btn btn-sm btn-primary">
                                    View
                                </button>
                            </a>

                            <form class="d-inline-block" action="{{ route('admin.projects.deleted.restore', $project) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-sm btn-warning" type="submit">
                                    Restore
                                </button>
                            
                            </form>
                            
                            <form class="d-inline-block" action="{{ route('admin.projects.deleted.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">
                                    Delete
                                </button>
                            
                            </form>
                        </td>
                    </tr>
                   
               @empty
                   <tr>
                        <td colspan="4">
                            Non c'è nulla da vedere!
                        </td>
                   </tr>
               @endforelse
               
               
            </tbody>
        </table>
    </div>

</section>

    
@endsection