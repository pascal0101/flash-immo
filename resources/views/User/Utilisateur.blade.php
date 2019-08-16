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
                                <div class="form-group">
                                    <label>NOM</label>
                                    <input type="text" class="form-control" name="nom"  placeholder="NOM">
                                </div>

                                <div class="form-group">
                                    <label>PRENOM</label>
                                    <input type="text" class="form-control" name="prenom"  placeholder="PRENOM">
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
                 <div class="form-group">
                     <label>NUMERO TELEPHONE</label>
                                <input type="text" name="numtel" class="form-control" placeholder="NUMERO TELEPHONE">
                            </div>
                <div class="form-group">
                        <label>EMAIL</label>
                                    <input type="email" class="form-control" name="email"  placeholder="email">
                                </div>

                     <div class="form-group">
                        <label>LOGIN</label>
                                    <input type="text" class="form-control" name="login"  placeholder="LOGIN">
                                </div>

                    <div class="form-group">
                        <label>NUMERO CIN</label>
                                <input type="text" name="numerocin" class="form-control" placeholder="NUMERO CIN">
                            </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Précedent"/>
                <input type="button" name="next" class="next action-button" value="Suivant"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">CREER COMPTE</h2>
                <h3 class="fs-subtitle"></h3>
                <div class="form-group">
                    <label>PHOTO</label>
                                <input type="file" name="photo" class="form-control" placeholder="PHOTO">
                            </div>

                 <div class="form-group">
                    <label>PHOTO DU CIN</label>
                                <input type="file" name="photocin" class="form-control" placeholder="PHOTO DU CIN">
                            </div>

                <div class="form-group">
                        <label>MOT DE PASSE</label>
                                    <input type="password" class="form-control" name="password"  placeholder="Mot de passe">
                                </div>
                 <div class="form-group">
                    <label>MOT DE PASSE COMFIRMEE</label>
                                    <input type="password" class="form-control" name="passwordconfirm"  placeholder="Confirmez le Mot de passe">
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
