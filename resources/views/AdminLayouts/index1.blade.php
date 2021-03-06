<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ahoe</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="TemplateAdmin/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="TemplateAdmin/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="TemplateAdmin/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="TemplateAdmin/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="TemplateAdmin/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="TemplateAdmin/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="TemplateAdmin/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="TemplateAdmin/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <style>
    .navbar .menu-title {
        padding: 0px;
    }

    </style>
</head>

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{url('/admin')}}"><img src="TemplateAdmin/images/logo1.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="{{url('/admin')}}"><img src="TemplateAdmin/images/logo1.png" alt="Logo"></a>
            </div>

           <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{url('/admin')}}"> <i class="menu-icon fa fa-dashboard"></i>Acceuil </a>
                    </li>
                    <h3 class="menu-title">Administrateur</h3><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon  fa fa-list-alt"></i>OFFRES</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{url('/offres')}}">Les Offres</a></li>
                            <li><i class="fa fa-table"></i><a href="{{url('/active')}}">Activées</a></li>
                            <li><i class="fa fa-table"></i><a href="{{url('/desactive')}}">Non Activées</a></li>
                        </ul>
                    </li>


                     <li class="menu-item-has-children dropdown">
                     <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>CLIENTS</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{url('/agences')}}">Les Agences</a></li>
                            <li><i class="fa fa-table"></i><a href="{{url('/clients')}}">Les Clients</a></li>
                        </ul>
                     </li>
                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-wrench"></i>PARAMETRES</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{url('/ville')}}">Villes</a></li>

                            <li><i class="fa fa-table"></i><a href="{{url('/typebien')}}">Type Biens</a></li>
                            <li><i class="fa fa-table"></i><a href="{{url('/typeoffre')}}">Type Offres</a></li>
                        </ul>
                    </li>
                    <li>
                    <a href="{{url('/messages')}}"> <i class="menu-icon fa fa-envelope"></i>MESSAGES </a>
                    </li>

                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart-o"></i>STATISTIQUES SELON</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-bar-chart-o"></i><a href="{{url('/statistiques1')}}">Etat Offres</a></li>
                            <li><i class="menu-icon fa fa-bar-chart-o"></i><a href="{{url('/statistiques')}}">Type de biens</a></li>
                            <li><i class="menu-icon fa fa-bar-chart-o"></i><a href="{{url('/statistiques2')}}">Type offres</a></li>

                        </ul>
                    </li>



                    <h3 class="menu-title"></h3><!-- /.menu-title -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">0</span>
                            </button>

                        </div>

                        <div class="dropdown for-message">
                        <a class="btn btn-secondary dropdown-toggle" href="{{url('/messages')}}">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">0</span>
                        </a>

                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="TemplateAdmin/images/pascal.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Mon Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Parametres</a>

                        <a class="nav-link" href="{{url('admin/logout')}}"><i class="fa fa-power-off"></i> Deconnexion</a>
                        </div>
                    </div>



                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
  <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>ADMINISTRATEUR</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Tableau de bord</a></li>
                            <li><a href="{{url('/admin')}}">Acceuil</a></li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>


        @yield('content')

    <script src="TemplateAdmin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="TemplateAdmin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="TemplateAdmin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="TemplateAdmin/assets/js/main.js"></script>


    <script src="TemplateAdmin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="TemplateAdmin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="TemplateAdmin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="TemplateAdmin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="TemplateAdmin/vendors/jszip/dist/jszip.min.js"></script>
    <script src="TemplateAdmin/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="TemplateAdmin/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="TemplateAdmin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="TemplateAdmin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="TemplateAdmin/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="TemplateAdmin/assets/js/init-scripts/data-table/datatables-init.js"></script>

      {!! Charts::scripts() !!}

        <Script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
        })
        </Script>

    </body>

    </html>


