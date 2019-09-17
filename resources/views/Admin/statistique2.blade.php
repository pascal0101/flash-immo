@extends('AdminLayouts.statistique ')

@section('content')


  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],

          ['Location', {{$test1}}],
          ['Vente', {{$test2}}],


        ]);

        var options = {
          title: 'Les types d\'offre',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
<body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>

<body>



@endsection
