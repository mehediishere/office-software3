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
                            <h1>Cash Book</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <button class="btn btn-primary">Home</button>
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
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header" style="background: #02c996cc;" >
                                        <h3 class="card-title">Debit</h3>
                                    </div>

                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-hover">
                                            <thead>
                                                <tr style="background: #20c99769;" >
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Details</th>
                                                    <th>Amount</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>

                                                    <td>
                                                        10/02/2022
                                                    </td>
                                                    <td>Lunch</td>
                                                    <td>450</td>
                                                  


                                                </tr>
                                                <tr>
                                                    <td>1</td>

                                                    <td>
                                                        10/02/2022
                                                    </td>
                                                    <td>Lunch</td>
                                                    <td>450</td>
                                                  


                                                </tr>
                                                <tr>
                                                    <td>1</td>

                                                    <td>
                                                        10/02/2022
                                                    </td>
                                                    <td>Lunch</td>
                                                    <td>450</td>
                                                  


                                                </tr>


                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3">
                                                    </td>
                                                   
                                                   
                                                    <td>
                                                        <strong>
                                                            Total : 50 Tk
                                                        </strong>
                                                    </td>

                                                </tr>
                                            </tfoot>

                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->


                                <!-- /.card -->
                            </div>
                            <div class="col-6">
                                <div class="card">
                                    <div class="card-header" style="background: #02c996cc;" >
                                        <h3 class="card-title">Credit</h3>
                                    </div>

                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                          <thead>
                                            <tr style="background: #20c99769;" >
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Details</th>
                                                <th>Amount</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>

                                                <td>
                                                    10/02/2022
                                                </td>
                                                <td>Lunch</td>
                                                <td>450</td>
                                              


                                            </tr>
                                            <tr>
                                                <td>1</td>

                                                <td>
                                                    10/02/2022
                                                </td>
                                                <td>Lunch</td>
                                                <td>450</td>
                                              


                                            </tr>
                                            <tr>
                                                <td>1</td>

                                                <td>
                                                    10/02/2022
                                                </td>
                                                <td>Lunch</td>
                                                <td>450</td> 
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3">
                                                </td>
                                                <td>
                                                    <strong>
                                                        Total : 50 Tk
                                                    </strong>
                                                </td>
                                            </tr>
                                        </tfoot>
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
            $("#example2")
                .DataTable({
                    responsive: true,
                    lengthChange: false,
                    autoWidth: false,
                    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                })
                .buttons()
                .container()
                .appendTo("#example2_wrapper .col-md-6:eq(0)");
        });
    </script>

</body>

</html>