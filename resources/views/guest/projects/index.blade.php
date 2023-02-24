@extends('layouts.admin')
@section('entry')
    @vite(['resources/js/popupDeleter.js'])
@endsection

@section('content')
    <div class="container">

        @foreach ($projects as $project)
            <div class="card mt-5">
                <div class="card-header">
                    {{ $project->project_date }}
                </div>
                <div class="card-body bg-black text-light">
                    <h2 class="card-author">{{ $project->author }}</h2>
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                    <p class="card-text"> {{ $project->content }}</p>
                    <h6 class=" text-uppercase mb-4">{{ $project->languages_used }}</h6>
                </div>
            </div>
        @endforeach



    </div>
@endsection
