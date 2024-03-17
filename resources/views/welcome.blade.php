<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="description" content="Bilel belghith profile laravel & wordpress fullstack freelancer web developper ">
    <link rel="icon" href="img/free_horizontal_on_white_by_logaster (1).png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
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
            <a href="https://www.facebook.com/bilel.belghith.520/" target="_blank" class="facebook"><i
                    class="fab fa-facebook"></i></a>
            <a href="https://medium.com/@bilel.belghith123" target="_blank" class="medium"><i class="fab fa-medium"></i></a>
            <a href="https://www.linkedin.com/in/bilel-belghith-a63773175/" target="_blank" class="linkedin"><i
                    class="fab fa-linkedin"></i></a>
            <a href="https://github.com/kingofcamper" target="_blank" class="github"><i class="fab fa-github"></i></a>
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
                        <p class="tm-brand-description mb-0">Full Stack Developer<br /> MERN and LAMP stack developer.</p>
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
                        Having successfully completed various challenging projects, I am adept at problem-solving and collaborating with cross-functional teams. Continuously staying up-to-date with the latest industry trends, I strive to implement cutting-edge technologies to create seamless and user-friendly web experiences.<br> <br>
                            <!-- we work closely with our clients to build scalable web applications making use of Laravel &
                            Wordpress to elevate your business through high quality web applications. -->
                        </p>
                    </div>
                </div>
                <!-- Brown bg -->
                <div class="col-md-5">
                    <div class="tm-welcome-right">
                        <center>
                            <img src="img/bilel-belghith.jpg" alt="bilel belghith" class="rounded-circle p-3" alt=""
                                 height="157" width="157">
                        </center>
                        <p class="mb-0">
                            Building quality websites and applications using MERN, LAMP, as well as many other
                            technologies.
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
            {{--				<div class="col-12">--}}
            {{--					<div class="tm-portfolio-item">--}}
            {{--						<div class="tm-portfolio-name text-white tm-bg-blue">--}}
            {{--							<a href="https://laravelvuejs5.herokuapp.com/" style="color: white;">Web application</a>--}}
            {{--						</div>--}}
            {{--						<div class="tm-portfolio-description">--}}
            {{--							<h3 class="tm-text-blue">--}}
            {{--								Client--}}
            {{--								<span class="tm-title-small">(2020-2021)--}}
            {{--									<a href="https://reporting-system-app.herokuapp.com/">--}}
            {{--										<i class="fas fa-link float-right"></i>--}}
            {{--									</a>--}}
            {{--								</span>--}}
            {{--							</h3>--}}
            {{--							<p class="mb-0">--}}
            {{--								Building an online reporting system for systems security.--}}
            {{--							</p>--}}
            {{--						</div>--}}
            {{--					</div>--}}
            {{--					<div class="tm-portfolio-item">--}}
            {{--						<div class="tm-portfolio-name text-white tm-bg-green">--}}
            {{--							Web application--}}
            {{--						</div>--}}
            {{--						<div class="tm-portfolio-description">--}}
            {{--							<h3 class="tm-text-green">--}}
            {{--								Intelligent Security IT--}}
            {{--								<span class="tm-title-small">(2020 February to September)</span>--}}
            {{--							</h3>--}}
            {{--							<p class="mb-0">--}}
            {{--								building an information security awareness web application--}}
            {{--							</p>--}}
            {{--						</div>--}}
            {{--					</div>--}}

            {{--					<div class="tm-portfolio-item">--}}
            {{--						<div class="tm-portfolio-name text-white tm-bg-orange">--}}
            {{--							<a href="https://xd.adobe.com/view/da8188d5-b513-4308-724f-ae1789c4ce22-acb0/" style="color:  white;">Junior UX Designer</a>--}}
            {{--						</div>--}}
            {{--						<div class="tm-portfolio-description">--}}
            {{--							<h3 class="tm-text-orange">--}}
            {{--								Android Design--}}
            {{--								<span class="tm-title-small">(2018-2019)--}}
            {{--									<a href="https://xd.adobe.com/view/da8188d5-b513-4308-724f-ae1789c4ce22-acb0/">--}}
            {{--										<i class="fas fa-link float-right" style="color: #cc6733;"></i>--}}
            {{--									</a>--}}
            {{--								</span>--}}
            {{--							</h3>--}}
            {{--							<p class="mb-0">--}}
            {{--								design of user experiences for hand-held and wearable devices.--}}
            {{--								Focusing on accessibility, discoverability and efficiency to optimize on-the-go interactive experiences--}}
            {{--							</p>--}}
            {{--						</div>--}}
            {{--					</div>--}}

            {{--					<div class="tm-portfolio-item">--}}
            {{--						<div class="tm-portfolio-name text-white tm-bg-yellow">--}}
            {{--							<a href="https://laravelvuejs5.herokuapp.com/" style="color: white;">Web application</a>--}}
            {{--						</div>--}}
            {{--						<div class="tm-portfolio-description">--}}
            {{--							<h3 class="tm-text-yellow">--}}
            {{--								Recruitement Plateforme--}}
            {{--								<span class="tm-title-small">(2018-2019)--}}
            {{--									<a href="https://laravelvuejs5.herokuapp.com/">--}}
            {{--										<i class="fas fa-link float-right" style="color: #98A200;"></i>--}}
            {{--									</a>--}}
            {{--								</span>--}}
            {{--							</h3>--}}
            {{--							<p class="mb-0">--}}
            {{--								Building a recruitment web application for the benefits of recruiters.--}}
            {{--							</p>--}}
            {{--						</div>--}}
            {{--					</div>--}}
            {{--				</div>--}}
            {{--                <div class="col-xs-12 col-sm-6 col-md-4">--}}
            {{--                    <div class="bilel-card">--}}
            {{--                        <div class="bilel-card-header"><img src="/img/Multiple-user-roles.png" alt=""></div>--}}
            {{--                        <div class="bilel-card-content"></div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="https://herbioart.tn/" target="_blank">
                    <div class="bilel-card">
                        <div class="bilel-card-content"><img src="/img/herbioart.jpeg" alt=""></div>
                        <div class="bilel-card-info">
                            <h2>Herbioart</h2>
                            <p>May 2021<br>Technologie: Prestashop, HTML, CSS</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="https://verdant-beauty.tn/" target="_blank">
                    <div class="bilel-card">
                        <div class="bilel-card-content"><img src="/img/verdant.jpeg" alt=""></div>
                        <div class="bilel-card-info">
                            <h2>Verdant</h2>
                            <p>Juillet 2021<br>Technologie: Prestashop, HTML, CSS</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="https://26janvier.tn/" target="_blank">
                    <div class="bilel-card">
                        <div class="bilel-card-content"><img src="/img/26-janvier.jpeg" alt=""></div>
                        <div class="bilel-card-info">
                            <h2>26 Janvier</h2>
                            <p>Septembre 2021 <br>Technologie: Symfony, React, API</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="http://zoompara.tn/" target="_blank">
                    <div class="bilel-card">
                        <div class="bilel-card-content"><img src="/img/zoom-para.jpeg" alt=""></div>
                        <div class="bilel-card-info">
                            <h2>Zoom Parapharmacie</h2>
                            <p>Octobre 2021 <br>Technologie: Prestashop, HTML, CSS</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="https://packea.fr/" target="_blank">
                    <div class="bilel-card">
                        <div class="bilel-card-content"><img src="/img/packea.jpeg" alt=""></div>
                        <div class="bilel-card-info">
                            <h2>Packéa</h2>
                            <p>January 2022<br>Technologie: Wordpress, PHP, JQuery, Ajax</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="https://ca-bizerte.com/" target="_blank">
                    <div class="bilel-card">
                        <div class="bilel-card-content"><img src="/img/bizerte.jpeg" alt=""></div>
                        <div class="bilel-card-info">
                            <h2>Centre d'affaire Bizerte</h2>
                            <p>Juin 2022 <br>Technologie: Wordpress, PHP, JQuery, Ajax</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="http://damyaangels.org.tn/" target="_blank">
                    <div class="bilel-card">
                        <div class="bilel-card-content"><img src="/img/damya.jpeg" alt=""></div>
                        <div class="bilel-card-info">
                            <h2>Damya</h2>
                            <p>Juillet - Septembre 2021 <br>Technologie: Symfony, React, API</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="https://pressbookagency.com/" target="_blank">
                    <div class="bilel-card">
                        <div class="bilel-card-content"><img src="/img/pressbook.jpeg" alt=""></div>
                        <div class="bilel-card-info">
                            <h2>Pressbook</h2>
                            <p>May - Juin 2022 <br />Technologie: Wordpress, custom Css</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="https://masmoudi.tn/" target="_blank">
                    <div class="bilel-card">
                        <div class="bilel-card-content"><img src="/img/masmoudi.jpeg" alt=""></div>
                        <div class="bilel-card-info">
                            <h2>Pâtisserie Masmoudi</h2>
                            <p>Mars 2022<br>Technologie: Wordpress, PHP, JQuery, Ajax</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <a href="https://amazonia.shifti.co/" target="_blank">
                    <div class="bilel-card">
                        <div class="bilel-card-content"><img src="/img/amazonia.jpeg" alt=""></div>
                        <div class="bilel-card-info">
                            <h2>Amazonia</h2>
                            <p>Juin 2022<br>Technologie: Prestashop</p>
                        </div>
                    </div>
                </a>
            </div>
			<div class="col-xs-12 col-sm-6 col-md-4">
                <a href="https://www.shifti.co/" target="_blank">
                    <div class="bilel-card">
                        <div class="bilel-card-content"><img src="/img/shifti.jpeg" alt=""></div>
                        <div class="bilel-card-info">
                            <h2>Shifti</h2>
                            <p>En Cours<br>Technologie: Symfony, React, API</p>
                        </div>
                    </div>
                </a>
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
                            <strong>Programming languages: </strong> Javascript, PHP, Java, SQL, Dart, C, C++, C#, CSS
                            <br>
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
        </section>
        <hr>
        <!-- row -->
        <div class="container-fluid">
            <section class="customer-logos slider">
                <div class="slide"><img
                        src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg">
                </div>
                <div class="slide"><img
                        src="https://raw.githubusercontent.com/devicons/devicon/master/icons/typescript/typescript-original.svg">
                </div>
                <div class="slide"><img
                        src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg">
                </div>
                <div class="slide"><img
                        src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original-wordmark.svg">
                </div>
                <div class="slide"><img
                        src="https://raw.githubusercontent.com/devicons/devicon/master/icons/redux/redux-original.svg">
                </div>
                <div class="slide"><img
                        src="https://www.vectorlogo.zone/logos/tailwindcss/tailwindcss-icon.svg">
                </div>
                <div class="slide"><img
                        src="https://raw.githubusercontent.com/devicons/devicon/master/icons/nodejs/nodejs-original-wordmark.svg">
                </div>
                <div class="slide"><img
                        src="https://raw.githubusercontent.com/devicons/devicon/master/icons/express/express-original-wordmark.svg">
                </div>
                <div class="slide"><img
                        src="https://cdn.worldvectorlogo.com/logos/next-js.svg">
                </div>
                <div class="slide"><img 
                    src="https://raw.githubusercontent.com/devicons/devicon/master/icons/nginx/nginx-original.svg">
                </div>
                <div class="slide"><img 
                    src="https://nestjs.com/logo-small.ede75a6b.svg">
                </div>
                <div class="slide"><img 
                    src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg">
                </div>
                <div class="slide"><img 
                    src="https://raw.githubusercontent.com/devicons/devicon/master/icons/postgresql/postgresql-original-wordmark.svg">
                </div>
                <div class="slide"><img 
                    src="https://raw.githubusercontent.com/devicons/devicon/master/icons/redis/redis-original-wordmark.svg">
                </div>
                <div class="slide"><img 
                    src="https://raw.githubusercontent.com/devicons/devicon/master/icons/docker/docker-original-wordmark.svg">
                </div>
                <div class="slide"><img 
                    src="https://freesvg.org/img/Pinguino-Linux.png">
                </div>
                <div class="slide"><img 
                    src="https://friconix.com/png/fi-cwluxl-symfony.png">
                </div>
                <div class="slide"><img 
                    src="https://laravel.com/img/logomark.min.svg">
                </div>
                <div class="slide"><img 
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Wordpress-Logo.svg/1200px-Wordpress-Logo.svg.png">
                </div>
                <div class="slide"><img 
                    src="https://www.svgrepo.com/show/303591/prestashop-logo.svg">
                </div>
            </section>
        </div>
        <hr>
        <br>
        <div class="row">
            <footer class="col-12">
                <p class="text-center tm-copyright-text">
                    Copyright 2024 Profile Page

                    - By Bilel Belghith</p>
            </footer>
        </div>
    </div>
    <!-- container -->
</div>

<!-- section -->

<script src="js/parallax.min.js"></script>
<script>
    $(document).ready(function () {
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
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })

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

    $(function () {
        setBrandMarginTop();
        detectMsBrowser();

        // Handle window resize event
        $(window).resize(function () {
            setBrandMarginTop();
        });
    });

</script>
</body>
</html>
