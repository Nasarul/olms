<?php
include('saveTeacher.php');
include_once('../includes/header.php')
?>

<body>

  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
      <a class="navbar-brand" href="index.php">Teacher's Information</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Informations</div>
          <div class="card-body">
            <form class="" action="saveTeacher.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name">Teacher's Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" value="">
              </div>
              <div class="form-group">
                <label for="name">Teacher's Designation</label>
                <input type="text" class="form-control" name="designation" placeholder="Enter designation" value="">
              </div>
              <div class="form-group">
                <label for="name">Teacher's Organization</label>
                <input type="text" class="form-control" name="organization" placeholder="Enter organization" value="">
              </div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" value="">
              </div>
              <div class="form-group">
                <label for="contact">Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile" value="">
              </div>
              <div class="form-group">
                <label for="image">Picture</label>
                <input type="file" class="form-control" name="image" value="">
              </div>
              <div class="form-group">
                <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
</body>

</html>