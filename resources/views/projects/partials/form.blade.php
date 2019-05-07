<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name') !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>
<div class="form-group">
    <a href="{{route('projects.index')}}" class="btn btn-link">Back To Project</a>|
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>
 
 
