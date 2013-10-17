  
  <?php $this->load->view('header'); ?> 
  <link rel="stylesheet" href="<?php echo base_url()?>sources/css/diputado.css">
  <div id="wrapper">
    <div id="section">
      <div id="diputado_info">
          <ul id="sidebar">
            <li id="p1" class="step"> <span id="num">1</span> Busca a tu diputado en el mapa</li>
            <li id="p2" class="step"> <span id="num">2</span> Da click en <span id="leyenda"> "Ver perfil en Curul 501" </span> </li>
            <li id="p3" class="step"> 
              <span id="num">3</span> En la sección <span id="leyenda"> "DEJA TU COMENTARIO" </span>, te proponemos el siguiente mensaje: 
              <span id="leyenda">"Diputado quiero más inversión para moverme mejoren mi ciudad #elcochenoscuesta"</span>
            </li>
          </ul>
          <iframe src="http://www.curul501.org/animal_politico" frameborder="0" id="curul"></iframe>
          <div id="social">
            <!--a href="https://twitter.com/share" data-text="Diputado quiero más inversión para moverme mejoren mi ciudad #elcochenoscuesta" class="twitter-share-button" data-url="http://mexico-says.herokuapp.com/mexicosee/" data-via="itdpmx" data-lang="es" data-count="none">Twittear</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

            <div class="fb-like" data-href="http://mexico-says.herokuapp.com/mexicosee/" data-send="true" data-layout="button_count" data-width="0" data-show-faces="false"></div>
            <g:plusone href="http://mexico-says.herokuapp.com/mexicosee/"></g:plusone-->
          </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('footer'); ?> 
  <script type="text/javascript" src="<?php echo base_url()?>sources/js/jquery-1.8.2.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
    setTimeout( function(){ $("ul#sidebar li#p1").fadeIn("slow")} , 0)
    setTimeout( function(){ $("ul#sidebar li#p2").fadeIn("slow")} , 400)
    setTimeout( function(){ $("ul#sidebar li#p3").fadeIn("slow")} , 800)
  })
  </script>
