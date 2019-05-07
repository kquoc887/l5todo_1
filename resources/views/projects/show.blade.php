@extends('layouts.master')
@section('content')
    {{-- View cho biết project có những task nào --}}
    <h2>{{$project->name}}</h2>
    @if ( !$project->tasks->count() ) 
        Your project have no task
    @else 
        <ul>
            @foreach ($project->tasks as $task)
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('projects.tasks.destroy', $project->slug, $task->slug))) !!}
                        <a href="{{route('projects.tasks.show', [$project->slug, $task->slug])}}">{{$task->name}}</a>
                        (
                            <a href="{{route('projects.tasks.edit', [$project->slug, $task->slug])}}" class="btn btn-info">Edit</a>,
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger'))!!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
    <p>
        <a href="{{route('projects.index')}}" >Back To Project</a> |
        <a href="{{route('projects.tasks.create', $project->slug)}}">Create Task</a>
    </p>
@endsection