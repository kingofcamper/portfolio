<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="description" content="Bilel belghith profile laravel & wordpress fullstack freelancer web developper ">
	<link rel="icon" href="img/free_horizontal_on_white_by_logaster (1).png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
	<link rel="stylesheet" href="css/all.min.css" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/templatemo-style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<style type="text/css">

.slick-slide {
    margin: 0px 20px;
}

.slick-slide img {
    width: 100%;
}

.slick-slider
{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
            user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after
{
    display: table;
    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
	.box{
		width:600px;
		margin:0 auto;
		border:1px solid #ccc;
	}
	.has-error
	{
		border-color:#cc0000;
		background-color:#ffff99;
	}
	#topbar {
		background: #fff;
		padding: 10px 0;
		border-bottom: 1px solid #eee;
		font-size: 14px;
	}

	#topbar .contact-info a {
		line-height: 1;
		color: #444;
		transition: 0.3s;
	}

	#topbar .contact-info a:hover {
		color: #428bca;
	}

	#topbar .contact-info i {
		color: #428bca;
		padding: 4px;
	}

	#topbar .contact-info .fas .fa-phone {
		padding-left: 20px;
		margin-left: 10px;
	}

	#topbar .social-links a {
		color: #5c768d;
		padding: 4px 12px;
		display: inline-block;
		line-height: 1px;
		transition: 0.3s;
	}

	#topbar .social-links a:hover {
		color: #428bca;
	}

	.d-lg-block {
		display: block !important;
	}

	.tm-text-yellow {
		color: #98A200;
	}

	.tm-bg-yellow {
		background-color: #98A200;
	}
	

</style>

<title>Profile - Belghith Bilel</title>

<!--
Mini Profile Template
https://templatemo.com/tm-530-mini-profile
-->
</head>
<body>	
	<section id="topbar" class="d-none d-lg-block">
		<div class="container clearfix">
			<div class="contact-info float-left">
				<i class="fas fa-envelope"></i><a href="mailto:bilel.belghith123@gmail.com">bilel.belghith123@gmail.com</a>
				<i class="fas fa-phone"></i>+216 22 70 66 65
			</div>
			<div class="social-links float-right">
				<a href="https://www.facebook.com/bilel.belghith.520/" class="facebook"><i class="fab fa-facebook"></i></a>
				<a href="#" class="skype"><i class="fab fa-skype"></i></a>
				<a href="https://www.linkedin.com/in/bilel-belghith-a63773175/" class="linkedin"><i class="fab fa-linkedin"></i></a>
				<a href="https://github.com/kingofcamper" class="github"><i class="fab fa-github"></i></i></a>
			</div>
		</div>
	</section>
	<!-- Welcome Section -->
	<section id="tmWelcome" class="parallax-window" data-parallax="scroll" data-image-src="img/mini-profile-bg-01.jpg">
		<div class="container-fluid tm-brand-container-outer">
			<div class="row">
				<div class="col-12">
					<!-- Logo Area -->
					<!-- Black transparent bg -->
					<div class="ml-auto mr-0 tm-bg-black-transparent text-white tm-brand-container-inner">
						<div class="tm-brand-container text-center">
							<h1 class="tm-brand-name">Bilel Belghith</h1>
							<p class="tm-brand-description mb-0">PHP developer / Front End Developer</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="tm-bg-white-transparent tm-welcome-container">
			<div class="container-fluid">
				<div class="row h-100">
					<!-- Welcome Text -->
					<!-- White transparent bg -->
					<div class="col-md-7 tm-welcome-left-col">
						<div class="tm-welcome-left">
							<h2 class="tm-welcome-title">Welcome to my Profile</h2>
							<p class="pb-0 sized-paragraph">
								Detail-oriented Laravel, WordPress Developer with extensive experience with WordPress plugins and widgets. Well versed in many other programming languages. Delivers well-made projects on time. <br> <br>
								we work closely with our clients to build scalable web applications making use of Laravel & Wordpress to elevate your business through high quality web applications.
							</p>
						</div>
					</div>
					<!-- Brown bg -->
					<div class="col-md-5">
						<div class="tm-welcome-right">
							<center>
								<img src="img/a.jpg" alt="bilel belghith" class="rounded-circle p-3" alt="" height="157" width="157">
							</center>                
							<p class="mb-0">
								Building quality websites and applications with Laravel, Vue js, as well as many other technologies.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Welcome section -->


	<!-- Portfolio section -->
	<section id="tmPortfolio">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="tm-portfolio-item">
						<div class="tm-portfolio-name text-white tm-bg-blue">
							<a href="https://laravelvuejs5.herokuapp.com/" style="color: white;">Web application</a>        
						</div>
						<div class="tm-portfolio-description">
							<h3 class="tm-text-blue">
								Client
								<span class="tm-title-small">(2020-2021) 
									<a href="https://reporting-system-app.herokuapp.com/">
										<i class="fas fa-link float-right"></i>
									</a>
								</span>
							</h3>
							<p class="mb-0">
								Building an online reporting system for systems security.
							</p>
						</div>
					</div>
					<div class="tm-portfolio-item">
						<div class="tm-portfolio-name text-white tm-bg-green">
							Web application
						</div>
						<div class="tm-portfolio-description">
							<h3 class="tm-text-green">
								Intelligent Security IT
								<span class="tm-title-small">(2020 February to September)</span>
							</h3>
							<p class="mb-0">
								building an information security awareness web application
							</p>
						</div>
					</div>

					<div class="tm-portfolio-item">
						<div class="tm-portfolio-name text-white tm-bg-orange">
							<a href="https://xd.adobe.com/view/da8188d5-b513-4308-724f-ae1789c4ce22-acb0/" style="color:  white;">Junior UX Designer</a> 
						</div>
						<div class="tm-portfolio-description">
							<h3 class="tm-text-orange">
								Android Design
								<span class="tm-title-small">(2018-2019)
									<a href="https://xd.adobe.com/view/da8188d5-b513-4308-724f-ae1789c4ce22-acb0/">
										<i class="fas fa-link float-right" style="color: #cc6733;"></i>
									</a>
								</span>
							</h3>
							<p class="mb-0">
								design of user experiences for hand-held and wearable devices.
								Focusing on accessibility, discoverability and efficiency to optimize on-the-go interactive experiences
							</p>
						</div>
					</div>

					<div class="tm-portfolio-item">
						<div class="tm-portfolio-name text-white tm-bg-yellow">
							<a href="https://laravelvuejs5.herokuapp.com/" style="color: white;">Web application</a>        
						</div>
						<div class="tm-portfolio-description">
							<h3 class="tm-text-yellow">
								Recruitement Plateforme
								<span class="tm-title-small">(2018-2019) 
									<a href="https://laravelvuejs5.herokuapp.com/">
										<i class="fas fa-link float-right" style="color: #98A200;"></i>
									</a>
								</span>
							</h3>
							<p class="mb-0">
								Building a recruitment web application for the benefits of recruiters.
							</p>
						</div>
					</div>            
				</div>
			</div>
		</div>
	</section>
	<!-- End portfolio section -->

	<!-- Contact section -->
	<div id="tmContact" class="parallax-window" data-parallax="scroll" data-image-src="img/mini-profile-bg-02.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="tm-contact-items-container">
						<div class="tm-contact-item">
							<i class="fas fa-5x fa-code tm-contact-item-icon"></i>
							<p class="mb-0">
								<strong> Frameworks & CMS: </strong> Laravel, Spring, Wordpress <br>								
								<strong>Frontend Framework: </strong> Vue js, AJAX, JQuery, Javascript <br>  
								<strong>Programming languages: </strong> Javascript, PHP, Java, SQL, Dart, C, C++, C#, CSS <br>  
								<strong>UX/UI design: </strong> Adobe XD, Photoshop
							</p>
						</div>
						<div class="tm-contact-item">
							<i class="fas fa-5x fa-university tm-contact-item-icon"></i>
							<p class="mb-0">
								<strong>College: </strong> higher institute of computer science Manar <br> 
								<strong>applied Degree : </strong> computer system and software <br>  
								<strong>2017 - 2020 </strong>
							</p>
						</div>

						<div class="tm-contact-item">
							<i class="fas fa-5x fa-address-card tm-contact-item-icon"></i>
							<p class="mb-0">
								6-month end-of-study internship at Intelligent Security IT, <br>  
								'design and implementation of an information
								security awareness platform'
							</p>
						</div>
					</div>
				</div>
			</div>
			<section id="contact">
				<div class="row">
					<div class="col-12">
						@if(count($errors) > 0)
						<div class="alert-danger alert">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<ul>
								@foreach($errors->all() as $error)
								<li>{{$error}} </li>
								@endforeach
							</ul>
						</div>
						@endif

						@if($message = Session::get('success'))
						<div class="alert-success alert-block alert">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong>{{ $message }}</strong>
						</div>
						@endif

						<form
							action="{{ url('sendemail/send') }}"
							method="POST"
							id="tmContactForm"
							class="tm-bg-white-transparent"
							>
							@csrf

							<div class="form-group">
								<input
								type="text"
								id="contact_name"
								name="contact_name"
								class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
								placeholder="Name"
								required
								/>
							</div>
							<div class="form-group">
								<input
								type="email"
								id="contact_email"
								name="contact_email"
								class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
								placeholder="Email"
								required
								/>
							</div>
							<div class="form-group">
								<textarea
								rows="4"
								id="contact_message"
								name="contact_message"
								class="form-control rounded-0 border-top-0 border-right-0 border-left-0"
								placeholder="Message"
								required
								></textarea>
							</div>
							<div class="text-center">
								<button
									type="submit"
									class="btn tm-btn-submit rounded-0 text-white"
									name="send"
									value="send"
									>
									Submit
								</button>
							</div>
						</form>
					</div>
				</div>
			</section><hr>
			<!-- row -->
			<div class="container-fluid">
   <section class="customer-logos slider ">
      <div class="slide"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/WordPress_blue_logo.svg/1024px-WordPress_blue_logo.svg.png"></div>
      <div class="slide"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png"></div>
      <div class="slide"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Vue.js_Logo_2.svg/1200px-Vue.js_Logo_2.svg.png"></div>
      <div class="slide"><img src="https://cdn4.iconfinder.com/data/icons/scripting-and-programming-languages/512/JQuery_logo-512.png"></div>
      <div class="slide"><img src="https://i.pinimg.com/originals/f1/ea/a7/f1eaa7278f64e27128e062a3de918265.png"></div>
      <div class="slide"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/480px-Bootstrap_logo.svg.png"></div>
      <div class="slide"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Adobe_XD_CC_icon.svg/1200px-Adobe_XD_CC_icon.svg.png"></div>
      <div class="slide"><img src="https://i.pinimg.com/originals/9c/ea/ba/9ceaba69b7a9f89158ff953107978f3e.png"></div>
      <div class="slide"><img src="http://assets.stickpng.com/thumbs/58481791cef1014c0b5e4994.png"></div>
   </section>
</div> <hr><br> 
			<div class="row">
				<footer class="col-12">
					<p class="text-center tm-copyright-text">
						Copyright 2021 Profile Page 

					- By Bilel Belghith</p>
				</footer>
			</div>
		</div>
	<!-- container -->
	</div>

<!-- section -->

<script src="js/parallax.min.js"></script>
<script>
	$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
	function detectMsBrowser() {
		using_ms_browser =
		navigator.appName == "Microsoft Internet Explorer" ||
		(navigator.appName == "Netscape" &&
			navigator.appVersion.indexOf("Edge") > -1) ||
		(navigator.appName == "Netscape" &&
			navigator.appVersion.indexOf("Trident") > -1);

		if (using_ms_browser == true) {
			alert(
				"Please use Chrome or Firefox for the best browsing experience!"
				);
		}
	}
	function setBrandMarginTop() {
		var bottomContainerHeight = $(".tm-welcome-container").height();

		$(".tm-brand-container-outer").css({
			"margin-top": -bottomContainerHeight + "px"
		});
	}

	$(function() {
		setBrandMarginTop();
		detectMsBrowser();

        // Handle window resize event
        $(window).resize(function() {
        	setBrandMarginTop();
        });
    });

</script>
</body>
</html>