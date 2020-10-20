@extends('layouts.app')

@section('title', '| Users')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> User Administration
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class="fa fa-users"></i> User Administration </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        @include('inc.messages')
        <div class="row">
            <div class="col-md-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">User Administration</h3>
                        <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
                        <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a>
                    </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date/Time Added</th>
                                        <th>User Roles</th>
                                        <th>Operations</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>

                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                        <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                        <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>

                        <div class="box-footer clearfix">
                          <a href="{{ route('users.create') }}" class="btn bg-olive">Add User</a>
                        </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- /.content -->

@endsection
