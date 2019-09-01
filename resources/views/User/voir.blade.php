
@extends('UserLayouts.voir')

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
<body>


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
                            <i class="fa fa-map-marker"></i>{{$offre->Adresse}}, {{$offre->ville->NomVille}}
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
                                   @if($loop->first)
                                    <div class="item active">
                                    @else
                                     <div class="item">
                                     @endif
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
                                @foreach ($images as $key =>$image)
                            <li data-target="#carousel-custom" data-slide-to="{{$key}}" class=""><img src="{{$image->image_path}}" alt="Chevrolet Impala"></li>
                               @endforeach
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
                        <div id="mapid"  style="width: 700px; height: 500px;"></div>
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
                            <h1><span>un message à</span> l'offreur</h1>
                            </span>
                        </div>

                    <form  action="{{route('message')}}" method="POST">
                         {{csrf_field()}}
                            <div class="row">
                            <input type="hidden" value="{{$offre->Email}}" name="propemail">
                            <div class="form-group {{$errors->has('nom') ? 'has-error' : ''}}">
                               <input type="text" class="form-control" placeholder="Nom & Prenom" name="nom">
                               {!!$errors->first('nom','<span class="help-block">:message</span>')!!}
                            </div>
                            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                               <input type="text" class="form-control" placeholder="Entrer Email" name="email">
                               {!!$errors->first('email','<span class="help-block">:message</span>')!!}
                            </div>

                            <div class="form-group {{$errors->has('objet') ? 'has-error' : ''}}">
                               <input type="text" class="form-control" placeholder="Objet" name="objet">
                               {!!$errors->first('objet','<span class="help-block">:message</span>')!!}
                            </div>

                            <div class="form-group {{$errors->has('numero') ? 'has-error' : ''}}">
                              <input type="text" class="form-control" placeholder="Numero Telephone" name="numero">
                              {!!$errors->first('numero','<span class="help-block">:message</span>')!!}
                            </div>

                              <div class="form-group {{$errors->has('msg') ? 'has-error' : ''}}">
                              <textarea class="form-control" id="exampleTextarea" rows="3" name="msg" placeholder="Message"></textarea>
                              {!!$errors->first('msg','<span class="help-block">:message</span>')!!}
                            </div>
</div>
                            <div class="form-group mb-0">
                                <button class="btn btn-primary" type="submit">Envoyer votre message</button>
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
                            <span>{{$offre->Adresse}}, {{$offre->ville->NomVille}}</span>
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
<input  type="hidden" id="long" value="<?php echo $offre->Longitude ?>"/>
<input  type="hidden" id="lat" value="<?php echo $offre->Latitude ?>"/>
                    <!-- Mortgage calculator start -->



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



    </div>
</div>

</body>
@endsection
