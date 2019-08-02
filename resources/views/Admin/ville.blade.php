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

                                <strong class="card-title">VILLES</strong>
                                <button class="btn btn-primary btn-sm btn-rounded w-md waves-effect waves-light" style="border-radius: 2em;"><i class="fa fa-print"></i> Imprimer</button>

                            </div>

                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th>Nom de la Ville</th>

                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                            <?php $i=1;?>
                            @foreach($villes as $ville)
                                    <tbody>
                                        <tr>
                                            <td>{{($i++)}}</td>

                                             <td>{{($ville->NomVille)}}</td>


                                            <td>

                  <a href="{{ route('supprville',[$ville->id])}}" class="btn btn-danger btn-circle">
                    <i class="fa fa-trash"></i>
                  </a>
                                            </td>
                                        </tr>

                                    </tbody>
                                    @endforeach
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
        <h5 class="modal-title" id="exampleModalLabel">Enregistrer une Ville</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="{{route('ville')}}">
        @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nom Ville</label>
            <input type="text" class="form-control" id="recipient-name"  name="nomville" required>
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
