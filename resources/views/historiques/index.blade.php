@extends('layouts.app')

@section('title', '| Historiques')

@section('content')

<section class="content-header">
      <h1>
        <i class="fa fa-key"></i>Historiques
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li> 
        <li class="active"><i class="fa fa-key"></i>Historiques</li>
      </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">All Historiques</h3>
                    <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Users</a>
                    <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>Actions</th>
                                <th>Tables</th>
                                <th>User</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($historiques as $historique)
                            <tr>
                                <td>{{ $historique->action }}</td> 
                                <td>{{ $historique->table }}</td>
                                <td>{{ auth()->user('$historique->user_id')->name}}</td>
                                <td>{{ $historique->created_at }}</td>
                               
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
    <!-- /.content -->

@endsection
