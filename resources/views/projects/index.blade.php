@extends('layouts.master')
@section('content')
   <h2>Projects</h2>
   @if (!$projects->count())
       <p>You have no project</p>
   @else 
        <ul class="list-group">
            @foreach ($projects as $project)
                <li>
                    {!! Form::open(array('class'=> 'form-inline', 'method' => 'DELETE', 'route' => array('projects.destroy', $project->slug))) !!}
                        <a href="{{route('projects.show', $project->slug)}}">{{$project->name}}</a>
                        (
                            <a href="{{route('projects.edit', $project->slug)}}" class="btn  btn-info">Edit</a>,
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger'))!!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
   @endif
   <p>
       <a href="{{route('projects.create')}}" class="btn btn-link">Create Project</a>
   </p>
@endsection