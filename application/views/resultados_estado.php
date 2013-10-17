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
			case "cd-juarez":
				echo "CD. Juárez";
				break;
			case "la-laguna":
				echo "La Laguna";
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
  $gob_inf_coche    = 82.1;
  $gob_tran_publico = 2.3;
  $gob_inf_ciclista = 0.6;
  $gob_esp_publico  = 15;
  $gob_inf_peatonal = 0;
}
if ($estado == "Colima"){
 $gob_inf_coche     = 50.5;
  $gob_tran_publico = 0;
  $gob_inf_ciclista = 0;
  $gob_esp_publico  = 0;
  $gob_inf_peatonal = 49.5;
}
if ($estado == "Distrito-Federal"){
  $gob_inf_coche    = 10;
  $gob_tran_publico = 7.3;
  $gob_inf_ciclista = 2.1;
  $gob_esp_publico  = 12.5;
  $gob_inf_peatonal = 5.2;
}
if ($estado == "Estado-de-México"){
  $gob_inf_coche    = 76.2;
  $gob_tran_publico = 18.3;
  $gob_inf_ciclista = 0;
  $gob_esp_publico  = 0.9;
  $gob_inf_peatonal = 4.5;
}
if ($estado == "Guanajuato"){
  $gob_inf_coche   = 87.7;
  $gob_tran_publico = 0;
  $gob_inf_ciclista = 0.4;
  $gob_esp_publico  = 10.9;
  $gob_inf_peatonal = 0.9;
}
if ($estado == "Guadalajara"){
  $gob_inf_coche    = 82.8;
  $gob_tran_publico = 1.7;
  $gob_inf_ciclista = 0;
  $gob_esp_publico  = 6.5;
  $gob_inf_peatonal = 9.0;
}
if ($estado == "Nuevo-Leon"){
  $gob_inf_coche    = 80.1;
  $gob_tran_publico = 5.1;
  $gob_inf_ciclista = 0;
  $gob_esp_publico  = 14.3;
  $gob_inf_peatonal = 0.5;
}
if ($estado == "Puebla"){
  $gob_inf_coche    = 76.1;
  $gob_tran_publico = 0.1;
  $gob_inf_ciclista = 0;
  $gob_esp_publico  = 23.5;
  $gob_inf_peatonal = 0.4;
}
if ($estado == "Querétaro"){
 $gob_inf_coche     = 70.3;
  $gob_esp_publico  = 6.7;
  $gob_inf_ciclista = 1.4;
  $gob_inf_peatonal = 5.0;
  $gob_tran_publico = 16.6;
}
if ($estado == "Veracruz"){
  $gob_inf_coche    = 45.8;
  $gob_tran_publico = 22.6;
  $gob_inf_ciclista = 0;
  $gob_esp_publico  = 1.9;
  $gob_inf_peatonal = 26.7;
}

/***********  Nuevos  ***********/

if ($estado == "Tuxtla"){
  $gob_inf_coche    = 83.9;
  $gob_tran_publico = 0;
  $gob_inf_ciclista = 0;
  $gob_esp_publico  = 16.1;
  $gob_inf_peatonal = 0;
}

if ($estado == "cd-juarez"){
  $gob_inf_coche    = 98.6;
  $gob_tran_publico = 0;
  $gob_inf_ciclista = 0;
  $gob_esp_publico  = 1.0;
  $gob_inf_peatonal = 0.4;
}

if ($estado == "Tijuana"){
  $gob_inf_coche    = 83.8;
  $gob_tran_publico = 1.9;
  $gob_inf_ciclista = 0;
  $gob_esp_publico  = 12.9;
  $gob_inf_peatonal = 1.4;
}

if ($estado == "Toluca"){
  $gob_inf_coche    = 96.2;
  $gob_tran_publico = 0;
  $gob_inf_ciclista = 0.3;
  $gob_esp_publico  = 0;
  $gob_inf_peatonal = 3.4;
}

if ($estado == "Mérida"){
  $gob_inf_coche    = 67.2;
  $gob_tran_publico = 0;
  $gob_inf_ciclista = 8.8;
  $gob_esp_publico  = 7.4;
  $gob_inf_peatonal = 16.7;
}

if ($estado == "la-laguna"){
  $gob_inf_coche    = 92.4;
  $gob_tran_publico = 1.5;
  $gob_inf_ciclista = 0;
  $gob_esp_publico  = 5.8;
  $gob_inf_peatonal = 0.2;
}

if ($estado == "Hermosillo"){
  $gob_inf_coche    = 87.5;
  $gob_tran_publico = 3.0;
  $gob_inf_ciclista = 0;
  $gob_esp_publico  = 9.5;
  $gob_inf_peatonal = 0;
}

if ($estado == "Oaxaca"){
  $gob_inf_coche    = 83.9;
  $gob_tran_publico = 4.4;
  $gob_inf_ciclista = 1.1;
  $gob_esp_publico  = 8.9;
  $gob_inf_peatonal = 1.7;
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
