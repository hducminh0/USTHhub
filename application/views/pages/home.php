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
            <li class="nav-item"><a onclick="document.getElementById('id01').style.display='block'" href="#" class="nav-link">Login</a></li>

            <!-- popuplogin -->
            <div id="id01" class="modal">
              <form class="modal-content animate" action="/action_page.php">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <img src="image/user.png" alt="Avatar" class="avatar">
                </div>

                <div id="popuplogin" class="container">
                  <label><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>

                  <label><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>

                  <button type="submit">Login</button>
                  <input type="checkbox" checked="checked"> Remember me
                </div>

                <div class="container" style="background-color:#f1f1f1">
                  <button id="cancelbtn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
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
            <!-- /popuplogin -->

          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Welcome to USTHhub</h1>
        <p class="lead">The ting goes skrrrahh, pap, pap, ka-ka-ka. Skidiki-pap-pap, and a pu-pu-pudrrrr-boom. Skya, du-du-ku-ku-dun-dun. Poom, poom, you don' know.</p>
      </div>
    </header>

    <section id="about">
      <div class="container">
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

    <section id="contact" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact us</h2>
            <p class="lead">
University of Science and Technology of Hanoi
Training and Services Bulding, Vietnam Academy of Science and Technology 
Add: 18 Hoang Quoc Viet, Cau Giay District, Hanoi 
Tel: (+84- 24) 37 91 69 60 
Email: usth.info@usth.edu.vn 

Bachelor
Tel: (+84- 24) 37 91 77 48 
Email: admission@usth.edu.vn 

Master
Tel: (+84- 24) 37 91 77 47 / 37 91 86 18
PMAB: admission-bio@usth.edu.vn 
AMSN: admission-nano@usth.edu.vn 
ICT: admission-ict@usth.edu.vn 
WEO: admission-weo@usth.edu.vn 
SA: admission-space@usth.edu.vn 
EN: admission-energy@usth.edu.vn 

Student Affairs
Tel: (+84- 24) 37 91 72 05 
Email: pham-thi-thanh.nga@usth.edu.vn </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; USTHhub 2017</p>
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
