  <!--Facebook Share Script-->
  <script>
  (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;    function registrar($data) {

		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=122501004554118";
		  fjs.parentNode.insertBefore(js, fjs);
   	}(document, 'script', 'facebook-jssdk'));
  </script>

  <?php $this->load->view('header'); ?> 
  <link rel="stylesheet" href="<?php echo base_url()?>sources/css/diputado.css">
  <div id="wrapper">
    <div id="section">
      <div id="diputado_info">
        <form method="post">
          <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
          <label for="correo"> Correo:</label>
          <input type="text" name="correo" id="correo" class="fields" value="<?php echo $_REQUEST['correo']; ?>">
          <label for="nombre"> Nombre:</label>
          <input type="text" name="nombre" id="nombre" class="fields" value="<?php echo $_REQUEST['nombre']; ?>"> <br>
          <label for="nombre"> Asunto:</label>
          <input type="text" name="asunto" id="asunto" class="fields"> <br>

          <div id="frame"> </div>
          <textarea name="texto" id="texto">Diputado quiero más inversión para moverme mejoren mi ciudad #elcochenoscuesta</textarea> 
          <div id="error"> </div>
          <div id="social">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://mexico-says.herokuapp.com/mexicosee/" data-via="itdpmx" data-lang="es" data-count="none">Twittear</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

            <div class="fb-like" data-href="http://mexico-says.herokuapp.com/mexicosee/" data-send="true" data-layout="button_count" data-width="0" data-show-faces="false"></div>
            <g:plusone href="http://mexico-says.herokuapp.com/mexicosee/"></g:plusone>
          </div>
          <input type="submit" id="enviar" value="">
        </form>
      </div>
    </div>
  </div>
  <?php $this->load->view('footer'); ?> 
  
  <script type="text/javascript" src="<?php echo base_url()?>sources/js/jquery-1.8.2.min.js"></script>

  <script type="text/javascript">
    //$(document).ready(function(){
        function mail_test(mail) {
            var exr = /^[0-9a-z_\-\.]+@[0-9a-z\-\.]+\.[a-z]{2,4}$/i;
            return exr.test(mail);
          }
          $("form").submit(function(e){
              $("div#error").html("");
              var correo = $(this).find("#correo").val(),
                  nombre = $(this).find("#nombre").val(),
                  asunto = $(this).find("#asunto").val(),
                  texto = $(this).find("#texto").val();

              if( correo == "" ||  nombre == "" || asunto == "" || texto == ""){
                  $("div#error").html("Todos los campos son requeridos");
              }else if(!mail_test(correo)){
                  $("div#errores_form").html("Correo Inválido")
              }else{
                  params = { "correo":correo, 
                             "nombre":nombre, 
                             "asunto":asunto, 
                             "texto":texto
                           };
                  url = "<?php echo base_url()?>index.php/micrositio/mandar_correo";
                  $.post(url , params, function(user_id){
                      if(user_id === "False"){
                          $("div#error").text(user_id);
                      }else{
                          $("div#error").text("Correo Enviado Exitosamente");
                      }
                  })
              }
              return false;
          })

    //})
  </script>