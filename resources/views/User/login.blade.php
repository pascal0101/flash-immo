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
                            <h1><span>S'identifier</span></h1>
                        </div>
                        <!-- Form start -->
                        <form action="" method="">

                            <div class="input-group">
                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                        <input type="text" id="input1-group1" name="input1-group1" placeholder="Username" class="form-control">
                        </div>

                        <br>

                            <div id="app">
                            <password-input></password-input>
                            </div>

                            <div class="checkbox">
                                <div class="ez-checkbox pull-left">
                                    <label>
                                        <input type="checkbox" class="ez-hide">
                                        Se souvenir
                                    </label>
                                </div>
                                <a href="{{url('/password')}}" class="link-not-important pull-right">Mot de passe oublié</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button-md button-theme btn-block">Connexion</button>
                            </div>
                        </form>
                        <!-- Form end -->
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>
                            Nouveau? <a href="{{url('/utilisateur')}}">S'inscrire maintenant</a>
                        </span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
 <script src="/js/app.js"></script>
 </body>
@endsection
