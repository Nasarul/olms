<?php
require_once('../config/dbcon.php');
// $upload_dir = '../uploads/teacher/';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM tblcourse WHERE id =" . $id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    $errorMsg = 'Could not find any record';
  }
}

if (isset($_POST['Submit'])) {
  $name = $_POST['name'];
  $duration = $_POST['duration'];
 
  if (!isset($errorMsg)) {
    $sql = "UPDATE tblcourse
									SET name = '" . $name . "',
                  duration = '" . $duration . "'
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
            <h5> Edit Course </h5>
          </div>
          <div class="card-body">
            <form class="" action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name">Course Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Course Name..." value="<?php echo $row['name']; ?>">
              </div>
              <div class="form-group">
                <label for="name">Teacher's Designation</label>
                <input type="text" class="form-control" name="duration" placeholder="Enter Duration ..." value="<?php echo $row['duration']; ?>">
              </div>
              
              <div class="form-group">
                <button type="submit" name="Submit" class="btn btn-primary waves">Save</button>
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