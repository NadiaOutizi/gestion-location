@extends('layouts.app')

@section('content')
    <h1>ListeModules</h1>
    <a href="{{ route('listemodules.create') }}" class="btn btn-primary">Create New ListeModule</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Module Name</th>
                <th>Category</th>
                <th>Marque</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listemodules as $listemodule)
                <tr>
                    <td>{{ $listemodule->id }}</td>
                    <td>{{ $listemodule->modulenom }}</td>
                    <td>{{ $listemodule->category }}</td>
                    <td>{{ $listemodule->marque->marquenom }}</td>
                    <td>
                        <a href="{{ route('listemodules.destroy', $listemodule->id) }}" class="btn btn-info">Delete</a>
                        <a href="{{ route('listemodules.edit', $listemodule->id) }}" class="btn btn-warning">Edit</a>
                       
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
