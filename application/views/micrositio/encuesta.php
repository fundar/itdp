  <?php $this->load->view('micrositio/header'); ?> 
  <link rel="stylesheet" href="<?php echo base_url()?>sources/css/encuesta.css">

  <div id="wrapper">
    <div id="section">
      <h1>Arrastra tus monedas deacuerdo a tu elección para invertir</h1>
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="row-fluid">

            <div class="span2">
              <ul id="thumbnails">
                <div class="row">
                  <li>                  
                    <a href="#"  id="7" draggable="true" ondragstart="drag(this, event)" >
                      <img src="<?php echo base_url()?>sources/img/coin33.png" alt=""  class="coin">
                    </a>                    
                  </li>        
                </div>
                      
                <div class="row">
                  <li>
                    <a href="#"  id="13" draggable="true" ondragstart="drag(this, event)" >
                      <img src="<?php echo base_url()?>sources/img/coin27.png" alt="" class="coin">
                    </a>                    
                  </li>          
                </div>
                        
                <div class="row"> 
                  <li>
                    <a href="#"  id="20" draggable="true" ondragstart="drag(this, event)" >
                      <img src="<?php echo base_url()?>sources/img/coin20.png" alt="" class="coin">
                    </a>                 
                  </li>
                </div>
                    
                <div class="row">
                  <li>
                    <a href="#"  id="27" draggable="true" ondragstart="drag(this, event)">
                      <img src="<?php echo base_url()?>sources/img/coin13.png" alt="" class="coin">
                    </a>                    
                  </li>              
                </div>  
                      
                <div class="row">
                  <li>
                    <a href="#"  id="33" draggable="true" ondragstart="drag(this, event)" >
                      <img src="<?php echo base_url()?>sources/img/coin7.png" alt="" class="coin">
                    </a>                    
                  </li>
                </div>
              </ul>
            </div>

            <div class="span10">
             
              <div class="row">        
                <li class="span2 op_cont" id="resp1">                  
                    <img src="<?php echo base_url()?>sources/img/esp_publicos_hover.png" alt="" class="op_hover">
                    <img src="<?php echo base_url()?>sources/img/esp_publicos.png" alt="" class="opciones">
                    <img src="<?php echo base_url()?>sources/img/invierte.png" alt="" class="op_footer">
                    
                    <a href="#" class="" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false" >
                      <img src="<?php echo base_url()?>sources/img/bolsa.png" alt="" class="bolsa">
                    </a> 
                </li>
                  
                <li class="span2 op_cont" id="resp2">
                    <img src="<?php echo base_url()?>sources/img/peaton_hover.png" alt="" class="op_hover">
                    <img src="<?php echo base_url()?>sources/img/peaton.png" alt="" class="opciones">
                    <img src="<?php echo base_url()?>sources/img/invierte.png" alt="" class="op_footer">
                    
                    <a href="#" class="" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false" >
                      <img src="<?php echo base_url()?>sources/img/bolsa.png" alt="" class="bolsa">
                    </a> 
                </li>
                  
                <li class="span2 op_cont" id="resp3">
                    <img src="<?php echo base_url()?>sources/img/bicicleta_hover.png" alt=""class="op_hover">
                    <img src="<?php echo base_url()?>sources/img/bicicleta.png" alt="" class="opciones">
                    <img src="<?php echo base_url()?>sources/img/invierte.png" alt="" class="op_footer">
                    
                    <a href="#" class="" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false" >
                      <img src="<?php echo base_url()?>sources/img/bolsa.png" alt="" class="bolsa">
                    </a>        
                </li>

                 <li class="span2 op_cont" id="resp4">
                    <img src="<?php echo base_url()?>sources/img/coche_hover.png" alt="" class="op_hover">
                    <img src="<?php echo base_url()?>sources/img/coche.png" alt="" class="opciones">
                    <img src="<?php echo base_url()?>sources/img/invierte.png" alt="" class="op_footer">
                    
                    <a href="#" class="" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false" >
                      <img src="<?php echo base_url()?>sources/img/bolsa.png" alt="" class="bolsa">
                    </a>                 
                </li>
                
                <li class="span2 op_cont" id="resp5">
                    <img src="<?php echo base_url()?>sources/img/trans_publico_hover.png" alt="" class="op_hover">
                    <img src="<?php echo base_url()?>sources/img/trans_publico.png" alt="" class="opciones">
                    <img src="<?php echo base_url()?>sources/img/invierte.png" alt="" class="op_footer">
                    
                    <a href="#" class="" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false" >
                      <img src="<?php echo base_url()?>sources/img/bolsa.png" alt="" class="bolsa">
                    </a>           
                </li>

                <li class="span" id="votar_btn">
                  <a href="#">
                    <img src="<?php echo base_url()?>sources/img/votar.png" alt="">
                  </a>
                </li>
              
              </div>
            </div> 
           
            <div class="" id="errores"></div>
            <!--div style="display:none;">
                    <form id="encuesta_form">
                     <input type="hidden"  name="txtEspacioPublico" id="txtEspacioPublico" />
                     <input type="hidden"  name="txtInfraestructuraPeatonal" id="txtInfraestructuraPeatonal" />
                     <input type="hidden"  name="txtInfraestructuraCiclista" id="txtInfraestructuraCiclista">
                     <input type="hidden"  name="txtInfraestructuraCoche" id="txtInfraestructuraCoche">
                     <input type="hidden"  name="txtTranportePublico" id="txtTranportePublico" >
                     <label for="email">Correo electrónico</label> <input type="text" id="email" name="email">
                     <label for="nombre">Nombre</label> <input type="text" id="nombre" name="nombre">
                     <label for="edad">Edad</label> <input type="text" id="edad" name="edad">
                     <label for="sexo">Sexo</label> <input type="text" id="sexo" name="sexo">
                     <label for="cp">Código Postal</label> <input type="text" id="cp" name="cp">
                     <input id="enviar" type="submit" value="Enviar">
                    </form>
                  </div>
          </div-->
        </div>
      </div>
    </div>
  </div>

  <!--script src="<?php echo base_url()?>sources/js/jquery-1.8.2.min.js"></script-->
  <script type="text/javascript" src="<?php echo base_url()?>sources/js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>sources/js/colorbox-min.js"></script>
  <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script-->
  
  <script>   
    function drag(parrafo, evento) {
      evento.dataTransfer.setData('Text', parrafo.id);
    }

    function drop(contenedor, evento) {     
      var id = evento.dataTransfer.getData('Text');    
      contenedor.appendChild(document.getElementById(id));  
      //contenedor.removeChild(contenedor.getElementsByTagName("img"));
            
      var imagen= contenedor.getElementsByTagName("img");
      contenedor.removeChild(imagen[0]);

      //Devuelve 6 lis
      //var content = contenedor.firstChild.getAttribute("id");
      //}

      //Regresa las respt1
      var li = document.getElementById("bolsas").getElementsByTagName("li");
      for (var i=0; i<li.length; i++) {
        //Regresa los hijos
        var as = li[i].getElementsByTagName("a");      
        if(as.length===1){
          var images = as[0].getElementsByTagName("img");
          if(images.length===0){          
            var imagenCreate=document.createElement('img');          
            imagenCreate.src = "<?php echo base_url()?>sources/img/cochino.png";
            imagenCreate.id = 'img';

            as[0].appendChild(imagenCreate);
          }      
        }
      }
          //contenedor.removeChild(imagen);
          //evento.preventDefault();    
    }
  </script>

  <script>

        function mail_test(mail) {
          var exr = /^[0-9a-z_\-\.]+@[0-9a-z\-\.]+\.[a-z]{2,4}$/i;
          return exr.test(mail);
        }

        function cp_test(cp) {
          var exr = /(^[0-9]{4,5}$/;
          return exr.test(cp);
        }
             
        $(document).ready(function(){
          $('li#votar_btn a').click(function(){
            
            var op_esp_pubico = $("#resp1 a a").attr("id") === undefined ? null : $("#resp1 a a").attr("id"),
                op_inf_peatonal = $("#resp2 a a").attr("id") === undefined ? null : $("#resp2 a a").attr("id"),
                op_inf_ciclista = $("#resp3 a a").attr("id") === undefined ? null : $("#resp3 a a").attr("id"),
                op_inf_coche = $("#resp4 a a").attr("id") === undefined ? null : $("#resp4 a a").attr("id"),
                op_tran_publico = $("#resp5 a a").attr("id") === undefined ? null : $("#resp5 a a").attr("id")

            //Me hace falta la validacion de campos especificos :P, p.ej. el de email
            

            if(op_esp_pubico && op_inf_peatonal && op_inf_ciclista && op_inf_coche && op_esp_pubico){     
              /* Year-Old Select*/
              var select  = ' <select id="edad" name="edad">'         
              for (var i=10; i<=100; i++){
                  if(i == 30){
                    select += '   <option value=' + i + ' default=true>' + i + '</option>'
                  }else{
                    select += '   <option value=' + i + '>' + i + '</option>'
                  }
              }
                  select += ' </select>'
              /******************/   
              var zonas_met = [ "Otra", "Aguascalientes", "Acapulco", "Acayucan", "Cancún", "Chihuahua", "Coatzacoalcos", 
                                "Colima-Villa de Álvarez", "Córdoba", "Cuautla", "Cuernavaca", "Guadalajara", 
                                "Guaymas", "Juárez", "La Laguna", "La Piedad-Pénjamo", "León", "Matamoros", 
                                "Mérida", "Mexicali", "Minatitlán", "Monclova-Frontera", "Monterrey", "Morelia", 
                                "Moroleón-Uriangato", "Nuevo Laredo", "Oaxaca", "Ocotlán", "Orizaba", "Pachuca", 
                                "Piedras Negras", "Poza Rica", "Puebla-Tlaxcala", "Puerto Vallarta", "Querétaro", 
                                "Reynosa-Río Bravo", "Rioverde-Ciudad Fernández", "Saltillo", "San Francisco del Rincón", 
                                "San Luis Potosí-Soledad de G. S.", "Tampico", "Tecomán", "Tehuacán", "Tehuantepec", 
                                "Tepic", "Tijuana", "Tlaxcala-Apizaco", "Toluca", "Tula", "Tulancingo", "Tuxtla Gutiérrez", 
                                "Veracruz", "Villahermosa", "Xalapa", "Zacatecas-Guadalupe", "Zamora-Jacona", 
                                "Distrito Federal Zona Metropolitana", "Estado de México Zona Metropolitana"]
                                
              var select_zona  = ' <select id="zona_met" name="zona_met">'         
              for (i in zonas_met){
                    select_zona += '   <option value=' + zonas_met[i] + '>' + zonas_met[i] + '</option>'
                  }
                  select_zona += ' </select>'

              var form  = '<div id="form_place">'
                  form += ' <form id="encuesta_form">'

                  form += '  <input type="hidden"  name="op_esp_publico" id="op_esp_publico" value="' + op_esp_pubico +'">'
                  form += '  <input type="hidden"  name="op_inf_peatonal" id="op_inf_peatonal" value="' + op_inf_peatonal +'">'
                  form += '  <input type="hidden"  name="op_inf_ciclista" id="op_inf_ciclista" value="' + op_inf_ciclista +'">'
                  form += '  <input type="hidden"  name="op_inf_coche" id="op_inf_coche" value="' + op_inf_coche +'">'
                  form += '  <input type="hidden"  name="op_tran_publico" id="op_tran_publico" value="' + op_tran_publico +'"">'

                  form += '  <label for="correo">Correo electrónico: </label> <input type="text" id="correo" name="correo"> <br>'
                  form += '  <label for="nombre">Nombre: </label> <input type="text" id="nombre" name="nombre"> <br>'
                  form += '  <label for="edad">Edad: </label> ' + select + ' <br>'
                  form += '  <label for="edad">Zona Metropolitana: </label> ' + select_zona + ' <br>'
                  form += '  <label for="sexo">Sexo: </label>' 
                  form += '    Femenino <input type="radio" id="sexo" name="sexo" value="Femenino"> '
                  form += '    Masculino <input type="radio" id="sexo" name="sexo" value="Masculino"><br>'
                  form += '  <label for="cod_postal">Código Postal: </label> <input type="text" id="cod_postal" name="cod_postal"><br>'
                  form += '  <input id="enviar" type="submit" value="Enviar">'
                  form += ' </form>'

                  form += '<div id="errores_form"></div>'
                  form += '</div>'
              $.colorbox({html:form});
              
            }else{
              $("#errores").text("Todas las bolsas deben ser repartidas"); 
              $("div#form_place").html("");       
            }
            return false;
          });    


          $("form#encuesta_form").live("submit", function(e){
              e.preventDefault();
              var nombre = $(this).find("#nombre").val(),
                  sexo = $(this).find("#sexo").val(),
                  edad = $(this).find("#edad").val(),
                  correo = $(this).find("#correo").val(),
                  cod_postal = $(this).find("#cod_postal").val(),

                  op_esp_publico= $(this).find("#op_esp_publico").val(),
                  op_inf_peatonal= $(this).find("#op_inf_peatonal").val(),
                  op_inf_ciclista= $(this).find("#op_inf_ciclista").val(),
                  op_inf_coche= $(this).find("#op_inf_coche").val(),
                  op_tran_publico= $(this).find("#op_tran_publico").val();

              if( nombre == "" || sexo == "" || edad == "" || correo == "" || cod_postal == ""){
                  $("div#errores_form").text("Todos los campos son requeridos");
              }else if(!mail_test(correo)){
                  $("div#errores_form").text("Correo Invalido")
                  /*if(!mail_test(correo)){
                    $("div#errores_form").text("Correo Invalido")
                  } 
                  if(!cp_test(cod_postal)){
                    $("div#errores_form").text("Código Postal Invalido");
                  } */
              }else{
                  params = { "nombre":nombre, 
                             "sexo":sexo, 
                             "edad":edad,
                             "correo":correo, 
                             "cod_postal":cod_postal, 
                             "op_esp_publico":op_esp_publico,
                             "op_inf_peatonal":op_inf_peatonal, 
                             "op_inf_ciclista":op_inf_ciclista,
                             "op_inf_coche":op_inf_coche, 
                             "op_tran_publico":op_tran_publico 
                           };
                /*
                  alert( params.nombre + ", " + params.sexo + ", " + 
                         params.edad + ", " + params.correo + ", " + 
                         params.cod_postal + ", " + params.op_esp_publico + ", " +
                         params.op_inf_peatonal + ", " + params.op_inf_ciclista + ", " + 
                         params.op_inf_coche + ", " + params.op_tran_publico )
                */
                  url = "<?php echo base_url()?>index.php/micrositio/mandar_encuesta";
                  $.post(url , params, function(user_id){
                      if(user_id === "False"){
                          $("div#errores_form").text(user_id);
                      }else{
                          rdurl = "<?php echo base_url()?>index.php/micrositio/resultados?id=" + user_id;
                          window.location = rdurl;
                      }
                  })
              }
              
            /*
                
              }
              
              return false;
            */  
          })
          $("li.op_cont").mouseover(function() {
            src = $(this).find('img.op_hover').css("display", "inline")
          }).mouseout(function(){
            src = $(this).find('img.op_hover').css("display", "none")
          });


        });
  </script>

  <?php $this->load->view('micrositio/footer'); ?> 