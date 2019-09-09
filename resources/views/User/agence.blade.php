@extends('UserLayouts.agence1')
@section('content')
<body style="background-image:url(TemplateUser/the-nest/img/testimonial-2.jpg);">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform" action="{{ route('agence') }}" method="POST" enctype="multipart/form-data">
             {{csrf_field()}}
            <ul id="progressbar">
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
            <fieldset>
                <h2 class="fs-title">CREER VOTRE AGENCE IMMOBILIERE</h2>
                <h3 class="fs-subtitle"></h3>
                                <div class="form-group {{$errors->has('nomagence') ? 'has-error' : ''}}">
                                <label>NOM AGENCE</label>
                                    <input type="text" class="form-control" name="nomagence"  placeholder="NOM AGENCE" value="{{ old('nomagence') }}">
                                     {!!$errors->first('nomagence','<span class="help-block">:message</span>')!!}
                                </div>
                                <div class="form-group {{$errors->has('siteweb') ? 'has-error' : ''}}">
                                <label>SITE WEB</label>
                                    <input type="text" class="form-control" name="siteweb"  placeholder="SITE WEB" value="{{ old('siteweb') }}">
                                    {!!$errors->first('siteweb','<span class="help-block">:message</span>')!!}
                                </div>
                                <div class="form-group  {{$errors->has('nif') ? 'has-error' : ''}} ">
                                    <label>NUMERO D'IDENTIFICATION FISCALE</label>
                                    <input type="number" min="0" class="form-control" name="nif"  placeholder="NUMERO D'IDENTIFICATION FISCALE" value="{{ old('nif') }}">
                                    {!!$errors->first('nif','<span class="help-block">:message</span>')!!}
                                </div>
                <input type="button" name="next" class="next action-button" value="Suivant"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">CREER VOTRE AGENCE IMMOBILIERE</h2>
                <h3 class="fs-subtitle"></h3>
                <div class="form-group {{$errors->has('description') ? 'has-error' : ''}}">
    <label for="exampleTextarea">Description de votre agence immobilière</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
     {!!$errors->first('description','<span class="help-block">:message</span>')!!}
  </div>
                 <div class="form-group {{$errors->has('logo') ? 'has-error' : ''}}">
                     <label>LOGO</label>
                                <input type="file" name="logo" class="form-control" placeholder="LOGO" value="{{ old('logo') }}">
                     {!!$errors->first('logo','<span class="help-block">:message</span>')!!}
                            </div>
                 <div class="form-group {{$errors->has('adresse') ? 'has-error' : ''}}">
                                <label>ADRESSE</label>
                                    <input type="text" class="form-control" name="adresse"  placeholder="ADRESSE" value="{{ old('adresse') }}">
                                    {!!$errors->first('adresse','<span class="help-block">:message</span>')!!}
                                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Précedent"/>
                <input type="button" name="next" class="next action-button" value="Suivant"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">CREER VOTRE AGENCE IMMOBILIERE</h2>
                <h3 class="fs-subtitle"></h3>
                 <div class="form-group {{$errors->has('telephone') ? 'has-error' : ''}}">
                    <label>Téléphone</label>
                                    <input type="number" min="0" class="form-control" name="telephone"  placeholder="Numero de téléphone" value="{{ old('telephone') }}">
                                    {!!$errors->first('telephone','<span class="help-block">:message</span>')!!}
                                </div>
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label>email</label>
                                    <input type="email" class="form-control" name="email"  placeholder="Email de l'Agence" value="{{ old('email') }}">
                                    {!!$errors->first('email','<span class="help-block">:message</span>')!!}
                                </div>
                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label>Mot de passe</label>
                                    <input type="password" class="form-control" name="password"  placeholder="Saisir le mot de passe" value="{{ old('password') }}">
                                    {!!$errors->first('password','<span class="help-block">:message</span>')!!}
                                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Précedent"/>
                <input type="submit" name="submit" class="submit action-button"/>
            </fieldset>
        </form>
    </div>
</div>
</body>
@endsection
