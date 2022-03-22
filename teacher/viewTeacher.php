<?php
require_once('../config/dbcon.php');
$upload_dir = '../uploads/teacher/';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM tblteacher WHERE id=" . $id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    $errorMsg = 'Could not find any record';
  }
}
?>
<?php
include_once('../includes/header.php')
?>

<body>

  <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
  </nav>

  <div class="container">
    <div class="row justify-content-center">
      <div class="card">
        <div class="card-header justify-content-center">
          <h3 class="text-center">Teacher's information</h2>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md">
              <img src="<?php echo $upload_dir . $row['image'] ?>" height="200">
            </div>
            <div class="col-md">
              <h5 class="form-control"><i class="fa-solid fa-user"></i>
                <span><?php echo $row['name'] ?></span>
                </i>
              </h5>
              <h5 class="form-control"><i class="fa-solid fa-tags"></i>
                <span><?php echo $row['designation'] ?></span>
                </i>
              </h5>
              <h5 class="form-control"><i class="fa-solid fa-industry"></i>
                <span><?php echo $row['organization'] ?></span>
                </i>
              </h5>
              <h5 class="form-control"><i class="fa-solid fa-envelope-open-text"></i>
                <span><?php echo $row['email'] ?></span>
                </i>
              </h5>
              <h5 class="form-control"><i class="fa-solid fa-mobile-screen-button"></i>
                <span><?php echo $row['mobile'] ?></span>
                </i>
              </h5>

              <a class="btn btn-outline-danger" href="index.php"><i class="fa fa-sign-out-alt"></i><span>Back to Home</span></a>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
</body>

</html>