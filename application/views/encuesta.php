  <?php $this->load->view('header'); ?> 
  <link rel="stylesheet" href="<?php echo base_url()?>sources/css/encuesta.css">
  <link rel="stylesheet" href="<?php echo base_url()?>sources/css/colorbox.css" />

  <div id="wrapper">
    <div id="section">
      <h1>Arrastra tus monedas de acuerdo a tu elección para invertir</h1>

              <ul id="coin_place">
                <li id="coin-33">
                    <a href="#"  id="33" draggable="false" ondragstart="drag(this, event)" class="coin_wrapper">
                      <img src="<?php echo base_url()?>sources/img/coin33.png" alt=""  class="coin">
                    </a>                    
                </li>
                      
                <li id="coin-27">
                    <a href="#"  id="27" draggable="true" ondragstart="drag(this, event)" class="coin_wrapper">
                      <img src="<?php echo base_url()?>sources/img/coin27.png" alt="" class="coin">
                    </a>                    
                </li>
                        
                <li id="coin-20"> 
                    <a href="#"  id="20" draggable="true" ondragstart="drag(this, event)" class="coin_wrapper">
                      <img src="<?php echo base_url()?>sources/img/coin20.png" alt="" class="coin">
                    </a>                 
                </li>
                    
                <li id="coin-13">
                    <a href="#"  id="13" draggable="true" ondragstart="drag(this, event)" class="coin_wrapper">
                      <img src="<?php echo base_url()?>sources/img/coin13.png" alt="" class="coin">
                    </a>                    
                </li>  
                      
                <li id="coin-7">
                    <a href="#"  id="7" draggable="true" ondragstart="drag(this, event)" class="coin_wrapper">
                      <img src="<?php echo base_url()?>sources/img/coin7.png" alt="" class="coin">
                    </a>                    
                </li>
              </ul>

            <div class="span10">
             
              <div class="row">        
                <li class="span2 op_cont" id="resp1">                  
                    <img src="<?php echo base_url()?>sources/img/esp_publicos_hover.png" alt="" class="op_hover">
                    <img src="<?php echo base_url()?>sources/img/esp_publicos.png" alt="" class="opciones">
                    <img src="<?php echo base_url()?>sources/img/invierte.png" alt="" class="op_footer">
                    
                    <img src="<?php echo base_url()?>sources/img/cancel.png" alt="" class="cancel">
                    <a href="#" class="contenedor" id="contenedor1" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false" >
                      <img src="<?php echo base_url()?>sources/img/bolsa.png" alt="" class="bolsa">
                    </a> 
                </li>
                  
                <li class="span2 op_cont" id="resp2">
                    <img src="<?php echo base_url()?>sources/img/peaton_hover.png" alt="" class="op_hover">
                    <img src="<?php echo base_url()?>sources/img/peaton.png" alt="" class="opciones">
                    <img src="<?php echo base_url()?>sources/img/invierte.png" alt="" class="op_footer">
                    
                    <img src="<?php echo base_url()?>sources/img/cancel.png" alt="" class="cancel">
                    <a href="#" class="contenedor" id="contenedor2" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false" >
                      <img src="<?php echo base_url()?>sources/img/bolsa.png" alt="" class="bolsa">
                    </a> 
                </li>
                  
                <li class="span2 op_cont" id="resp3">
                    <img src="<?php echo base_url()?>sources/img/bicicleta_hover.png" alt=""class="op_hover">
                    <img src="<?php echo base_url()?>sources/img/bicicleta.png" alt="" class="opciones">
                    <img src="<?php echo base_url()?>sources/img/invierte.png" alt="" class="op_footer">
                    
                    <img src="<?php echo base_url()?>sources/img/cancel.png" alt="" class="cancel">
                    <a href="#" class="contenedor" id="contenedor3" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false" >
                      <img src="<?php echo base_url()?>sources/img/bolsa.png" alt="" class="bolsa">
                    </a>        
                </li>

                 <li class="span2 op_cont" id="resp4">
                    <img src="<?php echo base_url()?>sources/img/coche_hover.png" alt="" class="op_hover">
                    <img src="<?php echo base_url()?>sources/img/coche.png" alt="" class="opciones">
                    <img src="<?php echo base_url()?>sources/img/invierte.png" alt="" class="op_footer">
                    
                    <img src="<?php echo base_url()?>sources/img/cancel.png" alt="" class="cancel">
                    <a href="#" class="contenedor" id="contenedor4" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false" >
                      <img src="<?php echo base_url()?>sources/img/bolsa.png" alt="" class="bolsa">
                    </a>                 
                </li>
                
                <li class="span2 op_cont" id="resp5">
                    <img src="<?php echo base_url()?>sources/img/trans_publico_hover.png" alt="" class="op_hover">
                    <img src="<?php echo base_url()?>sources/img/trans_publico.png" alt="" class="opciones">
                    <img src="<?php echo base_url()?>sources/img/invierte.png" alt="" class="op_footer">
                    
                    <img src="<?php echo base_url()?>sources/img/cancel.png" alt="" class="cancel">
                    <a href="#" class="contenedor" id="contenedor5" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false" >
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

          var imagen= contenedor.getElementsByTagName("img");
          contenedor.removeChild(imagen[0]);

          $("a.contenedor").each(function(){
              if($(this).find("img").length === 0 ){
                img = '<img src="<?php echo base_url()?>sources/img/bolsa.png" alt="" class="bolsa">'
                $(this).html(img);
              }
          })  

          dad = $("#"+id).parent("a"); // enlace contenedor
          dad.attr("draggable", "false");
          dad.attr("ondragstart", "return false;");

          //if (!dad.find("a").length == 0 ){
          dad.siblings("img.cancel").css("display", "inline")
          dad.siblings("img.op_footer").attr("src", "<?php echo base_url()?>sources/img/invertiste.png")

           
          //}
        }

        function mail_test(mail) {
          var exr = /[\w-\.]+@([\w-]+\.)+[\w-]{2,4}/g;
          return exr.test(mail);
        }

        function cp_test(cp) {
          var exr = /d[0-9]{4,5}/g;
          return exr.test(cp);
        }
        
        $(document).ready(function(){
          $('li#votar_btn a').live("click", function(){
            $("#errores").html(""); 
            var op_esp_pubico = $("#resp1 a a").attr("id") === undefined ? null : $("#resp1 a a").attr("id"),
                op_inf_peatonal = $("#resp2 a a").attr("id") === undefined ? null : $("#resp2 a a").attr("id"),
                op_inf_ciclista = $("#resp3 a a").attr("id") === undefined ? null : $("#resp3 a a").attr("id"),
                op_inf_coche = $("#resp4 a a").attr("id") === undefined ? null : $("#resp4 a a").attr("id"),
                op_tran_publico = $("#resp5 a a").attr("id") === undefined ? null : $("#resp5 a a").attr("id")

            //Me hace falta la validacion de campos especificos :P, p.ej. el de email
            

            if(op_esp_pubico && op_inf_peatonal && op_inf_ciclista && op_inf_coche && op_esp_pubico){     
              function print_form(){
                /* Year-Old Select*/
                var select_edad  = ' <select id="edad" name="edad">'         
                for (var i=10; i<=100; i++){
                    if(i == 30){
                      select_edad += '   <option value=' + i + ' default=true>' + i + '</option>'
                    }else{
                      select_edad += '   <option value=' + i + '>' + i + '</option>'
                    }
                }
                    select_edad += ' </select>'
                /******************/   
                var zonas_met = [ "Otra", "Aguascalientes", "Acapulco", "Acayucan", "Cancún", "Chihuahua", "Coatzacoalcos", 
                                  "Colima-Villa de Álvarez", "Córdoba", "Cuautla", "Cuernavaca",
                                  "Distrito Federal Zona Metropolitana", "Estado de México Zona Metropolitana", "Guadalajara", 
                                  "Guaymas", "Juárez", "La Laguna", "La Piedad-Pénjamo", "León", "Matamoros", 
                                  "Mérida", "Mexicali", "Minatitlán", "Monclova-Frontera", "Monterrey", "Morelia", 
                                  "Moroleón-Uriangato", "Nuevo Laredo", "Oaxaca", "Ocotlán", "Orizaba", "Pachuca", 
                                  "Piedras Negras", "Poza Rica", "Puebla-Tlaxcala", "Puerto Vallarta", "Querétaro", 
                                  "Reynosa-Río Bravo", "Rioverde-Ciudad Fernández", "Saltillo", "San Francisco del Rincón", 
                                  "San Luis Potosí-Soledad de G. S.", "Tampico", "Tecomán", "Tehuacán", "Tehuantepec", 
                                  "Tepic", "Tijuana", "Tlaxcala-Apizaco", "Toluca", "Tula", "Tulancingo", "Tuxtla Gutiérrez", 
                                  "Veracruz", "Villahermosa", "Xalapa", "Zacatecas-Guadalupe", "Zamora-Jacona"]
                                  
                var select_zona  = ' <select id="zona_met" name="zona_met">'         
                for (i in zonas_met){
                      select_zona += '   <option value=' + zonas_met[i] + '>' + zonas_met[i] + '</option>'
                    }
                    select_zona += ' </select>'
                /*********************/
                var select_sexo = ' <select id="sexo" name="sexo">'         
                    select_sexo += '   <option value="Masculino"> Masculino </option>'
                    select_sexo += '   <option value="Femenino"> Femenino </option>'
                    select_sexo += ' </select>'


                var form  = '<div id="form_place">'
                    form += ' <form id="encuesta_form">'

                    form += '  <input type="hidden"  name="op_esp_publico" id="op_esp_publico" value="' + op_esp_pubico +'">'
                    form += '  <input type="hidden"  name="op_inf_peatonal" id="op_inf_peatonal" value="' + op_inf_peatonal +'">'
                    form += '  <input type="hidden"  name="op_inf_ciclista" id="op_inf_ciclista" value="' + op_inf_ciclista +'">'
                    form += '  <input type="hidden"  name="op_inf_coche" id="op_inf_coche" value="' + op_inf_coche +'">'
                    form += '  <input type="hidden"  name="op_tran_publico" id="op_tran_publico" value="' + op_tran_publico +'"">'

                    form += '  <label for="correo">Correo electrónico: </label>'
                    form += '     <div id="field-1" class="field" ><input type="text" id="correo" name="correo"> </div>'
                    form += '  <label for="nombre">Nombre: </label>'
                    form += '     <div id="field-2" class="field" ><input type="text" id="nombre" name="nombre"> </div>'
                    form += '  <label for="edad">Edad: </label> ' 
                    form += '     <div id="field-3" class="field" >' + select_edad + ' </div>'
                    form += '  <label for="edad">Zona Metropolitana: </label> '
                    form += '     <div id="field-4" class="field" >' + select_zona + ' </div> '
                    form += '  <label for="sexo">Sexo: </label>' 
                    form += '     <div id="field-5" class="field" >' + select_sexo + ' </div> '
                    form += '  <label for="cod_postal">Código Postal: </label> '
                    form += '     <div id="field-6" class="field" > <input type="text" id="cod_postal" name="cod_postal"> </div>'
                    form += '  <input id="enviar" type="submit" value="">'
                    form += '  <div id="errores_form"></div>'
                    form += ' </form>'
                    form += '</div>'
                return form;
              }      
              form = print_form() 
              $.colorbox({html:form});
              
            }else{
              $("#errores").html("Todas las bolsas deben ser repartidas"); 
              $("div#form_place").html("");       
            }
            return false;
          });    

          $("form#encuesta_form").live("submit", function(e){
              e.preventDefault();
              $("div#errores_form").html("");
              var nombre = $(this).find("#nombre").val(),
                  sexo = $(this).find("#sexo").val(),
                  edad = $(this).find("#edad").val(),
                  correo = $(this).find("#correo").val(),
                  cod_postal = $(this).find("#cod_postal").val(),
                  zona_met = $(this).find("#cod_postal").val(),

                  op_esp_publico= $(this).find("#op_esp_publico").val(),
                  op_inf_peatonal= $(this).find("#op_inf_peatonal").val(),
                  op_inf_ciclista= $(this).find("#op_inf_ciclista").val(),
                  op_inf_coche= $(this).find("#op_inf_coche").val(),
                  op_tran_publico= $(this).find("#op_tran_publico").val();

              if( nombre == "" || sexo == "" || edad == "" || correo == "" || cod_postal == ""){
                  $("div#errores_form").html("Todos los campos son requeridos");
              }else if(!mail_test(correo)){
                  $("div#errores_form").html("Correo Inválido")
              }else{
                  params = { "nombre":nombre, 
                             "sexo":sexo, 
                             "edad":edad,
                             "correo":correo, 
                             "zona_met":zona_met, 
                             
                             "cod_postal":cod_postal, 
                             "op_esp_publico":op_esp_publico,
                             "op_inf_peatonal":op_inf_peatonal, 
                             "op_inf_ciclista":op_inf_ciclista,
                             "op_inf_coche":op_inf_coche, 
                             "op_tran_publico":op_tran_publico
                           };
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
          })

          $("li.op_cont").mouseover(function() {
            src = $(this).find('img.op_hover').css("display", "inline")
          }).mouseout(function(){
            src = $(this).find('img.op_hover').css("display", "none")
          });


          $(".cancel").live("click", function(){
              that = $(this);
              that.siblings("a.contenedor").find("a").each(function(){
                id = $(this).attr("id");
                coin  = '<a href="#"  id="' + id + '" draggable="true" ondragstart="drag(this, event)" class="coin_wrapper">'
                coin += '    <img src="<?php echo base_url()?>sources/img/coin' + id + '.png" alt="" class="coin">'
                coin += '</a>'
                $("#coin-"+ id).append(coin);
                $(this).remove();
              })  
              bolsa = '<img src="<?php echo base_url()?>sources/img/bolsa.png" alt="" class="bolsa">'
              that.siblings("a.contenedor").append(bolsa);
              that.siblings("img.op_footer").attr("src", "<?php echo base_url()?>sources/img/invierte.png")
              that.css("display", "none")
          })

        });
  </script>

  <?php $this->load->view('footer'); ?> 