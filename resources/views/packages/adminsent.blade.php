@extends('layouts.app')

@section('title', '| Colis livrés')

@section('content')

<section class="content-header">
      <h1>
        <i class="fa fa-envelope"></i> Colis
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Accueil</a></li> 
        <li class="active"><i class="fa fa-envelope"></i> Colis livrés</li>
      </ol>
</section>

<!-- Main content -->
    <section class="content">
        @include('inc.messages')
      <div class="row">
            <div class="col-md-12">
                <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Colis livrés</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">

                        <thead>
                            <tr>
                                <th>Contact du Kharrier</th>
                                <th>Infos du Destinataire</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($receptionpackages as $receptionpackage)
                        <tr>
                            
                            <td >
                                <p> <strong> Nom complet du Kharrier </strong>:
                                {{ $receptionpackage->deliveryman_name }} </p>

                                <p> <strong> Email du kharrier</strong>:
                                {{ $receptionpackage->deliveryman_email }} </p>

                                <p> <strong> Numéro du kharrier</strong>:
                                {{ $receptionpackage->deliveryman_phone_number }} </p>
                            </td>
                            
                            <td>
                                <p> <strong> Nom complet du destinataire </strong>:
                                {{ $receptionpackage->recipient_name }} </p>

                                <p> <strong> Email du destinataire</strong>:
                                {{ $receptionpackage->recipient_email }} </p>

                                <p> <strong> Numéro du destinataire </strong>:
                                {{ $receptionpackage->recipient_phone_number }} </p>

                                <p> <strong> Code du coli </strong>:
                                    {{ $receptionpackage->package_code }} </p>
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
