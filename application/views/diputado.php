  <!--Facebook Share Script-->
  <!--script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;    
    function registrar($data) {

      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=122501004554118";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script-->

  <?php $this->load->view('header'); ?> 
    <link rel="stylesheet" href="<?php echo base_url()?>sources/css/colorbox.css" />
  <link rel="stylesheet" href="<?php echo base_url()?>sources/css/diputado.css">
  <div id="wrapper">
    <div id="section">
      <div id="diputado_info">
        <form method="post">
          <label for="correo"> Correo:</label>
          <input type="text" name="correo" id="correo" class="fields" value="<?php if(isset($_REQUEST['correo'])){ echo $_REQUEST['correo']; }?>">
          <label for="nombre"> Nombre:</label>
          <input type="text" name="nombre" id="nombre" class="fields" value="<?php if(isset($_REQUEST['nombre'])){echo $_REQUEST['nombre']; }?>"> <br>
          <label for="nombre"> Asunto:</label>
          <input type="text" name="asunto" id="asunto" class="fields"> <br>




          <!--iframe id="curul" src="http://www.curul501.org/animal_politico" width="950" height="600"></iframe-->
          <!--iframe id="curul" src="http://localhost/itdpmx/" width="950" height="600"></iframe-->


          <div id="output"></div>

          <p><a class='iframe' href="http://www.curul501.org/animal_politico">Buscar Diputado</a></p>
          <!--p><a class='iframe' href="http://localhost/itdpmx/">Buscar Diputado</a></p-->

          <div id="diputado"></div>
          <textarea name="texto" id="texto">Diputado quiero más inversión para moverme mejoren mi ciudad #elcochenoscuesta</textarea> 
          <div id="error"> </div>
          <div id="social">
            <a href="https://twitter.com/share" data-text="Diputado quiero más inversión para moverme mejoren mi ciudad #elcochenoscuesta" class="twitter-share-button" data-url="http://mexico-says.herokuapp.com/mexicosee/" data-via="itdpmx" data-lang="es" data-count="none">Twittear</a>
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
  <script type="text/javascript" src="<?php echo base_url()?>sources/js/colorbox-min.js"></script>

  <script type="text/javascript">
          $(document).ready(function(){/*
              var $iframe = $("iframe#curul"); 
              $("iframe#curul").bind("load", null, function(e) {
                  $("iframe#curul").contents().find("a").onclick = function(){ // do your staff here 
                    alert("holaaaaaaaaaaa")
                    return false;
                  };
              });*/
/*
            $.getJSON('http://anyorigin.com/get?url=http%3A//www.animalpolitico.com/curul&callback=?', function(data){
              $('#output').html(data.contents);
            });

            $("#widget #show-profile h2").live("click", function(){
              alert("ta tan!!!")
            })
  */        
  //http://www.curul501.org/animal_politico
              $("iframe#curul").bind("load", null, function(e) {
                var ifrDocument=document.getElementById('curul').contentDocument || document.getElementById('curul').contentWindow.document; 
                var ifrBody=ifrDocument.getElementsByTagName('body')[0]; 
                console.log(ifrBody.innerHTML); 
              });
              //agregar algo adelante: ifrBody.innerHTML='esto va adelante<br />'+ifrBody.innerHTML;
          });
          </script>

  <script type="text/javascript">
  $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
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

  </script>
          