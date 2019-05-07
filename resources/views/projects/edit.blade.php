@extends('layouts.master')
@section('content')
    <h2>Edit Project</h2>
    {!! Form::model($project , ['method' => 'PATCH', 'route' => ['projects.update', $project->slug]]) !!}
        @include('projects.partials.form', ['submit_text' => 'Edit project'])
    {!! Form::close() !!}
@endsection