<?php
include('saveVideo.php');

include_once('../includes/header.php')
?>

<body>
  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
      <a class="navbar-brand" href="index.php">Video's Information</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto"></ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i>Back to Home</a></li>
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
            <form class="" action="saveVideo.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Enter lecture title" value="">
              </div>
              <div class="form-group">
                <label for="name">Discription</label>
                <input type="text" class="form-control" name="discription" placeholder="Enter discription" value="">
              </div>

              <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input type="file" class="form-control" name="thumbnail" value="">
              </div>

              <!-- <div class="form-group">
                <label for="video">Video</label>
                <input type="file" class="form-control" name="video" value="">
              </div> -->
          </div>
        </div>
        <div class="form-group">
          <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
          <a class="btn btn-primary waves" href="index.php" role="button">Cancel</a>
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