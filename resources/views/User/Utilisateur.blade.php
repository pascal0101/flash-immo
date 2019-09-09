@extends('UserLayouts.agence')

@section('content')

<body style="background-image:url(TemplateUser/the-nest/img/testimonial-2.jpg);">
  @if(session()->has('message'))

        <div class="alert alert-success">
            {{ session()->get('message')}}
        </div>
      @endif
<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform" action="{{ route('utilisateur') }}" method="POST" enctype="multipart/form-data">
             {{csrf_field()}}
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">CREER COMPTE</h2>
                <h3 class="fs-subtitle"></h3>
                                <div class="form-group {{$errors->has('nom') ? 'has-error' : ''}}">
                                    <label>NOM</label>
                                    <input type="text" class="form-control" name="nom"  placeholder="NOM" value="{{ old('nom') }}">
                                    {!!$errors->first('nom','<span class="help-block">:message</span>')!!}
                                </div>

                                <div class="form-group {{$errors->has('prenom') ? 'has-error' : ''}}">
                                    <label>PRENOM</label>
                                    <input type="text" class="form-control" name="prenom"  placeholder="PRENOM" value="{{ old('prenom') }}">
                                    {!!$errors->first('prenom','<span class="help-block">:message</span>')!!}
                                </div>
                     <div class="form-group">
                <label for="exampleFormControlSelect1">SEXE</label>
                <select class="form-control" id="exampleFormControlSelect1" name="sexe">
                <option value="M">Masculin</option>
                <option value="F">Feminin</option>
                </select>
            </div>

                <input type="button" name="next" class="next action-button" value="Suivant"/>
                <div class="dme_link">
            <p><a href="{{url('/login')}}" >Revenir à la connexion</a></p>
        </div>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">CREER COMPTE</h2>
                <h3 class="fs-subtitle"></h3>
                 <div class="form-group {{$errors->has('numtel') ? 'has-error' : ''}}">
                     <label>NUMERO TELEPHONE</label>
                                <input type="number" min="0" name="numtel" class="form-control" placeholder="NUMERO TELEPHONE" value="{{ old('numtel') }}">
                                {!!$errors->first('numtel','<span class="help-block">:message</span>')!!}
                            </div>
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                        <label>EMAIL</label>
                                    <input type="email" class="form-control" name="email"  placeholder="email" value="{{ old('email') }}">
                                {!!$errors->first('email','<span class="help-block">:message</span>')!!}
                                </div>

                     <div class="form-group {{$errors->has('login') ? 'has-error' : ''}}">
                        <label>LOGIN</label>
                                    <input type="text" class="form-control" name="login"  placeholder="LOGIN" value="{{ old('login') }}">
                                    {!!$errors->first('login','<span class="help-block">:message</span>')!!}
                                </div>

                    <div class="form-group {{$errors->has('numerocin') ? 'has-error' : ''}}">
                        <label>NUMERO CIN</label>
                                <input type="number" min="0" name="numerocin" class="form-control" placeholder="NUMERO CIN" value="{{ old('numerocin') }}">
                                {!!$errors->first('numerocin','<span class="help-block">:message</span>')!!}
                            </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Précedent"/>
                <input type="button" name="next" class="next action-button" value="Suivant"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">CREER COMPTE</h2>
                <h3 class="fs-subtitle"></h3>
                <div class="form-group {{$errors->has('photo') ? 'has-error' : ''}}">
                    <label>PHOTO</label>
                                <input type="file" name="photo" class="form-control" placeholder="PHOTO">
                                {!!$errors->first('photo','<span class="help-block">:message</span>')!!}
                            </div>

                 <div class="form-group {{$errors->has('photocin') ? 'has-error' : ''}}">
                    <label>PHOTO DU CIN</label>
                                <input type="file" name="photocin" class="form-control" placeholder="PHOTO DU CIN">
                                {!!$errors->first('photocin','<span class="help-block">:message</span>')!!}
                            </div>

                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                        <label>MOT DE PASSE</label>
                                    <input type="password" class="form-control" name="password"  placeholder="Mot de passe" value="{{ old('password') }}">
                                    {!!$errors->first('password','<span class="help-block">:message</span>')!!}
                                </div>
                 <div class="form-group {{$errors->has('password_confirmation') ? 'has-error' : ''}}">
                    <label>MOT DE PASSE COMFIRMEE</label>
                                    <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirmez le Mot de passe">
                                    {!!$errors->first('password_confirmation','<span class="help-block">:message</span>')!!}
                                </div>


                <input type="button" name="previous" class="previous action-button-previous" value="Précedent"/>
                <input type="submit" class="submit action-button"/>

            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->

        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->

</body>
@endsection
