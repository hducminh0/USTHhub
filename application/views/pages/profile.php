<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Someone's Profile</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand ml-auto" href="<?php echo base_url() ?>pages/view/course_ict"><img width="140" height="40" src="<?php echo base_url() ?>assets/image/logo.png"></a>
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
     <ul id="logoutbtn" class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link mr-lg-2" href="<?php echo base_url() ?>pages/view/profile" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user-circle-o" style="color: #007bff"></i>
            <span class="d-lg-none">Profile
              <!-- <span class="badge badge-pill badge-warning">6 New</span> -->
            </span>
            <!-- <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span> -->
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" style="color: #007bff">
            <i class="fa fa-fw fa-sign-out" style="color: #007bff"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Someone's Profile</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h2>Profile</h2>
          <?php foreach ($profile as $profile) ?>
             <div class=" row" style="margin-left: 40px"><img id="lecturer_photo" src="<?php echo base_url() ?>assets/image/<?php echo $profile['Username'].'.jpg' ?>" width="150" height="250" style="margin-top: 20px" class="rounded-circle col-md-2" >
            <div class="col-md-4" style="margin-top: 90px">
              <p id="course_lecturer_name" style="margin-top: 20px; margin-left: 20px"><?php echo $profile['Fullname']; ?></p>
              <p id="course_lecturer_name" style="margin-top: 20px; margin-left: 20px"><?php echo $profile['Email']; ?></p>
            </div>
            </div>

        </div>

      </div>


    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <p class="m-0 text-center text-black">Copyright &copy; USTHhub 2017</p>
        </div>
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
            <a class="btn btn-primary" href="<?php echo base_url()?>pages/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>
  </div>
</body>

</html>
