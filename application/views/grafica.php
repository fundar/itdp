<?php 
  echo '<div class="total"> Total encuestados:' . $total . '</div>';
  echo '<div class="chart_area" id="chartContainer' . $id . '"></div>'; 
?>
<?php
echo <<<EOF
<script type="text/javascript">
    function print_chart(container){

        var chartData = [
            { opcion:'', porcentaje:'$esp_publico', color:'#f79420', concepto:'Espacio Público'},
            { opcion:'', porcentaje:'$inf_peatonal', color:'#f79420', concepto:'Infraestructura Peatonal'},
            { opcion:'', porcentaje:'$inf_ciclista', color:'#f79420', concepto:'Infraestructura Ciclista'},
            { opcion:'', porcentaje:'$tran_publico', color:'#f79420', concepto:'Infraestructura Vehicular'},
            { opcion:'', porcentaje:'$inf_coche', color:'#f79420', concepto:'Transporte Público'},
        ]

        var chart = new AmCharts.AmSerialChart();
            chart.dataProvider = chartData;
            chart.categoryField = "opcion";
            chart.startDuration = 1.5;

            chart.marginRight = 20;
            chart.marginLeft = 0;
            chart.marginBottom = 10;
            chart.marginTop = 10;

        var categoryAxis = chart.categoryAxis;
            categoryAxis.axisAlpha = 0;
            categoryAxis.autoGridCount = false; 

        var graph = new AmCharts.AmGraph();
            graph.valueField = "porcentaje"
            graph.type = "column";
            graph.balloonText = "[[concepto]]: [[porcentaje]]%";
            graph.lineAlpha = 0;
            graph.fillAlphas = 1;
            graph.colorField = "color";

            chart.addGraph(graph);
            chart.angle = 30;

        chart.write(container);
        
    }
    
    print_chart('chartContainer' + '$id')
</script>
EOF;
?>