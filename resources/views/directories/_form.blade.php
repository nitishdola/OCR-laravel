<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! Form::label('name', 'Directory Name') !!}
  {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name','required' => 'true', 'placeholder'=> 'Directory Name']) !!}
  {!! $errors->first('name', '<span class="help-inline">:message</span>') !!}
</div>