<!DOCTYPE html>
<html lang="en-US">
	
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<title>ZuluCreate</title>
		<link rel='stylesheet' href='css/bootstrap.css?ver=3.9.1' type='text/css' media='all' />
		<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/icons.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/custom.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/bootstrap-responsive.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/msblue.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/bootstrap-grid.css' type='text/css' media='all' />
		<script type='text/javascript' src='js/jquery.js?ver=1.11.0'></script>
		<script type='text/javascript' src='js/jquery-migrate.min.js?ver=1.2.1'></script>
		<script type="text/javascript">
			function addHandler(object, event, handler) {
				if (typeof object.addEventListener != 'undefined') object.addEventListener(event, handler, false);
				else if (typeof object.attachEvent != 'undefined') object.attachEvent('on' + event, handler);
				else throw 'Incompatible browser';
			}
		</script>
		<style type="text/css">
			.recentcomments a {
				display:inline !important;
				padding:0 !important;
				margin:0 !important;
			}
		</style>
		<?php
			$color = array('#17819c', '#179C6C', '#17569C', '#72179C');
		?>
		<!--[if lt IE 9]>
			<script src="http://www.wowthemes.net/demo-serenity/wp-content/themes/serenitynow/js/html5shiv.js" type="text/javascript"></script>
			<link rel="stylesheet" href="http://www.wowthemes.net/demo-serenity/wp-content/themes/serenitynow/css/ie.css" media="screen" type="text/css" />
		<![endif]-->
		<!--[if IE]>
			<style>
				.isotope-hidden {
					display: none;
				}
			</style>
		<![endif]-->
	</head>
	
	<body class="home page page-id-5 page-template page-template-template-masonry-portfolio-php">
	<div id="page">
		<header id="masthead" role="banner">
			<div class="navbar navbar-inverse">
				<div class="navbar-inner">
					<div class="container">
						<div class="row-fluid">
							<div class="span12">
								<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="brand" href="index.html" title="Zulu Create" rel="home">Zulu Create</a>

								<div class="nav-collapse collapse">
									<ul id="menu-topmenu" class="nav navbar-nav">
										<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-5 current_page_item"><a href="index.html">Home</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Gallery</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="job-search.html">Jobs</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">How It Works</a></li>
									</ul>

									<ul id="sign-topmenu" class="nav navbar-nav pull-right">
										<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Sign up</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Sign in</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /site-navigation -->
		</header>
		<!-- /masthead -->

		<!-- intro -->
		<div class="introtitle">
			<div class="container">
				<div class="row-fluid">
					<!--<div class="panel" style="padding: 0;">-->
						<div class="span8">
							<p style="text-align: center; color: #555; line-height: 35px; margin-bottom: auto;">Showcase, Connect &amp; Gain Exposure</p>
						</div>
						<div class="span4">
							<a href="#" class="sbutton square shadow medium default" style="background: #2672EC; margin-bottom: auto; padding: 5px 15px;">Get Started</a>
						</div>
						<div class="clearfix"></div>
					<!--</div>-->
				</div>
			</div>
		</div>
	<!-- /intro -->
	<!-- Main Content - Profile Page -->
	<div class="row" style="margin-top:-60px;">
		<div class="col-md-3">
			<div class="main-profile-left">
				<!-- Start profile Info -->
				<div id="user-info">
					<img src="img/profile1.jpg">
					<p style="margin-left:-80px;">Oman Clark</p>
						<hr>
					<ul id="basic-info">
						<li><img src="img/location.png"> <a href="#">Dublin, Ireland</a></li>
						<li><img src="img/link.png"><a href="#" style="margin-left:5px;">ciangallagher.net</a></li>
						<li><img src="img/contact.png"> <a href="#">@Cian_911</a></li>
					</ul>
						<hr>
					<div id="user-following">
						<button class="btn-follow" style="width:120px;">Following</button>
						<button class="btn-follow">List</button>
							<br><br>
						<ul id="user-follow" style="margin-right:30px;">
							<li>12,103 <span>Followers</span></li>
							<li>101 <span>Following</span></li>
							<li>13 <span>Listed</span></li>
						</ul>
							<hr>
						<p id="about-user">
							<span>About Oman Clark</span><br><br>
							ColumnLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<br><br> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-9">
			<div class="main-profile-right">
				<!-- Start Row 1 -->
				<div class="row">
					<div class="col-md-4">
						<figure class="effect-layla" style="background-color:<?php $color[array_rand($color)]; ?>">
					        <img src="img/row-img-1.jpg" alt="img01" class="img-responsive"/>
					        <figcaption>
					            <h2>Nice <span>Lily</span></h2>
					            <p>Lily likes to play with crayons and pencils</p>
					        </figcaption>         
					    </figure>
					</div>
					<div class="col-md-4">
							<figure class="effect-oscar" <?php echo 'style="background-color:'.$color[array_rand($color)].';"';?>>
						        <img src="img/row-img-2.png" class="img-responsive">
						        <figcaption>
						            <h2>Building <span>Brands</span></h2>
						            <p>Lorem Ipsum</p>
						        </figcaption>         
						    </figure>
					</div>
					<div class="col-md-4">
							<figure class="effect-ruby" <?php echo 'style="background-color:'.$color[array_rand($color)].';"';?>>
						        <img src="img/row-img-3.jpg" class="img-responsive">
						        <figcaption>
						            <h2>Mobile <span>Phone</span></h2>
						            <p>Lorem Ipsum</p>
						        </figcaption>         
						    </figure>
						
					</div>
				</div>
				<br><br>
				<!-- Start Row 2 -->
				<div class="row">
					<div class="col-md-4">
							<figure class="effect-ruby" <?php echo 'style="background-color:'.$color[array_rand($color)].';"';?>>
						       <img src="img/row-img-4.jpg" class="img-responsive">
						        <figcaption>
						            <h2>Static <span>Page</span></h2>
						            <p>Lorem Ipsum</p>
						        </figcaption>         
						    </figure>
						
					</div>
					<div class="col-md-4">
							<figure class="effect-layla" <?php echo 'style="background-color:'.$color[array_rand($color)].';"';?>>
						       <img src="img/row-img-5.gif" class="img-responsive">
						        <figcaption>
						            <h2>Sublime <span>Text 2</span></h2>
						            <p>Lorem Ipsum</p>
						        </figcaption>         
						    </figure>
						
					</div>
					<div class="col-md-4">
							<figure class="effect-ruby" <?php echo 'style="background-color:'.$color[array_rand($color)].';"';?>>
						       	<img src="img/row-img-6.png" class="img-responsive">
						        <figcaption>
						            <h2>Building <span>Brands</span></h2>
						            <p>Lily likes to play with crayons and pencils</p>
						        </figcaption>         
						    </figure>
						</div>
				</div>
				<!--/End Row 2-->
			</div>
		</div>
	</div>

<!-- /Main Content - Profile Page -->
<!-- footer -->
			<footer id="colophon" role="contentinfo">
				<div class="footer">
					<div class="container">
						<!-- 1st row -->
						<div class="row-fluid">
							<div class="span12 text-center">
									<h1 class='title'>Get in touch</h1>

								<p>If you have a specific project or event for us, get in touch today on:</p>
<i>+353 (0) 86 351 9395</i>
or contact@zulucreate.ie</div>
						</div>
						<hr>
						<!-- 2nd row -->
						<div class="row-fluid">
							<!-- left -->
							<div class="span4 smallspacetop">
								<p class="smaller"> <span class='copyright'>&copy; </span> 2014 Zulu Create</p>
							</div>
							<!-- middle -->
							<div class="span4">
								<div class="text-center">   <a class="totop"><i class="icon-chevron-up"></i></a>

								</div>
							</div>
							<!-- right -->
							<div class="span4 smallspacetop">
								<ul class="social-links pull-right">
									<li class="twitter-link">   <a href="#" class="twitter" target="_blank" title="Follow Us on Twitter">Twitter</a>    
									</li>
									<li class="facebook-link">  <a href="#" class="facebook" target="_blank" title="Join us on Facebook">Facebook</a>   
									</li>
									<li class="google-link">    <a href="#" class="google" target="_blank" title="Google +">Google</a>  
									</li>
									<li class="skype-link"> <a href="#" class="skype" target="_blank" title="Skype">Skype</a>   
									</li>
									<li class="rss-link">   <a href="feed/rss/" class="rss" title="RSS Feeds">RSS Feeds</a> 
									</li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<!-- /right -->
						</div>
					</div>
				</div>
			</footer>
			<!-- /footer -->
			<link rel='stylesheet' id='wowprettyPhotocss-css' href='css/prettyPhoto.css?ver=3.9.1' type='text/css' media='all' />
			<script type='text/javascript' src='js/jquery-1.9.0.min.js?ver=3.9.1'></script>
			<script type='text/javascript' src='js/bootstrap.js?ver=3.9.1'></script>
			<script type='text/javascript' src='js/common.js?ver=3.9.1'></script>
			<script type='text/javascript' src='js/jquery.placeholder.min.js?ver=3.9.1'></script>
			<script type='text/javascript' src='js/jquery.prettyPhoto.js?ver=3.9.1'></script>
			<script type='text/javascript' src='js/jquery.isotope.min.js?ver=3.9.1'></script>
			<script type="text/javascript"></script>
		</div>
		<!-- /page -->
	</body>

</html>