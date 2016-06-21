<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
  {!! Form::label('phone', 'Phone Number') !!}
  {!! Form::text('phone', $phone_number, ['class' => 'form-control', 'id' => 'phone','required' => 'true', 'placeholder'=> 'Phone Number']) !!}
  {!! $errors->first('phone', '<span class="help-inline">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('fax') ? 'has-error' : ''}}">
  {!! Form::label('fax', 'Fax') !!}
  {!! Form::text('fax', $fax, ['class' => 'form-control', 'id' => 'fax','required' => 'true', 'placeholder'=> 'Fax']) !!}
  {!! $errors->first('fax', '<span class="help-inline">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('designation') ? 'has-error' : ''}}">
  {!! Form::label('designation', 'Designation') !!}
  {!! Form::text('designation', $designation, ['class' => 'form-control', 'id' => 'designation','required' => 'true', 'placeholder'=> 'Designation']) !!}
  {!! $errors->first('designation', '<span class="help-inline">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
  {!! Form::label('email', 'Email') !!}
  {!! Form::email('email', $email, ['class' => 'form-control', 'id' => 'email','required' => 'true', 'placeholder'=> 'Email']) !!}
  {!! $errors->first('email', '<span class="help-inline">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
  {!! Form::label('name', ' Name') !!}
  {!! Form::text('name', $name, ['class' => 'form-control', 'id' => 'name','required' => 'true', 'placeholder'=> 'Name']) !!}
  {!! $errors->first('name', '<span class="help-inline">:message</span>') !!}
</div>

<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
  {!! Form::label('address', 'Address') !!}
  {!! Form::text('address', $address, ['class' => 'form-control', 'id' => 'address','required' => 'true', 'placeholder'=> 'Address']) !!}
  {!! $errors->first('address', '<span class="help-inline">:message</span>') !!}
</div>