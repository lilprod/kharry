@extends('layouts.app')

@section('title', '| Edit Currency')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class='fa fa-edit'></i> Edit Currency
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active"><i class='fa fa-edit'></i> Edit Currency</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title"><i class='fa fa-edit'></i> Edit Currency</h3>
                    </div>

                {{ Form::model($currency, array('route' => array('currencies.update', $currency->id), 'method' => 'PUT' , 'enctype' => 'multipart/form-data')) }}
                <div class="box-body">

                    <div class="form-group">
                    {{ Form::label('currency_code', 'Currency code') }}
                    {{ Form::text('currency_code', null, array('class' => 'form-control')) }}<br>
                    </div>

                    <div class="form-group">
                    {{ Form::label('currency_title', 'Currency title') }}
                    {{ Form::text('currency_title', null, array('class' => 'form-control')) }}<br>
                    </div>

                </div>

                <!-- /.box-body -->
                <div class="box-footer">
                 {{ Form::submit('Save', array('class' => 'btn bg-olive')) }}
                </div>

                {{ Form::close() }}

            </div>
        </div>
    </div>
</section>

@endsection
