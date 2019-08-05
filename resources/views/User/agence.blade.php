@extends('UserLayouts.agence')

@section('content')


<!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform" method="POST" action="">
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
                                    <input type="text" class="form-control" name="nom"  placeholder="NOM AGENCE">
                                </div>

                                <div class="form-group">
                                    <label>NUMERO D'IDENTIFICATION FISCALE</label>
                                    <input type="text" class="form-control" name="nom"  placeholder="NIF">
                                </div>

                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Social Profiles</h2>
                <h3 class="fs-subtitle">Your presence on the social network</h3>
                 <div class="form-group">
                     <label>LOGO</label>
                                <input type="file" name="logo" class="form-control" placeholder="LOGO">
                            </div>
                <div class="form-group">
                    <label>CONTACT</label>
                                    <input type="text" class="form-control" name="nom"  placeholder="Contact">
                                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>

                <div class="form-group">
                    <label>PASSWORD</label>
                                    <input type="password" class="form-control" name="pass"  placeholder="Password">
                                </div>
                 <div class="form-group">
                    <label>CONFIRMEE PASSWORD</label>
                                    <input type="password" class="form-control" name="pass"  placeholder="Confirm Password">
                                </div>


                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->
<div class="dme_link">
            <p><a href="{{url('/login')}}" >revenir à la connexion</a></p>
        </div>
        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->


@endsection
