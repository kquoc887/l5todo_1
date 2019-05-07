@extends('layouts.master')
@section('content')
    {{-- View cho biết task thuộc project nào --}}
    <h2>
        <a href="{{route('projects.show', $project->slug)}}">{{$project->name}}</a>
        -{{$task->name}}
    </h2>
@endsection