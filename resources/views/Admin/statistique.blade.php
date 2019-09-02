@extends('AdminLayouts.index1')

@section('content')

<div class="col-md-6">
               {!! $pie_chart->html() !!}
            </div>




@endsection
