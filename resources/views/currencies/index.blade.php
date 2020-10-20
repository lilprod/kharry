@extends('layouts.app')

@section('title', '| Currencies')

@section('content')

<section class="content-header">
      <h1>
        <i class="fa fa-key"></i>Currencies
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li> 
        <li class="active"><i class="fa fa-key"></i>Currencies</li>
      </ol>
</section>

<!-- Main content -->
    <section class="content">
        @include('inc.messages')
      <div class="row">
            <div class="col-md-12">
                <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Available Currencies</h3>
                    <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Users</a>
                    <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>Currencies Code</th>
                                <th>Currencies Title</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($currencies as $currency)
                            <tr>
                                <td>{{ $currency->currency_code }}</td>
                                <td>{{ $currency->currency_title }}</td> 
                                <td>
                                <a href="{{ URL::to('currencies/'.$currency->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['currencies.destroy', $currency->id] ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="box-footer clearfix">
                  <a href="{{ URL::to('currencies/create') }}" class="btn bg-olive">Add Currency</a>
                </div>

            </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection
