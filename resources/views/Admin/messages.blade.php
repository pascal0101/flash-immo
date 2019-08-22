@extends('AdminLayouts.index1')

@section('content')
@if(session()->has('message2'))

        <div class="alert alert-primary">
            {{ session()->get('message2')}}
        </div>
      @endif
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-table"></i>

                                <strong class="card-title">MESSAGES</strong>
                                <button class="btn btn-primary btn-sm btn-rounded w-md waves-effect waves-light" style="border-radius: 2em;"><i class="fa fa-print"></i> Imprimer</button>

                            </div>

                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Email</th>
                                            <th>Objet</th>
                                            <th>Numero</th>
                                            <th>Date</th>

                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($messages as $message)


                                        <tr>
                                            <td>{{$message->Nom}}</td>
                                            <td>{{$message->Email}}</td>
                                        <td>{{$message->Objet}}</td>
                                            <td>{{$message->Numero}}</td>
                                    <td>{{$message->created_at->diffForHumans()}}</td>

                                            <td>

                  <a href="{{ route('deletemsg',[$message->id])}}" class="btn btn-danger btn-circle">
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
