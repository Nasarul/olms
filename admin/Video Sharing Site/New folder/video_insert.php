<?php
include_once('../includes/header.php')
?>

<body>

  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
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
          <div class="card-header">Video uploads</div>
          <div class="card-body">
            <form class="" action="video_insert.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name">Video Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter video title" value="">
              </div>
              <div class="form-floating">
                <label for="name">Video Description</label>
                <textarea class="form-control" name="description" placeholder="Enter video description" id="description"></textarea>
              </div>
              <div class="form-group">
                <label for="name">Upload Video Thumbnail</label>
                <input type="file" class="form-control" name="Thumbnail" placeholder="Enter video thumbnail" value="">
              </div>
              <div class="form-group">
                <label for="image">Upload Video</label>
                <input type="file" class="form-control" name="video" value="">
              </div>
              <div class="form-group">
                <button id="uploadbutton" type="submit" name="upload" value="upload" class="btn btn-primary waves">Upload</button>
                <a class="btn btn-primary waves" href="index.php" role="button">Cancel</a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('../config/dbcon.php');
  if (isset($_POST['upload'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $thumbnail = $_FILES['thumbnail']['name'];
    $thumbnail_type = $_FILES['thumbnail']['type'];
    $thumbnail_size = $_FILES['thumbnail']['size'];
    $thumbnail_temp_loc = $_FILES['thumbnail']['tmp_name'];
    $thumbnail_store = "../uploads/thumbnail/" . $thumbnail;
    move_uploaded_file($thumbnail_temp_loc, $thumbnail_store);
    $video = $_FILES['video']['name'];
    $video_type = $_FILES['video']['type'];
    $video_size = $_FILES['video']['size'];
    $video_temp_loc = $_FILES['video']['tmp_name'];
    $video_store = "../uploads/video/" . $video;
    move_uploaded_file($video_temp_loc, $video_store);

    $sql = "INSERT INTO video(title,description,thumbnail,video)
      values('$title','$description','$thumbnail','$video')";
    $query = mysqli_query($conn, $sql);
  }

  ?>

</body>

</html>