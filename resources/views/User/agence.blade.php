@extends('UserLayouts.agence1')

@section('content')

<body style="background-image:url(TemplateUser/the-nest/img/testimonial-2.jpg);">
<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform" action="{{ route('agence') }}" method="POST" enctype="multipart/form-data">
             {{csrf_field()}}
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">CREER VOTRE AGENCE IMMOBILIERE</h2>
                <h3 class="fs-subtitle"></h3>
                                <div class="form-group">
                                <label>NOM AGENCE</label>
                                    <input type="text" class="form-control" name="nomagence"  placeholder="NOM AGENCE">
                                </div>

                                <div class="form-group">
                                <label>SITE WEB</label>
                                    <input type="text" class="form-control" name="siteweb"  placeholder="SITE WEB">
                                </div>

                                <div class="form-group">
                                    <label>NUMERO D'IDENTIFICATION FISCALE</label>
                                    <input type="text" class="form-control" name="nif"  placeholder="NUMERO D'IDENTIFICATION FISCALE">
                                </div>

                <input type="button" name="next" class="next action-button" value="Suivant"/>

            </fieldset>
            <fieldset>
                <h2 class="fs-title">CREER VOTRE AGENCE IMMOBILIERE</h2>
                <h3 class="fs-subtitle"></h3>

                <div class="form-group">
    <label for="exampleTextarea">Description de votre agence immobilière</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
  </div>

                 <div class="form-group">
                     <label>LOGO</label>
                                <input type="file" name="logo" class="form-control" placeholder="LOGO">
                            </div>

                 <div class="form-group">
                                <label>ADRESSE</label>
                                    <input type="text" class="form-control" name="adresse"  placeholder="ADRESSE">
                                </div>


                <input type="button" name="previous" class="previous action-button-previous" value="Précedent"/>
                <input type="button" name="next" class="next action-button" value="Suivant"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">CREER VOTRE AGENCE IMMOBILIERE</h2>
                <h3 class="fs-subtitle"></h3>
                 <div class="form-group">
                    <label>CONTACT 1</label>
                                    <input type="text" class="form-control" name="contact1"  placeholder="Contact1">
                                </div>
                     <div class="form-group">
                                <label>CONTACT 2</label>
                                    <input type="text" class="form-control" name="contact2"  placeholder="Contact2">
                                </div>

                <div class="form-group">
                    <label>email</label>
                                    <input type="email" class="form-control" name="email"  placeholder="Email de l'Agence">
                                </div>

                <input type="button" name="previous" class="previous action-button-previous" value="Précedent"/>
                <input type="submit" name="submit" class="submit action-button"/>

            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->

        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->

</body>
@endsection
