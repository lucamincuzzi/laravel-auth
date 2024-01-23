@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-3 text-center">{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>
    </div>
@endsection