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
						    	<li><a href="shop.php">Animals</a></li>
						    	<li class="current"><a href="team.php">Animalists</a></li>
						    	<li><a href="experiance.php">Experience</a></li>
						    	<li><a href="company.php">Donations</a></li>
								<li><a href="contact.php">Contacts</a></li>								
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
				<h3 class="m_2">pro-wellness group</h3>
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
					<h3 class="m_8">OBJECTIVES</h3>
		            <p class="m_2">Maintenance, basic support and maintenance of the center of passage, assessment and animal welfare with this item, we want to ensure the feeding, vaccination, deworming and sterilization of abandoned or homeless animals..</p>
		            <p class="m_2">Information and awareness campaigns.</p>
		            <p class="m_2">Sterilizations, massive, systematic, extended, free, comprehensive and early.</p>
		            <p class="m_2">Municipal unit or office against animal abuse.</p>
		          </ul>
		          <div class="col-md-8">
				  <ul class="team_list">
					<h3 class="m_8">TOGETHER FOR ANIMAL WELFARE</h3>
						 <p class="m_2">-Through this initiative we want to improve the quality of life of animals. </p>
						  <p class="m_2">-Seeking justice, freedom, protection and care of the animals with whom we share the planet.</p> 
						  <p class="m_2">-No to abandonment. </p>
					      <p class="m_2">-No to abuse. </p>
					      <p class="m_2">No to confinement. </p>
				          <p class="m_2">-Seek social cohesion and healthy coexistence.</p>
		          </ul>
		          </div>
				</div>
				<div class="col-md-8">
					<ul class="team_list">
					 <h3 class="m_8">MISSION</h3>
				     <p class="m_2">We, the Pro Bienestar group, are a non-profit group whose main mission is the animal welfare of domestic, street and vulnerable fauna. Our objectives are:</p>
                     <p class="m_2">-Eradication of abuse and neglect.</p> 
                     <p class="m_2">-Promote responsible adoption.</p>
                     <p class="m_2">-Support the municipality in the operation of the temporary shelter, food and veterinary attention to those rescued animals.</p> 
                     <p class="m_2">-Look for solutions that aim at reproductive control. Promote awareness-raising campaigns on responsible ownership.</p>
				    <h3 class="m_8">VISION</h3>
				    <p class="m_2">The cause of the vulnerable animal is our cause.</p>
                     <p class="m_2">Make the inhabitants of the municipality aware of the rights of animals, the importance of protecting and caring for them, Inspire to be better people with dissemination and awareness.</p>
                     <p class="m_2">Consolidate ourselves as a model organization in the municipality and its surroundings, working for the defense, welfare, care and protection of animals.</p> 
                     <p class="m_2">Dignify the life and rights of the animals for which we work in general.</p>
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
				    <div class="copy

				    ">
			           <p>©2021 Made by:<a href="http://w3layouts.com" target="_blank"> Jimena Florez, Manuela Patiño y Yessica Marin</a></p>
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