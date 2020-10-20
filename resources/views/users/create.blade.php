{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.app')

@section('title', '| Add User')

@section('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class='fa fa-user-plus'></i> Add User
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><i class='fa fa-user-plus'></i> Add User</li>
      </ol>
    </section>

<!-- Main content -->
    <section class="content">
      <div class='col-md-8 col-md-offset-2'>
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class='fa fa-user-plus'></i> Add User</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                {{ Form::open(array('url' => 'users', 'enctype' => 'multipart/form-data')) }}
                <div class="box-body">

                  <div class="row">
                    <div class="col-md-6">

                      <div class="form-group">
                        {{ Form::label('name', 'Full name') }}
                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                      </div>

                    <div class="form-group">
                        {{ Form::label('phone_number', 'Phone Number') }}
                        {{ Form::text('phone_number', '', array('class' => 'form-control')) }}
                    </div>

                    

                    <div class="form-group">
                        {{ Form::label('user_address', 'Address') }}
                        {{ Form::textarea('user_address', '', array('class' => 'form-control')) }}
                    </div>

                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', '', array('class' => 'form-control')) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('user_profession', 'Profession') }}
                        {{ Form::text('user_profession', '', array('class' => 'form-control')) }}
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
                            {{ Form::checkbox('roles[]',  $role->id ) }}
                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

                        @endforeach
                    </div>

                    
                        
                      
                      

                    <div class="form-group">
                        {{ Form::label('profil_image', 'Image de couverture') }}
                        {{ Form::file('profil_image') }}
                    </div>

                </div>
                <!-- /.box-body -->

              <div class="box-footer">
                {{ Form::submit('Add', array('class' => 'btn bg-olive')) }}
              </div>
            {{ Form::close() }}
          </div>
          <!-- /.box -->
      </div>
    </section>
    <!-- /.content -->

@endsection
