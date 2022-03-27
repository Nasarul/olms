<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="assets/dist/img/napd.svg" alt="NAPD Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">NAPD OLMS</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="assets/dist/img/Hasan.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Md. Nasarul Hasan</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <!-- <i class="right fas fa-angle-left"></i> -->
            </p>
          </a>
        </li>

        <li class="nav-header">Master List</li>
        <li class="nav-item dropdown">
        <!-- <a href="teacher/index.php" class="nav-link nav-faculty"> -->

          <a href="teacher/index.php" class="nav-link nav-faculty">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              Teacher
            </p>
          </a>
        </li>
        <li class="nav-item dropdown">
        <a href="student/index.php" class="nav-link nav-faculty">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Students
            </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a href="<?php echo base_url ?>admin/?page=class" class="nav-link nav-class">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>
              Class
            </p>
          </a>
        </li>

        <li class="nav-header">Maintenance</li>

        <li class="nav-item dropdown">
          <a href="course/index.php" class="nav-link nav-course">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Course
            </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a href="subject/index.php" class="nav-link nav-subject">
            <i class="nav-icon fas fa-tasks"></i>
            <p>
              Subjects
            </p>
          </a>
        </li>
      </ul>
      <!-- <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.html" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Admin
                      <i class="fas fa-angle-left right"></i>
                    </P>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/layout/top-nav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Admin Users</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Admin User</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/layout/boxed.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Admin User</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Delete Admin User</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-chalkboard-teacher"> </i>
                    <p>
                      Teachers
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/charts/chartjs.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Teachers' Info</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/charts/flot.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Teachers' Info</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/charts/inline.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Teachers' Info</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/charts/uplot.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Delete Teachers' Info</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                      Student
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/UI/general.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Veiw Student</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/UI/icons.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Students' Info</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/UI/buttons.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Students' Info</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/UI/sliders.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Delete Students' Info</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                      Subject
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/forms/general.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Subject</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/forms/advanced.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Subject</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/forms/editors.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Subject</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/forms/validation.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Delete Subject</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                      Course
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="pages/tables/simple.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View Course</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/tables/data.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Course</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/tables/jsgrid.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Edit Course</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/tables/jsgrid.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Delete Course</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-header">EXTRA</li>
                <li class="nav-item">
                  <a href="pages/calendar.html" class="nav-link">
                    <i class="nav-icon far fa-calendar-alt"></i>
                    <p>
                      Calendar
                      <span class="badge badge-info right">2</span>
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/gallery.html" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Gallery
                    </p>
                  </a>
                </li>
              </ul> -->




    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>


<script>
  $(document).ready(function() {
    var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
    var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
    page = page.split('/');
    page = page[0];
    if (s != '')
      page = page + '_' + s;

    if ($('.nav-link.nav-' + page).length > 0) {
      $('.nav-link.nav-' + page).addClass('active')
      if ($('.nav-link.nav-' + page).hasClass('tree-item') == true) {
        $('.nav-link.nav-' + page).closest('.nav-treeview').siblings('a').addClass('active')
        $('.nav-link.nav-' + page).closest('.nav-treeview').parent().addClass('menu-open')
      }
      if ($('.nav-link.nav-' + page).hasClass('nav-is-tree') == true) {
        $('.nav-link.nav-' + page).parent().addClass('menu-open')
      }

    }

  })
</script>