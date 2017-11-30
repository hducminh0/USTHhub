<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>USTHhub</title>
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/scrolling-nav.css" rel="stylesheet">
    <link rel="icon" href="https://image.flaticon.com/icons/svg/580/580855.svg">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger ml-auto" href="<?php echo base_url() ?>">USTHhub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-left">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#firstyear">1st year</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#ict">I.C.T<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo base_url(); ?>pages/view/ict_2">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="<?php echo base_url(); ?>pages/view/ict_3">3rd year</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#sa">S.A<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#">3rd year</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#en">E.N<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#">3rd year</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#pmab">P.M.A.B<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#">3rd year</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#weo">W.E.O<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#">3rd year</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto" id="abc">
            <li class="nav-item"><a href="<?php echo base_url() ?>pages/view/login" class="nav-link">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- <header class="bg-primary text-white">
      <div class="container text-center"> --><!--
        <h1>Welcome to USTHhub</h1>
        <p class="lead">The ting goes skrrrahh, pap, pap, ka-ka-ka. Skidiki-pap-pap, and a pu-pu-pudrrrr-boom. Skya, du-du-ku-ku-dun-dun. Poom, poom, you don' know.</p> -->
        <div id="demo" class="carousel slideshow row " data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url() ?>assets/image/usth.jpg" alt="Los Angeles" width="100%" height="700">
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url() ?>assets/image/usthhall.jpg" alt="Chicago" width="100%" height="700">
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url() ?>assets/image/USTHCampus03.jpg" alt="campus" width="100%" height="700">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    <!-- </header> -->

    <section id="about">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>About</h2>
            <p class="lead"> University of Science and Technology of Hanoi (USTH), also – called “Vietnam-France University”, is an unique International Standard Public University in Hanoi established in 2009 under the Intergovernmental Agreement between Vietnam and France signed on November, 12th 2009, following the decision number 2067/QĐ-TTg on December, 9th 2009 made by the Prime Minister.<br>

As a public university modeled according to international standards,  USTH is being built with funds from the Government of Viet Nam and a strong support from the French Government, Vietnam Academy of Science and Technology (VAST), Asian Development Bank and the Consortium of 42 universities and researching organizations of France.<br>

USTH always focuses on promoting the high quality of training courses in parallel with research activities and strong connections with the leading companies in science and technology in Vietnam.</p>

          </div>
        </div>
      </div>
    </section>

    <!-- <section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Services we offer</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
          </div>
        </div>
      </div>
    </section> -->

    <section id="services" class="table-secondary">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-2 ml-auto ">
            	<img id="boiron" src="<?php echo base_url() ?>assets/image/img_4814.jpg" alt="boiron">
          	</div>
          <div class="col-lg-6 mr-auto">
            <h2>
						Message from Rector
            </h2>
            <p>Dear All,<br>
            <br>
            On behalf of the Rector Board of USTH, I would like to thank you for your interest in and support for USTH, and warmly welcome you all to the first public international university of excellence in Hanoi!<br>
            <br>
            With the ambition to provide high quality human resource in science and technology and become&nbsp;an excellent research oriented institution in Vietnam, USTH is committed to academic and research excellence students, satisfaction and among Top 200 universities in the world by 2030.<br>
            <br>
            USTH is proud to adopt the Bologna education...</p>
            <br>
            <i>Prof. Patrick Boiron</i>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container-fluid">
         <div class="row">
           <div class="col-lg-2 ml-auto">
             <img src="<?php echo base_url() ?>assets/image/logo-moi_2.jpg" class="vertical-center" height="130" width="210">
           </div>
           <div class="col-lg-6 mr-auto">
             <h2>Contact us</h2>
             <p class="lead">
               <strong>UNIVERSITY OF SCIENCE AND TECHNOLOGY OF HANOI</strong>
             	<br>
             	<p title="Address">Address:<br> Vietnam Academy of Science and Technolgy 18 Hoang Quoc Viet,<br> Cau Giay, Ha Noi, Viet Nam</p>
             	<p title="Telephone">Telephone: <br> +84-24 37 91 69 60</p>
             	<p title="Email">Email:<br> <a href="mailto:usth.info@usth.edu.vn">usth.info@usth.edu.vn</a></p>
             </p>
           </div>
         </div>

       </div>
     </section>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container text-white">
        <p class="m-0 text-center">Copyright &copy; USTHhub 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom JavaScript for this theme -->
    <script src="<?php echo base_url() ?>assets/js/scrolling-nav.js"></script>
  </body>
</html>
