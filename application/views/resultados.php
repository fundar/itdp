  <?php $this->load->view('header'); ?> 
  <link rel="stylesheet" href="<?php echo base_url()?>sources/css/resultados.css">
  <div id="wrapper">
    <div id="section">
      <h1><img src="<?php echo base_url()?>sources/img/resultados-h1.png" alt="resultados-h1" width="" height="" /></h1>
      <div class="chart_area" id="chartContainer" >
        <div >
            
        </div>
      </div>
      <div id="acotaciones"></div>

      <form action="<?php echo base_url()?>index.php/micrositio/diputado" method="post" id="diputado">
        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
        <input type="hidden" id="nombre" name="nombre" value="<?php echo $nombre; ?>">
        <input type="hidden" id="correo" name="correo" value="<?php echo $correo; ?>">
        <input type="submit" id="ir" value="">
      </form>
    </div>
  </div>
  <?php $this->load->view('footer'); ?> 
  <script type="text/javascript" src="<?php echo base_url()?>sources/js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>sources/js/amstock.js" ></script>

<?php
$gob_inf_coche = 77.4;
$gob_tran_publico = 11.1;
$gob_inf_ciclista = 0.4;
$gob_esp_publico = 7.8;
$gob_inf_peatonal = 3.3;


$str_esp_pub = "Espacio Público";
$str_inf_pea = "Infraestructura Peatonal";
$str_inf_cic = "Infraestructura Ciclista";
$str_inf_coh = "Infraestructura Vehicular";
$str_tran_pub = "Transporte Público";

echo <<<EOF
<script type="text/javascript">
    function print_chart(){
        var nombre = "$nombre";
        var cod_postal = "$cod_postal";

        var chartData = [
            { opcion:'', porcentaje:'$op_esp_publico', color:'#378641', concepto:'$str_esp_pub'},
            { opcion:'', porcentaje:'$avg_esp_publico', color:'#f79420', concepto:'$str_esp_pub'},
            { opcion:'', porcentaje:'$gob_esp_publico', color:'#a49e8f', concepto:'$str_esp_pub' },

            { opcion:'', porcentaje:'$op_inf_peatonal', color:'#378641', concepto:'$str_inf_pea'},
            { opcion:'', porcentaje:'$avg_inf_peatonal', color:'#f79420', concepto:'$str_inf_pea'},
            { opcion:'', porcentaje:'$gob_inf_peatonal', color:'#a49e8f', concepto:'$str_inf_pea'},

            { opcion:'', porcentaje:'$op_inf_ciclista', color:'#378641', concepto:'$str_inf_cic'},
            { opcion:'', porcentaje:'$avg_inf_ciclista', color:'#f79420', concepto:'$str_inf_cic'},
            { opcion:'', porcentaje:'$gob_inf_ciclista', color:'#a49e8f', concepto:'$str_inf_cic'},


            { opcion:'', porcentaje:'$op_tran_publico', color:'#378641', concepto:'$str_tran_pub'},
            { opcion:'', porcentaje:'$avg_tran_publico', color:'#f79420', concepto:'$str_tran_pub'},
            { opcion:'', porcentaje:'$gob_tran_publico', color:'#a49e8f', concepto:'$str_tran_pub'},

            { opcion:'', porcentaje:'$op_inf_coche', color:'#378641', concepto:'$str_inf_coh'},
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
            graph.labelText = "[[porcentaje]]%";
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