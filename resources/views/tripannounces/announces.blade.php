@extends('layouts.app')

@section('title', '| Annonces de voyage')

@section('content')

<section class="content-header">
      <h1>
        <i class="fa fa-car"></i> Annonces
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Accueil</a></li> 
        <li class="active"><i class="fa fa-car"></i> Annonces de voyage</li>
      </ol>
</section>

<!-- Main content -->
    <section class="content">
        @include('inc.messages')
      <div class="row">
            <div class="col-md-12">
                <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Annonces de voyage</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th> Détails du voyage</th>
                                <th> Nombre de kilo(s)</th>
                                <th> Prix du kilo</th>
                                <th> Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tripannounces as $tripannounce)
                            <tr>
                                <td>
                                    <p> <strong> Ville de départ :</strong>:
                                        {{ $tripannounce->departure_city }} </p>

                                    <p> <strong> Ville d'arrivée :</strong>:
                                    {{ $tripannounce->arrival_city }} </p>

                                    <p> <strong> Date de départ :</strong>:
                                        {{ $tripannounce->departure_date }} </p>

                                    <p> <strong> Date d'arrivée :</strong>:
                                        {{ $tripannounce->arrival_date }} </p>

                                    <p> <strong> Moyen de transport :</strong>: {{ $tripannounce->transport }} </p>
                                </td> 

                                <td>
                                    <strong>  {{ $tripannounce->number_kilo }}</strong>
                                </td>

                                <td>
                                    <strong>  {{ $tripannounce->price_kilo }} {{ $tripannounce->currency }}</strong>
                                </td>

                                <td>
                                    <a href="{{ route('tripannounces.show', $tripannounce->id) }}" class="btn btn-info btn-xs pull-left" style="margin-right: 3px;"><i class="fa fa-eye"></i> Voir</a>

                                    {!! Form::open(['method' => 'DELETE', 'route' => ['deleteTrip', $tripannounce->id] ]) !!}
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
