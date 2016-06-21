@extends('layouts.app')

@section('content')
<section class="vbox">
    <section class="scrollable padder">
        <div class="m-b-md">
            <h3 class="m-b-none">Directories</h3>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <?php $count = 1; ?>
                <section class="panel panel-default">
                    <header class="panel-heading font-bold">Directories</header>
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Dir Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($results as $k => $v)
                                <tr>
                                    <td> {{ (($results->currentPage() - 1 ) * $results->perPage() ) + $count + $k }}</td>
                                    <td> {{ $v->name }} </td>
                                    <td> <a href=" {{ route('directory.view_files', $v->id) }}">View Files</a> </td>
                                    <td><a href="{{ route('directory.edit', $v->id)}}"><span class="fa fa-edit"></span>Edit </a>| <a onclick="return confirm('Are you sure you want to delete this directory ?');" href="{{ route('directory.disable', $v->id)}}"><i class="fa fa-trash" aria-hidden="true"></i>Delete </a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="pagination">
                            {!! $results->render() !!}
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
@stop