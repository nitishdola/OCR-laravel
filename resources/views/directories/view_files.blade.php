@extends('layouts.app')

@section('content')
<section class="vbox">
    <section class="scrollable padder">
        <div class="m-b-md">
            <h3 class="m-b-none">All OCR Files in {{ $dir_info->name }} Directory</h3>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @if(count($result))
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
            				<td> <a href="{{ route('ocr.details', $v->id) }}"> Details</a></td>
            			</tr>
            			@endforeach
            		</tbody>
            	</table>
                @else
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <i class="fa fa-ban-circle"></i><strong>No Files Found !</strong> 
                  </div>
                @endif
            </div>
        </div>
    </section>
</section>
@stop