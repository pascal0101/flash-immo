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
                             <img src="TemplateUser/the-nest/img/logos/logo.png" alt="logo">
                            <br>
                             @error('email')
                                    <span class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @error('password')
                                    <span class="alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <!-- Form start -->

                       <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
         <input id="email" type="email" placeholder="login" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
  </div>



                            </div>
                            <div class="form-group">
                                <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
       <input id="password" type="password" placeholder="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
  </div>



                            </div>
                            <div class="checkbox">
                                <div class="ez-checkbox pull-left">
                                    <label>
                                        <input type="checkbox" class="ez-hide">
                                        Se souvenir
                                    </label>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">

                                <button type="submit" class="button-md button-theme btn-block"><i class="fa fa-lock"></i> Connexion</button>
                            </div>
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                       Mot de passe oublié
                                    </a>
                                @endif
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
