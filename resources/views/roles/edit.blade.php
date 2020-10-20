@extends('layouts.app')

@section('title', '| Edit Role')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class='fa fa-key'></i> Edit Role
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><i class='fa fa-key'></i> Edit Role</li>
  </ol>
</section>


<!-- Main content -->
<section class="content">
<div class="row">

    <div class='col-lg-4 col-lg-offset-4'>
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class='fa fa-key'></i> Edit Role: {{$role->name}}</h3>
            </div>
      

            {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}
            <div class="box-body">
                <div class="form-group">
                    {{ Form::label('name', 'Role Name') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                </div>

                <h5><b>Assign Permissions</b></h5>
                @foreach ($permissions as $permission)

                    {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                    {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

                @endforeach
                <br>
            </div>

            <div class="box-footer">
                {{ Form::submit('Edit', array('class' => 'btn bg-olive')) }}
            </div>
            {{ Form::close() }}    
        </div>
    </div>
</div>
</section>

@endsection
