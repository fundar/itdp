	<?php $this->load->view('header'); ?> 
	<link rel="stylesheet" href="<?php echo base_url()?>sources/css/home.css">
  	<link rel="stylesheet" href="<?php echo base_url()?>sources/css/colorbox.css" />

	<div id="wrapper">
		<div id="section">
			<a id="infograph" class="group1" href="<?php echo base_url()?>sources/img/info/infograph.jpg">
				
			</a>
			<p id="about">
				Es hora de que los ciudadanos propongamos ciudades donde podamos caminar con gusto, pedalear con seguridad, tomar un transporte público de calidad y convivir en espacios públicos agradables.
			</p>
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

