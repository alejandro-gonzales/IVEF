@extends('template.main.index')
@section('title', 'Habitantes por Departamento')
@section('css')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
            ['Departamento', 'Habitantes'],
            @php
                foreach($departamentos as $departamento){
                    echo "['".$departamento->nombre."',".$departamento->habitantes."],";
                }
            @endphp
            ]);

            var options = {
            title: 'Grafico Habitantes por Departamento',
            is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('grafico'));
            chart.draw(data, options);
        }
    </script>
@endSection

@section('content')
    <div id="grafico" style="width: 1200px; height: 900px;"></div>
@endSection

