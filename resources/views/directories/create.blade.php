@extends('layouts.app')

@section('content')
<section class="vbox">
    <section class="scrollable padder">
        <div class="m-b-md">
            <h3 class="m-b-none">Create a Directory</h3>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <section class="panel panel-default">
                    <header class="panel-heading font-bold">Directory</header>
                    <div class="panel-body">
                        {!! Form::open(array('route' => 'directory.store', 'id' => 'directory.store')) !!}
                        @include('directories._form')
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