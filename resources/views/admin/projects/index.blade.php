@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="col-12 text-end">
            <a class="btn btn-sm btn-success mt-5" href="">Create new project</a>
        </div>
        <table class="table table-dark table-striped table-bordered table-hover mt-1">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Projects Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Languages used:</th>
                    {{-- <th scope="col">Project description:</th> --}}
                    <th scope="col">Project date:</th>
                    <th scope="col">Actions:</th>

                </tr>
            </thead>
            <tbody>

                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->author }}</td>
                        <td>{{ $project->languages_used }}</td>
                        {{-- <td>{{ $project->content }}</td> --}}
                        <td>{{ $project->project_date }}</td>
                        <td>
                            <a class="btn btn-sm btn-light" href="{{ route('admin.projects.show', $project->id) }}">Show</a>
                            <a class="btn btn-sm btn-light" href="">Edit</a>
                            <a class="btn btn-sm btn-danger" href="">Delete</a>
                        </td>
                    </tr>
                @endforeach



            </tbody>
        </table>
    </div>
@endsection
