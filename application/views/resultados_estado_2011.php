  <?php $this->load->view('header'); ?> 
  <link rel="stylesheet" href="<?php echo base_url()?>sources/css/resultados.css">
  <div id="wrapper">
    <div id="section">
      <h1>Resultados de 
        <?php 
          switch ($estado) {
          case "Distrito-Federal":
              echo "Distrito Federal";
              break;
          case "Estado-de-México":
              echo "Estado de México";
              break;
          case "Nuevo-Leon":
              echo "Monterrey";
              break;
          default:
            echo $estado;
          }

        ?>

      </h1>
      <div class="chart_area" id="chartContainer" >
        <div></div>
      </div>
      <div id="acotaciones2"></div>
    </div>
  </div>
  <?php $this->load->view('footer'); ?> 
  <script type="text/javascript" src="<?php echo base_url()?>sources/js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>sources/js/amstock.js" ></script>

<?php
if ($estado == "Aguascalientes"){
  $gob_inf_coche = 89.7;
  $gob_tran_publico = 0.1;
  $gob_inf_ciclista = 0.5;
  $gob_esp_publico = 9.6;
  $gob_inf_peatonal = 0;
}
if ($estado == "Colima"){
 $gob_inf_coche = 61.5;
  $gob_tran_publico = 0;
  $gob_inf_ciclista = 0;
  $gob_esp_publico = 27.8;
  $gob_inf_peatonal = 10.7;
}
if ($estado == "Distrito-Federal"){
  $gob_inf_coche = 52;
  $gob_tran_publico = 13;
  $gob_inf_ciclista = 0;
  $gob_esp_publico = 28;
  $gob_inf_peatonal = 6;
}
if ($estado == "Estado-de-México"){
  $gob_inf_coche = 70.9;
  $gob_tran_publico = 26.8;
  $gob_inf_ciclista = 0;
  $gob_esp_publico = 1.1 ;
  $gob_inf_peatonal = 1.2 ;
}
if ($estado == "Guanajuato"){
  $gob_inf_coche = 95;
  $gob_tran_publico = 0;
  $gob_inf_ciclista = 1;
  $gob_esp_publico = 3;
  $gob_inf_peatonal = 1;
}
if ($estado == "Guadalajara"){
  $gob_inf_coche = 91.6;
  $gob_tran_publico = 0;
  $gob_inf_ciclista = 2.1;
  $gob_esp_publico = 4.7;
  $gob_inf_peatonal = 1.6;
}
if ($estado == "Nuevo-Leon"){
  $gob_inf_coche = 83;
  $gob_tran_publico = 1.5;
  $gob_inf_ciclista = 0;
  $gob_esp_publico = 14.3;
  $gob_inf_peatonal = 1.2;
}
if ($estado == "Puebla"){
  $gob_inf_coche = 82.3;
  $gob_tran_publico = 15.6;
  $gob_inf_ciclista = 0;
  $gob_esp_publico = 1.6;
  $gob_inf_peatonal = 0.6;
}
if ($estado == "Querétaro"){
 $gob_inf_coche = 77.6;
  $gob_esp_publico = 0;
  $gob_inf_ciclista = 0.6;
  $gob_inf_peatonal = 5.6;
  $gob_tran_publico = 16.2;
}
if ($estado == "Veracruz"){
  $gob_inf_coche = 56.8;
  $gob_tran_publico = 0;
  $gob_inf_ciclista = 0;
  $gob_esp_publico = 15.2;
  $gob_inf_peatonal = 27.9;
}

/*
$avg_esp_publico = 17;
$avg_inf_peatonal = 13;
$avg_inf_ciclista = 7;
$avg_inf_coche = 33;
$avg_tran_publico = 20;
*/
$str_esp_pub = "Espacio Público";
$str_inf_pea = "Infraestructura Peatonal";
$str_inf_cic = "Infraestructura Ciclista";
$str_inf_coh = "Infraestructura Vehicular";
$str_tran_pub = "Transporte Público";

echo <<<EOF
<script type="text/javascript">
    function print_chart(){

        var chartData = [
            { opcion:'', porcentaje:'$avg_esp_publico', color:'#f79420', concepto:'$str_esp_pub'},
            { opcion:'', porcentaje:'$gob_esp_publico', color:'#a49e8f', concepto:'$str_esp_pub' },

            { opcion:'', porcentaje:'$avg_inf_peatonal', color:'#f79420', concepto:'$str_inf_pea'},
            { opcion:'', porcentaje:'$gob_inf_peatonal', color:'#a49e8f', concepto:'$str_inf_pea'},

            { opcion:'', porcentaje:'$avg_inf_ciclista', color:'#f79420', concepto:'$str_inf_cic'},
            { opcion:'', porcentaje:'$gob_inf_ciclista', color:'#a49e8f', concepto:'$str_inf_cic'},

            { opcion:'', porcentaje:'$avg_tran_publico', color:'#f79420', concepto:'$str_tran_pub'},
            { opcion:'', porcentaje:'$gob_tran_publico', color:'#a49e8f', concepto:'$str_tran_pub'},

            { opcion:'', porcentaje:'$avg_inf_coche', color:'#f79420', concepto:'$str_inf_coh'},
            { opcion:'', porcentaje:'$gob_inf_coche', color:'#a49e8f', concepto:'$str_inf_coh'}
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

        chart.write('chartContainer');
        
    }
    print_chart()
    
</script>
EOF;
?>
