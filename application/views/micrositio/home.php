	<?php $this->load->view('micrositio/header'); ?> 
	<link rel="stylesheet" href="<?php echo base_url()?>sources/css/home.css">
	<div id="wrapper">
		<div id="section">
			<div id="infograph">
				<img src="<?php echo base_url()?>sources/img/infograph.png" alt="infografia-mobilidad">
			</div>
			<p id="about">
				Todos los días tenemos que transladarnos ya sea 
				por estudios, trabajo o simplemente por 
				recreación. Sin embargo, la preferencia que se 
				le ha dado al automóvil privado en nuestras 
				ciudades, ha traído graves concecuencias para 
				todos. Por eso, es hora de que los ciudadanos
				propongamos dónde y en que queremos que 
				nuestros impuestos sean invertidos y con ello,
				proponer ciudades donde podamos caminar 
				con gusto, pedalear mientras disfrutamos del
				trayecto, tomamos un transporte público de 
				calidad y convivimos con agrado en nuestros 
				espacios públicos
			</p>
			<a id="vote" href="<?php echo base_url()?>index.php/micrositio/encuesta">
				<img src="<?php echo base_url()?>sources/img/inv_lnk.png" alt="mobilidad-urbana">	
			</a>
		</div>
	</div>
<?php $this->load->view('micrositio/footer'); ?> 

