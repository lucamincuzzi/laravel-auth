@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        @include('partials.back')
        
        {{-- Messaggio di avvenuta aggiunta o modifica dell'elemento --}}
        @if (session('add_message'))
            <div class="container my-3 w-50 text-center alert alert-success">
                {{ session('add_message') }}
            </div>
        @elseif(session('edit_message'))
            <div class="container my-3 w-50 text-center alert alert-warning">
                {{ session('edit_message') }}
            </div>
        @endif
        {{-- /Messaggio di avvenuta aggiunta o modifica dell'elemento --}}
        
        <h2 class="mb-3 text-center">{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>
    </div>
@endsection
