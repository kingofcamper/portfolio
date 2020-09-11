<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <title>Mini Profile - Belghith Bilel</title>
    
<!--
Mini Profile Template
https://templatemo.com/tm-530-mini-profile
-->
  </head>
  <body>
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
                <p class="tm-brand-description mb-0">Junior Web developer</p>
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
                <h2 class="tm-welcome-title">Welcome to my Mini Profile Page</h2>
                <p class="pb-0">
                   Laravel offers superior code foundations, easy maintainability and resilient features, it has proven its position amongst the best PHP frameworks available. <br> <br>
                   we work closely with our clients to build scalable web applications making use of Laravel to elevate your business through high quality web applications.
    </p>
              </div>
            </div>
            <!-- Brown bg -->
            <div class="col-md-5">
              <div class="tm-welcome-right">
                <i class="fas fa-4x fa-address-card p-3 tm-welcome-icon"></i>
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
              <div class="tm-portfolio-name text-white tm-bg-green">
                Application development
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
                Junior UX Designer
              </div>
              <div class="tm-portfolio-description">
                <h3 class="tm-text-orange">
                  Git Hub
                  <span class="tm-title-small">(2018-2019)</span>
                </h3>
                <p class="mb-0">
                  design of user experiences for hand-held and wearable devices.
                  Focusing on accessibility, discoverability and efficiency to optimize on-the-go interactive experiences
                </p>
              </div>
            </div>

            <div class="tm-portfolio-item">
              <div class="tm-portfolio-name text-white tm-bg-blue">
                Application development
              </div>
              <div class="tm-portfolio-description">
                <h3 class="tm-text-blue">
                  Git Hub
                  <span class="tm-title-small">(2018-2019)</span>
                </h3>
                <p class="mb-0">
                  Building a recruitment web application for the benefits of entreprises
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
                <i class="fas fa-5x fa-briefcase tm-contact-item-icon"></i>
                <p class="mb-0">
                  Quisque venenatis viverra ultrices. Lorem ipsum dolor sit
                  amet. Nullam sit amet tempor nisl.
                </p>
              </div>
              <div class="tm-contact-item">
                <i class="fas fa-5x fa-building tm-contact-item-icon"></i>
                <p class="mb-0">
                  You can absolutely feel free to use Mini Profile for your web page or any usage for your website.
                </p>
              </div>

              <div class="tm-contact-item">
                <i class="fas fa-5x fa-balance-scale tm-contact-item-icon"></i>
                <p class="mb-0">
                  You are NOT allowed to re-distribute this template in any download website. Else, it is illegal action.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <form
              action="index.html"
              method="POST"
              id="tmContactForm"
              class="tm-bg-white-transparent"
            >
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
                >
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
        <!-- row -->
        <div class="row">
          <footer class="col-12">
            <p class="text-center tm-copyright-text">
            Copyright 2020 Mini Profile Page 
            
            - Design: Template Mo</p>
          </footer>
        </div>
      </div>
      <!-- container -->
    </div>
    <!-- section -->
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
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