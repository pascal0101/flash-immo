@extends('UserLayouts.map')

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
                        <img src="/logo/{{$agences->Logo}}" alt="Logo" class="img-responsive">
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
                                <a href="{{$agences->SiteWeb}}" style="color: blue">{{$agences->SiteWeb}}</a>
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-envelope"></i>Email:
                                </span>
                                {{$agences->Email}}
                            </li>
                            <li>
                                <span>
                                    <i class="fa fa-phone"></i>Télephone:
                                </span>
                                     &nbsp;&nbsp;&nbsp; {{$agences->Contact1}} / {{$agences->Contact2}}
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
                            <form id="agent_form" action="https://storage.googleapis.com/themevessel-products/the-nest/index.html" method="GET" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group your-name">
                                            <input type="email" name="name" class="input-text" placeholder="Votre Nom">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group your-email">
                                            <input type="email" name="email" class="input-text" placeholder="Votre Prenom">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group your-phone">
                                            <input type="text" name="phone" class="input-text" placeholder="Votre Numero de télephone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group message">
                                            <textarea class="input-text" name="message" placeholder=" Message"></textarea>
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
