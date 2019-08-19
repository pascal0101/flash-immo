@extends('UserLayouts.acceuil')

@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>LES MAISONS</h1>
                <ul class="breadcrumbs">
                <li><a href="{{url('/')}}">Acceuil</a></li>
                    <li class="active">LES MAISONS</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->


<div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <!-- Option bar Start -->

               <!-- Option bar end -->
                <div class="clearfix"></div>

                <!-- Property grid start -->
                <div class="row">

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-03s">
                        <!-- Property start -->
                        <div class="property">
                            <!-- Property img -->
                            @foreach($offres as $offre)
                            <div class="property-img">
                                 @if($offre->IdTypeOffre == 2)
                            <div class="property-tag button alt featured">Vente</div>
                            @elseif($offre->IdTypeOffre == 1)
                            <div class="property-tag button alt featured">Location</div>
                            @else
                            <div class="property-tag button alt featured">Collocation</div>
                            @endif

                                <div class="property-tag button sale">En cours</div>
                                <div class="property-price">{{$offre->Prix}} FCFA</div>
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
                                        <a href="img/properties/properties-2.jpg" class="hidden"></a>
                                        <a href="img/properties/properties-5.jpg" class="hidden"></a>
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
                        <!-- Property end -->
                    </div>
                    @endforeach
                    </div>

                </div>
        </div>
    </div>
</div>
             <div align="center">
            {{$offres->links()}}
                    </div>
@endsection
