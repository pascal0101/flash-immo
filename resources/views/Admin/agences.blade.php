@extends('AdminLayouts.index1')

@section('content')
@if(session()->has('message1'))

        <div class="alert alert-primary">
            {{ session()->get('message1')}}
        </div>
      @endif
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-table"></i>

                                <strong class="card-title">AGENCES</strong>
                            <a href="{{url('/impagences')}}" target="_blank"><button class="btn btn-primary btn-sm btn-rounded w-md waves-effect waves-light" style="border-radius: 2em;"><i class="fa fa-print"></i> Imprimer</button></a>

                            </div>

                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>NomAgence</th>
                                            <th>Prenoms</th>
                                            <th>Numero de Téléphone</th>
                                            <th>Email</th>
                                            <th>Site Web</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($agences as $agence)


                                        <tr>
                                            <td>{{$agence->NomAgence}}</td>
                                            <td><img src="/profil/{{$agence->Logo}}" height="15%" width="90%" class="img-responsive"></td>
                                        <td>{{$agence->telephone}}</td>
                                            <td>{{$agence->Email}}</td>
                                            <td>{{$agence->SiteWeb}}</td>

                                            <td>


                  <a href="{{ route('deleteuser',[$agence->id])}}" class="btn btn-danger btn-circle">
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


@endsection
