<?php

require_once('../config/dbcon.php');

$upload_dir = '../uploads/video/';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM tblvideo WHERE id =" . $id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    $errorMsg = 'Could not find any record';
  }
}

if (isset($_POST['Submit'])) {
  $title = $_POST['title'];
  $discription = $_POST['discription'];
  // $thumbnail = $_POST['thumbnail'];
  $thumbnailName = $_FILES['thumbnail']['name'];
  $thumbnailTmp = $_FILES['thumbnail']['tmp_name'];
  $thumbnailSize = $_FILES['thumbnail']['size'];

  if ($thumbnailName) {

    $thumbnailExt = strtolower(pathinfo($thumbnailName, PATHINFO_EXTENSION));

    $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

    $usePic = time() . '_' . rand(1000, 9999) . '.' . $thumbnailExt;

    if (in_array($thumbnailExt, $allowExt)) {

      if ($thumbnailSize < 500000) {
        unlink($upload_dir . $row['thumbnail']);
        move_uploaded_file($thumbnailTmp, $upload_dir . $usePic);
      } else {
        $errorMsg = 'Image too large';
      }
    } else {
      $errorMsg = 'Please select a valid image';
    }
  } else {
    $usePic = $row['thumbnail'];
  }

  if (!isset($errorMsg)) {
    $sql = "UPDATE tblvideo
									SET title = '" . $title . "',
                  discription = '" . $discription . "',                     
									thumbnail = '" . $usePic . "',     
				WHERE	id=" . $id;
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $successMsg = 'New record updated successfully';
      header('Location:index.php');
    } else {
      $errorMsg = 'Error ' . mysqli_error($conn);
    }
  }
}

?>


<?php
include_once('../includes/header.php')
?>

<body>

  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i>Back to Home</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h5> Video </h5>
          </div>
          <div class="card-body">
            <form class="" action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name"><Title></Title></label>
                <input type="text" class="form-control" name="title" placeholder="Enter title..." value="<?php echo $row['title']; ?>">
              </div>
              <div class="form-group">
                <label for="name">Discription</label>
                <input type="text" class="form-control" name="discription" placeholder="Enter discription..." value="<?php echo $row['discription']; ?>">
              </div>
              
          

              <div class="form-group">
                <label for="image">Choose thumbnail</label>
                <div class="col-md-8">
                  <img src="<?php echo $upload_dir . $row['thumbnail'] ?>" width="100">
                  <input type="file" class="form-control" name="thumbnail" value="">
                </div>
              </div>
              <!-- <div class="form-group">
                <label for="image">Choose video</label>
                <div class="col-md-8">
                  <img src="<?php echo $upload_dir . $row['video'] ?>" width="100">
                  <input type="file" class="form-control" name="video" value="">
                </div>
              </div> -->

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