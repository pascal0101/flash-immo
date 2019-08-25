
@extends('UserLayouts.acceuil')

@section('content')
<!-- Banner start -->
<div class="banner">

<!-- Search area start -->
<div class="content-area featured-properties">
<div class="search-area">
    <div class="container">
        <div class="search-area-inner">
            <div class="search-contents ">
<form action="{{ route('rechercher') }}" method="POST">
                         {{csrf_field()}}

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" id="typeoffre" name="typeoffre" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option value="0">Type(s) d'offre</option>
                                    <option value="1">Acheter</option>
                                    <option value="2">Location</option>
                                    <option value="3">Colocation</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" id="typebien" name="typebien" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option value="0">Type(s) de bien</option>
                                     <option value="1">Maison</option>
                                    <option value="2">Appartement</option>
                                    <option value="3">Terrain</option>
                                    <option value="4">Bureau</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="nbrechambre" placeholder="Search value">
                                    <option value="0">Nombre Chambre</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="toilette" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option value="0">Toilette(s)</option>
                                    <option value="1">Oui</option>
                                    <option value="2">Non</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="ville" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option value="0">Ville</option>
                                    <option value="1">Aného</option>
                                    <option value="2">Atakpamé</option>
                                    <option value="3">Badou</option>
                                    <option value="4">Bafilo</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="prix1"  placeholder="Prix Maximun" style="height: 45px">
                            </div>
                        </div>
                         <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                        <input type="text" class="form-control form-control-lg" name="prix2"  placeholder="Prix Minimum" style="height: 45px">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                            <div class="form-group">
                                <button class="search-button">Chercher</button>
                            </div>
                        </div>
                    </div>
</form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Search area start -->

<!-- Featured properties start -->
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>OFFRES DISPONNIBLES</h1>
        </div>
        <ul class="list-inline-listing filters filters-listing-navigation">
            <li class="active btn filtr-button filtr" data-filter="all">Tout</li>
            <li data-filter="1" class="btn btn-inline filtr-button filtr">Maison</li>
            <li data-filter="2" class="btn btn-inline filtr-button filtr">Bureau</li>
            <li data-filter="3" class="btn btn-inline filtr-button filtr">Appartement</li>
            <li data-filter="4" class="btn btn-inline filtr-button filtr">Collocation</li>
        </ul>
        <div class="row">
            <div class="filtr-container">

                @forelse($offres as $offre)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
                    <div class="property">
                        <!-- Property img -->
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

                                    <a href="TemplateUser/the-nest/img/properties/properties-2.jpg" class="hidden"></a>
                                    <a href="TemplateUser/the-nest/img/properties/properties-3.jpg" class="hidden"></a>
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
                <h1>RIEN</h1>
@endforelse





            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- Our service start -->

          <div style="text-align:center">
       {{$offres->links()}}
        </div>

<br>
<!-- Our service end -->

<!-- Recently properties start -->

</div>
</div>

@endsection
