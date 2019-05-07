@extends('layouts.master')
@section('content')
    <h2>Create Task for Project: "{{$project->name}}"</h2>
    {!! Form::model(new App\Task, ['route' => ['projects.tasks.store', $project->slug] ]) !!}
        @include('tasks.partials.form', ['submit_text' => 'Create Task'])
    {!! Form::close() !!}
@endsection