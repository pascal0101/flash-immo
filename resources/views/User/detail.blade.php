
@extends('UserLayouts.index')

@section('content')
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Detail de la propriété</h1>
                <ul class="breadcrumbs">
                <li><a href="{{url('/user')}}">Acceuil</a></li>
                    <li class="active">Detail de la propriété</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties details page start -->

<div class="properties-details-page content-area">
    <div class="container">
        <div class="row mb-50">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <!-- Header -->
                <div class="heading-properties clearfix sidebar-widget">
                    <div class="pull-left">
                        <h3>{{$offre->Titre}}</h3>
                        <p>
                            <i class="fa fa-map-marker"></i>{{$offre->Adresse}}, {{$offre->NomVille}}
                        </p>
                    </div>
                    <div class="pull-right">
                        <h3><span>{{$offre->Prix}} FCFA</span></h3>
                        <h5>

                        </h5>
                    </div>
                </div>
                <!-- Properties details section start -->
                <div class="sidebar-widget mb-40">
                    <!-- Properties detail slider start -->
                    <div class="properties-detail-slider simple-slider mb-40">
                        <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                            <div class="carousel-outer">
                                <!-- Wrapper for slides -->

                                <div class="carousel-inner">


                                        @foreach ($images as $image)

                                    <div class="item active">
                                        <img src="{{$image->image_path}}" class="thumb-preview" alt="Chevrolet Impala">
                                    </div>

                                     @endforeach

                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                    <span class="slider-mover-left no-bg t-slider-r pojison" aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                    <span class="slider-mover-right no-bg t-slider-l pojison" aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!-- Indicators -->
                            <ol class="carousel-indicators thumbs visible-lg visible-md">
                                <li data-target="#carousel-custom" data-slide-to="0" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-1.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="1" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-3.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="2" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-4.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="3" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-5.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="4" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-6.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="5" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-7.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="6" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-8.jpg" alt="Chevrolet Impala"></li>
                                <li data-target="#carousel-custom" data-slide-to="7" class=""><img src="TemplateUser/the-nest/img/properties/properties-small-2.jpg" alt="Chevrolet Impala"></li>
                            </ol>
                        </div>
                    </div>
                    <!-- Properties detail slider end -->

                    <!-- Advanced search start -->

                    <!-- Advanced search end -->

                    <!-- Properties description start -->
                    <div class="properties-description mb-40 ">
                        <div class="main-title-2">
                            <h1><span>Description</span></h1>
                        </div>
                        <p>{{$offre->Description}}</p>

                    </div>
                    <!-- Properties description end -->

                    <!-- Properties condition start -->
                    <div class="properties-condition mb-40 ">
                        <div class="main-title-2">
                            <h1><span>Condition</span></h1>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-bed"></i>Chambre(s)
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>Salon
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>Toilette(s)
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-square-layouting-with-black-square-in-east-area"></i>Meuble
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>Cuisine
                                    </li>
                                     <li>
                                        <i class="flaticon-monitor"></i>Surface
                                    </li>

                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-vehicle"></i>Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-building"></i>Balcon
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Properties condition end -->

                    <!-- Properties amenities start -->

                    <!-- Properties amenities end -->
                </div>
                <!-- Properties details section end -->

                <!-- Floor plans start -->

                <!-- Floor plans end -->

                <!-- Location start -->
                <div class="location sidebar-widget">
                    <div class="map">
                        <div class="main-title-2">
                            <h1><span>LOCALISATION DU BIEN</span></h1>
                        </div>
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>
                <!-- Location end -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <!-- Sidebar start -->
                <div class="sidebar right">
                    <!-- Search contents sidebar start -->
                    <div class="sidebar-widget hidden-sm hidden-xs">
                        <div class="main-title-2">
                            <h1><span>Recherche</span> Avancée</h1>
                        </div>

                        <form method="GET">
                            <div class="row">
                            <div class="form-group">
                                <select class="form-control" name="property-status">
                                    <option>Property Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="property-status">
                                    <option>Location</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="property-status">
                                    <option>Property Types</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                </select>
                            </div>

                            <div class="form-group">
                               <select class="form-control" name="property-status">
                                    <option>Area From</option>
                                    <option>1000</option>
                                    <option>800</option>
                                    <option>600</option>
                                    <option>400</option>
                                    <option>200</option>
                                    <option>100</option>
                                </select>
                            </div>

                              <div class="form-group">
                               <select class="form-control" name="property-status">
                                    <option>Area From</option>
                                    <option>1000</option>
                                    <option>800</option>
                                    <option>600</option>
                                    <option>400</option>
                                    <option>200</option>
                                    <option>100</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
 <input type="number" class="form-control" placeholder="Prix min">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
 <input type="number" class="form-control" placeholder="Prix max">
                                    </div>
                                </div>
                            </div>

</div>

                            <div class="form-group mb-0">
                                <button class="search-button">Chercher</button>
                            </div>
                        </form>
                    </div>
                    <!-- Search contents sidebar end -->

                    <!-- Social media start -->


                    <!-- Inside properties start  -->


                    <!-- Helping center start -->
                    <div class="sidebar-widget helping-box clearfix">
                        <div class="main-title-2">
                            <h1><span>CONTACTS</span> </h1>
                        </div>
                        <div class="helping-center">
                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                            <h4>Adresse</h4>
                            <span>{{$offre->Adresse}}, {{$offre->NomVille}}</span>
                        </div>
                         <div class="helping-center">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <h4>Adresse mail</h4>
                            <span>{{$offre->Email}}</span>
                        </div>
                        <div class="helping-center">
                            <div class="icon"><i class="fa fa-phone"></i></div>
                            <h4>Numero Telephone</h4>
                            <p><a href="#">{{$offre->Numero1}} / {{$offre->Numero2}}</a> </p>
                        </div>
                    </div>

                    <!-- Mortgage calculator start -->
                    <div class="sidebar-widget contact-1 mortgage-calculator">
                        <div class="main-title-2">
                            <h1><span>un message à</span> l'offreur</h1>
                        </div>
                        <div class="contact-form">
                            <form id="agent_form" action="https://storage.googleapis.com/themevessel-products/the-nest/index.html" method="GET" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">

                                            <input type="text" class="form-control" placeholder="Nom & Prenom">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">

                                            <input type="text" class="form-control" placeholder="Entrer Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">

                                            <input type="text" class="form-control" placeholder="Objet">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">

                                            <input type="text" class="form-control" placeholder="Numero Telephone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                      <div class="form-group">

                                    <textarea class="form-control" id="exampleTextarea" rows="3" name="description" placeholder="Message"></textarea>
                                </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <button class="search-button">Envoyer votre message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- Latest tweet start -->
                    <div class="sidebar-widget category-posts">
                        <div class="main-title-2">
                            <h1><span>Catégorie</span> Populaire</h1>
                        </div>
                        <ul class="list-unstyled list-cat">
                            <li><a href="#">Maison </a> <span>(45)  </span></li>
                            <li><a href="#">Apartment  </a> <span>(21)  </span></li>
                            <li><a href="#">Bureuax </a> <span>(23)  </span></li>
                            <li><a href="#">Terrains </a> <span>(19)  </span></li>

                        </ul>
                    </div>

                </div>
                <!-- Sidebar end -->
            </div>
        </div>

        <div class="main-title-2">
            <h1><span>Propriétés Connexes</span></h1>
        </div>
        <div class="row">
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
                            <a href="properties-details.html">Beautiful Single Home</a>
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
@endsection
