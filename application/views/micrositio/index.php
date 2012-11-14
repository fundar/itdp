<html>
  <head>
    <title>ITDP Mexico</title>
    <?php $this->load->view('apps/recursos'); ?>    
    <style type="text/css">
      body {
        padding-top: 15px;
        padding-bottom: 10px;
      }
    </style>
    <script type="text/javascript" src="<?php base_url()?>resources/js/jquery-1.7.2.min.js"></script>
    
    <script type="text/javascript">
	$(document).ready(function(){


		function validarEmail(valor) {
 			if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(valor)){
 		 		return true;   				
  			} else {
   				return false;
  			}
		}


		$('#enviar').click(function(){
		 	var espacio_pubico = ($("#resp1 a a").attr("id") === undefined ? null : $("#resp1 a a").attr("id"));
		 	var infraestructura_peatonal = ($("#resp2 a a").attr("id") === undefined ? null : $("#resp1 a a").attr("id"));
		 	var infraestructura_ciclista = ($("#resp3 a a").attr("id") === undefined ? null : $("#resp1 a a").attr("id"));
		 	var infraestructura_coche = ($("#resp4 a a").attr("id") === undefined ? null : $("#resp1 a a").attr("id"));
		 	var transporte_publico = ($("#resp5 a a").attr("id") === undefined ? null : $("#resp1 a a").attr("id"));

		 	if(espacio_pubico != null && infraestructura_peatonal != null && infraestructura_ciclista != null && infraestructura_coche != null && transporte_publico != null){
		 		
		 		var mail = $("#correo").val();
		 		isMail = validarEmail(mail);

		 		if(isMail){

		 			return true;

		 		}else{		 			
		 			$("#errores").addClass('alert alert-error');
		 			$("#errores").text("Correo Invalido");    		

		 			return false;
		 		}
		 		

		 	}else{
		 		$("#errores").addClass('alert alert-error');
		 		$("#errores").text("Todas las bolsas deben ser repartidas");    		

		 		return false;

		 	}

    		});		 

		 $('#correo').keypress(function(){
		 		 $('#enviar ').removeClass('btn-danger');
		 		 $('#enviar ').addClass('btn-success');

		 });


		});
	</script>
  
  </head>
  <body>

    <div class="container">

      	<!-- Main hero unit for a primary marketing message or call to action -->      	
        <h1>Distribuye nuestro presupuesto de movilidad urbana</h1>            

    </div>

    <div class="container-fluid">

    	<div class="span2">
      	<!--Sidebar content-->      
      		<ul class="thumbnails">

	              	<li class="span2" align="center">
		                <a href="#"  id="5" draggable="true" ondragstart="drag(this, event)" >
		                  <img src="<?php base_url()?>resources/images/bolsa.jpg" alt="" height="50" width="160" >
		                </a>		                
	              	</li>
		            <li class="span2" align="center">
		                <a href="#"  id="4" draggable="true" ondragstart="drag(this, event)" align="center">
		                  <img src="<?php base_url()?>resources/images/bolsa.jpg" alt="" width="120">
		                </a>		                
		            </li>
		            <li class="span2" align="center">
			            <a href="#"  id="3" draggable="true" ondragstart="drag(this, event)" >
			                <img src="<?php base_url()?>resources/images/bolsa.jpg" alt="" width="90">
			           </a>			            
		            </li>
	              	<li class="span2" align="center">
	                	<a href="#"  id="2" draggable="true" ondragstart="drag(this, event)" >
	                  		<img src="<?php base_url()?>resources/images/bolsa.jpg" alt="" width="80">
	                	</a>	                	
	              	</li>
	              	<li class="span2" align="center">
	                	<a href="#"  id="1" draggable="true" ondragstart="drag(this, event)" >
	                  		<img src="<?php base_url()?>resources/images/bolsa.jpg" alt="" width="60" />
	                	</a>	                	
	              	</li>              
	        </ul>
    	</div>

    	<div class="span10">

      	<div class="row">
      		<div class="" id="errores">      			
      		</div>

	    	<div class="row-fluid">

	            <ul class="thumbnails">

	              	
	            </ul>
	          </div>
	   	</div>	   	

	   	<div class="row">
	   		<div class="row-fluid">	   		

	            <li class="span2">
	              	<div class="caption">
		                    <h5>Espacio Público</h5>                    
		            </div>
		        </li>
		        <li class="span2">
	              	<div class="caption">
		                    <h5>Peatón</h5>                                     
		            </div>
		        </li>
		        <li class="span2">
	              	<div class="caption">
		                    <h5>Bicicleta</h5>                                       
		            </div>
		        </li>
		        <li class="span2">
	              	<div class="caption">
		                    <h5>Coche</h5>            
		            </div>
		        </li>
		        <li class="span2">
	              	<div class="caption">
		                    <h5>Transporte Público</h5>     
		            </div>
		        </li>
	   		</div>
	   	</div>

	    <div class="row">
	    	<div class="row-fluid">
	            <ul class="thumbnails">	            

	              	<li class="span2">	              		
		                <a href="#" class="">
		                  <img src="<?php base_url()?>resources/images/parque.jpg" alt="" height="120" width="160">
		                </a>		                        
	              	</li>
		            <li class="span2">		            	
		                <a href="#" class="">
		                  <img src="<?php base_url()?>resources/images/peaton.jpg" alt="" height="120" width="160">
		                </a>		                        
		            </li>
		            <li class="span2">		            	
			            <a href="#" class="">
			                <img src="<?php base_url()?>resources/images/bici.jpg" alt="" height="120" width="160">
			            </a>				                
		            </li>
	              	<li class="span2">	              		
	                	<a href="#" class="">
	                  		<img src="<?php base_url()?>resources/images/auto.jpg" alt="" height="120" width="160">
	                	</a>		                	 
	              	</li>
	              	<li class="span2">	              		
	                	<a href="#" class="">
	                  		<img src="<?php base_url()?>resources/images/bus.jpg" alt="" height="120" width="160">
	                	</a>	                	     
	              	</li>              
	            </ul>	          
	   		
       		</div>	   	
   		</div>

   		<div class="row">
	    	<div class="row-fluid">

	            <ul class="thumbnails">
	          

	              	<li class="span2" id="resp1">
		                <a href="#" class="" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false" >
		                  <img src="<?php base_url()?>resources/images/fondobolsa.png" alt="" id="img">
		                </a>		                
	              	</li>
		            <li class="span2" id="resp2" >
		                <a href="#" class="" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false">
		                  <img src="<?php base_url()?>resources/images/fondobolsa.png" alt="" id="img">
		                </a>		                
		            </li>
		            <li class="span2" id="resp3">
			            <a href="#" class="" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false">
			                <img src="<?php base_url()?>resources/images/fondobolsa.png" alt="" id="img">
			            </a>			            
		            </li>
	              	<li class="span2" id="resp4">
	                	<a href="#" class="" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false">
	                  		<img src="<?php base_url()?>resources/images/fondobolsa.png" alt="" id="img">
	                	</a>	                	
	              	</li>
	              	<li class="span2" id="resp5">
	                	<a href="#" class="" id="contenedor" ondrop="drop(this, event)" ondragenter="return false" ondragover="return false">
	                  		<img src="<?php base_url()?>resources/images/fondobolsa.png" alt="" id="img">
	                	</a>	                	
	              	</li>              
	            </ul>
	          </div>
	   	</div>	   	

	   	<?php print form_open()?>

	   	<input type="hidden"  name="txtlatitud" id="lat" value="<?php print set_value('txtlatitud')?>" />
		<input type="hidden"  name="txtlatitud" id="lat" value="<?php print set_value('txtlatitud')?>" />
		<input type="hidden"  name="txtlatitud" id="lat" value="<?php print set_value('txtlatitud')?>" />
		<input type="hidden"  name="txtlatitud" id="lat" value="<?php print set_value('txtlatitud')?>" />
		<input type="hidden"  name="txtlatitud" id="lat" value="<?php print set_value('txtlatitud')?>" />

   		<div class="row">
   			<p align="center"><input type="text" class="span3" id="correo" placeholder="Correo Electronico"></p>	   		
            <p align="center"><a class="btn btn-danger btn-large" id="enviar">Firmar Peticion</a></p>
   		</div>

   		<?php print form_close()?>

   	</div>

	</div>
   	
   	<script>   	
		function drag(parrafo, evento) {
		evento.dataTransfer.setData('Text', parrafo.id);
		}

		function drop(contenedor, evento) {			
		var id = evento.dataTransfer.getData('Text');		
		contenedor.appendChild(document.getElementById(id));		
		contenedor.removeChild(document.getElementById("img"));
		//evento.preventDefault();		

		}
	</script>
    <?php $this->load->view('apps/recursos_pie'); ?>
  </body>
</html>