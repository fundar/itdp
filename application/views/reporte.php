  <?php $this->load->view('header'); ?> 
  <?php 
    $zonas_met = array ( "Todas", "Aguascalientes", "Acapulco", "Acayucan", "Cancún", "Chihuahua", "Coatzacoalcos", 
                         "Colima-Villa de Álvarez", "Córdoba", "Cuautla", "Cuernavaca",
                         "Distrito Federal Zona Metropolitana", "Estado de México Zona Metropolitana", "Guadalajara", 
                         "Guaymas", "Juárez", "La Laguna", "La Piedad-Pénjamo", "León", "Matamoros", 
                         "Mérida", "Mexicali", "Minatitlán", "Monclova-Frontera", "Monterrey", "Morelia", 
                         "Moroleón-Uriangato", "Nuevo Laredo", "Oaxaca", "Ocotlán", "Orizaba", "Pachuca", 
                         "Piedras Negras", "Poza Rica", "Puebla-Tlaxcala", "Puerto Vallarta", "Querétaro", 
                         "Reynosa-Río Bravo", "Rioverde-Ciudad Fernández", "Saltillo", "San Francisco del Rincón", 
                         "San Luis Potosí-Soledad de G. S.", "Tampico", "Tecomán", "Tehuacán", "Tehuantepec", 
                         "Tepic", "Tijuana", "Tlaxcala-Apizaco", "Toluca", "Tula", "Tulancingo", "Tuxtla Gutiérrez", 
                         "Veracruz", "Villahermosa", "Xalapa", "Zacatecas-Guadalupe", "Zamora-Jacona", "Otra"
                       );
                                  
    $select_zona  = 'Zona Metropolitana ';         
    $select_zona  .= ' <select id="zona_met" name="zona_met">';         
    foreach ($zonas_met as $val){
      $select_zona .= '   <option value="' . $val . '">' . $val . '</option>';
    }

    $select_zona .= ' </select> <br>';

    $select_sexo = 'Sexo 
                    <select id="sexo" name="sexo">;         
                      <option value="Ambos">Ambos</option>;
                      <option value="Masculino">Masculino</option>;
                      <option value="Femenino">Femenino</option>;
                    </select>';

    $select_edad = 'Edad 
                    <select id="edad" name="edad">;         
                      <option value="todos"> Todas las Edades</option>;
                      <option value="hasta18"> Menor a 18</option>;
                      <option value="hasta40"> Entre 18 y 40 </option>;
                      <option value="hasta60"> Entre 40 y 60</option>;
                      <option value="hasta80"> Entre 60 y 80 </option>;
                      <option value="mayor80"> Mayor a 80</option>;
                    </select> <input type="submit" value="Mostrar"> <br><br> '

  ?>
  <link rel="stylesheet" href="<?php echo base_url()?>sources/css/resultados.css">
  <style type="text/css">
    div#section{
      max-width:1390px;
      min-width:1390px;
      color:#000;
    }
    form {
      margin:0px 16px;
    }

    form select{
      margin:0px 10px 0px 0px;
    }
    div#area1{
      max-width: 680px;
      float: left;
    }
  </style>
  <div id="wrapper">
    <div id="section">
      <h1>Reportes </h1> <br>
      
      <div id="area1">
        <form id="form-1">
          <?php echo $select_zona . $select_sexo . $select_edad; ?>
        </form> 
        <div id="result">
          <div class="total"> Total encuestados: <?php echo $total; ?> </div>
          <div class="chart_area" id="chartContainer1">  
          </div>
        </div>
      </div>

     <div id="area2">
        <form id="form-2">
          <?php echo $select_zona . $select_sexo . $select_edad; ?>
        <div id="result">
          <div class="total"> Total encuestados: <?php echo $total; ?> </div>
          <div class="chart_area" id="chartContainer2" ></div>
        </div>
      </div>

    </div>
  </div>
  <?php $this->load->view('footer'); ?> 
  <script type="text/javascript" src="<?php echo base_url()?>sources/js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>sources/js/amstock.js" ></script>
  <script type="text/javascript">
    $("form").submit(function(){ 
      id = $(this).attr("id").split("-")[1];
      $.post(
        link ="<?php echo base_url()?>index.php/reporte/grafica", 
        { "zona_met": $(this).find("#zona_met").attr("value"), 
          "sexo": $(this).find("#sexo").attr("value"), 
          "edad": $(this).find("#edad").attr("value"), 
          "id": id }, 
        function(data){
          $("#area" + id + " div#result").html(data);
        }
      )
      
      return false;
    })
  </script>

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
    print_chart('chartContainer1')
    print_chart('chartContainer2')
    
</script>
EOF;
?>