@extends('layouts.app')

@section('title', '| Create New Transport')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class='fa fa-cart-plus'></i> Create New Transport
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><i class='fa fa-cart-plus'></i> Create New Transport</li>
  </ol>
</section>


<!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title"><i class='fa fa-plus'></i> Create New Transport</h3>
                    </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {{-- Using the Laravel HTML Form Collective to create our form --}}
                        {{ Form::open(array('route' => 'transports.store', 'enctype' => 'multipart/form-data')) }}
                            <div class="box-body">
                                
                                <div class="form-group">
                                    {{ Form::label('title', 'Transport') }}
                                    {{ Form::text('title', null, array('class' => 'form-control')) }}
                                    <br>
                                </div>

            
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                {{ Form::submit('Create Transport', array('class' => 'btn btn-lg btn-block bg-olive')) }}
                            </div>

                        {{ Form::close() }}

                </div>
                    
          </div>
          <!-- /.box -->
      </div>

    </section>

@endsection
