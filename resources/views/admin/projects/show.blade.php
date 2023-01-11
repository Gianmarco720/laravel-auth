@extends('layouts.admin')

@section('content')

<h1>{{$project->title}}</h1>
<h3>{{$project->slug}}</h3>
<div class="content">
    {{$project->body}}
</div>

@endsection