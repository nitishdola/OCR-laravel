@extends('layouts.app')

@section('content')
<section class="vbox">
    <section class="scrollable padder">
        <div class="m-b-md">
            <h3 class="m-b-none">Edit VC : Step 2</h3>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <section class="panel panel-default">
                    <header class="panel-heading font-bold">Edit OCR</header>
                    <div class="panel-body">
                        {!! Form::open(array('route' => 'ocr.step_1', 'id' => 'ocr.step_1')) !!}
                        @include('ocrs._form')
                        {!! Form::hidden('vc_path', $vc_path) !!}
                        {!! Form::hidden('directory_id', $directory_id) !!}
                        <div class="form-actions">
                            {!! Form:: submit('Submit', ['class' => 'btn btn-success']) !!}
                        </div>
                        {!!form::close()!!}
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@stop