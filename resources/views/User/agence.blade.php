@extends('UserLayouts.agence1')

@section('content')


<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform" action="{{ route('agence') }}" method="POST" enctype="multipart/form-data">
             {{csrf_field()}}
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active"></li>
                <li>Social Profiles</li>
                <li>Account Setup</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">AGENCE IMMOBILIERE</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
                                <div class="form-group">
                                <label>NOM AGENCE</label>
                                    <input type="text" class="form-control" name="nomagence"  placeholder="NOM AGENCE">
                                </div>

                                <div class="form-group">
                                    <label>NUMERO D'IDENTIFICATION FISCALE</label>
                                    <input type="text" class="form-control" name="nif"  placeholder="NUMERO D'IDENTIFICATION FISCALE">
                                </div>

                <input type="button" name="next" class="next action-button" value="Next"/>

            </fieldset>
            <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>

                <div class="form-group">
    <label for="exampleTextarea">Description de votre agence immobilière</label>
    <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
  </div>

                 <div class="form-group">
                     <label>LOGO</label>
                                <input type="file" name="logo" class="form-control" placeholder="LOGO">
                            </div>

                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                 <div class="form-group">
                    <label>CONTACT</label>
                                    <input type="text" class="form-control" name="contact"  placeholder="Contact">
                                </div>
                <div class="form-group">
                    <label>email</label>
                                    <input type="email" class="form-control" name="email"  placeholder="Agence email">
                                </div>

                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button"/>

            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->

        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->


@endsection
