  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>USTHhub - USTH Course Management</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

  <script src="js/jquery.min.js"></script>

  <link href="css/style.css" rel="stylesheet" type="text/css" media="all">



</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">USTHhub</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
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
            <li>
              <a href="specific_course.html">Specific Course</a>
            </li>
            <li>
              <a href="#">Apply Data Science with Python </a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Upcoming">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsed_upcoming" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa fa-book"></i>
            <span class="nav-link-text">Upcoming</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsed_upcoming">
            <li>
              <a href="#">Image Processing</a>
            </li>
            <li>
              <a href="#">Advanced Database</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Completed">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsed_completed" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa fa-book"></i>
            <span class="nav-link-text">Completed</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsed_completed">
            <li>
              <a href="#">Information Security</a>
            </li>
            <li>
              <a href="#">Machine Learning and Data Mining</a>
            </li>
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
        <li class="breadcrumb-item active">Ongoing</li>
        <li class="breadcrumb-item active">Specific Course</li>
      </ol>

      <div class="col-12">
          <h2>Specific Course</h2>
          <br>

      <!-- Nav tabs -->


    </div>

    <ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Description</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Lecture</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Homework</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Attendance Check</a>
  </li>
</ul>
  
<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel"></div>
  <div class="tab-pane" id="profile" role="tabpanel"></div>
  <div class="tab-pane" id="messages" role="tabpanel">

    <h1>Homework Upload</h1>

<div class="upload">
      <h3>Select File</h3>
    <div class="login-form">
      <form>
          <div>
          <span id="student_name">Student Name</span>
            <input type="text" class="title" value= "Eg: Ta Chien Long" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
        </div>
        <div>
          <span id="description_form">Description</span>
            <input type="text" class="describe" value="Eg: Noob" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" />
        </div>
      </form>

      <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
        <div id="drop">
        <a>Upload</a>
        <input type="file" name="upl" multiple />
      </div>

        
        <ul>
        <!-- The file uploads will be shown here -->
        </ul>

      </form>
    </div>

      
  <!-- JavaScript Includes -->
    <script src="js/jquery.knob.js"></script>
  <!-- JavaScript Includes -->

  <!-- jQuery File Upload Dependencies -->
    <script src="js/jquery.ui.widget.js"></script>
    <script src="js/jquery.iframe-transport.js"></script>
    <script src="js/jquery.fileupload.js"></script>
  <!-- jQuery File Upload Dependencies -->
    
  <!-- Main JavaScript file -->
    <script src="js/script.js"></script>
  <!-- Main JavaScript file -->
  
</div>


  </div>
  <div class="tab-pane" id="settings" role="tabpanel">  </div>
</div>

<script>
  $(function () {
    $('#myTab a:last').tab('show')
  })
</script>

<br>
<br>
<br>
<br>



  </div>
</div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>USTHhub 2017</small>
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
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
