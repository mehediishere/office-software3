<?php 
  include('part/top.php');
  $balance = mysqli_fetch_assoc($conn->query("SELECT b.*, n.branch as nm FROM `balance` as b INNER JOIN `branch` as n on (b.branch = '$_SESSION[branch]' AND n.id = '$_SESSION[branch]')"));
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
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Expense</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><?php echo "Expense Balance : ".$balance['expense']; ?></li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <!-- Main row -->
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <form action="actions/expense.php" method="POST" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map-marked"></i></span>
                      </div>
                      <input type="text" class="form-control text-capitalize" placeholder="branch" value="<?php echo $balance['nm']; ?> branch" readonly>
                    </div>
                    <div class="input-group mt-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-coins"></i></span>
                      </div>
                      <input type="text" class="form-control" placeholder="Invoice*" name="invoice">
                    </div>
                    <div class="input-group  mt-2" style="flex-wrap: unset">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="fas fa-file-invoice"></i>
                        </span>
                      </div>
                      <select class="form-control select2" name="category">
                        <option value=""></option>
                        <?php
                          $category = mysqli_fetch_all($conn->query("SELECT * FROM `expense_category` WHERE `branch` = '$_SESSION[branch]'"), MYSQLI_ASSOC);
                          foreach($category as $row){
                        ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['category']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group mt-2">
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                        <input type="text" name="expense_date" onfocus="(this.type='date')" class="form-control" placeholder="Enter expense date*">
                      </div>
                    </div>
                    <div class="input-group mt-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-coins"></i></span>
                      </div>
                      <input type="number" class="form-control" name="amount" placeholder="Amount*">
                    </div>
                    <div class="input-group mt-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                      </div>
                      <textarea name="details" class="form-control" rows="2" placeholder="Details"></textarea>
                    </div>
                    <div class="input-group mt-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                      </div>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="uploadfile" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>

          </div>

          <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
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

  <script src="dist/js/bs-custom-file-input.min.js"></script>

  <script>
    $(function(){
      bsCustomFileInput.init();
      //Initialize Select2 Elements
      $(".select2").select2({
        placeholder: "Select category for expense*"
      });
      //Initialize Select2 Elements
      $(".select2bs4").select2({
          theme: "bootstrap4",
      })
    });
  </script>

</body>

</html>