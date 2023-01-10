@extends('layouts.admin')

@section('content')

<h1>Projects</h1>
<a class="btn btn-primary m-3" href="{{route('admin.projects.create')}}" role="button">New Project</a>
<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse ($projects as $project)
            <tr class="table-primary">
                <td scope="row">{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>
                    <a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fas fa-eye fa-sm fa-fw"></i></a>
                    <a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fas fa-pencil fa-sm fa-fw"></i></a>
                    <a name="" id="" class="btn btn-primary" href="#" role="button"><i class="fas fa-trash fa-sm fa-fw"></i></a>
                </td>
            </tr>
            @empty
            <tr>
                <td>No Projects Yet</td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>


@endsection