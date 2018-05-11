<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  
    Document Title
    =============================================
    -->
    <title>FAPERSA Fábrica</title>
    <!--  
    Favicons
    =============================================
    -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- Default stylesheets-->
    <link href="{{asset('lib/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Template specific stylesheets-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="{{asset('lib/animate.css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('lib/components-font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/et-line-font/et-line-font.css')}}" rel="stylesheet">
    <link href="{{asset('lib/flexslider/flexslider.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owl.carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owl.carousel/dist/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('lib/simple-text-rotator/simpletextrotator.css')}}" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="{{asset('css/fabrica/style.css')}}" rel="stylesheet">
    <link id="color-scheme" href="{{asset('css/colors/default.css')}}" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      <nav class="navbar navbar-custom navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <a href="/"><img class="logo" src="/img/LogoFa.png"></a>
          </div>
        </div>
      </nav>
      <section class="home-section home-full-height" id="home">
        <div class="hero-slider">
          <ul class="slides">
            @foreach ($slider as $sli)
            <li class="bg-dark-30 restaurant-page-header bg-dark" style="background-image:url('{{asset('img/fabrica/'.$sli->imagen_slider)}}');">
              <div class="titan-caption">
                <div class="caption-content">

                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </section>
      @foreach ($fabrica as $fab)
      <section class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial" data-background="{{asset('img/fabrica/'.$fab->imagen_fondo)}}">
        @endforeach
          <div class="testimonials-slider pt-140 pb-140">
            <ul class="slides">
              @foreach ($slider as $sli)
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <h3 style="text-align: center;">{{ $sli->titulo_slider }}</h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text font-alt">{{ $sli->texto_slider }}</blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption font-alt">
                          <div class="testimonial-title"></div>
                          <div class="testimonial-descr"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              @endforeach
<!--               <div class="modal fade product_view" id="iso">
                <div class="modal-content">
                  <div class="modal-header">
                    <a href="#" data-dismiss="modal" class="pull-right"><span class="xxx glyphicon glyphicon-remove"></span></a>
                  </div>
                  <div class="modal-body" style="max-height: 75px">
                    <div class="row">
                      <div class="col-md-12">
                        <center>
                          <img class="isoc" src="images/ISOCertificate.jpg">
                        </center>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            </ul>
          </div>
        </section>

        <section class="module pt-0 pb-0">
          <div class="row position-relative m-0">

            <div class="col-xs-12 col-md-6 side-image-text">
              
              <div class="col-md-12">
              <div class="col-lg-offset col-lg" id="panel">
              

              <form>
                <div class="group">
                  <input type="text" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Nombre</label>
                </div> 
                <div class="group">
                  <input type="text" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Teléfono</label>
                </div>
                <div class="group">
                  <input type="mail" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Correo Electrónico</label>
                </div>
                <div class="group">
                  <input type="file">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                </div>
                <div class="group">
                  <input type="text" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Consulta</label>
                </div>
                <div class="col-md-5">
                  capcha
                </div>
                <div class="group col-md-5">
                  <center> <button type="submit" class="btn btn-submit">Mandar<span class="glyphicon glyphicon-send"></span></button></center>
                </div>
            </form>
          </div>
        </div>
        </div>
        @foreach ($fabrica as $fab)
        <div class="col-xs-12 col-md-6 col-md-offset-6 side-image restaurant-image-overlay" data-background="{{asset('img/fabrica/'.$fab->imagen_contacto)}}">
          <div class="row contact">
                <div class="col-sm-12">
                  <br><br> <br><br>
                  <h1 class="font-alt align-center" style="color: black">  -Contacto-  </h1>
                  <div class="col-md-12">
                    <p class="st-address" style="text-align: center; color: black"><i class="fa fa-map-marker"></i> <strong>{{ $fab->direccion }}</strong></p>
                    <p class="st-phone" style="text-align: center; color: black"><i class="fa fa-mobile"></i> <strong>{{ $fab->telefono }}</strong></p>
                    <p class="st-email" style="text-align: center; color: black"><i class="fa fa-envelope-o"></i> <strong>{{ $fab->correo }}</strong></p>
                  </div>
                </div>
              </div>
        </div>
        @endforeach
        </div>
        </section>
        
        <footer class="footer bg-dark">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <p class="copyright font-alt">&copy; &nbsp;<a href="index.html">NKS</a></p>
              </div>
              <div class="col-sm-6">
                <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-skype"></i></a>
                </div>
              </div>
            </div>
          </div>
        </footer>
      </div>
      <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
    <script src="{{asset('lib/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('lib/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('lib/wow/dist/wow.js')}}"></script>
    <script src="{{asset('lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js')}}"></script>
    <script src="{{asset('lib/isotope/dist/isotope.pkgd.js')}}"></script>
    <script src="{{asset('lib/imagesloaded/imagesloaded.pkgd.js')}}"></script>
    <script src="{{asset('lib/flexslider/jquery.flexslider.js')}}"></script>
    <script src="{{asset('lib/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <script src="{{asset('lib/smoothscroll.js')}}"></script>
    <script src="{{asset('lib/magnific-popup/dist/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('lib/simple-text-rotator/jquery.simple-text-rotator.min.js')}}"></script>
    <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDK2Axt8xiFYMBMDwwG1XzBQvEbYpzCvFU"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  </body>
</html>