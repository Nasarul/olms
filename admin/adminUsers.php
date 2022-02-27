<?php
session_start();
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- User Modal -->
    <div class="modal fade" id="addUserModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Admin User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="includes/code.php" method="POST">
                    <div class="modal-body">
                        <div class="rowform-group">
                            <label for="">Name</label>
                            <input type="text" name="adm_name" class="form-control" placeholder="Name">
                        </div>
                        <div class="rowform-group">
                            <label for="">E-mail</label>
                            <input type="email" name="adm_email" class="form-control" placeholder="email">
                        </div>
                        <div class="rowform-group">
                            <label for="">Mobile</label>
                            <input type="text" name="adm_mobile" class="form-control" placeholder="mobile">
                        </div>
                        <div class="rowform-group">
                            <label for="">User Name</label>
                            <input type="text" name="adm_username" class="form-control" placeholder="username">
                        </div>
                        <div class="rowform-group">
                            <label for="">Passwrod</label>
                            <input type="password" name="adm_password" class="form-control" placeholder="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="addAdminUser" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Register User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="raw">
            <div class="col-md-12">
                <!-- /.content-header -->
        <?php

        if(isset($_SESSION['status']))
        {
            echo "<h4>".$_SESSION['status']."</h4>";
            unset($_SESSION['status']);
        }
        ?>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Administrator Users</h3>
                        <a href="#" data-bs_toggle="modal" data-bs-target="#addUserModel" class="btn btn-primary btn-sm float-right">Add Admin user</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Name</th>
                                    <th>Eail</th>
                                    <th>Mobile</th>
                                    <th>User Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td> 4</td>
                                    <td>X</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('includes/footer.php');
?>