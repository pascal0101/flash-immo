<!DOCTYPE html>
<html lang="zxx">


<head>

    <title>FLASH-IMMO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/css/bootstrap-submenu.css">
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="TemplateUser/the-nest/css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="TemplateUser/the-nest/css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="TemplateUser/the-nest/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="TemplateUser/the-nest/css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="TemplateUser/the-nest/css/magnific-popup.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/css/style.css">
    <link rel="stylesheet" type="text/css"  href="TemplateUser/the-nest/css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="TemplateUser/the-nest/img/favicon.ico" type="image/x-icon" >



    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="TemplateUser/the-nest/css/ie10-viewport-bug-workaround.css">

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
<header class="top-header hidden-xs" id="top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="list-inline">
                   <a href="#"><i class="fa fa-phone"></i>91428199</a>
                    <a href="#"><i class="fa fa-envelope"></i>flash-immo@africantechlab.com</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <ul class="top-social-media pull-right">
                     <li>
                       <a href="{{url('/')}}" class="sign-in"><i class="fa fa-home"></i> Acceuil</a>
                    </li>
                    <li>
                        <a href="{{url('/login')}}" class="sign-in"><i class="fa fa-sign-in"></i> S'Identifier</a>
                    </li>
                    <li>
                        <a href="{{url('/utilisateur')}}" class="sign-in"><i class="fa fa-user"></i> S'enregistrer</a>
                    </li>
                     <li>
                       <a href="{{url('/agence')}}" class="sign-in"><i class="fa fa-home"></i> Enregistrer mon agence</a>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</header>
@yield('content')

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
<script src="TemplateUser/the-nest/js/leaflet.js"></script>
<script src="TemplateUser/the-nest/js/leaflet-providers.js"></script>
<script src="TemplateUser/the-nest/js/leaflet.markercluster.js"></script>
<script src="TemplateUser/the-nest/js/dropzone.js"></script>
<script src="TemplateUser/the-nest/js/jquery.filterizr.js"></script>
<script src="TemplateUser/the-nest/js/jquery.magnific-popup.min.js"></script>
<script src="TemplateUser/the-nest/js/maps.js"></script>
<script src="TemplateUser/the-nest/js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="TemplateUser/the-nest/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="TemplateUser/the-nest/js/ie10-viewport-bug-workaround.js"></script>

</body>

<!-- Mirrored from storage.googleapis.com/themevessel-products/the-nest/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jul 2019 11:18:13 GMT -->
</html>
