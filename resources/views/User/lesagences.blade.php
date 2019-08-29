<!-- Main header end -->
@extends('UserLayouts.map')

@section('content')
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>RECHERCHER VOTRE AGENCE IMMOBILIERE</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{url('/lesagences')}}">Acceuil</a></li>
                    <li class="active">Les agences</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- view section start -->


<div class="agent-section content-area">
    <div class="container">
            <div class="row">

            <div class="col-lg-12">
                <form class="form-search view-search" role="search">

                    <div class="form-group mb-0">
                        <input type="text" class="form-control" placeholder="Search" name="search" id="search">
                    </div>
                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <br>
        <br>
        <br>


        <div class="clearfix"></div>

        <div class="row">

               <div id="rech">

               </div>
                            <div style="text-align:center">
                {{$agences->links()}}
                    </div>
        </div>
    </div>
</div>
@endsection
