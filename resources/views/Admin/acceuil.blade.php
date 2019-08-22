@extends('AdminLayouts.index1')

@section('content')




<div class="content mt-3">

    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            <span class="badge badge-pill badge-success">Success</span> Bienvenue.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>


    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-server text-muted"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">OFFRES TOTAL</div>
                        <div class="stat-digit">{{($offre->count())}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">ACTIVE</div>
                        <div class="stat-digit">{{($offre->where('Publier' ,'=' ,1)->count())}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-link text-danger border-danger"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">DESACTIVEE</div>
                        <div class="stat-digit">{{($offre->where('EtatInscrip' ,'=' ,0)->count())}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">CLIENTS</div>
                        <div class="stat-digit">{{($utilisateur->count())}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
