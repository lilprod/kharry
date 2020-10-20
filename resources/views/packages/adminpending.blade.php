@extends('layouts.app')

@section('title', '| Colis en attente')

@section('content')

<section class="content-header">
      <h1>
        <i class="fa fa-spinner"></i> Colis
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Accueil</a></li> 
        <li class="active"><i class="fa fa-spinner"></i> Colis en attente</li>
      </ol>
</section>

<!-- Main content -->
    <section class="content">
        @include('inc.messages')
      <div class="row">
            <div class="col-md-12">
                <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Colis en attente</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>Contact du Kharrier</th>
                                <th>Infos du Propriétaire</th>
                                <th>Voyage selectionné</th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($packages as $package)
                            <tr>
                                <td >
                                    <p> <strong> Nom complet du Kharrier </strong>:
                                    {{ $package->deliveryman_name }} {{ $package->deliveryman_firstname }}</p>

                                    <p> <strong> Email du kharrier</strong>:
                                    {{ $package->deliveryman_email }} </p>

                                    <p> <strong> Numéro du kharrier </strong>:
                                    {{ $package->deliveryman_phone }} </p>
                                </td>

                                <td>
                                    <p> <strong> Nom complet du propriétaire </strong>:
                                    {{ $package->sender_name }} </p>

                                    <p> <strong> Email du propriétaire </strong>:
                                    {{ $package->sender_email }} </p>

                                    <p> <strong> Numéro du propriétaire </strong>:
                                    {{ $package->sender_phone_number }} </p>

                                    
                                </td>

                                <td >
                                    <p> <strong> Détail du voyage </strong>:
                                    {{ $package->trip_departure_city }} - {{ $package->trip_arrival_city }}</p>

                                    <p> <strong> Période du voyage</strong>:
                                    {{ $package->trip_departure_date }} - {{ $package->trip_arrival_date }} </p>

                                </td>

                                <td>
                                <a href="{{ route('packages.show', $package->id) }}" class="btn btn-info btn-xs pull-left" style="margin-right: 3px;"><i class="fa fa-eye"></i> Voir</a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['packages.destroy', $package->id] ]) !!}
                                {{ Form::button('<i class="fa fa-trash"></i>'.' '. trans('Supprimer'), ['type' => 'submit', 'class' => 'btn btn-danger btn-xs'] )  }}
                                {!! Form::close() !!}

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="box-footer clearfix">
                  <a href="{{ url()->previous() }}" class="btn bg-olive">Retour</a>
                </div>

            </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection
