@extends('layouts.app')

@section('content')
<section class="vbox">          
    <section class="scrollable padder">
      <div class="row">
        <div class="col-sm-10">
          <section class="panel panel-default">
            <header class="panel-heading font-bold">OCR - Upload your VC</header>
            <div class="panel-body">
              {!! Form::open(array( 'role' => "form", 'class'=>"form-horizontal", 'route' => 'ocr.store', 'id' => 'ocr.store', 'files' => true)) !!}
               
                <div class="form-group {{ $errors->has('visiting_card') ? 'has-error' : ''}}">
                  {!! Form::label('visiting_card', 'Upload Image', array('class' => 'col-sm-2 control-label')) !!}
                  <div class="col-sm-10">
                    {!! Form::file('visiting_card', null, ['class' => 'form-control filestyle', 'id' => 'visiting_card','required' => 'true']) !!}
                  </div>
                  {!! $errors->first('visiting_card', '<span class="help-inline">:message</span>') !!}
                </div>

                
                <div class="line line-dashed line-lg pull-in"></div>

                <div class="form-group {{ $errors->has('directory_id') ? 'has-error' : ''}}">
                  {!! Form::label('directory_id', 'Directory', array('class' => 'col-sm-2 control-label')) !!}
                  <div class="col-sm-10">
                    {!! Form::select('directory_id', $directories, null, ['class' => '', 'style' => "width:260px", 'id' => 'select2-option','required' => 'true']) !!}
                  </div>
                  {!! $errors->first('directory_id', '<span class="help-inline">:message</span>') !!}
                </div>

                <div class="form-group">
                  <label class="col-sm-2 control-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-sm btn-default">Submit</button>
                  </div>
                </div>
              {!!form::close()!!}
            </div>
          </section>
        </div>
      </div>
    </section>
  </section>
@endsection
