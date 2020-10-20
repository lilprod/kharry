@extends('layouts.app')

@section('title', '| Transports')

@section('content')

<section class="content-header">
      <h1>
        <i class="fa fa-key"></i>Transports
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li> 
        <li class="active"><i class="fa fa-key"></i>Transports</li>
      </ol>
</section>

<!-- Main content -->
    <section class="content">
        @include('inc.messages')
      <div class="row">
            <div class="col-md-12">
                <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Available Transports</h3>
                    <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Users</a>
                    <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>Transports</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transports as $transport)
                            <tr>
                                <td>{{ $transport->title }}</td> 
                                <td>
                                <a href="{{ URL::to('transports/'.$transport->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['transports.destroy', $transport->id] ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="box-footer clearfix">
                  <a href="{{ URL::to('transports/create') }}" class="btn bg-olive">Add Transport</a>
                </div>

            </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection
