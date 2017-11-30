<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>USTHhub</title>
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/scrolling-nav.css" rel="stylesheet">
    <link rel="icon" href="https://image.flaticon.com/icons/svg/580/580855.svg">
  </head>
  <style>
    form {
        border: 3px solid #f1f1f1;
    }

    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        background-color: #007bff;
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

    .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #343a40;
    }

    .imgcontainer {
        text-align: center;
        margin: 80px 0 0 0;
    }

    img.avatar {
        width: 10%;
        border-radius: 20%;
    }

    #login.container {
        padding: 30px;
    }

    span.psw {
        float: right;
        padding-top: 16px;
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

  <body>
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
                <li><a class="dropdown-item" href="<?php echo base_url() ?>pages/view/ict_2.html">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="<?php echo base_url() ?>pages/view/ict_3.html">3th year</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#sa">S.A<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#">3th year</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#en">E.N<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#">3th year</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#pmab">P.M.A.B<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#">3th year</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#weo">W.E.O<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#">3th year</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>/pages/view/home#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>pages/view/home#contact">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto" id="abc">
            <li class="nav-item"><a href="<?php echo base_url() ?>pages/view/login" class="nav-link">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

            <form action="/action_page.php">
              <div class="imgcontainer">
                <img src="<?php echo base_url() ?>assets/image/user.png" alt="Avatar" class="avatar">
              </div>
              <div id="login" class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>
                <input type="checkbox" checked="checked"> Remember me

                <div id="cc" style="background-color:#f1f1f1">
                  <button type="button" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="<?php echo base_url() ?>pages/view/course_ict">password?</a></span>
                </div>
              </div>
            </form>


            <!-- Footer -->
            <footer class="py-5 bg-dark fixed-bottom">
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