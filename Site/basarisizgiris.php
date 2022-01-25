
<!DOCTYPE html>
<html lang="Tr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>ForLog Deneme</title>
    <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/tooplate-infinite-loop.css" />
    <!--
KAYIT KISMI KAYIT KISMI
-->
    <!DOCTYPE html>
    <html>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        * {
            box-sizing: border-box;
        }
        /* Full-width input fields */
        
        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }
        /* Add a background color when the inputs get focus */
        
        input[type=text]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }
        /* Set a style for all buttons */
        
        button {
            background-color: #000000;
            color: rgb(189, 0, 0);
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }
        
        button:hover {
            opacity: 1;
        }
        /* Extra styles for the cancel button */
        
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }
        /* Float cancel and signup buttons and add an equal width */
        
        .cancelbtn,
        .signupbtn {
            float: right;
            float: initial;
            width: 30%;
        }
        /* Add padding to container elements */
        
        .container {
            padding: 31px;
        }
        /* The Modal (background) */
        
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: visible;
            /* Enable scroll if needed */
            background-color: #474e5d;
            padding-top: 50px;
        }
        /* Modal Content/Box */
        
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 10%;
            /* Could be more or less, depending on screen size */
        }
        /* Style the horizontal ruler */
        
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 50px;
        }
        /* Clear floats */
        
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        /* Change styles for cancel button and signup button on extra small screens */
        
        @media screen and (max-width: 300px) {
            .cancelbtn,
            .signupbtn {
                width: 100%;
            }
        }
    </style>

    <body>

        <div id="id02" class="modal">
            <form class="modal-content animate" action="kullanici.php" method='POST'>
                <div class="container">
                    <h1>Kayıt Ol</h1>
                    <p>Sitede işlem yapabilmek için lütfen üye olun.</p>
                    <hr>
                                        
                  </div>
                  <label for="email"><b>E-Posta</b></label>
                    <input type="text" placeholder="E-Posta " name="email" required>

                    <label for="psw"><b>Şifre</b></label>
                    <input type="password" placeholder="Şifrenizi Girin" name="psw" required>

                    <label for="psw"><b>Şifreyi Tekrar </b></label>
                    <input type="password" placeholder="Şifrenizi Girin" name="psw2" required>

                    <label for="name"><b>Ad</b></label>
                    <input type="text" placeholder="Adınız" name="firstname" required>

                    <label for="last-name"><b>Soyad</b></label>
                    <input type="text" placeholder="Soyadınız" name="lastname" required>
                    <label>
  <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Beni Hatırla
</label>

                    <p>Kayıt Olarak Bunları Kabul Etmiş Olursunuz. <a href="#" style="color:dodgerblue">Kurallar cart curt</a>.</p>

                    <div class="clearfix">
                        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">İptal</button>
                        <button type="submit" class="signupbtn">Aramıza Katıl</button>
                    </div>
                </div>
            </form>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('id02');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

    </body>

    </html>

    <!--

  Giriş Kısmı
 -->
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }
            /* Full-width input fields */
            
            input[type=text],
            input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            /* Set a style for all buttons */
            
            button {
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            
            button:hover {
                opacity: 0.8;
            }
            /* Extra styles for the cancel button */
            
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }
            /* Center the image and position the close button */
            
            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
            }
            
            img.avatar {
                width: 40%;
                border-radius: 50%;
            }
            
            .container {
                padding: 16px;
            }
            
            span.psw {
                float: right;
                padding-top: 16px;
            }
            /* The Modal (background) */
            
            .modal {
                display: none;
                /* Hidden by default */
                position: fixed;
                /* Stay in place */
                z-index: 1;
                /* Sit on top */
                left: 0;
                top: 0;
                width: 100%;
                /* Full width */
                height: 100%;
                /* Full height */
                overflow: auto;
                /* Enable scroll if needed */
                background-color: rgb(0, 0, 0);
                /* Fallback color */
                background-color: rgba(0, 0, 0, 0.842);
                /* Black w/ opacity */
                padding-top: 60px;
            }
            /* Modal Content/Box */
            
            .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto;
                /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 35%;
                /* Could be more or less, depending on screen size */
            }
            /* The Close Button (x) */
            
            .close {
                position: absolute;
                right: 25px;
                top: 0;
                color: #000;
                font-size: 45px;
                font-weight: bold;
            }
            
            .close:hover,
            .close:focus {
                color: red;
                cursor: pointer;
            }
            /* Add Zoom Animation */
            
            .animate {
                -webkit-animation: animatezoom 0.7s;
                animation: animatezoom 0.6s
            }
            
            @-webkit-keyframes animatezoom {
                from {
                    -webkit-transform: scale(0)
                }
                to {
                    -webkit-transform: scale(1)
                }
            }
            
            @keyframes animatezoom {
                from {
                    transform: scale(0)
                }
                to {
                    transform: scale(1)
                }
            }
            /* Change styles for span and cancel button on extra small screens */
            
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }
        </style>
    </head>

    <body>


        <div id="id01" class="modal">

            <form class="modal-content animate" action="/action_page.php" method="post">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="img/testimonial-img-01.jpg" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                    <label for="uname"><b>Kullanıcı Adı</b></label>
                    <input type="text" placeholder="Kullanıcı Adı Giriniz" name="uname" required>

                    <label for="psw"><b>Şifre</b></label>
                    <input type="password" placeholder="Şifre Giriniz" name="psw" required>

                    <button type="submit">Giriş</button>
                    <label>
            <input type="checkbox" checked="checked" name="remember"> Beni unutma (Zamanla herkes unutulur. :)
          </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <span class="psw"> <a href="#">Şifrenimi Unuttun?</a></span>
                </div>
            </form>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>

    </body>

    </html>

    <!-- Hero section -->
    <section id="infinite" class="text-white tm-font-big tm-parallax">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-md tm-navbar">
            <div class="container">
                <div class="tm-next">
                    <a href="#infinite" class="navbar-brand">Forlog7</a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="forum.php">Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#deneme2">Galum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#deneme3">s</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" onclick="document.getElementById('id02').style.display='block'" style="width:auto;" href="#sa">Kayıt Ol</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-nav-link" href="#Giriş" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Giriş</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="text-center tm-hero-text-container">
            <div class="tm-hero-text-container-inner">
                <h2 class="tm-hero-title">ForLog</h2>
                <p class="tm-hero-subtitle">
                    ForLog alt
                    <br>ForLog Alt2
                </p>
            </div>
        </div>

        <div class="tm-next tm-intro-next">
            <a href="#whatwedo" class="text-center tm-down-arrow-link">
                <i class="fas fa-2x fa-arrow-down tm-down-arrow"></i>
            </a>
        </div>
    </section>

    <section id="whatwedo" class="tm-section-pad-top">

        <div class="container">

            <div class="row tm-content-box">
                <!-- first row -->
                <div class="col-lg-12 col-xl-12">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4 tm-section-title">What We Do</h2>
                        <p class="mb-4 tm-intro-text">
                            Denemeee <a href="fotogaleri.html">Deneme href</a>.</p>
                    </div>
                </div>

            </div>
            <!-- first row -->

            <div class="row tm-content-box">
                <!-- second row -->
                <div class="col-lg-1">
                    <i class="far fa-3x fa-chart-bar text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4">Deneme2</h2>
                        <p class="mb-4 tm-intro-text">
                            deneme2 açıklama</p>
                    </div>
                </div>

                <div class="col-lg-1">
                    <i class="far fa-3x fa-comment-alt text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4">Deneme3</h2>
                        <p class="mb-4 tm-intro-text">
                            Deneme3 alt1 <a rel="nofollow" href="fotogaleri.html">deneme3 href</a> deneme3 alt2</p>
                    </div>
                </div>

            </div>
            <!-- second row -->

            <div class="row tm-content-box">
                <!-- third row -->
                <div class="col-lg-1">
                    <i class="fas fa-3x fa-fingerprint text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4">deneme4</h2>
                        <p class="mb-4 tm-intro-text">
                            deneme4alt </p>

                        <div class="tm-continue">
                            <a href="#testimonials" class="tm-intro-text tm-btn-primary">öne çıkanlar kısayol</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-1">
                    <i class="fas fa-3x fa-users text-center tm-icon"></i>
                </div>
                <div class="col-lg-5">
                    <div class="tm-intro-text-container">
                        <h2 class="tm-text-primary mb-4">Deneme5</h2>
                        <p class="mb-4 tm-intro-text">
                            deneme5 alt<br>

                            <div class="tm-continue">
                                <a href="#testimonials" class="tm-intro-text tm-btn-primary">Kısayol</a>
                            </div>
                    </div>
                </div>

            </div>
            <!-- third row -->

        </div>

    </section>

    <section id="testimonials" class="tm-section-pad-top tm-parallax-2">
        <div class="container tm-testimonials-content">
            <div class="row">
                <div class="col-lg-12 tm-content-box">
                    <h2 class="text-white text-center mb-4 tm-section-title"><b>Öne Çıkanlar<b></h2>
            <p class="mx-auto tm-section-desc text-center">
                <b> Öne çıkanlar<b>
              </p>
            <div class="mx-auto tm-gallery-container tm-gallery-container-2">
              <div class="tm-testimonials-carousel">
                <figure class="tm-testimonial-item">
                  <img src="img/testimonial-img-01.jpg" alt="Image" class="img-fluid mx-auto">
                  <blockquote>Öne çıkan1 Açıklama</blockquote>
                  <figcaption>Öneçıkan_isim Soyisim(meslek)</figcaption>
                </figure>

                <figure class="tm-testimonial-item">
                  <img src="img/testimonial-img-02.jpg" alt="Image" class="img-fluid mx-auto">
                  <blockquote>öne çıkan2 açıklama</blockquote>
                  <figcaption>Öneçıkan_isim Soyisim(meslek)</figcaption>
                </figure>

                <figure class="tm-testimonial-item">
                  <img src="img/testimonial-img-03.jpg" alt="Image" class="img-fluid mx-auto">
                  <blockquote>Öne çıkan3 açıklama</blockquote>
                  <figcaption>Öneçıkan_isim Soyisim(meslek)</figcaption>
                </figure>

                <figure class="tm-testimonial-item">
                  <img src="img/testimonial-img-04.jpg" alt="Image" class="img-fluid mx-auto">
                  <blockquote>öne çıkan4 açıklama</blockquote>
                  <figcaption>Öneçıkan_isim Soyisim(meslek)</figcaption>
                </figure>

                <figure class="tm-testimonial-item">
                  <img src="img/testimonial-img-02.jpg" alt="Image" class="img-fluid mx-auto">
                  <blockquote>öne çıkan5 açıklama</blockquote>
                  <figcaption>Öneçıkan_isim Soyisim(meslek)</figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tm-bg-overlay"></div>
    </section>
    
    <section id="gallery" class="tm-section-pad-top">
      <div class="container tm-container-gallery">
        <div class="row">
          <div class="text-center col-12">
              <h2 class="tm-text-primary tm-section-title mb-4">Galeri</h2>
              <p class="mx-auto tm-section-desc">
                Galeri Loglar
              </p>
          </div>            
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mx-auto tm-gallery-container">
                    <div class="grid tm-gallery">
                      <a href="img/gallery-img-01.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-01.jpg" alt="Image 1" class="img-fluid">
                          <figcaption>
                            <h2><i>Foto içi1 <span>foto içi1 alt</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-02.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-02.jpg" alt="Image 2" class="img-fluid">
                          <figcaption>
                            <h2><i>Foto içi2 <span>Foto içi2 alt</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-03.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-03.jpg" alt="Image 3" class="img-fluid">
                          <figcaption>
                            <h2><i><span>Foto içi3</span> Foto içi3 alt</i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-04.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-04.jpg" alt="Image 4" class="img-fluid">
                          <figcaption>
                            <h2><i>Foto içi4 <span>Foto içi4 alt</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-05.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-05.jpg" alt="Image 5" class="img-fluid">
                          <figcaption>
                            <h2><i><span>Foto içi5</span>Foto içi5 alt</i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-06.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-06.jpg" alt="Image 6" class="img-fluid">
                          <figcaption>
                            <h2><i>Foto içi6 <span>Foto içi6 alt</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-01.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-01.jpg" alt="Image 7" class="img-fluid">
                          <figcaption>
                            <h2><i>Foto içi7 <span>Foto içi7 alt</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                      <a href="img/gallery-img-02.jpg">
                        <figure class="effect-honey tm-gallery-item">
                          <img src="img/gallery-tn-02.jpg" alt="Image 8" class="img-fluid">
                          <figcaption>
                            <h2><i>Foto içi8<span>Foto içi8 alt</span></i></h2>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                </div>                
            </div>        
          </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">
    
      <div class="container tm-container-contact">
        
        <div class="row">
            
            <div class="text-center col-12">
                <h2 class="tm-section-title mb-4">şik şik şikayet</h2>
                <p class="mb-5">
                  şik şik şikayet bölümü
                </p><br>
            </div>
            
            <div class="col-sm-12 col-md-6">
              <form action="" method="get">
                <input id="name" name="name" type="text" placeholder="Kullanıcı Adı" class="tm-input" required />
                <input id="email" name="email" type="email" placeholder="Şikayet İçeriği" class="tm-input" required />
                <textarea id="message" name="message" rows="8" placeholder="Şikayetinizi Detaylı Şekilde Yazınız" class="tm-input" required></textarea>
                <button type="submit" class="btn tm-btn-submit">Şikayet Et.</button>
              </form>
            </div>
            
            <div class="col-sm-12 col-md-6">

                <div class="contact-item">
                  <a rel="nofollow" href="https://www.tooplate.com/contact" class="item-link">
                      <i class="far fa-2x fa-comment mr-4"></i>
                      <span class="mb-0">Online Destek</span>
                  </a>              
                </div>
                
                <div class="contact-item">
                  <a rel="nofollow" href="hanifi.anelka@hotmail.com" class="item-link">
                      <i class="far fa-2x fa-envelope mr-4"></i>
                      <span class="mb-0">E-Mail Destek</span>
                  </a>              
                </div>
               
                
                <div class="contact-item">&nbsp;</div>
            
            </div>
            
            
        </div><!-- row ending -->
        
      </div>

      	<footer class="text-center small tm-footer">
          <p class="mb-0">
          Copyright &copy; 2021 Company Name 
          
          . <a rel="nofollow" href="hanificanseven.xyz" title="HTML templates"> Designed by Hanifi Can Seven</a></p>
        </footer>

    </section>
    
    <script src="js/jquery-1.9.1.min.js"></script>     
    <script src="slick/slick.min.js"></script>
    <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/jquery.singlePageNav.min.js"></script>     
    <script src="js/bootstrap.min.js"></script> 
    <script>

      function getOffSet(){
        var _offset = 450;
        var windowHeight = window.innerHeight;

        if(windowHeight > 500) {
          _offset = 400;
        } 
        if(windowHeight > 680) {
          _offset = 300
        }
        if(windowHeight > 830) {
          _offset = 210;
        }

        return _offset;
      }

      function setParallaxPosition($doc, multiplier, $object){
        var offset = getOffSet();
        var from_top = $doc.scrollTop(),
          bg_css = 'center ' +(multiplier * from_top - offset) + 'px';
        $object.css({"background-position" : bg_css });
      }

      // Parallax function
      // Adapted based on https://codepen.io/roborich/pen/wpAsm        
      var background_image_parallax = function($object, multiplier, forceSet){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        // $object.css({"background-attatchment" : "fixed"});

        if(forceSet) {
          setParallaxPosition($doc, multiplier, $object);
        } else {
          $(window).scroll(function(){          
            setParallaxPosition($doc, multiplier, $object);
          });
        }
      };

      var background_image_parallax_2 = function($object, multiplier){
        multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
        multiplier = 1 - multiplier;
        var $doc = $(document);
        $object.css({"background-attachment" : "fixed"});
        
        $(window).scroll(function(){
          if($(window).width() > 768) {
            var firstTop = $object.offset().top,
                pos = $(window).scrollTop(),
                yPos = Math.round((multiplier * (firstTop - pos)) - 186);              

            var bg_css = 'center ' + yPos + 'px';

            $object.css({"background-position" : bg_css });
          } else {
            $object.css({"background-position" : "center" });
          }
        });
      };
      
      $(function(){
        // Hero Section - Background Parallax
        background_image_parallax($(".tm-parallax"), 0.30, false);
        background_image_parallax_2($("#contact"), 0.80);   
        background_image_parallax_2($("#testimonials"), 0.80);   
        
        // Handle window resize
        window.addEventListener('resize', function(){
          background_image_parallax($(".tm-parallax"), 0.30, true);
        }, true);

        // Detect window scroll and update navbar
        $(window).scroll(function(e){          
          if($(document).scrollTop() > 120) {
            $('.tm-navbar').addClass("scroll");
          } else {
            $('.tm-navbar').removeClass("scroll");
          }
        });
        
        // Close mobile menu after click 
        $('#tmNav a').on('click', function(){
          $('.navbar-collapse').removeClass('show'); 
        })

        // Scroll to corresponding section with animation
        $('#tmNav').singlePageNav({
          'easing': 'easeInOutExpo',
          'speed': 600
        });        
        
        // Add smooth scrolling to all links
        // https://www.w3schools.com/howto/howto_css_smooth_scroll.asp
        $("a").on('click', function(event) {
          if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 600, 'easeInOutExpo', function(){
              window.location.hash = hash;
            });
          } // End if
        });

        // Pop up
        $('.tm-gallery').magnificPopup({
          delegate: 'a',
          type: 'image',
          gallery: { enabled: true }
        });

        $('.tm-testimonials-carousel').slick({
          dots: true,
          prevArrow: false,
          nextArrow: false,
          infinite: false,
          slidesToShow: 3,
          slidesToScroll: 1,
          responsive: [
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2
              }
            }, 
            {
              breakpoint: 480,
              settings: {
                  slidesToShow: 1
              }                 
            }
          ]
        });

        // Gallery
        $('.tm-gallery').slick({
          dots: true,
          infinite: false,
          slidesToShow: 5,
          slidesToScroll: 2,
          responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
        });
      });
    </script>
  </body>
</html>