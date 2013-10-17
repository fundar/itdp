  <?php $this->load->view('header'); ?> 
    <link rel="stylesheet" href="<?php echo base_url()?>sources/css/mapa_resultados.css">
    <script src="http://d3js.org/d3.v3.min.js"></script>
	<script src='http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.js'></script>
    <link href='http://api.tiles.mapbox.com/mapbox.js/v1.3.1/mapbox.css' rel='stylesheet' />
  <div id="wrapper">
    <div id="section">
      
      <div id="map_area">
		<div id='map'></div>
		
		<script type='text/javascript'>
			var map  = L.mapbox.map('map', 'fundarmexico.map-e95m2gvf');
			var data = [];
			
			var features = [];
			
			/*Markers*/
			data.push({ name : 'ZM AGUASCALIENTES (AGS)', 	  url : 'Aguascalientes',   lat : 21.882208395031483, lng : -102.29550361633301 });
			data.push({ name : 'ZM COLIMA (COL)',		  	  url : 'Colima', 			lat : 19.240089565394083, lng : -103.72458457946777 });
			data.push({ name : 'ZM VALLE DE MÉXICO (DF)', 	  url : 'Distrito-Federal', lat : 19.43227671629882,  lng : -99.12895202636719 });
			data.push({ name : 'ZM VALLE DE MÉXICO (EDOMEX)', url : 'Estado-de-México', lat : 19.525494378835436, lng : -99.19830322265625 });
			data.push({ name : 'ZM LEÓN (GTO)',		  	      url : 'Guanajuato', 		lat : 21.12005330124119,  lng : -101.68310165405273 });
			data.push({ name : 'ZM GUADALAJARA (JAL)',		  url : 'Jalisco', 			lat : 20.67631435399331,  lng : -103.3472728729248 });
			data.push({ name : 'ZM MONTERREY (NL)',		  	  url : 'Nuevo-Leon', 		lat : 25.677811139900083, lng : -100.30689239501953 });
			data.push({ name : 'ZM PUEBLA (PUE)',		  	  url : 'Puebla', 			lat : 19.044594137783037, lng : -98.20009231567383 });
			data.push({ name : 'ZM QUERETARO (QRO)',		  url : 'Querétaro', 		lat : 20.59004517169375,  lng : -100.3879165649414 });
			data.push({ name : 'ZM VERACRUZ (VER)',		  	  url : 'Veracruz', 		lat : 19.199728329266968, lng : -96.14075660705566 });
			data.push({ name : 'ZM TUXTLA (CHIA)',		  	  url : 'Tuxtla', 			lat : 16.75712570734365,  lng : -93.12895774841309 });
			data.push({ name : 'ZM CD. JUÁREZ (CHIH)',		  url : 'cd-juarez', 		lat : 31.733861245789843, lng : -106.48086547851562 });
			data.push({ name : 'ZM TIJUANA',		 		  url : 'Tijuana', 			lat : 32.53371665760973,  lng : -117.0399284362793 });
			data.push({ name : 'ZM TOLUCA',		 			  url : 'Toluca', 			lat : 19.281980191903514, lng : -99.65560913085938 });
			data.push({ name : 'ZM MÉRIDA',		 			  url : 'Mérida', 			lat : 20.967190304309685, lng : -89.62423324584961 });
			data.push({ name : 'ZM LA LAGUNA',		  		  url : 'la-laguna', 		lat : 25.54364181703573,  lng : -103.43164443969727 });
		
			data.forEach(function(row) {
				features.push({
					type: 'Feature',
					geometry: {
						type: 'Point',
						coordinates: [row.lng, row.lat]
					},
					properties: {
						'marker-color': '#F80000',
						'marker-symbol': 'bus',
						title: '<span class="name-row"><a href="<?php echo base_url()?>index.php/micrositio/resultados?estado=' + row.url + '">' + row.name + '</a></span>'
					}
				});
			});
			
			map.markerLayer.setGeoJSON({
				type: 'FeatureCollection',
				features: features
			});

			
			map.on('move', function() {
				// construct an empty list to fill with onscreen markers
				var inBounds = [],
				// get the map bounds - the top-left and bottom-right locations
				bounds = map.getBounds();

				// for each marker, consider whether it is currently visible by comparing
				// with the current map bounds
				map.markerLayer.eachLayer(function(marker) {
					if(bounds.contains(marker.getLatLng())) {
						inBounds.push(marker.options.title);
					}
				});

				// display a list of markers.
				//document.getElementById('onscreen').innerHTML = inBounds.join('\n');
			});

			map.setView([23.130257185291036,-101.2060546875], 4);
		</script>
		
      	<h1 id="texto-mapa" > 
      		<img src="<?php echo base_url()?>sources/img/mapa-h1.png" alt="Elige un estado para ver sus resultados" width="" height="" />
      	</h1>

		<!--
		<ul id="menu">
			<li><a href="Aguascalientes"> Aguascalientes </a></li>
			<li><a href="Colima"> Colima </a></li>
			<li><a href="Distrito-Federal"> Distrito Federal </a></li>
			<li><a href="Guanajuato"> León </a></li>
			<li><a href="Estado-de-México"> Estado de México </a></li>
			<li><a href="Jalisco"> Guadalajara </a></li>
			<li><a href="Nuevo-Leon"> Monterrey </a></li>
			<li><a href="Puebla"> Puebla </a></li>
			<li><a href="Querétaro"> Querétaro </a></li>
			<li><a href="Veracruz"> Veracruz </a></li>
		</ul>
		-->
		
		<a id="lnk_federales" href="<?php echo base_url()?>index.php/micrositio/resultados">
      		<img src="<?php echo base_url()?>sources/img/link-federales.png">
		</a>
      </div>

    </div>
  </div>
  <?php $this->load->view('footer'); ?> 
	

  	
  	<script type="text/javascript" src="<?php echo base_url()?>sources/js/jquery-1.8.2.min.js"></script>
  	<script type="text/javascript">
		$(document).ready(function(){
			$(".Estado_View").hover(
				function(){ 
					$(this).css("fill","#0071BC");

					estado = $(this).attr("id");
					if ( $("ul#menu li a").attr("href") == estado ){
						$("ul#menu li a").css("font-size", "1.1em")
					}

				},
				function(){ 
					$(this).css("fill","#FFF");
					
					estado = $(this).attr("id");
					if ( $("ul#menu li a").attr("href") == estado ){
						$("ul#menu li a").css("font-size", "1em")
					}
				}
			)

			$(".Estado_View").click(function(){
				var url ="<?php echo base_url()?>index.php/micrositio/resultados?estado=" +  $(this).attr("id")
				window.location = url;
			})

			$("ul#menu li a").hover(
				function(){ 
					estado = $(this).attr("href");
					$("#" + estado).css("fill","#0071BC");
				},
				function(){ 
					estado = $(this).attr("href")
					$("#" + estado).css("fill","#FFF");
				}
			)

			$("ul#menu li a").click(function(){
				var url ="<?php echo base_url()?>index.php/micrositio/resultados?estado=" +  $(this).attr("href")
				window.location = url;
				return false;
			})
		})
	</script>
