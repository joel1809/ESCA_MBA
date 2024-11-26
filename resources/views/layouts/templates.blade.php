<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
    <meta name="keywords" content="Edupls - Education & Online Course HTML Template">
	<meta name="description" content="Edupls - Education & Online Course HTML Template">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="{{ asset('assets/img/logo/Logo_esca_MBA1.png')}}" style="width: 40px; height:15px">
	<title>@yield('title')</title>
	<!-- Fontawesome Icon -->
	<link rel="stylesheet" href="{{ asset('assets/css/all.min.css')}}">
	<!-- Icomoon Icon -->
	<link rel="stylesheet" href="{{ asset('assets/fonts/style.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css')}}">
	<!-- Aos Animation -->
	<link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
	<!-- Swiper -->
	<link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}">
	<!-- Animate Css -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css')}}">
	<!-- Main Css File -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
	<!-- Responsive -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
</head>
<body>
<!--==============================
      Header Layout 2
      ============================== -->
<header class="nav-header header-layout2">
  <!--==============================
      Header Two Top Area
      ============================== -->
  <div class="header-two-top-area">
    <div class="container ">
      <div class="header-top-content v2">
        <ul class="contact-info">
          <li>
            <i class="my-icon icon-call-us"></i>
            <p class="para">Tel: +225 0000000000</p>
          </li>
          <li>
            <i class="my-icon icon-massage"></i>
            <p class="para">Email: info@esca-mba.com</p>
          </li>
          <li>
            <i class="my-icon icon-time-hour"></i>
            <p class="para">Lun - Vend: 8h00 - 18:00</p>
          </li>
        </ul>
        <div class="follow-us-link">
          <div class="para">suivez-nous sur : </div>
          <div class="follow-icon"><a href="#"><i class="my-icon icon-facebook"></i></a></div>
          <div class="follow-icon"><a href="#"><i class="my-icon icon-twitter"></i></a></div>
          <div class="follow-icon"><a href="#"><i class="my-icon icon-instagram"></i></a></div>
          <div class="follow-icon"><a href="#"><i class="my-icon icon-youtube"></i></a></div>
        </div>
      </div>
    </div>
  </div>
  <!--==============================
      Sticky Wrapper
      ============================== -->
  <div class="sticky-wrapper">
    <!-- Main Menu Area -->
    <div class="menu-area">
      <div class="container">
        <div class="menu-area-content">
          <div class="row align-items-center justify-content-between">
            <div class="col-auto">
              <div class="header-logo">
                <a href="{{route('home')}}"><img src="{{ asset('assets/img/logo/Logo_esca_MBA_22.png')}}" style="width: 186px; height:170px" alt="logo" /></a>
              </div>
            </div>
            <div class="col-auto">
              <nav class="main-menu d-none d-lg-inline-block">
                <ul>
                  <li>
                    <a href="{{route('presentation')}}">présentation</a>
                  </li>
                  <li>
                    <a href="{{route('programme')}}">programme</a>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="{{route('promoteur')}}">Promoteurs et Animateurs</a>
                    <ul class="sub-menu">
                          <li class="menu-item-has-children">
                            <a href="{{route('temoignage')}}">Témoignage et Réseaux</a>
                          </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="{{route('evenement')}}">évènements</a>
                    <ul class="sub-menu">
                        <li class="menu-item-has-children">
                            <a href="about-us.html">Actualité</a>
                          </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="{{route('admission')}}">Admission</a>
                    <ul class="sub-menu">
                      <li class="menu-item-has-children">
                        <a href="{{route('contact')}}">Contact</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="col-auto">
              <div class="menu-area-right-content">
                <div class="header-login-regi">
                  <a href="{{route('login')}}">
                    <i class="my-icon icon-user"></i>
                  </a>
                </div>
                <div class="all-btn">
                  <a href="{{route('register')}}" class="btn-p v1 btn-blue rounded icon-v1">
                    S'inscrire
                  </a>
                </div>
              </div>
              <div class="navbar-right d-inline-flex d-lg-none">
                <button type="button" class="menu-toggle">
                  <i class="my-icon icon-all"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--==============================
      Mobile Menu
      ============================== -->

  <div class="mobile-menu-wrapper">
    <div class="mobile-menu-area text-center">
      <button class="menu-toggle"><i class="fa-solid fa-xmark"></i></button>
      <div class="mobile-logo">
        <a href="{{route('home')}}"><img src="{{ asset('assets/img/logo/Logo.svg')}}" alt="Edupls-logo"></a>
      </div>
      <div class="mobile-menu">
        <ul>
            <li>
              <a href="{{route('presentation')}}">présentation</a>
            </li>
            <li>
              <a href="{{route('programme')}}">programme</a>
            </li>
            <li class="menu-item-has-children">
              <a href="{{route('promoteur')}}">Promoteurs et Animateurs</a>
              <ul class="sub-menu">
                    <li class="menu-item-has-children">
                      <a href="{{route('temoignage')}}">Témoignage et Réseaux</a>
                    </li>
              </ul>
            </li>
            <li class="menu-item-has-children">
              <a href="{{route('evenement')}}">évènements</a>
              <ul class="sub-menu">
                  <li class="menu-item-has-children">
                      <a href="about-us.html">Actualité</a>
                    </li>
              </ul>
            </li>
            <li class="menu-item-has-children">
              <a href="{{route('admission')}}">Admission</a>
              <ul class="sub-menu">
                <li class="menu-item-has-children">
                  <a href="{{route('contact')}}">Contact</a>
                </li>
              </ul>
            </li>
          </ul>
      </div>
    </div>
  </div>
</header>

@yield('content')

<footer>
    <div class="footer-content v1">
      <div class="container-xl container-fluid-md" style="padding-top:100px">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="footer-widget">
              <div class="footer-logo">
                <a href="{{route('home')}}">
                  <img src="{{ asset('assets/img/logo/Logo_esca_MBA1.png')}}" style="width: 208px; height:158px" alt="logo" />
                </a>
              </div>
              <p class="widget-para pb-4">
              </p>
              <ul class="footer-social-link">
                <li>
                  <a href="#">
                    <i class="my-icon icon-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="my-icon icon-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="my-icon icon-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="footer-widget">
              <h4 class="widget-title">Liens utiles</h4>
              <ul class="quick-links">
                <li>
                  <a href="#"> About Us </a>
                </li>
                <li>
                  <a href="#"> Our Mission </a>
                </li>
                <li>
                  <a href="#"> Meet The Teams </a>
                </li>
                <li>
                  <a href="#"> Our Projects </a>
                </li>
                <li>
                  <a href="#"> Contact Us </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="footer-widget">
              <h4 class="widget-title">Informations</h4>
              <div class="get-in-touch">
                <ul class="contact-info-items">
                  <li class="contact-info-item">
                    <div class="contact-info-icon">
                      <i class="my-icon icon-location"></i>
                    </div>
                    <div class="contact-info-content">
                      <p class="para">Localisation</p>
                      <h4 class="title">Marina Lane Berlin</h4>
                    </div>
                  </li>
                  <li class="contact-info-item">
                    <div class="contact-info-icon">
                      <i class="my-icon icon-massage"></i>
                    </div>
                    <div class="contact-info-content">
                      <p class="para">Adresse Email</p>
                      <h4 class="title">infos@esc-mba.com</h4>
                    </div>
                  </li>
                  <li class="contact-info-item">
                    <div class="contact-info-icon">
                      <i class="my-icon icon-call-2"></i>
                    </div>
                    <div class="contact-info-content">
                      <p class="para">Téléphone</p>
                      <h4 class="title">(+225) 0000000000</h4>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="footer-widget ml-25">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d59897494.177700765!2d69.14685737429741!3d23.609607369521136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1716991491110!5m2!1sen!2sbd" style="width: 100%; height:280px;border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        <div class="bg-left-color-img">
          <img src="{{ asset('assets/img/footer/v1/bg-left-color.png')}}" alt="bg-left-color" />
        </div>
        <div class="bg-right-color-img">
          <img
            src="{{ asset('assets/img/footer/v1/bg-right-color.png')}}"
            alt="bg-right-color"
          />
        </div>
      </div>
    </div>
    <div class="copyright-section v1">
      <div class="container">
          <div class="left-center">
            <p class="para">© 2024 ESCA MBA. Tous droits réservés.</p>
          </div>
      </div>
    </div>
  </footer>
<!-- Jquery -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>

<!-- bootstrap -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Anime Js -->
<script src="{{ asset('assets/js/anime.min.js')}}"></script>
<!-- Swiper Js -->
<script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>
<!-- Gsap -->
<script src="{{ asset('assets/js/gsap.min.js')}}"></script>
<!-- ScrollTrigger -->
<script src="{{ asset('assets/js/ScrollTrigger.min.js')}}"></script>
<!-- Counter Up -->
<script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{ asset('assets/js/jquery.waypoints.min.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Countdown -->
<script src="{{ asset('assets/js/jquery.countdown.min.js')}}"></script>
<!-- Aos -->
<script src="{{ asset('assets/js/aos.js')}}"></script>
<!-- Main Js File -->
<script src="{{ asset('assets/js/index.js')}}"></script>
</body>
</html>
