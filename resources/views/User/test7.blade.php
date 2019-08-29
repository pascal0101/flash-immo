@extends('UserLayouts.test')

@section('content')
<div style="margin:40px">

    @foreach ($offres as $offre)

    <div>

    <p>{{$offre->Titre}}</p>

     </div>

     @endforeach
</div>


@endsection
