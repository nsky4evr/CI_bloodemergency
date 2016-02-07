<!DOCTYPE html>
<!-- WhiteStar - Responsive HTML5 Landing Page Template design by DSA79 (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->

	<head>
	
		<!-- Basic -->
		<meta charset="utf-8">
		<title>Blood Emergency Nepal</title>
		<meta name="whiterabbitstudios" content="DSA79">
		<meta name="blood emregency nepal,whiterabbit" content="blood donation, blood, blood mobile application, mobile app, business, corporate">		
		
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">		
			
		<!-- Libs CSS -->
		<link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet"> 		
		<link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url() ?>assets/css/flexslider.css" rel="stylesheet" media="screen" />
		<link href="<?php echo base_url() ?>assets/css/prettyPhoto.css" rel="stylesheet">

		<!-- Template CSS -->
		<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">  
		
		<!-- Style Switcher CSS -->		
		<link href="<?php echo base_url() ?>assets/css/green.css" rel="alternate stylesheet" title="green-theme">  
		<link href="<?php echo base_url() ?>assets/css/palevioletred.css" rel="alternate stylesheet" title="palevioletred-theme"> 
		<link href="<?php echo base_url() ?>assets/css/wheat.css" rel="alternate stylesheet" title="wheat-theme"> 
		<link href="<?php echo base_url() ?>assets/css/dimgray.css" rel="alternate stylesheet" title="dimgray-theme"> 
		<link href="<?php echo base_url() ?>assets/css/tomato.css" rel="alternate stylesheet" title="tomato-theme"> 
		<link href="<?php echo base_url() ?>assets/css/orange.css" rel="alternate stylesheet" title="orange-theme"> 		
		<link href="<?php echo base_url() ?>assets/css/darkorchid.css" rel="alternate stylesheet" title="darkorchid-theme"> 
		<link href="<?php echo base_url() ?>assets/css/yellow.css" rel="alternate stylesheet" title="yellow-theme"> 
		<link href="<?php echo base_url() ?>assets/css/darkblue.css" rel="alternate stylesheet" title="darkblue-theme"> 
		
		<!-- Responsive CSS -->
		<link href="<?php echo base_url() ?>assets/css/responsive.css" rel="stylesheet"> 
								
		<!-- Favicons -->	
		<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/icons/favicon.ico">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>assets/img/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>assets/img/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/img/icons/apple-touch-icon.png">
			
		<!-- Google Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Paprika' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
						
	</head>
		
	<body>
	
		
		<!-- HEADER
		============================================= -->
		<?php $this->load->view('home_parts/header') ?>	



		<!-- STYLE SWITCHER
		============================================= -->
		<!-- <div id="stlChanger">
			<div class="blockChanger bgChanger">
            	<a href="#" class="chBut"><i class="fa fa-gear fa-2x"></i></a>
                    <div class="chBody">

						<div class="stBlock" style="margin: 25px 13px 20px 18px;">
							<p>Color Scheme</p>						
							<div class="stBgs" style="margin: 15px 0 20px;">	
								<a href="javascript:chooseStyle('dimgray-theme', 60)"><img src="img/color-scheme/dimgray.png" alt="" /></a>								
								<a href="javascript:chooseStyle('green-theme', 60)"><img src="img/color-scheme/green.png" alt="" /></a>
								<a href="javascript:chooseStyle('tomato-theme', 60)"><img src="img/color-scheme/tomato.png" alt="" /></a>	
								<a href="javascript:chooseStyle('wheat-theme', 60)"><img src="img/color-scheme/wheat.png" alt="" /></a>	
								<a href="javascript:chooseStyle('orange-theme', 60)"><img src="img/color-scheme/orange.png" alt="" /></a>	
								<a href="javascript:chooseStyle('palevioletred-theme', 60)"><img src="img/color-scheme/palevioletred.png" alt="" /></a>																																												
								<a href="javascript:chooseStyle('darkorchid-theme', 60)"><img src="img/color-scheme/darkorchid.png" alt="" /></a>	
								<a href="javascript:chooseStyle('yellow-theme', 60)"><img src="img/color-scheme/yellow.png" alt="" /></a>	
								<a href="javascript:chooseStyle('darkblue-theme', 60)"><img src="img/color-scheme/darkblue.png" alt="" /></a>
							</div>
						</div>
						
						<div class="stBlock" style="margin: 0px 22px 25px 35px;">
							<a class="btn btn-theme" href="javascript:chooseStyle('none', 60)" checked="checked">Reset color</a>							
						</div>

					</div>
			</div>
		</div>   -->
		<!-- END SWITCHER -->


		
		<!-- PAGE CONTENT WRAPPER
		============================================= -->
		<div id="content-wrapper">
	
	
	
			<!-- TOP PAGE BANNER
			============================================= -->
			<?php $this->load->view('home_parts/top_page_banner') ?>	

			
			
			<!-- FEATURES
			============================================= -->
			<?php $this->load->view('home_parts/features') ?>
			
			
			
			<!-- SCREENS
			============================================= -->
			<?php $this->load->view('home_parts/screens') ?>
			
			
			
			<!-- TEAM
			============================================= -->
			<?php $this->load->view('home_parts/team') ?>
			
			
			
			<!-- VIDEO BANNER
			============================================= -->
			<?php $this->load->view('home_parts/video_banner') ?>		

			
			<!-- TESTIMONIALS ROTATOR
			============================================= -->
			<?php $this->load->view('home_parts/testimonials_rotator') ?>		
			
			
			
			<!-- FAQs
			============================================= -->
			<?php $this->load->view('home_parts/faq')?>


			
			<!-- CONTACTS
			============================================= -->
			<?php $this->load->view('home_parts/contacts')?>
			

			<!-- NEWSLETTER 
			============================================= -->
			<!-- <div id="newsletter">			
				<div class="container">	

					<div id="subscribe" class="row">

						<div id="newsletter_title" class="col-md-6">
							<h1>Subscribe to Our Newsletter</h1>
							<p>If you want to receive monthly/weekly eNewsletters from us, then please enter your email address to subscribe.</p>
						</div>
						
						
						<div id="newsletter_form" class="col-md-6">
							<div class="clearfix">
								<form id="subscribe-form" class="subscribe-form" action="http://www.dsathemes.com/html/white_star/newsletter.php" method="post">
									<input type="email" name="email" class="subscribe-input" placeholder="Enter your e-mail address...">
									<button type="submit" class="subscribe-submit">Subscribe</button>
								</form>
							</div>
							
							<p>We'll never spam or give this address away</p>
						</div> 
					</div>	
					
				</div>					
			</div> -->	 
			<!-- END NEWSLETTER -->
			
			
			
			<!-- FOOTER
			============================================= -->
			<?php $this->load->view('home_parts/footer') ?>	
			
		
		</div>	 <!-- END PAGE CONTENT WRAPPER	-->
		
	
		
		<!-- EXTERNAL SCRIPTS
		============================================= -->
		<script src="<?php echo base_url() ?>assets/js/jquery-2.0.3.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js" type="text/javascript"></script>	
		<script src="<?php echo base_url() ?>assets/js/jpreloader.js" type="text/javascript"></script>
		<script src="<?php echo base_url() ?>assets/js/retina.js" type="text/javascript"></script>	
		<script defer src="<?php echo base_url() ?>assets/js/jquery.flexslider.js" type="text/javascript"></script>	
		<script src="<?php echo base_url() ?>assets/js/jquery.accordion.source.js" type="text/javascript"></script>	
		<script src="<?php echo base_url() ?>assets/js/jquery.validate.min.js" type="text/javascript"></script>	
		<script src="<?php echo base_url() ?>assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>	
		<script src="<?php echo base_url() ?>assets/js/modernizr.custom.js" type="text/javascript"></script>	
		<script src="<?php echo base_url() ?>assets/js/jquery.easing.js" type="text/javascript"></script>	
		<script src="<?php echo base_url() ?>assets/js/waypoints.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url() ?>assets/js/custom.js" type="text/javascript"></script>


		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->
		
		<script src="<?php echo base_url() ?>assets/js/changer.js" type="text/javascript" ></script>
		<script defer src="<?php echo base_url() ?>assets/js/styleswitch.js"></script>	

	</body>
	
</html>