<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE PHP>
<php>
<head>
<title>PATITAS SONRIENTES</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).php();
                $(".dropdown dt a span").php(text);
                $(".dropdown dd ul").hide();
                $("#result").php("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").php();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
 </head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.php"><img src="images/logo.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="shop.php">Animales</a></li>
						    	<li><a href="team.php">Animalistas</a></li>
						    	<li><a href="experiance.php">Experiencia</a></li>
						    	<li><a href="company.php">Donaciones</a></li>
								<li class="current"><a href="contact.php">Contactos</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
						</ul>
					 </li>
				   </ul>
		        <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
	  </div>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
				  <div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!4v1632274089612!6m8!1m7!1sOv6QmDa8xvl1vSCpm14Njg!2m2!1d5.704113808116906!2d-75.31098293545398!3f119.3812292377825!4f0!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				  </div>
				</div>
				<div class="col-md-5">
					<p class="m_2">El albergue municipal ubicado por la salida de los medios, es donde se encuentran los animalitos rescatados, tanto de la calle, como los que fueron maltratados y abandonados, alli es donde los interesados en adoptar pueden ir a darle una mejor vida y un digno hogar. </p>
					<div class="address">
				                <p class="m_2">Hogar de paso</p>
						   		<p class="m_2">se encuentra en la carrera 4, por la salida de los medios</p>
						   		<p class="m_2">Sonsón</p>
				   		<p class="m_2">Celular: 310 610 66 92</p>
				   </div>
				</div>
			</div>
	     </div>
	   </div>
	  </div>
	  <div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Patitas sonrientes.</h4>
							<li><a href="#">Adopción.</a></li>
							<li><a href="#">Donación.</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Animalistas.</h4>
							<li><a href="#">Objetivos.</a></li>
							<li><a href="#">Misión y Visión.</a></li>
							<li><a href="#">Juntos por el bienestar animal.</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Experiencia.</h4>
							<li><a href="#">Adopción.</a></li>
							<li><a href="#">Esterilización.</a></li>
							<li><a href="#">Vacunación.</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Información.</h4>
							<div class="footer_search">
				    		   <form action="enviar.php" method="post">
				    		   		<input type="text" value="Nombre" name="nombre"> 
				    		   		<br>
				    		   		<br>
				    		   		<br>
				    		   		<input type="text" value="Mensaje" name="mensaje">
				    		   		<button type="submit">Enviar</button>
				    		   </form>
					        </div>
							<ul class="social">	
							  <li class="facebook"><a href="https://www.facebook.com/centrocaninoadopcion"><span> </span></a></li>
							  <li class="instagram"><a href="#"><span> </span></a></li>	
							  <li class="youtube"><a href="https://www.youtube.com/results?search_query=refugio+canino+de+sonson"><span> </span></a></li>										  				
						    </ul>
		   				</ul>
					</div>
				</div>
				<div class="row footer_bottom">
				    <div class="copy">
			              <p>©2021 Realizado por:<a href="http://w3layouts.com" target="_blank">Jimena Florez, Manuela Patiño y Yessica Marin</a></p>
		            </div>
					  <dl id="sample" class="dropdown">
				        <dt><a href="#"><span>Sonsón Antioquia</span></a></dt>
				      	   				  </dl>
   				</div>
			</div>
		</div>
</body>	
</php>