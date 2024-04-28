<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE PHP>
<php>
<head>
<title>SMILING LEGS</title>
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
    <!-- light-box -->
	<script type="text/javascript" src="js/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
   <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

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
						    	<li><a href="shop.php">Animals</a></li>
						    	<li><a href="team.php">Animalists</a></li>
						    	<li class="current"><a href="experiance.php">Experience</a></li>
						    	<li><a href="company.php">Donations</a></li>
								<li><a href="contact.php">Contacts</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
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
			<div class="row ex_box">
				<h3 class="m_2">ADOPTION</h3>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/e1.jpg" data-fancybox-group="gallery" title="Adopción"><img src="images/e1.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Jimena  I adopt Katy the 24/10/2015
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/e2.jpg" data-fancybox-group="gallery" title="Adopción"><img src="images/e2.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Manuela I adopt Suzy the 16/08/2010
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/e3.jpg" data-fancybox-group="gallery" title="Adopción"><img src="images/e3.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						Yessica I adopt Mylu the 16/02/2021
					</div>
				</a></div>
				</div>
		    </div>
		    <div class="row ex_box">
				<h3 class="m_2">STERILIZATION</h3>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/e4.jpeg" data-fancybox-group="gallery" title="Esterilización"><img src="images/e4.jpeg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						03-08-2021 8:00 AM
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/e5.jpeg" data-fancybox-group="gallery" title="Esterilización"><img src="images/e5.jpeg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						15-09-2021 6:00 AM
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/e6.jpg" data-fancybox-group="gallery" title="Esterilización"><img src="images/e6.jpg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
					   23-09-2021 1:OO PM
					</div>
				</a></div>
				</div>
		    </div>
		    <div class="row ex1_box">
				<h3 class="m_2">VACCINATION</h3>
			   <div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/e7.jpeg" data-fancybox-group="gallery" title="Vacunación"><img src="images/e7.jpeg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						05-07-2021 9:00 AM
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/e8.jpeg" data-fancybox-group="gallery" title="Vacunación"><img src="images/e8.jpeg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						07-04-2021 8:00 AM
					</div>
				</a></div>
				</div>
				<div class="col-md-4 team1">
				<div class="img_section magnifier2">
				  <a class="fancybox" href="images/e9.jpeg" data-fancybox-group="gallery" title="Vacunación"><img src="images/e9.jpeg" class="img-responsive" alt=""><span> </span>
					<div class="img_section_txt">
						16-08-2021 8:00 AM
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
							<h4>Smiling legs.</h4>
							<li><a href="#">Adoption.</a></li>
							<li><a href="#">Donation.</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Animalists.</h4>
							<li><a href="#">Objectives.</a></li>
							<li><a href="#">Mission and Vision.</a></li>
							<li><a href="#">Together for animal welfare.</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Experience.</h4>
							<li><a href="#">Adoption.</a></li>
							<li><a href="#">Sterilization.</a></li>
							<li><a href="#">Vaccination.</a></li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="footer_box">
							<h4>Information.</h4>
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
			              <p>©2021 Made by:<a href="http://w3layouts.com" target="_blank">Jimena Florez, Manuela Patiño y Yessica Marin</a></p>
		            </div>
					  <dl id="sample" class="dropdown">
				        <dt><a href="#"><span>Sonsón Antioquia</span></a></dt>
				      	   				  </dl>
   				</div>
			</div>
		</div>
</body>	
</php>