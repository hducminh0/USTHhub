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
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>home#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url() ?>home#contact">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto" id="abc">
            <li class="nav-item"><a href="<?php echo base_url() ?>pages/view/login" class="nav-link">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-light text-black">
      <div class="container text-left">
        <h1>Information and Communication Technology: Third Year</h1>
        <p class="lead">The ICT formation in USTH prepares graduates for careers in the fields of Software Engineering and Computer Science. It equips students with the fundamental understanding of computing, system administration, professional knowledge of information systems, advance databases and project management.</p>
      </div>
    </header>

    <!-- table -->
    <div class="container">
      <table class="table table-bordered table-primary">
        <thead>
          <tr class="table-secondary text-center">
            <th colspan="7"></th>
          </tr>
          <tr class="table-danger text-center">
            <th scope="col"></th>
            <?php foreach ($timetable_date as $timetable_date) : ?>
              <th class="col-md-2" scope="col"><?php echo $timetable_date['Date']; ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="table-danger" scope="row">1</th>
            <?php foreach ($timetable as $timetable) : ?>
              <td><?php echo $timetable['StartTime'].' - '.$timetable['EndTime'] ?><br>
              <?php echo $timetable['CourseName'].' - '.$timetable['Fullname'].' - '.$timetable['Room'] ?></td>
            <?php endforeach; ?>
          </tr>
          <!-- <tr>
            <th class="table-danger" scope="row">2</th>
            <td>14:00 – 16:00<br>Final exam: Object-Oriented System Analysis and Design, 710/USTH</td>
            <td>16:00 – 18:00<br>Future Tech Talents - USTH Auditorium</td>
            <td>13:30 – 16:30<br>Advanced Database - Dr. Nguyen Hoang Ha - 710/USTH</td>
            <td>14:00 – 16:00<br>Final exam: Web apps development, 710/USTH</td>
            <td></td>
            <td></td>
          </tr> -->
          <tr class="table-secondary text-center">
            <th colspan="7"></th>
          </tr>
        </tbody>
      </table>
    </div>
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
