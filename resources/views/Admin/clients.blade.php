@extends('AdminLayouts.index1')

@section('content')

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-table"></i>

                                <strong class="card-title">CLIENTS</strong>
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


@endsection
