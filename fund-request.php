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
                            <h1 class="m-0">Fund-Request</h1>
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
                                <form action="actions/fund-request.php" method="POST">
                                    <div class="card-body">
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-invoice"></i></span>
                                            </div>
                                            <?php
                                                $br = mysqli_fetch_assoc($conn->query("SELECT `branch` FROM `branch` WHERE `id` = $_SESSION[branch]"));
                                            ?>
                                            <input type="text" class="form-control" value="<?php echo ucfirst($br['branch']); ?>" name="currentBranch" readonly>
                                        </div>
                                        <div class="input-group  mt-2" style="flex-wrap: unset">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fas fa-file-invoice"></i>
                                                </span>
                                            </div>
                                            <select class="form-control branch select2" name="requestBranch">
                                                <option></option>
                                                <?php
                                                $branch = mysqli_fetch_all($conn->query("SELECT * FROM `branch`"), MYSQLI_ASSOC);
                                                foreach($branch as $row){
                                                ?>
                                                <option value="<?php echo $row['id']; ?>"><?php echo ucfirst($row['branch']); ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                                            </div>
                                            <textarea name="details" class="form-control" rows="3" placeholder="Details"></textarea>                                        </div>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-coins"></i></span>
                                            </div>
                                            <input type="number" class="form-control" name="amount" placeholder="Amount">
                                        </div>
                                        <div class="form-group mt-2">
                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                              </div>
                                              <input type="text" name="request_date" onfocus="(this.type='date')" class="form-control" placeholder="Date for fund">
                                            </div>
                                        </div>
                                        <div class="input-group mt-2">
                                            <div class="card" style="width: 100%;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-file-invoice-dollar"></i></span>
                                                    <h6 class="m-3">Fund request</h6>
                                                    <input type="hidden" name="paymentOption" class="paymentOption" value="cash">
                                                </div>
                                                <div class="card-header p-2">
                                                  <ul class="nav nav-pills">
                                                    <li class="nav-item"><a class="nav-link active js_tab" data-value="cash" href="#activity" data-toggle="tab">Cash</a></li>
                                                    <li class="nav-item"><a class="nav-link js_tab" data-value="bank" href="#timeline" data-toggle="tab">Bank</a></li>
                                                    <li class="nav-item"><a class="nav-link js_tab" data-value="mobile" href="#settings" data-toggle="tab">Mobile</a></li>
                                                  </ul>
                                                </div><!-- /.card-header -->
                                                <div class="card-body">
                                                  <div class="tab-content">
                                                    <!-- /.tab-pane cash -->
                                                    <div class="active tab-pane" id="activity">
                                                        <input type="text" class="form-control mt-2" name="member" placeholder="Branch member name">
                                                    </div>
                                                    <!-- /.tab-pane bank -->
                                                    <div class="tab-pane" id="timeline">
                                                        <div class="input-group mt-2">
                                                            <input type="text" class="form-control" name="accountHolder" placeholder="Account holder name">
                                                        </div>
                                                        <div class="input-group mt-2">
                                                            <input type="text" class="form-control" name="bank_name" placeholder="Bank name">
                                                        </div>
                                                        <div class="input-group mt-2">
                                                            <input type="text" class="form-control" name="bank_branch" placeholder="Bank branch">
                                                        </div>
                                                        <div class="input-group mt-2">
                                                            <input type="text" class="form-control" name="route" placeholder="Route number">
                                                        </div>
                                                        <div class="input-group mt-2">
                                                            <input type="number" class="form-control" name="accountNumber" placeholder="Account number">
                                                        </div>
                                                    </div>
                                                    <!-- /.tab-pane mobile banking -->
                                                    <div class="tab-pane" id="settings">
                                                        <div class="input-group  mt-2" style="flex-wrap: unset">
                                                            <select class="form-control mobileBanking select2" style="width: 100%;" name="mobileBanking">
                                                                <option></option>
                                                                <option>Nagad</option>
                                                                <option>Dutch Bangla</option>
                                                                <option>Bkash</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-group mt-2">
                                                            <input type="number" class="form-control" name="phoneNumber" placeholder="Phone number">
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
    <script src="dist/js/bs-custom-file-input.min.js"></script>

    <?php include('part/alert.php'); ?>
    <script>
        $(function () {
            bsCustomFileInput.init();
            
            $(".mobileBanking.select2").select2({
                placeholder: "Select Mobile Banking",
            });

            $(".branch.select2").select2({
                placeholder: "Select branch to send request",
            });

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

    <script>
        $(function () {
            $(".js_tab").on("click", function(){
                var v = $(this).data("value");
                $(".paymentOption").val(v);
            });
        });
    </script>

</body>

</html>