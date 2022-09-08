<?php 
  include('part/top.php');

  $user = mysqli_fetch_assoc($conn->query("SELECT * FROM `profile` WHERE `email` = '$_SESSION[user]'"));

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | User Profile</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition sidebar-mini">
  <?php include('part/preloader.php'); ?>
    <div class="wrapper">
    <?php include('part/navbar.php'); ?>

  <?php include('part/sidenav.php'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Profile</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">User Profile</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center mb-2">
                      <img class="profile-user-img img-fluid img-circle"
                        src="https://p.kindpng.com/picc/s/78-786207_user-avatar-png-user-avatar-icon-png-transparent.png"
                        alt="User profile picture" style="width: 150px" />
                    </div>

                    <!-- Profile picture upload button-->
                    <div class="d-flex justify-content-center">
                      <input type="file" name="" class="btn btn-light">
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->

                <!-- /.card -->
              </div>
              <!-- /.col -->
              <!-- /.col -->
              <div class="col-md-7">
                <div class="card">
                  <div class="card-header p-2">
                    <h4>Edit Profile</h4>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control text-capitalize" name="fullname" placeholder="Mahamud Pino" value="<?php echo $user['name']; ?>"/>
                          </div>
                        </div>

                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="pino@gmail.com" value="<?php echo $user['email']; ?>"/>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control" name="number" placeholder="+8801789999751" value="<?php echo $user['phone']; ?>" />
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <textarea name="address" class="form-control" rows="3"><?php echo $user['address']; ?></textarea>
                      </div>

                      <div class="form-group row">
                        <button type="submit" class="btn btn-danger">
                          Update Profile
                        </button>
                      </div>
                    </form>
                    <!-- /.tab-content -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <div class="card">
                  <div class="card-header p-2">
                    <h4>Change Password</h4>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <form class="form-horizontal">

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Old Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="oldpassword" placeholder="" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">New Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="newpassword" placeholder="" />
                          </div>
                        </div>
                      </div>


                      <div class="form-group">
                        <button type="submit" class="btn btn-warning">
                          Change Password
                        </button>
                      </div>
                    </form>
                    <!-- /.tab-content -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block"><b>Version</b> 3.2.0</div>
        <strong
          >Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
        All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
  </body>
</html>
