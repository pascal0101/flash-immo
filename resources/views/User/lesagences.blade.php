<!-- Main header end -->
@extends('UserLayouts.map')

@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>RECHERCHER VOTRE AGENCE IMMOBILIERE</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{url('/lesagences')}}">Acceuil</a></li>
                    <li class="active">Les agences</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- view section start -->


<div class="agent-section content-area">
    <div class="container">
            <div class="row">

            <div class="col-lg-12">
                <form class="form-search view-search" action="/lesagences" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="form-group mb-0">
                        <input type="text" class="form-control" placeholder="Search" name="q">
                    </div>
                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="clearfix"></div>

        <div class="row">
            @foreach ($agences as $agence)


            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <!-- Agent box 2start -->
                <div class="agent-2 clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-4 agent-theme-2">
                        <img src="/logo/{{$agence->Logo}}" alt="Logo" class="img-responsive">
                        <!-- social list -->

                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-8 agent-content">

                        <h3>
                            <a href="{{ route('detailagence',[$agence->id])}}" style="color: red">{{$agence->NomAgence}}</a>
                        </h3>
                        <ul>
                            <li>
                                <strong>Adresse:</strong><a href="#"> {{$agence->Adresse}}</a>
                            </li>
                            <li>
                                <strong>Email:</strong><a href="#"> {{$agence->Email}}</a>
                            </li>
                            <li>
                                <strong>Contacts:</strong><a href="#"> {{$agence->Contact1}} / {{$agence->Contact2}}</a>
                            </li>
                            <li>
                                <strong>Site Web:</strong><a href="#" style="color: blue"> {{$agence->SiteWeb}}</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- Agent box 2 end -->
            </div>
                @endforeach
                            <div style="text-align:center">
                {{$agences->links()}}
                    </div>
        </div>
    </div>
</div>
@endsection
