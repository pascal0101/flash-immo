@extends('UserLayouts.test')

@section('content')
<div style="margin:40px">

    @foreach ($offres as $offre)

    <div>

    <p>
        {{$offre->Titre}} <a href="{{ route('favoris',[$offre->id])}}"><i class="fa fa-heart-o"></i></a>
    </p>


     </div>

     @endforeach
</div>


@endsection
