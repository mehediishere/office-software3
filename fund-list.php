<?php include('part/top.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AdminLTE 3 | DataTables</title>
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
            <div class="col-sm-6">
              <h1>Fund List</h1>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header" style="background: #02c996cc;" >
                  <h3 class="card-title">Fund</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr style="background: #20c99769;" >
                        <th>#</th>
                        <th>Request Branch</th>
                        <th>Details</th>
                        <th>Amount</th>
                        <th>Request Date</th>
                        <th>Payment Option</th>
                        <th>Status</th>
                        <th>Approval Date</th>
                        <th class="print_hidden">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $n = 0;
                        $data = mysqli_fetch_all($conn->query("SELECT fr.*, b.branch as brn FROM `fund_request` as fr inner join `branch` as b on (fr.branch = '$_SESSION[branch]' AND fr.request_branch = b.id) ORDER BY fr.id DESC"), MYSQLI_ASSOC);
                        foreach($data as $row){
                      ?>
                      <tr>
                        <td class="text-capitalize"><?php echo ++$n; ?></td>
                        <td class="text-capitalize"><?php echo $row['brn']; ?></td>
                        <td><?php echo ucfirst($row['details']); ?></td>
                        <td class="text-capitalize"><?php echo $row['amount']; ?></td>
                        <td class="text-capitalize"><?php echo $row['request_date']; ?></td>
                        <td class="text-capitalize"><?php echo $row['payment_option']; ?></td>
                        <td class="text-capitalize"><?php echo $row['status']; ?></td>
                        <td class="text-capitalize"><?php echo $row['approval_date']; ?></td>
                        <td class="print_hidden">
                          <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                              <a class="dropdown-item" href="">
                                <i class="fa fa-print text-primary"></i>
                                Print
                              </a>
                              <a class="dropdown-item" href="">
                                <i class="fa fa-print text-primary"></i>
                                Chalan Print
                              </a>
                              <a class="dropdown-item" href="">
                                <i class="fa fa-pencil-square-o text-warning"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="">
                                <i class="fa  fa-backward text-primary"></i>
                                Return
                              </a>
                              <a class="dropdown-item" href="">
                                <i class="fa  fa-backward text-primary"></i>
                                Return List
                              </a>
                              <a href="" class="edit dropdown-item"
                                data-toggle="modal" data-target="#edit" id="Add Payment">
                                <i class="fa fa-money text-primary"></i>
                                Add Payment
                              </a>
                              <a class="dropdown-item delete" href="">
                                <i class="fa fa-trash text-danger"></i>
                                Delete
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


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
    <?php include('part/footer.php'); ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <?php include('part/all-js.php'); ?>

  <?php include('part/alert.php'); ?>



  <!-- Page specific script -->
  <script>
    $(function () {
      //Initialize Select2 Elements
      $(".select2").select2();

      //Initialize Select2 Elements
      $(".select2bs4").select2({
        theme: "bootstrap4",
      });

      $("#example1")
        .DataTable({
          responsive: true,
          lengthChange: false,
          autoWidth: false,
          buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
        })
        .buttons()
        .container()
        .appendTo("#example1_wrapper .col-md-6:eq(0)");
      $("#example2").DataTable({
        paging: true,
        lengthChange: false,
        searching: false,
        ordering: true,
        info: true,
        autoWidth: false,
        responsive: true,
      });
    });
  </script>

</body>

</html>