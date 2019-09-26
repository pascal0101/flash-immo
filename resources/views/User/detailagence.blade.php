@extends('UserLayouts.index1')

@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Detail Agence</h1>
                <ul class="breadcrumbs">
                    <li><a href="#">Acceuil</a></li>
                    <li class="active">Detail Agence</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Agent section start -->
<div class="agent-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <!-- Agent detail start -->
                <div class="agent-detail clearfix">
                    <div class="col-lg-5 col-md-6 col-sm-5 agent-theme">
                        <img src="/profil/{{$agences->Logo}}" alt="Logo" class="img-responsive">
                    </div>
                    <div class="col-lg-7 col-md-6 col-sm-7 agent-content clearfix">

                        <h3>
                            <a href="#" style="color: red">{{$agences->NomAgence}}</a>
                        </h3>
                        <!-- Address list -->
                        <ul class="address-list">
                            <li>
                                <span>
                                    <i class="fa fa-globe"></i>Site Web:
                                </span>
 
                                <a href="{{$agences->SiteWeb}}" target="_blank" style="color: blue">{{$agences->SiteWeb}}</a>
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-envelope"></i>Email:
                                </span>

                                <a href="mailto:{{$agences->Email}}">{{$agences->Email}}</a>
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-phone"></i>Télephone:
                                </span>
                                     &nbsp;&nbsp;&nbsp; {{$agences->telephone}}
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-list"></i>NIF:
                                </span>
                                &nbsp;&nbsp;{{$agences->NIF}}
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-map-marker"></i>Adresse:
                                </span>
                                &nbsp;&nbsp;{{$agences->Adresse}}
                            </li>

                        </ul>


                    </div>
                </div>
                <!-- Agent detail end -->

                <div class="sidebar-widget clearfix biography">
                    <!-- Main Title 2 -->
                    <div class="main-title-2">
                        <h1><span>Description</span></h1>
                    </div>
                    <p>
                        {{$agences->Description}}
                    </p>



                </div>

                <!-- Recently properties start -->
                <div class="recently-properties">
                    <!-- Main title -->
                    <div class="main-title-2">
                        <h1></h1>
                    </div>
                    <div class="row">


                @forelse($offres as $offre)
                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            @if($offre->IdTypeOffre == 2)
                            <div class="property-tag button alt featured" style="background: red;">Vente</div>
                            @elseif($offre->IdTypeOffre == 1)
                            <div class="property-tag button alt featured" style="background: red;">Location</div>
                            @else
                            <div class="property-tag button alt featured" style="background: red;">Collocation</div>
                            @endif


                            <div class="property-price">{{number_format($offre->Prix)}} FCFA</div>
                              @foreach ($offre->images as $image)
                                @if ($loop->first)
                                     <img src="{{$image->image_path}}" alt="fp" class="img-responsive">
                                @endif

                              @endforeach
                            <div class="property-overlay">

                                <a href="{{ route('detail',[$offre->id])}}" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>

                                <div class="property-magnify-gallery">
                                    @foreach ($offre->images as $image)
                                @if ($loop->first)
                                    <a href="{{$image->image_path}}" class="overlay-link">
                                        @endif
                                        @endforeach
                                        <i class="fa fa-expand"></i>
                                    </a>


                                </div>
                            </div>
                        </div>
                        <!-- Property content -->
                        <div class="property-content">
                            <!-- title -->
                            <h1 class="title">
                            <a href="properties-details.html">{{$offre->Titre}}</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i>{{$offre->Adresse}}
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                 <li>
                                    <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                    <span>{{$offre->NombreChambre}} Chambre</span>
                                </li>
                                @if($offre->WcDouche == 1)
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span>OUI</span>
                                </li>
                                @else
                                <li>
                                    <i class="flaticon-holidays"></i>
                                    <span>NON</span>
                                </li>
                                 @endif
                                @if($offre->Garage == 1)
                                <li>
                                    <i class="flaticon-vehicle"></i>
                                    <span>OUI</span>
                                </li>
                                @else
                                <li>
                                    <i class="flaticon-vehicle"></i>
                                    <span>NON</span>
                                </li>
                                @endif

                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left">
                                <a href="#"><i class="fa fa-user"></i>Publié par {{$offre->user->name}}</a>
                                </span>
                                <span class="right">
                                    <i class="fa fa-calendar"></i>{{$offre->created_at->diffForHumans()}}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                    <h3>Cette agence n'a publié aucune annonce sur la plateforme</h3>
@endforelse
                    </div>
                </div>
                <!-- Partners block end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12  col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-widget contact-1">
                        <div class="main-title-2">
                            <h1><span>Contact</span> Agence</h1>
                        </div>
                        <div class="contact-form">

                                <form id="agent_form" action="{{route('envoyer')}}" method="POST">
                                    {{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group your-name">
                                            <input type="text" name="nom" class="input-text" placeholder="Votre Nom">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group your-email">
                                            <input type="email" name="email" class="input-text" placeholder="Votre adresse mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group your-phone">
                                            <input type="text" name="numero" class="input-text" placeholder="Votre Numero de télephone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group message">
                                            <textarea class="input-text" name="mesg" placeholder="Votre Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="button-md button-theme btn-block">Envoyer Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Popular posts start -->

                    <!-- Category posts start -->

                    <!-- Social media start -->

                    <!-- Tags box -->

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
