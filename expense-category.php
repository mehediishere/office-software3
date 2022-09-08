<?php 
  include('part/top.php');
  $balance = mysqli_fetch_assoc($conn->query("SELECT * FROM `balance` WHERE `branch` = '$_SESSION[branch]'"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AdminLTE 3 | Advanced form elements</title>
  <?php include('part/all-css.php'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Preloader -->
    <?php include('part/preloader.php'); ?>

    <!-- Navbar -->
    <?php include('part/navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include('part/sidenav.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6"></div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><?php echo "Expense Balance : ".$balance['expense']; ?></li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header" style="background: #02c996cc;" >


              <h3 class="card-title">New Category</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-10">
                  <form action="actions/expense-category.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" class="form-control" id="category-name" placeholder="Enter Category Name" name="categoryname">
                      </div>
                      <div class="form-group">
                        <div class="form-group">
                          <label>Category Details</label>
                          <textarea class="form-control" rows="3" placeholder="Enter ..." name="details"></textarea>
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php include('part/footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php include('part/all-js.php'); ?>
  <!-- Page specific script -->
 
  <?php include('part/alert.php'); ?>

</body>

</html>