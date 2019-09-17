@extends('AdminLayouts.statistique ')

@section('content')
<div class="col-md-6 col-sm-6">
                    {!! $pie_chart->html() !!}
        </div>
<div id="piechart_3d" style="width: 900px; height: 500px;"></div>
@endforeach
