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
						    	<li class="current"><a href="shop.php">Animales</a></li>
						    	<li><a href="team.php">Animalistas</a></li>
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
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
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
			<div class="row shop_box-top">
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic5.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Pecas</a></h3>
						<h4><br><b><p class="m_8">Raza:</b> Criollo.</br></h4></p>
						<h4><br><b><p class="m_8">Color:</b> Blanco y negro.</br></h4></p>
					    <h4><br><b><p class="m_8">Edad:</b> 4 meses.</br></h4></p>
				        <h4><br><b><p class="m_8">Sexo:</b> Macho.</br></h4></p>
			            <h4><br><b><p class="m_8">Descripcion:</b> Jugueton, energico, cariñoso.</br></h4></p>
			            <h4><br><b><p class="m_8">si te interesa haz click en la imagen</b></br></h4></p>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic6.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Muñeca</a></h3>
					    <h4><br><b><p class="m_8">Raza:</b> criolla.</br></h4></p>
						<h4><br><b><p class="m_8">Color:</b> Blanca con pintas cafes y negras.</br></h4></p>
					    <h4><br><b><p class="m_8">Edad:</b> 2 años</br></h4></p>
				        <h4><br><b><p class="m_8">Sexo:</b> Hembra.</br></h4></p>
			            <h4><br><b><p class="m_8">Descripcion:</b> Cariñosa,atenta y esterilizada. </br></h4></p>
			            <h4><br><b><p class="m_8">si te interesa haz click en la imagen</b></br></h4></p>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic7.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Rayito</a></h3>
						<h4><br><b><p class="m_8">Raza:</b> criollo.</br></h4></p>
						<h4><br><b><p class="m_8">Color:</b> Pardo.</br></h4></p>
					    <h4><br><b><p class="m_8">Edad:</b> 5 meses. </br></h4></p>
				        <h4><br><b><p class="m_8">Sexo:</b> Macho.</br></h4></p>
			            <h4><br><b><p class="m_8">Descripcion:</b> Extrovertido, jugueton y amistoso.</br></h4></p>
			            <h4><br><b><p class="m_8">si te interesa haz click en la imagen</b></br></h4></p>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic8.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Masmelo</a></h3>
						<h4><br><b><p class="m_8">Raza:</b> criolla.</br></h4></p>
						<h4><br><b><p class="m_8">Color:</b> Blanca con pintas cafes y negras.</br></h4></p>
					    <h4><br><b><p class="m_8">Edad:</b> 4 meses. </br></h4></p>
				        <h4><br><b><p class="m_8">Sexo:</b> Hembra.</br></h4></p>
			            <h4><br><b><p class="m_8">Descripcion:</b> Miedosa, timida y tierna.</br></h4></p>
			            <h4><br><b><p class="m_8">si te interesa haz click en la imagen</b></br></h4></p>
				    </div>
				</a></div>
			</div>
			<div class="row">
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic9.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Canelo</a></h3>
						<h4><br><b><p class="m_8">Raza:</b> Criollo.</br></h4></p>
						<h4><br><b><p class="m_8">Color:</b> Cafe claro.</br></h4></p>
					    <h4><br><b><p class="m_8">Edad:</b> 6 meses. </br></h4></p>
				        <h4><br><b><p class="m_8">Sexo:</b> Macho.</br></h4></p>
			            <h4><br><b><p class="m_8">Descripcion:</b> Cariñoso, Jugueton y esterilizado.</br></h4></p>
			            <h4><br><b><p class="m_8">si te interesa haz click en la imagen</b><br/></h4></p>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic10.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Luca</a></h3>
						<h4><br><b><p class="m_8">Raza:</b> Criollo.</br></h4></p>
						<h4><br><b><p class="m_8">Color:</b> Barcino.</br></h4></p>
					    <h4><br><b><p class="m_8">Edad:</b> 4 meses. </br></h4></p>
				        <h4><br><b><p class="m_8">Sexo:</b> Macho.</br></h4></p>
			            <h4><br><b><p class="m_8">Descripcion:</b> Tierno, cariñoso, extrovertido y esterilizado. </br></h4></p>
			            <h4><br><b><p class="m_8">si te interesa haz click en la imagen</b><br/></h4></p>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic11.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Negrito</a></h3>
						<h4><br><b><p class="m_8">Raza:</b> Criollo.</br></h4></p>
						<h4><br><b><p class="m_8">Color:</b> Negro.</br></h4></p>
					    <h4><br><b><p class="m_8">Edad:</b> 13 meses. </br></h4></p>
				        <h4><br><b><p class="m_8">Sexo:</b> Macho.</br></h4></p>
			            <h4><br><b><p class="m_8">Descripcion:</b> Nervioso, timido y esterilizado. </br></h4></p>
			            <h4><br><b><p class="m_8">si te interesa haz click en la imagen</b><br/></h4></p>
				    </div>
				</a></div>
				<div class="col-md-3 shop_box"><a href="single.php">
					<img src="images/pic12.jpg" class="img-responsive" alt=""/>
					<div class="shop_desc">
						<h3><a href="#">Blanquito</a></h3>
						<h4><br><b><p class="m_8">Raza:</b> Labrador. </br></h4></p>
						<h4><br><b><p class="m_8">Color:</b> Amarillo claro.</br></h4></p>
					    <h4><br><b><p class="m_8">Edad:</b> 2 años. </br></h4></p>
				        <h4><br><b><p class="m_8">Sexo:</b> Macho.</br></h4></p>
			            <h4><br><b><p class="m_8">Descripcion:</b> Jugueton, activo, amigable y esterilizado.</br></h4></p>
			            <h4><br><b><p class="m_8">si te interesa haz click en la imagen</b><br/></p>
				    </div>
				</a></div>
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
			}
			
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