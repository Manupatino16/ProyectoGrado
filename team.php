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
     <!-- Add fancyBox main JS and CSS files -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
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
						    	<li class="current"><a href="team.php">Animalistas</a></li>
						    	<li><a href="experiance.php">Experiencia</a></li>
						    	<li><a href="company.php">Donaciones</a></li>
								<li><a href="contact.php">Contacto</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
	            <div class="header_right">
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
			<div class="row team_box">
				<h3 class="m_2">grupo pro-bienestar</h3>
				<div class="col-md-3 team1">
				  <a class="popup-with-zoom-anim" href=><img src="images/team1.jpg" class="img-responsive" title="continue" alt=""/></a>
				    <div id="small-dialog3" class="mfp-hide">
					   <div class="pop_up2">
					   </div>
					</div>
					<h4 class="m_5"><a href="#"></a></h4>
				    <p class="m_6"></p>
				</div>
				<div class="col-md-3 team1">
					<a class="popup-with-zoom-anim" href=><img src="images/team2.jpg" class="img-responsive" title="continue" alt=""/></a>
				    <div id="small-dialog3" class="mfp-hide">
					   <div class="pop_up2">
					   </div>
					</div>
					<h4 class="m_5"><a href="#"></a></h4>
				    <p class="m_6"></p>
				</div>
				<div class="col-md-3 team1">
					<a class="popup-with-zoom-anim" href=><img src="images/team3.jpg" class="img-responsive" title="continue" alt=""/></a>
				    <div id="small-dialog3" class="mfp-hide">
					   <div class="pop_up2">
					   </div>
					</div>
					<h4 class="m_5"><a href="#"></a></h4>
				    <p class="m_6"></p>
				</div>
				<div class="col-md-3 team1">
					<a class="popup-with-zoom-anim" href=><img src="images/team4.jpg" class="img-responsive" title="continue" alt=""/></a>
				    <div id="small-dialog3" class="mfp-hide">
					   <div class="pop_up2">
					   </div>
					</div>
					<h4 class="m_5"><a href="#"></a></h4>
				    <p class="m_6"></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 team_bottom">
				  <ul class="team_list">
					<h3 class="m_8">OBJETIVOS</h3>
		            <p class="m_2">Manutención, sostenimiento básico y mantenimiento del centro de paso, valoración y bienestar animal con este ítem, queremos asegurar la alimentación, vacunación, desparasitación y esterilización de los animales abandonados o en situación de calle.</p>
		            <p class="m_2">Campañas informativas y de sensibilización.</p>
		            <p class="m_2">Esterilizaciones, masivas, sistemáticas, extendidas, gratuitas, abarcativas y tempranas.</p>
		            <p class="m_2">Dependencia u oficina municipal contra el maltrato animal.</p>
		          </ul>
		          <div class="col-md-8">
				  <ul class="team_list">
					<h3 class="m_8">JUNTOS POR EL BIENESTAR ANIMAL</h3>
						 <p class="m_2">Por medio de esta iniciativa queremos mejorar la calidad de vida de los animales. </p>
						  <p class="m_2">-Buscar justicia, libertad, protección y cuidado de los animales con los que compartimos el planeta.</p> 
						  <p class="m_2">-No al abandono. </p>
					      <p class="m_2">-No al maltrato. </p>
					      <p class="m_2">No al confinamiento. </p>
				          <p class="m_2">-Buscar la cohesión social y la sana convivencia.</p>
		          </ul>
		          </div>
				</div>
				<div class="col-md-8">
					<ul class="team_list">
					 <h3 class="m_8">MISIÓN</h3>
				     <p class="m_2">Nosotros, El grupo Pro Bienestar, somos un grupo sin ánimo de lucro que tiene como misión principal el bienestar animal de la fauna doméstica, callejera y en situación de vulnerabilidad. Nuestros objetivos son:</p>
                     <p class="m_2">-La erradicación del maltrato y el abandono.</p> 
                     <p class="m_2">-Promover la adopción responsable.</p>
                     <p class="m_2">-Apoyar a la municipalidad en el funcionamiento del albergue temporal, alimento y atención veterinaria a aquellos animales rescatados.</p> 
                     <p class="m_2">-Buscar soluciones que apunten al control reproductivo Fomentar campañas de sensibilización en tenencia responsable.</p>
				    <h3 class="m_8">VISIÓN</h3>
				    <p class="m_2">La causa del animal vulnerable, es nuestra causa.</p>
                     <p class="m_2">Concientizar a los habitantes del municipio de los derechos de los animales, de la importancia de protegerlos y de cuidarlos, Inspirar a ser mejores personas con difusión y sensibilización.</p>
                     <p class="m_2">Consolidarnos como una organización modelo en el municipio y sus alrededores, trabajando por la defensa, el bienestar, la atención y protección de los animales.</p> 
                     <p class="m_2">Dignificar la vida y los derechos de los animales por los que trabajamos en general.</p>
		             <br><img src="images/team5.jpeg" class="img-responsive" alt=""/></br>
		          </ul>
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
							<ul class="social">	
							  <li class="facebook"><a href="https://www.facebook.com/centrocaninoadopcion"><span> </span></a></li>
							  <li class="instagram"><a href="#"><span> </span></a></li>		
							  <li class="youtube"><a href="https://www.youtube.com/results?search_query=refugio+canino+de+sonson"><span> </span></a></li>										  				
						    </ul>
		   				</ul>
					</div>
				</div>
				<div class="row footer_bottom">
				    <div class="copy

				    ">
			           <p>©2021 Realizado por:<a href="http://w3layouts.com" target="_blank"> Jimena Florez, Manuela Patiño y Yessica Marin</a></p>
		            </div>
					  <dl id="sample" class="dropdown">
				        <dt><a href="#"><span>Sonsón Antioquia</span></a></dt>
				      </dl>
   				</div>
   				</div>
			</div>
		</div>
</body>	
</php>