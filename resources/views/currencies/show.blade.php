@extends('layouts.app')

@section('title', '| View Categorie')

@section('content')
<section class="content-header">
    <h1>
      Categories
      <small>View Categorie</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Categories</a></li>
      <li class="active">View Categorie</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    @include('inc.messages')

    <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="box box-primary">
                    <div class="box-header with-border">
                      <h4 class="box-title"><i class='fa fa-eye'></i> View Categorie</h4>
                    </div>
                    <div class="box-body">

                        <h4>Titre : {{ $categorie->title }}</h4>
                        <hr>
                        <p class="lead">Description: {!! $categorie->description !!} </p>
                        
                    </div>
                    <div class="box-footer">
                        {!! Form::open(['method' => 'DELETE', 'route' => ['categories.destroy', $categorie->id] ]) !!}
                        <a href="{{ url()->previous() }}" class="btn bg-olive">Back</a>
                        @can('Edit Categorie')
                        <a href="{{ route('categories.edit', $categorie->id) }}" class="btn btn-info" role="button">Edit</a>
                        @endcan
                        @can('Delete Categorie')
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        @endcan
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
