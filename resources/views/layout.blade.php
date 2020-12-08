<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="free-educational-responsive-web-template-webEdu">
	<meta name="author" content="webThemez.com">
	<title>CHARITY FOUNDATION</title>
	<link rel="favicon" href="{{asset('assets/images/favicon.png')}}">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}"> 
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-theme.css" media="screen')}}"> 
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel='stylesheet' id='camera-css'  href='{{asset('assets/css/camera.css')}}' type='text/css' media='all'> 
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
				<img src="{{asset('assets/images/logo.png')}}" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					{{-- <li class="active"><a href="{{ url('/home')}}">Home</a></li> --}}
					<li class="{{ (request()->is('home')) ? 'active' : '' }}"><a href="{{ url('/home')}}">Home</a></li>
        			<li class="{{ (request()->is('about')) ? 'active' : '' }}"><a href="{{ url('/about')}}">About</a></li>
					<li><a href="#">Activies</a></li>
					<li><a href="#">Team</a></li>
          <li><a href="#">Gallery</a></li>
          	<li class="{{ (request()->is('contact')) ? 'active' : '' }}"><a href="{{ url('/contact')}}">contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Right Sidebar</a></li>
							<li><a href="#">Extend Donations</a></li>
							<li><a href="#">Meet our Team</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
					</li>

				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->





@yield('content')





  	 
    <footer id="footer">
 
		<div class="container">
   <div class="row">
  <div class="footerbottom" style="width: 100%;display:flex;justify-content:center">
    <div class="col-md-3 col-sm-6 centered"> 
            	<div class="footerwidget"> 
                         <h4>Contact</h4> 
                        <p>JOHN DUMBUYA Infoway</p>
            <div class="contact-info"> 
            <i class="fa fa-map-marker"></i> John Dumbuya Drive Leicester Road Freetown<br>
            <i class=" fa fa-map-market"></i>Sierra Leone West Africa<br>
            <i class="fa fa-phone"></i>+1xxx --xxx--xx <br>
             <i class="fa fa-envelope-o"></i> Johndumbuyacharityfoundation@gmail.com
              </div> 
                </div><!-- end widget --> 
               
       		  
    </div>
  </div>
</div>
			<div class="social text-center">
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-flickr"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="clear"></div>
			<!--CLEAR FLOATS-->
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="#">About</a> |
								<a href="#">Activities</a> |
								<a href="#">voluteers</a> |
								<a href="#">Gallery</a> |
								<a href="#">Contact Us</a>
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2014. Template by <a href="http://webthemez.com/" rel="develop">WebThemez.com</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script> 
	<script type='text/javascript' src='assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='assets/js/camera.min.js'></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
	<script src="assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
                transPeriod: 500,
                time: 3000,
				height: '600',
				loader: 'false',
				pagination: true,
				thumbnails: false,
				hover: false,
                playPause: false,
                navigation: false,
				opacityOnGrid: false,
				imagePath: 'assets/images/'
			});

		});
      
	</script>
    
</body>
</html>
