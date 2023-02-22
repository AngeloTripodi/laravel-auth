@extends('layouts.admin')

@section('content')
    <div class="container">
        <form class="mt-5" action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" placeholder="Insert project title" name="title">
            </div>

            <div class="mb-3">
                <label for="languages_used" class="form-label">Languages Used:</label>
                <input type="text" class="form-control" id="languages_used"
                    placeholder="Insert languages used in project" name="languages_used">
            </div>
            <div class="mb-3">
                <label for="project_date" class="form-label">Project date:</label>
                <input type="date" class="form-control" id="project_date" placeholder="Es: 2023-01-29"
                    name="project_date">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Insert project description</label>
                <textarea class="form-control" id="content" rows="15" name="content"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create project</button>

        </form>
    </div>
@endsection
