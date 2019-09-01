<!DOCTYPE html>
<html lang="fr">

<head>

    <title>FLASH-IMMO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/css/bootstrap-select.min.css">


    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="TemplateUser/the-nest/css/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" type="text/css"  href="TemplateUser/the-nest/css/magnific-popup.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/css/style.css">
    <link rel="stylesheet" type="text/css"  href="TemplateUser/the-nest/css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="TemplateUser/the-nest/img/favicon.ico" type="image/x-icon" >



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/css/ie10-viewport-bug-workaround.css">



    <style type="text/css">
        .main-section{
            margin:0 auto;
            padding: 20px;
            margin-top: 100px;
            background-color: #fff;
            box-shadow: 0px 0px 20px #c1c1c1;
        }
        .fileinput-remove,
        .fileinput-upload{
            display: none;
        }
    </style>
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="TemplateUser/the-nest/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="page_loader"></div>

<!-- Option Panel -->
<div class="option-panel option-panel-collased">
    <h2>Change Color</h2>
    <div class="color-plate default-plate" data-color="default"></div>
    <div class="color-plate blue-plate" data-color="blue"></div>
    <div class="color-plate yellow-plate" data-color="yellow"></div>
    <div class="color-plate red-plate" data-color="red"></div>
    <div class="color-plate green-light-plate" data-color="green-light"></div>
    <div class="color-plate orange-plate" data-color="orange"></div>
    <div class="color-plate yellow-light-plate" data-color="yellow-light"></div>
    <div class="color-plate green-light-2-plate" data-color="green-light-2"></div>
    <div class="color-plate olive-plate" data-color="olive"></div>
    <div class="color-plate purple-plate" data-color="purple"></div>
    <div class="color-plate blue-light-plate" data-color="blue-light"></div>
    <div class="color-plate brown-plate" data-color="brown"></div>
    <div class="setting-button">
        <i class="fa fa-gear"></i>
    </div>
</div>
<!-- /Option Panel -->

<!-- Top header start -->
<header class="top-header hidden-xs" id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="list-inline">


                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <ul class="top-social-media pull-right">
                    <div class="list-inline">
                    <a href="#"><i class="fa fa-phone"></i>91428199</a>
                    <a href="#"><i class="fa fa-envelope"></i>flash-immo@africantechlab.com</a></div>
                </ul>

            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html">
                    <img src="TemplateUser/the-nest/img/logos/logo.png" alt="logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="navbar-collapse collapse" role="navigation" aria-expanded="true" id="app-navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown active">
                        <a tabindex="0" data-toggle="dropdown" data-submenu="" aria-expanded="false">
                            OFFRES<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/appartement')}}">Appartements</a></li>
                            <li><a href="{{url('/maison')}}">Maisons</a></li>
                            <li><a href="{{url('/terrain')}}">Terrains</a></li>
                            <li><a href="{{url('/bureau')}}">Bureaux</a></li>

                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right rightside-navbar">
                    <li>

                        <a href="{{url('/login')}}" class="button">
                            <i class="glyphicon glyphicon-lock"></i>
                            Se connecter
                        </a>
                    </li>

                    <li>
                        <a class="button" href="{{url('/')}}"><i class="fa fa-home"></i>Acceuil</a>
                    </li>
                </ul>


            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->


@yield('content')


<!-- Partners block start -->
<div class="partners-block">
    <div class="container">
        <h3>NOS PARTENAIRES</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel our-partners slide" id="ourPartners">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="TemplateUser/the-nest/img/brand/partner.png" alt="partner">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="TemplateUser/the-nest/img/brand/partner-2.png" alt="partner-2">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="TemplateUser/the-nest/img/brand/partner-3.png" alt="partner-3">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="TemplateUser/the-nest/img/brand/partner-4.png" alt="partner-4">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="TemplateUser/the-nest/img/brand/partner-5.png" alt="partner-5">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#ourPartners" data-slide="prev"><i class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners" data-slide="next"><i class="fa fa-chevron-right icon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Partners block end -->

<!-- Footer start -->
<footer class="main-footer clearfix" style="padding: 9px 0 30px">
    <div class="container">
        <!-- Footer info-->
        <div class="footer-info">
            <div class="row">
                <!-- About us -->
                <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>Contactez nous</h1>
                        </div>

                        <ul class="personal-info">
                            <li>
                                <i class="fa fa-map-marker"></i>
                                Adresse: 45 Rue Accablant, Agoè anomé
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                Email:<a href="mailto:flash-immo@africantechlab.com">flash-immo@africantechlab.com</a>
                            </li>
                            <li>
                                <i class="fa fa-fax"></i>
                                05 BP: 816 Lomé-Togo
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                Tèl: <a href="tel:+55-417-634-7071">+(228) 92 03 77 99 / 97 67 97 00 / 22 25 33 11</a>
                            </li>


                        </ul>
                    </div>
                </div>
                <!-- Links -->
<div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                            <h1>LIENS</h1>
                        </div>
                        <ul class="links">
                            <li>
                            <a href="#">Acceuil</a>
                            </li>
                            <li>
                    <a href="#">
                                    À propos de nous</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- Recent cars -->

                <!-- Subscribe -->
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-item">
                        <div class="main-title-2">
                    <h1>
                        SOUSCRIRE</h1>
                        </div>
                        <div class="newsletter clearfix">
                            <p>
                                Souscrire a la newsletter
                            </p>

                            <form action="#" method="post">
                                <div class="form-group">
                                    <input class="nsu-field btn-block" id="nsu-email-0" type="text" name="email" placeholder="Entrez votre adresse email" required="">
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="button-sm button-theme btn-block">
                                        SOUSCRIRE
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                     <div class="footer-item">
                         <img src="TemplateUser/the-nest/img/logos/logo.png" alt="LOGO ATL" class="img-responsive">
                     </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Copy right start -->
<div class="copy-right">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-8 col-sm-12">
                &copy;  Copyright 2019 <a href="#" target="_blank">African Tech Lab. Tous droits réservés.</a>.
            </div>
            <div class="col-md-4 col-sm-12">
                <ul class="social-list clearfix">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="linkedin">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="google">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="rss">
                            <i class="fa fa-rss"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Copy end right-->

<!-- Car Video Modal -->
<div class="modal property-modal fade" id="propertyModal" tabindex="-1" role="dialog" aria-labelledby="carModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="carModalLabel">
                    Find Your Dream House
                </h5>
                <p>
                    123 Kathal St. Tampa City,
                </p>
                <span class="ratings">
                    <i class="fa fa-star s1 active" data-score="1"></i>
                    <i class="fa fa-star s2 active" data-score="2"></i>
                    <i class="fa fa-star s3 active" data-score="3"></i>
                    <i class="fa fa-star s4 active" data-score="4"></i>
                    <i class="fa fa-star s5 active" data-score="5"></i>
                </span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row modal-raw">
                    <div class="col-lg-5 modal-left">
                        <div class="modal-left-content">
                            <div class="bs-example" data-example-id="carousel-with-captions">
                                <div class="carousel slide" id="properties-carousel" data-ride="carousel">
                                    <div class="carousel-inner" role="listbox">
                                        <div class="item">
                                            <img src="TemplateUser/the-nest/img/properties/properties-6.jpg" alt="Hyundai Santa">
                                        </div>
                                        <div class="item">
                                            <img src="TemplateUser/the-nest/img/properties/properties-6.jpg" alt="Hyundai Santa">
                                        </div>
                                        <div class="item active">
                                            <iframe class="modalIframe" src="" allowfullscreen></iframe>
                                        </div>
                                    </div>

                                    <a class="control control-prev" href="#properties-carousel" role="button" data-slide="prev">
                                        <i class="fa fa-angle-left"></i>
                                    </a>
                                    <a class="control control-next" href="#properties-carousel" role="button" data-slide="next">
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="description">
                                <h3>Description</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.But also the leap into electronic typesetting, remaining,</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 modal-right">
                        <div class="modal-right-content bg-white">
                            <strong class="price">
                                $178,000
                            </strong>
                            <section>
                                <h3>Features</h3>
                                <div class="features">
                                    <ul class="bullets">
                                        <li><i class="flaticon-air-conditioner"></i>Air conditioning</li>
                                        <li><i class="flaticon-wifi"></i>Wifi</li>
                                        <li><i class="flaticon-transport"></i>Parking</li>
                                        <li><i class="flaticon-people-2"></i>Pool</li>
                                        <li><i class="flaticon-weightlifting"></i>Gym</li>
                                        <li><i class="flaticon-building"></i>Alarm</li>
                                        <li><i class="flaticon-old-telephone-ringing"></i>Balcony</li>
                                        <li><i class="flaticon-monitor"></i>TV</li>
                                    </ul>
                                </div>
                            </section>
                            <section>
                                <h3>Overview</h3>
                                <dl>
                                    <dt>Model</dt>
                                    <dd>Maxima</dd>
                                    <dt>Condition</dt>
                                    <dd>Brand New</dd>
                                    <dt>Year</dt>
                                    <dd>2018</dd>
                                    <dt>Price</dt>
                                    <dd>$178,000</dd>
                                </dl>
                            </section>
                            <section>
                                <h3>Last Review</h3>
                                <div class="ratings" data-rating="5">
                                    <span>
                                        <i class="fa fa-star s1 active" data-score="1"></i>
                                        <i class="fa fa-star s2 active" data-score="2"></i>
                                        <i class="fa fa-star s3 active" data-score="3"></i>
                                        <i class="fa fa-star s4 active" data-score="4"></i>
                                        <i class="fa fa-star s5 active" data-score="5"></i>
                                    </span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p>
                            </section>
                            <a href="properties-details.html" class="btn button-sm button-theme">Show Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="TemplateUser/the-nest/js/jquery-2.2.0.min.js"></script>
<script src="TemplateUser/the-nest/js/bootstrap.min.js"></script>
<script src="TemplateUser/the-nest/js/bootstrap-submenu.js"></script>
<script src="TemplateUser/the-nest/js/rangeslider.js"></script>
<script src="TemplateUser/the-nest/js/jquery.mb.YTPlayer.js"></script>
<script src="TemplateUser/the-nest/js/wow.min.js"></script>
<script src="TemplateUser/the-nest/js/bootstrap-select.min.js"></script>
<script src="TemplateUser/the-nest/js/jquery.easing.1.3.js"></script>
<script src="TemplateUser/the-nest/js/jquery.scrollUp.js"></script>
<script src="TemplateUser/the-nest/js/jquery.mCustomScrollbar.concat.min.js"></script>


<script src="TemplateUser/the-nest/js/jquery.filterizr.js"></script>
<script src="TemplateUser/the-nest/js/jquery.magnific-popup.min.js"></script>

<script src="TemplateUser/the-nest/js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="TemplateUser/the-nest/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->



</body>


</html>
