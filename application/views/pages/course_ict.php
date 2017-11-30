<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>USTHhub - USTH Course Management</title>
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/scrolling-nav.css" rel="stylesheet">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url(); ?>pages/view/course_ict">USTHhub</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="<?php echo base_url(); ?>pages/view/course_ict">
            <i class="fa fa-fw fa fa-calendar"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Ongoing">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsed_ongoing" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa fa-book "></i>
            <span class="nav-link-text">Ongoing</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsed_ongoing">
            <?php foreach($ongoing as $ongoing) : ?>
              <li>
                <a href="<?php echo base_url().'pages/view/'.$ongoing['CourseID'] ?>"><?php echo $ongoing['CourseName'] ?></a>
              </li>
            <?php endforeach ?>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Upcoming">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsed_upcoming" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa fa-book"></i>
            <span class="nav-link-text">Upcoming</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsed_upcoming">
            <?php foreach($upcomming as $upcomming) : ?>
              <li>
                <a href="<?php echo base_url().'pages/view/'.$upcomming['CourseID'] ?>"><?php echo $upcomming['CourseName'] ?></a>
              </li>
            <?php endforeach ?>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Completed">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsed_completed" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa fa-book"></i>
            <span class="nav-link-text">Completed</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsed_completed">
            <?php foreach($completed as $completed) : ?>
              <li>
                <a href="<?php echo base_url().'pages/view/'.$completed['CourseID'] ?>"><?php echo $completed['CourseName'] ?></a>
              </li>
            <?php endforeach ?>
          </ul>
        </li>
        

      </ul>
      
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        
        <li class="nav-item">
          <a class="nav-link mr-lg-2" href="profile.html" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user-circle-o"></i>
            <span class="d-lg-none">Profile
              <!-- <span class="badge badge-pill badge-warning">6 New</span> -->
            </span>
            <!-- <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span> -->
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>

      </div>

      <!-- Parse Data vao cho nay phia duoi cai newsfeed -->
      <header class="bg-light text-black">
        <div class="container text-left">
          <h1 id="new_header">Information and Communication Technology: Third Year</h1>
          <p class="lead">The ICT formation in USTH prepares graduates for careers in the fields of Software Engineering and Computer Science. It equips students with the fundamental understanding of computing, system administration, professional knowledge of information systems, advance databases and project management.</p>
        </div>
      </header>

    <!-- table -->
    <!-- <section id="services"> -->
      <div class="container col-md-10">
        <table class="table table-bordered table-primary">
          <thead>
            <tr class="table-secondary text-center">
              <th colspan="7"><h3 style="font-weight: bold;">Timetable</h3></th>
            </tr>
            <tr class="table-danger text-center">
              <!-- <th scope="col"></th> -->
              <?php foreach ($timetable_date as $timetable_date) : ?>
                <th class="col-md-2" scope="col"><?php echo $timetable_date['Date']; ?></th>
              <?php endforeach; ?>
            </tr>
          </thead>
          <tbody>
          <tr>
            <!-- <th class="table-danger" scope="row"></th> -->
            <?php foreach ($timetable as $timetable) : ?>
              <td height="200"><br><br><?php echo $timetable['StartTime'].' - '.$timetable['EndTime'] ?><br>
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
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <p class="m-0 text-center text-black">Copyright &copy; USTHhub 2017</p>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url() ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/sb-admin-charts.min.js"></script>
     <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom JavaScript for this theme -->
    <script src="<?php echo base_url() ?>assets/js/scrolling-nav.js"></script>
  </div>
</body>

</html>
