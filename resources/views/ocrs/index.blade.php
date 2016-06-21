@extends('layouts.app')

@section('content')
<section class="vbox">
    <section class="scrollable padder">
        <div class="m-b-md">
            <h3 class="m-b-none">All OCR Files</h3>
        </div>
        <div class="row">
            <div class="col-sm-12">
            	<table class="table">
            		<thead>
            			<tr>
            				<th>#</th>
            				<th>Name</th>
            				<th>Designation</th>
            				<th>Phone Number</th>
                            <th>Thumb</th>
            				<th> Action </th>
            			</tr>
            		</thead>
            		<tbody>
            			@foreach($result as $k => $v)
            			<tr>
            				<td> {{ $k + 1 }} </td>
            				<td> {{ $v->name }} </td>
            				<td> {{ $v->designation }} </td>
            				<td> {{ $v->phone }} </td>
                            <td>{!! Html::image($v->getPhoto(), '', array('height' => '90px','width' => '120px')) !!} </td>
            				<td><a href="{{ route('ocr.edit', $v->id) }}"> <span class="fa fa-edit"></span> Edit</a> | <a href="{{ route('ocr.details', $v->id) }}"> Details</a></td>
            			</tr>
            			@endforeach
            		</tbody>
            	</table>
            </div>
        </div>
    </section>
</section>
@stop