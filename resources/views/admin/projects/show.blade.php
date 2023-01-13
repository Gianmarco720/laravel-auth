@extends('layouts.admin')

@section('content')

<img class="img-fluid" src="{{asset('storage/' . $project->cover_image)}}" alt="">
<h1>{{$project->title}}</h1>
<h3>{{$project->slug}}</h3>
<div class="content">
    {{$project->body}}
</div>

@endsection