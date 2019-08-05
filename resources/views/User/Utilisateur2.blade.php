@extends('UserLayouts.login')

@section('content')
<body style="background-image:url(TemplateUser/the-nest/img/testimonial-2.jpg);">
<div class="content-area-7 submit-property">
    <div class="container">
        <div class="details" style="background-color: ghostwhite">
        <div class="row">
            <div class="col-md-12">
                <div class="notification-box" style="background-color: #d5ffba">
                    <h3>Vous n'avez pas de compte?</h3>

                </div>
            </div>
            <div class="col-md-10" style="margin-left:100px">
                <div class="submit-address">
                    <form method="GET">
                        <div class="main-title-2">
                            <h1 style="text-align: center"><marquee><strong><span>Enregistrer</span> Vos Informations</strong></marquee></h1>
                        </div>
                        <div class="search-contents-sidebar mb-30">

                        <div class="row mb-30 ">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label style="color:black">NOM</label>
                                    <input type="text" class="input-text" name="nom"  placeholder="NOM">
                                </div>
                            </div>
                             <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label style="color:black">PRENOM</label>
                                    <input type="text" class="input-text" name="prenom"  placeholder="PRENOM">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label style="color:black">SEXE</label>
                                    <select class="selectpicker search-fields" name="sexe" data-live-search="true" data-live-search-placeholder="Search value">
                                        <option>Masculin</option>
                                        <option>Feminin</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label style="color:black">NUMERO TELEPHONE</label>
                                    <input type="text" class="input-text" name="numtel"  placeholder="NUMERO TELEPHONE">
                                </div>
                            </div>

                         <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label style="color:black">EMAIL</label>
                                    <input type="email" class="input-text" name="email"  placeholder="EMAIL">
                                </div>
                            </div>
                             <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label style="color:black">NUMERO CIN</label>
                                    <input type="text" class="input-text" name="numerocin"  placeholder="NUMERO CIN">
                                </div>
                            </div>


                         <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label style="color:black">LOGIN</label>
                                    <input type="text" class="input-text" name="login"  placeholder="LOGIN">
                                </div>
                            </div>
                             <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label style="color:black">PASSWORD</label>
                                    <input type="password" class="input-text" name="password"  placeholder="PASSWORD">
                                </div>
                            </div>


                         <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label style="color:black">PHOTO</label>
                                    <input type="file" class="input-text" name="photo"  >
                                </div>
                            </div>
                             <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label style="color:black">CIN</label>
                                    <input type="file" class="input-text" name="cin">
                                </div>
                            </div>


  </div>


                            <div class="form-group">
                                <button type="submit" class="button-md button-theme btn-block" style="width: 80%;margin-left:100px" >ENREGISTRER<i class="fa fa-check"></i></button>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
@endsection
