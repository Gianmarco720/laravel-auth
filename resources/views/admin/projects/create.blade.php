@extends('layouts.admin')

@section('content')

<h1>Create A New Project</h1>
<form action="{{route('admin.projects.store')}}" method="post">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="My New Project" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">Add a title for your new project, max 100 characters, must be unique</small>
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        <textarea class="form-control" name="body" id="body" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection