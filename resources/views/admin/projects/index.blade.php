@extends('layouts.admin')

@section('content')
    <div class="container my-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td><a class="btn btn-success" href="{{ route('admin.projects.show', ["project" => $project->slug]) }}">Dettagli</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
