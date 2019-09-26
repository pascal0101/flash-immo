@extends('AdminLayouts.index1')

@section('content')


 <div class="col-md-offset-2 col-md-8">

      @include('sweet::alert')

    </div>
@if(session()->has('message'))

        <div class="alert alert-primary">
            {{ session()->get('message')}}
        </div>
      @endif
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-table"></i>

                                <strong class="card-title">OFFRES</strong>
                            <a href="{{url('/impoffres')}}" target="_blank" class="btn btn-primary btn-sm btn-rounded w-md waves-effect waves-light" style="border-radius: 2em;"><i class="fa fa-print"></i> Imprimer</a>

                            </div>

                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>TypeBien</th>
                                            <th>TypeOffre</th>
                                            <th>Offreur</th>

                                            <th>Contacts</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($offres as $offre)
                                        <tr>
                                            <td>{{$offre->Titre}}</td>
                                              <td><span class="badge badge-success">{{$offre->typebien->LibelleTypeBien}}</span></td>
                                            <td><span class="badge badge-success">{{$offre->typeoffre->LibelleTypeOffre}}</span></td>

                                            <td>{{$offre->user->name}}</td>
                                             <td>{{$offre->Telephone}}</td>
                                            <td>{{$offre->created_at->diffForHumans()}}</td>

                                            <td>

                        @if($offre->Publier == 0)
                <a href="{{route('updateoffre',[$offre->id])}}" class="btn btn-danger btn-circle">
                    <i class="fa fa-close"></i>
                  </a>
                  @else
                  <a href="{{route('updateoffre',[$offre->id])}}" class="btn btn-success btn-circle">
                    <i class="fa fa-check"></i>
                  </a>
                    @endif

                  <a href="{{ route('voir',[$offre->id])}}" class="btn btn-info btn-circle">
                    <i class="fa fa-info-circle"></i>
                  </a>

                  <a href="{{ route('deleteoffre',[$offre->id])}}" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#exampleModalLong">
                    <i class="fa fa-trash"></i>
                  </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->
<!-- Button trigger modal -->




<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection
