<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <title>Regullux Technology</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <header id="home" class="gradient-violat">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="logo-wraper logo-white">
                <img src="assets/images/Logo.png" alt="">Regullux</span></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav  navbar-right">
              <li class="active"><a href="#home">Home <span class="sr-only">(current)</span></a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#introduction">Intro</a></li>
              <li><a href="#feature">Product</a></li>
              <li><a data-toggle="modal" data-target="#berlangganan" class="btn btn-orange border-none btn-rounded-corner btn-navbar">Get Info<span class="icon-on-button">
              </span></a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
          <hr class="navbar-divider">
        </div><!-- /.container-fluid -->
      </nav>
    </header>
    <section id="introduction" class="gradient-violat padding-top-90 home-slider">
      <div id="home-slider" class="owl-carousel">
        <div>
          <div class="sliding-card-with-bottom-image text-center padding-top-90">
            <h2 class="cta-heading text-white">WE HELP AND PROVIDE BEST IT SERVICE FOR YOU</h2>
            <p class="text-white slider-para">IT SERVICE TANGERANG</p>
            <div class="cta-btn-group">
              <a class="btn btn-orange border-none btn-rounded-corner" href="https://wa.me/62?text=Hi+Regullux%2C" target="_blank">CHAT WITH US<span class="icon-on-button"></span></a>
            </div>
            <div class="image-container text-center sm-display-none">
              <img class="img-responsive" src="assets/images/mockuo2.png" alt="">
            </div>
          </div>
        </div>
        
       
          </div>
        </div>
      </div>
    </section>

<!-- MODAL DIALOG BUAT GET INFO -->

<div class="modal fade" id="berlangganan" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Dapatkan penawaran terbaik</h4>
            </div>
                <div class="modal-body">
                    <form id="get_info" action="assets/getinfo.php" method="POST">
                        First Name :<input type="text" name="first_name"><br/>
                        <br/>
                        Last Name :<input type="text" name="last_name"><br/>
                        <br/>
                        Email :    <input type="text" name="email"><br/><br/>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="sentForm" class="btn btn-default">Send</button>
                </div>
            </div>
        </div>
    </div>

  <!-- END MODAL DIALOG BUAT GET INFO -->


<!-- ABOUT REGULUUX -->
 <section id="about" class="padding-top-bottom-45 bg-image-fit-50 regullux-remove-bottom" style="background:url(assets/images/about_us.jpg)">
      <div class="container">
        <div class="row">
          <div class="feature-regullux">
            <i> About Us</i>
            <p>Regullux merupakan Startup yang didirikan oleh sekumpulan anak muda yang memiliki background dalam bidang Information Technology, Regullux menyadari masyarakat dan corporate - corporate memiliki kebutuhan yang besar dalam bidang IT, khususnya dalam pelayanan jasa. Maka dari itu, Regullux hadir dan menjadikan nya sebagai startup yang berfokus pada penyedian jasa bagi semua orang.</p>
              <div class="row">
                  <div class="col-md-6 col-sm-8">
                      <h3 class="service-title">Visi</h3>
                      <p>Menyediakan layanan IT services secara inklusif untuk semua kalangan</p>
                    </div>
                      <div class="row">
                        <div class="col-md-6 col-sm-8">
                            <h3 class="service-title">Misi</h3>
                            <p>Dengan cara berkomitmen dalam bekerja sama, selalu menumbuhkan rasa percaya kepada semua pihak, dan memberika value yang terjangkau serta pelayanan yang terbaik</p>
                          </div>
                        </div>
                      </div>
                      </div>
                   </div>
               </div>
        </section>
<!-- END ABOUT REGULUUX -->.

<section id="blank_id" class="gradient-violat padding-top-50"></section>

    <section id="feature" class="padding-top-bottom-120 bg-image-fit-50" style="background:url(assets/images/1_back.png)">
      <div class="container">
        <div class="row">
            <div class="feature-wiget">
              <div class="col-xs-7 col-sm-4 col-md-offset-0">
             <i class="ion-heart"></i>
                <i>Work with Love</i>
                <p>.</p>
              </div>

             <div class="col-xs-7 col-sm-4 col-md-offset-0">
              <i class="ion-ios-lightbulb"></i>
                <i>Creativity</i>
                <p>Designed with modern trends and techniques in mind, Sedna will help your product stand out in an already saturated market.</p>
              </div>

             <div class="col-xs-7 col-sm-4 col-md-offset-0">
             <i class="ion-android-refresh"></i>
                <i>Consistent</i>
                <p>Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.</p>
              </div>
            </div>
        </div>
      </div>
    </section>


    <section id="services" class="padding-top-90">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-xs-4">
            <img class="img-responsive sm-display-none" src="assets/images/hand_phone.png" alt="">
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6">
                <div class="heading-wraper margin-bottom-25">
                  <h4>Our Services</h4>
                  <hr class="heading-devider gradient-orange">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-8">
                <h5 class="service-title">IT Services - Hardware</h5>
                <p class="services-content margin-bottom-25">Regullux merupakan IT Service yang bergerak di bidang IT Hardware yang menyediakan jasa antara lain : Networking, PC Building, Hardware Maintenance, juga Pengadaan peralatan-peralatan IT.</p>
              </div>
              <div class="col-md-6 col-sm-8">
                <h5 class="service-title">IT Services - Software</h5>
                <p class="services-content margin-bottom-25">Regullux juga bergerak di bidang IT Software, yang menyediakan jasa seperti : POS Application, E-Learning dengan Moodle, CRM Application, HR Application, Android dan iOS Application, Android dan iOS Troubleshooting, juga Web Development. </p>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="customer-support" class="overflow-x-hidden regullux-remove-bottom-23">
      <div class="row ">
        <div class="col-md-6">
          <div class="image-wraper">
            <img class="img-responsive" src="assets/images/support.png" alt="">
          </div>
        </div>
        <div class="col-md-5">
          <div class="heading-wraper-cs customer-support-content padding-top-bottom-120 sm-padding-top-bottom-50-75">
            <h4>Consult With Us</h4>
            <hr class="heading-devider-cs gradient-orange">
            <p class="margin-top-bottom-30">Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.</p>
            <a class="btn btn-orange border-none btn-rounded-corner" href="#">need our help ? let's chat<span class="icon-on-button"><i class="ion-ios-arrow-thin-right"></i></span></a>
          </div>
        </div>
      </div>
    </section>
<!-- BLANK SPACE -->
<section id="blank_id" class="gradient-orange padding-top-50">
      <div class="container">
        <div class="row">
          </div>
        </div>
      </div>
    </section>
<!-- END BLANK SPACE -->
    <footer class="padding-top-120">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="footer-left-content">
              <div class="logo-regullux">
                <img src="assets/images/regullux.png" alt="">
              </div>
              <div class="content">
                <p>Jln. KH. Hasyim Ashari KM2, No.57, RT004/01, Kel. Poris Plawad Utara, Kec. Cipondoh, Kota Tangerang, Banten, Indonesia.</p>
                <p>+88456895872, +88456595572</p>
                <p>info@regullux.id</p>
              </div>
            </div>
          </div>
          <center><div class="col-md-9">
            <div class="row"></center>
              <div class="col-md-3 col-sm-6">
                <div class="footer-list-wiget">
                  <h4>Support</h4>
                  <div class="list-group">
                    <a href="#" class="list-group-item">FAQ</a>
                    <a href="#" class="list-group-item">Contact US</a>
                    <a href="#" class="list-group-item">Outlook Plugin</a>
                    <a href="#" class="list-group-item">Phone Control</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="footer-list-wiget">
                  <h4>About</h4>
                  <div class="list-group">
                    <a href="#" class="list-group-item">About US</a>
                    <a href="#" class="list-group-item">Careear</a>
                    <a href="#" class="list-group-item">Privat policy</a>
                    <a href="#" class="list-group-item">Treams</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="footer-list-wiget">
                  <h4>Links</h4>
                  <div class="list-group">
                    <a href="#" class="list-group-item">Home</a>
                    <a href="#" class="list-group-item">About</a>
                    <a href="#" class="list-group-item">Product</a>
                    <a href="#" class="list-group-item">Intro</a>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
          <hr class="footer-divider">
          <div class="privacy">
            <a href="https://regullux.id/"><span class="span text-violat">Privacy Policy</span></a></div>
          <div class="copyright">
            <p class="text-uppercase text-center">All rights Reserved By <a href="https://regullux.id/"><span class="span text-violat ">Regullux</span></a></p>
          </div>
        </div>
      </div>
      <div class="footer-end-line"></div>
    </footer>
    <div id="scroll-top-div" class="scroll-top-div">
      <div class="scroll-top-icon-container">
        <i class="ion-ios-arrow-thin-up"></i>
      </div>
    </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>

