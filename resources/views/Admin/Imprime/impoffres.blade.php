@extends('AdminLayouts.imprime')

@section('content')

<body onload="window.print();">
    <div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fa fa-home"></i> <strong style="color: red;">ahoe</strong>
          <small class="float-right">Date: 04/09/2019</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">

        <address>
           Telephone: (00228) 92 03 77 99<br>
           Telephone: (00228) 97 67 97 00<br>
           Fixe: (00228) 22 25 33 11<br>
          Site Web : www.ahoe.tg
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">

        <address>
          <strong></strong><br>

        </address>
      </div>
      <!-- /.col -->
     <div class="col-sm-4 invoice-col">
         <b>45 Rue Accablant</b><br>
         <b>Agoè</b> Anomé<br>
        <b>05 BP:816 Lomé-Togo</b><br>
        <b>Email:</b> ahoe@africantechlab.com
      </div>

      <!-- /.col -->
    </div>
    <!-- /.row -->
    <h6 align="center"><strong>Liste des Offres</strong></h6>
    <br>
    <!-- Table row -->
<div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
                                    <thead>
                                        <tr>
                                             <th>Titre</th>
                                            <th>TypeBien</th>
                                            <th>TypeOffre</th>
                                            <th>Offreur</th>
                                            <th>Contacts</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($offres as $offre)

                                        <tr>
                                            <td>{{$offre->Titre}}</td>
                                            <td>{{$offre->typebien->LibelleTypeBien}}</td>
                                        <td>{{$offre->typeoffre->LibelleTypeOffre}}</td>
                                        <td>{{ $offre->user->name}}</td>
                                            <td>{{$offre->Telephone}}</td>
                                            <td>{{$offre->created_at->formatLocalized("%a %e %b %Y")}}</td>


                                        </tr>
                                          @endforeach
                                    </tbody>
                                </table>
      </div>
</div>
</body>

@endsection
