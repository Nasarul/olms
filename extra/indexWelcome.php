<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <!-- <h1 class="m-0">Dashboard</h1> -->
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li> -->
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-1 col-6">
                    <!-- blank box -->
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>Admin</h3>
                            <p>Only for Admin login</p>
                        </div>
                        <div class="icon">
                            <!-- <i class="ion ion-pie-graph"></i> -->
                            <i class="fa-solid fa-user-gear"></i>
                        </div>
                        <a href="#" class="small-box-footer">Click here for admin login <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>Teacher</h3>
                            <p>Only for Teacher login</p>
                        </div>
                        <div class="icon">
                            <i class="fa-solid fa-user-tie"></i>
                            <!-- <i class="fa-solid fa-user-pilot-tie"></i> -->
                        </div>
                        <a href="#" class="small-box-footer">Click here for teacher login <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>Student<sup style="font-size: 20px"></sup></h3>
                            <p>Only for Studnet login</p>

                        </div>
                        <div class="icon">
                            <!-- <i class="ion ion-stats-bars"></i> -->
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer">Click here for student login <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

</div>

<?php
include('includes/footer.php');
?>