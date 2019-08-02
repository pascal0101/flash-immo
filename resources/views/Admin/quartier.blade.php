@extends('AdminLayouts.index1')

@section('content')
  @if(session()->has('message'))

        <div class="alert alert-primary">
            {{ session()->get('message')}}
        </div>
      @endif
       @if(session()->has('message1'))

        <div class="alert alert-success">
            {{ session()->get('message1')}}
        </div>
      @endif

<button class="btn btn-success btn-rounded w-md waves-effect waves-light" style="border-radius: 2em;margin-left: 80%" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Ajouter</button>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-table"></i>

                                <strong class="card-title">QUARTIERS</strong>
                                <button class="btn btn-primary btn-sm btn-rounded w-md waves-effect waves-light" style="border-radius: 2em;"><i class="fa fa-print"></i> Imprimer</button>

                            </div>

                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>Etat</th>
                                            <th>TypeBien</th>
                                            <th>TypeOffre</th>
                                            <th>Agence</th>
                                            <th>Offreur</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td><span class="badge badge-success">Success</span></td>
                                            <td><span class="badge badge-danger">Danger</span></td>
                                            <td>Location</td>
                                            <td>Pas immo</td>
                                            <td>pascal</td>
                                            <td>
                <a href="#" class="btn btn-success btn-circle">
                    <i class="fa fa-check"></i>
                  </a>
                  <a href="#" class="btn btn-info btn-circle">
                    <i class="fa fa-info-circle"></i>
                  </a>
                  <a href="#" class="btn btn-warning btn-circle">
                    <i class="fa fa-exclamation-triangle"></i>
                  </a>
                  <a href="#" class="btn btn-danger btn-circle">
                    <i class="fa fa-trash"></i>
                  </a>
                                            </td>
                                        </tr>

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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enregistrer un quartier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{route('quartier')}}">
        @csrf

            <div class="form-group">
                <label for="exampleFormControlSelect1">Choisir Ville</label>
                <select class="form-control" id="exampleFormControlSelect1" name="nomville">

                    @foreach($ville as $ville)
                <option value="{{$ville->id}}">{{$ville->NomVille}}</option>
                    @endforeach


                </select>
            </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nom Quartier</label>
            <input type="text" class="form-control" id="recipient-name"  name="nomquartier" required>
          </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
      </div>
       </form>
      </div>
    </div>
  </div>
</div>

<script>
$('#myModal').on('hidden.bs.modal', function (e) {
  // do something...
})
</script>
@endsection
