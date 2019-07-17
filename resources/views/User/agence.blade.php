@extends('UserLayouts.login')

@section('content')

<body style="background-image:url(TemplateUser/the-nest/img/testimonial-2.jpg);">
<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Main title -->
                        <div class="main-title">
                            <h1><span>AGENCE IMMOBILIERE</span></h1>
                        </div>
                        <!-- Form start-->
                        <form action="https://storage.googleapis.com/themevessel-products/the-nest/index.html" method="GET">
                            <div class="form-group">
                                <input type="text" name="NOM AGENCE" class="input-text" placeholder="NOM AGENCE">
                            </div>
                            <div class="form-group">
                                <input type="text" name="NIF" class="input-text" placeholder="NIF">
                            </div>
                            <div class="form-group">
                                <input type="file" name="logo" class="input-text" placeholder="LOGO">
                            </div>
                            <div class="form-group">
                                <input type="text" name="contact" class="input-text" placeholder="Contact">
                            </div>
                            <div class="form-group">
                             <textarea class="input-text" name="description" placeholder="Description"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button-md button-theme btn-block">ENREGISTRER<i class="fa fa-check"></i></button>
                            </div>
                        </form>
                        <!-- Form end-->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                            Je veux <a href="{{url('/login')}}">revenir à la connexion</a>
                        </span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
@endsection
