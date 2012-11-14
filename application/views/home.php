	<?php $this->load->view('header'); ?> 
	<link rel="stylesheet" href="<?php echo base_url()?>sources/css/home.css">
  	<link rel="stylesheet" href="<?php echo base_url()?>sources/css/colorbox.css" />

	<div id="wrapper">
		<div id="section">
			<p id="about">
				Todos los días tenemos que transladarnos ya sea 
				por estudios, trabajo o simplemente por 
				recreación. Sin embargo, la preferencia que se 
				le ha dado al automóvil privado en nuestras 
				ciudades, ha traído graves consecuencias para 
				todos. Por eso, es hora de que los ciudadanos
				propongamos donde y en que queremos que 
				nuestros impuestos sean invertidos y con ello,
				proponer ciudades donde podamos caminar 
				con gusto, pedalear mientras disfrutamos del
				trayecto, tomar un transporte público de 
				calidad y convivir con agrado en nuestros 
				espacios públicos
			</p>
			<a id="infograph" class="group1" href="<?php echo base_url()?>sources/img/info/infograph.png">
				<img src="<?php echo base_url()?>sources/img/infograph.png" alt="infografia-mobilidad">
			</a>
			<a id="vote" href="<?php echo base_url()?>index.php/micrositio/encuesta">
				<img src="<?php echo base_url()?>sources/img/inv_lnk.png" alt="mobilidad-urbana">	
			</a>
		</div>
	</div>
<?php $this->load->view('footer'); ?> 

<script type="text/javascript" src="<?php echo base_url()?>sources/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>sources/js/colorbox-min.js"></script>
<script>
	$(document).ready(function(){
		//Examples of how to assign the ColorBox event to elements
		$(".group1").colorbox({rel:'group1'});
	})
</script>

