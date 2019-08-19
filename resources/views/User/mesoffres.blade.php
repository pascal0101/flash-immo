@extends('UserLayouts.index1')

@section('content')
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Mes Propriétés</h1>
                <ul class="breadcrumbs">
                <li><a href="{{url('/user')}}">Acceuil</a></li>
                    <li class="active">Mes Propriétés</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- My Propertiess start -->
<div class="content-area-7 my-properties">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- User account box start -->
                <div class="user-account-box">
                    <div class="header clearfix">
                        <div class="edit-profile-photo">
                            <img src="/profil/{{auth()->user()->avatar}}" alt="avatar" class="img-responsive">
                        </div>
                    <h3>{{Auth::user()->name}}</h3>
                        <p>{{Auth::user()->email}}</p>

                        <ul class="social-list clearfix">
                            <li>
                                <a href="#" class="facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="rss">
                                    <i class="fa fa-rss"></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="content">
                        <ul>
                            <li>
                                <a href="{{url('/profil')}}">
                                    <i class="flaticon-social"></i>Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/mesbiens')}}" class="active">
                                    <i class="flaticon-apartment"></i>Mes Propriétés
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/favoris')}}">
                                    <i class="fa fa-heart"></i>Propriétés favoris
                                </a>
                            </li>
                            <li>
                            <a href="{{url('/offre')}}">
                                    <i class="fa fa-plus"></i>Soumetre une nouvelle offre
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
                <!-- User account box end -->
            </div>

             <div class="col-lg-8 col-md-8 col-sm-12">
                 <div class="main-title-2">
                     <h1><span>Mes </span> Propriétés</h1>
                 </div>
                <!-- table start -->
                <table class="manage-table responsive-table">
                    <tbody>
                        @forelse($offres as $offre)
                    <tr>
                        <td class="title-container">
                            <img src="TemplateUser/the-nest/img/my-properties/my-properties-1.jpg" alt="my-properties-1" class="img-responsive hidden-xs">
                            <div class="title">
                                <h4><a href="#">{{$offre->Titre}}</a></h4>
                                <span><i class="fa fa-map-marker"></i> {{$offre->Adresse}} </span>
                                <span class="table-property-price">{{$offre->Prix}} FCFA</span>

                            </div>
                        </td>
                        <td class="expire-date hidden-xs">{{$offre->created_at->diffForHumans()}}</td>
                        <td class="action">
                            <a href="#"><i class="fa fa-pencil"></i> Modifier</a>
                            <a href="{{ route('detail',[$offre->id])}}"><i class="fa  fa-eye"></i> Voir</a>
                            <a href="{{ route('supprimeoffre',[$offre->id])}}" class="delete"><i class="fa fa-remove"></i>Supprimer</a>
                        </td>
                    </tr>
                    @empty
                    <h3>Vous n'avez publié aucune annonce sur la plateforme</h3>
                    @endforelse



                    </tbody>
                </table>
                <!-- table end -->
            </div>
        </div>
    </div>
</div>
<!-- My Propertiess end -->
@endsection
