<?php include('part/top.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 || Dashboard</title>

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
                            <h1 class="m-0">Deposit</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                         
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <form action="actions/deposit.php" method="POST">
                                    <div class="card-body">
                                       
                                        <div class="input-group  mt-2" style="flex-wrap: unset">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-file-invoice"></i>
                                                </span>
                                            </div>
                                            <select class="form-control branch select2">
                                                <option></option>
                                                <?php
                                                $branch = mysqli_fetch_all($conn->query("SELECT * FROM `branch`"), MYSQLI_ASSOC);
                                                foreach($branch as $row){
                                                ?>
                                                <option value="<?php echo $row['id']; ?>" class="text-capitalize"><?php echo $row['branch']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-receipt"></i></span>
                                            </div>
                                            <textarea name="" class="form-control" rows="3" placeholder="Details"></textarea>                                        </div>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                            </div>
                                            <input type="number" class="form-control" name="amount" placeholder="Amount">
                                        </div>
                                        <div class="input-group mt-2">
                                           
                                            <div class="card" style="width: 100%;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                                    <h6 class="m-3">Payment Way</h6>
                                                </div>
                                                <div class="card-header p-2">
                                                  <ul class="nav nav-pills">
                                                    <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Cash</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Bank</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Mobile</a></li>
                                                  </ul>
                                                </div><!-- /.card-header -->
                                                <div class="card-body">
                                                  <div class="tab-content">
                                                    <!-- /.tab-pane cash -->
                                                    <div class="active tab-pane" id="activity">
                                                        <div class="input-group  mt-2" style="flex-wrap: unset">
                                                            <select class="form-control select2" style="width: 100%;" >
                                                                <option selected="selected">Office Branch</option>
                                                                <option>Nagad</option>
                                                                <option>Dutch Bangla</option>
                                                                <option>Bkash</option>
                                                            </select>
                                                        </div>
                                                        <input type="number" class="form-control mt-2" name="amount" placeholder="Amount">
                                                    </div>
                                                    <!-- /.tab-pane bank -->
                                                    <div class="tab-pane" id="timeline">
                                                        <div class="input-group  mt-2" style="flex-wrap: unset">
                                                            <select class="form-control select2" style="width: 100%;" >
                                                                <option selected="selected">Office Branch</option>
                                                                <option>Nagad</option>
                                                                <option>Dutch Bangla</option>
                                                                <option>Bkash</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-group mt-2">
                                                            <input type="text" class="form-control" name="name" placeholder="Receiver name">
                                                        </div>
                                                        <div class="input-group mt-2">
                                                            <input type="text" class="form-control" name="bank_branch" placeholder="Bank branch">
                                                        </div>
                                                        <div class="input-group mt-2">
                                                            <input type="text" class="form-control" name="route" placeholder="Route number">
                                                        </div>
                                                        <div class="input-group mt-2">
                                                            <input type="number" class="form-control" name="amount" placeholder="Amount">
                                                        </div>
                                                    </div>
                                                    <!-- /.tab-pane mobile banking -->
                                                    <div class="tab-pane" id="settings">
                                                        <div class="input-group  mt-2" style="flex-wrap: unset">
                                                            <select class="form-control select2" style="width: 100%;" >
                                                                <option selected="selected">Select mobile banking</option>
                                                                <option>Nagad</option>
                                                                <option>Dutch Bangla</option>
                                                                <option>Bkash</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-group mt-2">
                                                            <input type="number" class="form-control" name="number" placeholder="Phone number">
                                                        </div>
                                                        <div class="input-group mt-2">
                                                            <input type="text" class="form-control" name="txid" placeholder="TxID">
                                                        </div>
                                                    </div>
                                                    <!-- /.tab-pane -->
                                                  </div>
                                                  <!-- /.tab-content -->
                                                </div><!-- /.card-body -->
                                              </div>
                                              <!-- /.card -->
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
    <script>
        $(function () {
            //Initialize Select2 Elements
            $(".select2").select2();
            $(".branch.select2").select2({
                placeholder: "Select Branch"
            });

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