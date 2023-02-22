@extends('layouts.admin')

@section('content')
    <div class="container">

        <div class="card mt-5">
            <div class="card-header">
                {{ $project->project_date }}
            </div>
            <div class="card-body bg-black text-light">
                <h2 class="card-author">{{ $project->author }}</h2>
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text"> {{ $project->content }}</p>
                <p></p>
                <h6 class=" text-uppercase mb-4">{{ $project->languages_used }}</h6>
                <a class="btn btn-sm btn-warning" href="">Edit</a>
                <a class="btn btn-sm btn-danger" href="">Delete</a>
            </div>
        </div>

    </div>
@endsection
