@extends('layouts.app')

@section('title', '| Edit User')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class='fa fa-user-plus'></i> Edit User
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><i class='fa fa-user-plus'></i> Edit User</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
<div class="row">

    <div class='col-md-8 col-md-offset-2'>
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class='fa fa-user-plus'></i> Edit {{$user->name}}</h3>
            </div>


        {{ Form::model($user, array('route' => array('users.update', $user->id) , 'method' => 'PUT', 'enctype' => 'multipart/form-data')) }}{{-- Form model binding to automatically populate our fields with user data --}}

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('phone_number', 'Phone Number') }}
                        {{ Form::text('phone_number', null, array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('city', 'City') }}
                        {{ Form::text('city', null , array('class' => 'form-control')) }}
                    </div>

                    

                </div>

                <div class="col-md-6">

                    
                    <div class="form-group">
                        {{ Form::label('firstname', 'Firstname') }}
                        {{ Form::text('firstname', null , array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', null, array('class' => 'form-control')) }}
                    </div>


                    <div class="form-group">
                        {{ Form::label('password', 'Password') }}<br>
                        {{ Form::password('password', array('class' => 'form-control')) }}

                    </div>

                    <div class="form-group">
                        {{ Form::label('password', 'Confirm Password') }}<br>
                        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                    </div>



                </div>
            </div>

            <h5><b>Give Role</b></h5>

            <div class='form-group'>
                @foreach ($roles as $role)
                    {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                    {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                @endforeach
            </div>


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
