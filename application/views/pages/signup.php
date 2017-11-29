<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>USTHhub</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link rel="icon" href="https://image.flaticon.com/icons/svg/580/580855.svg">
  </head>
  <style>
    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: #007bff;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #343a40;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn,.signupbtn {
        float: left;
        width: 50%;
    }

    /* Add padding to container elements */
    #signin.container {
        padding: 16px;
        margin-top: 80px;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
           width: 100%;
        }
    }
    </style>
    <body>
      <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container-fluid">
          <a class="navbar-brand js-scroll-trigger ml-auto" href="homepage.html">USTHhub</a>
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
                  <li><a class="dropdown-item" href="ict_2.html">2nd year</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a class="dropdown-item" href="ict_3.html">3th year</a></li>
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
                <a class="nav-link js-scroll-trigger" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto" id="abc">
              <li class="nav-item"><a href="signup.html" class="nav-link">Sign Up</a></li>
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
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" id="cancelbtn" class="cancelbtn">Cancel</button>
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

        <form action="/action_page.php" style="border:1px solid #ccc">
          <div id="signin" class="container">
            <h2>Signup Form</h2>
            <label><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
            <input type="checkbox" checked="checked"> Remember me
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

            <div class="clearfix">
              <button type="submit" class="signupbtn">Sign Up</button>
              <button type="button" class="cancelbtn">Cancel</button>
            </div>
          </div>
        </form>

      </div>

      <!-- Footer -->
      <footer class="py-5 bg-dark">
        <div class="container">
          <p class="m-0 text-center text-white">Copyright &copy; USTHhub 2017</p>
        </div>
        <!-- /.container -->
      </footer>

      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Plugin JavaScript -->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom JavaScript for this theme -->
      <script src="js/scrolling-nav.js"></script>
    </body>
</html>
