
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
                <form method="GET">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="area-from" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Type(s) d'offre</option>
                                    <option>Acheter</option>
                                    <option>Location</option>
                                    <option>Colocation</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-status" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Type(s) de bien</option>
                                     <option>Maison</option>
                                    <option>Appartement</option>
                                    <option>Terrain</option>
                                    <option>Bureau</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location" placeholder="Search value">
                                    <option>Nombre Chambre</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>+10</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="property-types" data-live-search="true" data-live-search-placeholder="Search value">
                                    <option>Toilette(s)</option>
                                    <option>Oui</option>
                                    <option>Non</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="bedrooms" data-live-search="true" data-live-search-placeholder="Search value" >
                                    <option>Ville</option>
                                    <option>Aného</option>
                                    <option>Atakpamé</option>
                                    <option>Badou</option>
                                    <option>Bafilo</option>
                                    <option>Bassar</option>
                                    <option>Dapaong</option>
                                    <option>Kandé</option>
                                    <option>Kpagouda</option>
                                    <option>Kpalimé</option>
                                    <option>Mango</option>
                                    <option>Niamtougou</option>
                                    <option>Notsé</option>
                                    <option>Sokodé</option>
                                    <option>Sotouboua</option>
                                    <option>Tabligbo</option>
                                    <option>Tchamba</option>
                                    <option>Tsévié</option>
                                    <option>Vogan</option>
                                    <option>Lomé</option>
                                    <option>Cinkassé</option>

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
            <h1>Propriétés en vedette</h1>
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
                @foreach($offres as $offre)
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
                                    <i class="fa fa-map-marker"></i>{{$offre->Adresse}}. Tampa City,
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
@endforeach





            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- Our service start -->

        <div style="text-align:center">
        <a href="#" class="btn button-md button-theme">LIRE LA SUITE</a>
        </div>
                    <div align="center">
            {{$offres->links()}}
                    </div>
<br>
<!-- Our service end -->

<!-- Recently properties start -->
<div class="mb-70 recently-properties chevron-icon">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h3><span>Annonce A la</span>Une</h3>
        </div>
        <div class="row">
            <div class="carousel our-partners slide" id="ourPartners2">
                <div class="col-lg-12 mrg-btm-30">
                    <a class="right carousel-control" href="#ourPartners2" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners2" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                            <div class="property-2">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="featured">
                                        Featured
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$150,000</div>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="TemplateUser/the-nest/img/properties/properties-4.jpg" alt="rp" class="img-responsive">
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Lexus GS F">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="TemplateUser/the-nest/img/properties/properties-4.jpg" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="TemplateUser/the-nest/img/properties/properties-2.jpg" class="hidden"></a>
                                            <a href="TemplateUser/the-nest/img/properties/properties-3.jpg" class="hidden"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="content">
                                    <!-- title -->
                                    <h4 class="title">
                                        <a href="properties-details.html">Big Head House</a>
                                    </h4>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                </div>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property 2 end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                            <div class="property-2">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="featured">
                                        Featured
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$150,000</div>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="TemplateUser/the-nest/img/properties/properties-3.jpg" alt="rp" class="img-responsive">
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Lexus GS F">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="TemplateUser/the-nest/img/properties/properties-3.jpg" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="TemplateUser/the-nest/img/properties/properties-2.jpg" class="hidden"></a>
                                            <a href="TemplateUser/the-nest/img/properties/properties-5.jpg" class="hidden"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="content">
                                    <!-- title -->
                                    <h4 class="title">
                                        <a href="properties-details.html">Masons Villas</a>
                                    </h4>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                </div>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property 2 end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                            <div class="property-2">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="featured">
                                        Featured
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$150,000</div>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="TemplateUser/the-nest/img/properties/properties-2.jpg" alt="rp" class="img-responsive">
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Lexus GS F">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="TemplateUser/the-nest/img/properties/properties-2.jpg" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="TemplateUser/the-nest/img/properties/properties-1.jpg" class="hidden"></a>
                                            <a href="TemplateUser/the-nest/img/properties/properties-5.jpg" class="hidden"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="content">
                                    <!-- title -->
                                    <h4 class="title">
                                        <a href="properties-details.html">Park Avenue</a>
                                    </h4>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                </div>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property 2 end -->
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <!-- Property 2 start -->
                            <div class="property-2">
                                <!-- Property img -->
                                <div class="property-img">
                                    <div class="featured">
                                        Featured
                                    </div>
                                    <div class="price-ratings">
                                        <div class="price">$150,000</div>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <img src="TemplateUser/the-nest/img/properties/properties-1.jpg" alt="rp" class="img-responsive">
                                    <div class="property-overlay">
                                        <a href="properties-details.html" class="overlay-link">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="overlay-link property-video" title="Lexus GS F">
                                            <i class="fa fa-video-camera"></i>
                                        </a>
                                        <div class="property-magnify-gallery">
                                            <a href="TemplateUser/the-nest/img/properties/properties-1.jpg" class="overlay-link">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="TemplateUser/the-nest/img/properties/properties-2.jpg" class="hidden"></a>
                                            <a href="TemplateUser/the-nest/img/properties/properties-5.jpg" class="hidden"></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- content -->
                                <div class="content">
                                    <!-- title -->
                                    <h4 class="title">
                                        <a href="properties-details.html">Sweet Family Home</a>
                                    </h4>
                                    <!-- Property address -->
                                    <h3 class="property-address">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                        </a>
                                    </h3>
                                </div>
                                <!-- Facilities List -->
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>
                                        <span>4800 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-bed"></i>
                                        <span>3</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Property 2 end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
