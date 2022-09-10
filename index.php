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
    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
         

            <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add New Receive</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <form>
                          <div class="card-body">

                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-user-tie"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="client">


                              <div class="input-group-append">
                                <div class="input-group-text"><a href="new_invoice.php" data-toggle="modal"
                                    data-target="#modal-lg">
                                    <i class="fas fa-plus-circle"></i>
                                  </a></div>
                              </div>

                            </div>

                            <div class="input-group mt-2" style="flex-wrap: unset">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-file-invoice"></i>
                                </span>
                              </div>
                              <select class="form-control select2" style="width: 91%;">
                                <option selected="selected">Invoice Id</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                              </select>


                            </div>


                            <div class="form-group mt-2">

                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <div class="input-group-append" data-target="#reservationdate"
                                  data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <input type="text" class="form-control datetimepicker-input"
                                  data-target="#reservationdate">

                              </div>
                            </div>
                            <div class="input-group mt-2" style="flex-wrap: unset">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-file-invoice"></i>
                                </span>
                              </div>
                              <select class="form-control select2" style="width: 80%;">
                                <option selected="selected">Account</option>
                                <option>Nagad</option>
                                <option>Dutch Bangla</option>
                                <option>Bkash</option>

                              </select>
                              <div class="input-group-text"><a href="new_invoice.php" data-toggle="modal"
                                  data-target="#modal-lg4">
                                  <i class="fas fa-plus-circle"></i>
                                </a></div>

                            </div>


                            <div class="input-group mt-2">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Description">
                            </div>
                            <div class="input-group mt-2">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-coins"></i></span>
                              </div>
                              <input type="number" class="form-control" placeholder="Amount">
                            </div>
                            <div class="input-group mt-2" style="flex-wrap: unset">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-certificate"></i>
                                </span>
                              </div>
                              <select class="form-control select2" style="width: 80%;">
                                <option selected="selected">Select Income Category
                                </option>
                                <option>Nagad</option>
                                <option>Dutch Bangla</option>
                                <option>Bkash</option>

                              </select>
                              <div class="input-group-text"><a href="new_invoice.php" data-toggle="modal"
                                  data-target="#modal-lg3">
                                  <i class="fas fa-plus-circle"></i>
                                </a></div>

                            </div>
                            <div class="input-group mt-2" style="flex-wrap: unset">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-money-check"></i>
                                </span>
                              </div>
                              <select class="form-control select2" style="width:  89%">
                                <option selected="selected">Select Payment</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                              </select>


                            </div>
                            <div class="input-group mt-2" style="flex-wrap: unset">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-money-check"></i>
                                </span>
                              </div>
                              <select class="form-control select2" style="width:  89%">
                                <option selected="selected">Select Bank</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                              </select>



                            </div>


                            <div class="input-group mt-2">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-bars"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Cheque No">
                            </div>
                            <div class="input-group mt-3">
                              <span class="input-group-addon"><i class="fas fa-sms"></i></span>
                              &nbsp;Send SMS <input type="checkbox" name="send_sms"> <br>
                            </div>
                            <div class="input-group mt-2">
                              <span class="input-group-addon"><i class="fas fa-at"></i></span>
                              &nbsp;Email Send <input type="checkbox" name="send_email" checked=""> <br>
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
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <div class="modal fade show" id="modal-lg" style="display: none;" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add New Client</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <form>
                          <div class="card-body">


                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                              </div>
                              <input type="number" class="form-control" placeholder="id">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Proprietor name">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Address">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                              </div>
                              <input type="number" class="form-control" placeholder="Phone 1">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                              </div>
                              <input type="number" class="form-control" placeholder="Phone 2">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                              </div>
                              <input type="email" class="form-control" placeholder="Email">
                            </div>

                            <div class="form-group">




                              <div class="input-group-append">
                                <div style="width: 90%;">
                                  <select class="form-control select2">
                                    <option selected="selected">Group</option>
                                    <option>Nagad</option>


                                  </select>
                                </div>
                                <div class="input-group-text"><a href="new_invoice.php" data-toggle="modal"
                                    data-target="#modal-lg2">
                                    <i class="fas fa-plus-circle"></i>
                                  </a></div>
                              </div>
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
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <div class="modal fade show" id="modal-lg2" style="display: none;" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add New Group</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <form>
                          <div class="card-body">


                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="name">
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
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <div class="modal fade show" id="modal-lg3" style="display: none;" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add Income Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <form>
                          <div class="card-body">


                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="name">
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
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <div class="modal fade show" id="modal-lg4" style="display: none;" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <form>
                          <div class="card-body">


                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-heading"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Account Title">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-info-circle"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Description">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Balance">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-university"></i></span>
                              </div>
                              <input type="name" class="form-control" placeholder="Account Number">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <input type="number" class="form-control" placeholder="Contract Person">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                              </div>
                              <input type="number" class="form-control" placeholder="mobile">
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
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <div class="modal fade" id="modal-expense" style="display: none;" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add New Expense</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <form>
                          <div class="card-body">
                            <div class="form-group mt-2">

                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <div class="input-group-append" data-target="#reservationdate"
                                  data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                <input type="text" class="form-control datetimepicker-input"
                                  data-target="#reservationdate">

                              </div>
                            </div>
                            <div class="input-group mt-2" style="flex-wrap: unset">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-university"></i>
                                </span>
                              </div>
                              <select class="form-control select2" style="width: 90%;">
                                <option selected="selected">Account</option>
                                <option>Nagad</option>
                                <option>Dutch Bangla</option>
                                <option>Bkash</option>


                              </select>
                              <div class="input-group-text"><a href="new_invoice.php" data-toggle="modal"
                                  data-target="#modal-account">
                                  <i class="fas fa-plus-circle"></i>
                                </a></div>
                            </div>



                            <div class="input-group mt-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-file-alt"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Description">
                            </div>
                            <div class="input-group mt-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-coins"></i></span>
                              </div>
                              <input type="number" class="form-control" placeholder="Amount">
                            </div>
                            <div class="input-group mt-2" style="flex-wrap: unset">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-university"></i>
                                </span>
                              </div>
                              <select class="form-control select2" style="width: 90%;">
                                <option selected="selected">Expense Category</option>
                                <option>Nagad</option>
                                <option>Dutch Bangla</option>
                                <option>Bkash</option>


                              </select>
                              <div class="input-group-text"><a href="new_invoice.php" data-toggle="modal"
                                  data-target="#modal-category">
                                  <i class="fas fa-plus-circle"></i>
                                </a></div>
                            </div>
                            <div class="input-group mt-2" style="flex-wrap: unset">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-university"></i>
                                </span>
                              </div>
                              <select class="form-control select2" style="width: 90%;">
                                <option selected="selected">Sub Category</option>
                                <option>Nagad</option>
                                <option>Dutch Bangla</option>
                                <option>Bkash</option>

                              </select>
                              <div class="input-group-text"><a href="new_invoice.php" data-toggle="modal"
                                  data-target="#modal-sub-category">
                                  <i class="fas fa-plus-circle"></i>
                                </a></div>
                            </div>
                            <div class="input-group mt-2" style="flex-wrap: unset">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-money-check"></i>
                                </span>
                              </div>
                              <select class="form-control select2" style="width:  89%">
                                <option selected="selected">Select Payment</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                              </select>


                            </div>
                            <div class="input-group mt-2" style="flex-wrap: unset">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-money-check"></i>
                                </span>
                              </div>
                              <select class="form-control select2" style="width:  89%">
                                <option selected="selected">Select Bank</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                              </select>


                            </div>



                            <div class="input-group mt-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-bars"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Cheque No">
                            </div>
                            <div class="form-group mt-3">
                              <!-- <label for="customFile">Custom File</label> -->

                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
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
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <div class="modal fade show" id="modal-account" style="display: none;" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add Account</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <form>
                          <div class="card-body">


                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-heading"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Account Title">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-info-circle"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Description">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Balance">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-university"></i></span>
                              </div>
                              <input type="name" class="form-control" placeholder="Account Number">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                              </div>
                              <input type="number" class="form-control" placeholder="Contract Person">
                            </div>
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                              </div>
                              <input type="number" class="form-control" placeholder="mobile">
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
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <div class="modal fade show" id="modal-category" style="display: none;" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add Expense Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <form>
                          <div class="card-body">


                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="name">
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
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <div class="modal fade show" id="modal-sub-category" style="display: none;" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Add Expense Category</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-md-12">
                        <form>
                          <div class="card-body">


                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="name">
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
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
            <!-- /.col -->
         
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

            <div class="col-12 col-sm-6 col-md-3">

              <div class="info-box" style="background-color: #1D40A1;padding: 22px;">

                <img src="https://demo.bhisab.com/images/icon/bill.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 46,393.00</h3>
                    <span class="info-box-number">Total Expense</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #D1D4A0;padding: 22px;;">

                <img src="https://demo.bhisab.com/images/icon/income.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 56,393.00</h3>
                    <span class="info-box-number">Daily Expense</span>
                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #7A9E95;padding: 22px;">

                <img src="https://demo.bhisab.com/images/icon/bill.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 146,393.00</h3>
                    <span class="info-box-number">Weekly Expense</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #995C83;padding: 22px;">

                <img src="https://demo.bhisab.com/images/icon/conversion.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 46,393.00</h3>
                    <span class="info-box-number">Monthly Expense</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

          </div>
          
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #1D40A1;padding: 22px;">

                <img src="https://demo.bhisab.com/images/icon/bill.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 46,393.00</h3>
                    <span class="info-box-number">Total Deposit</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #D1D4A0;padding: 22px;;">

                <img src="https://demo.bhisab.com/images/icon/income.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 56,393.00</h3>
                    <span class="info-box-number">Daily Deposit</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #7A9E95;padding: 22px;">

                <img src="https://demo.bhisab.com/images/icon/bill.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 146,393.00</h3>
                    <span class="info-box-number">Weekly Deposit</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #995C83;padding: 22px;">

                <img src="https://demo.bhisab.com/images/icon/conversion.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 46,393.00</h3>
                    <span class="info-box-number">Monthly Deposit</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

          </div>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #1D40A1;padding: 22px;">

                <img src="https://demo.bhisab.com/images/icon/bill.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 46,393.00</h3>
                    <span class="info-box-number">Total Withdraw</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #D1D4A0;padding: 22px;;">

                <img src="https://demo.bhisab.com/images/icon/income.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 56,393.00</h3>
                    <span class="info-box-number">Daily Withdraw</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #7A9E95;padding: 22px;">

                <img src="https://demo.bhisab.com/images/icon/bill.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 146,393.00</h3>
                    <span class="info-box-number">Weekly Withdraw</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #995C83;padding: 22px;">

                <img src="https://demo.bhisab.com/images/icon/conversion.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 46,393.00</h3>
                    <span class="info-box-number">Monthly Withdraw </span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

          </div>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #1D40A1;padding: 22px;">

                <img src="https://demo.bhisab.com/images/icon/bill.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 46,393.00</h3>
                    <span class="info-box-number">Total Fund Report</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #D1D4A0;padding: 22px;;">

                <img src="https://demo.bhisab.com/images/icon/income.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 56,393.00</h3>
                    <span class="info-box-number">Daily Fund Report</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #7A9E95;padding: 22px;">

                <img src="https://demo.bhisab.com/images/icon/bill.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 146,393.00</h3>
                    <span class="info-box-number">Weekly Fund Report</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box" style="background-color: #995C83;padding: 22px;">

                <img src="https://demo.bhisab.com/images/icon/conversion.png" alt="" style="width: 50px;height: 50px;">


                <div class="info-box-content">
                  <div style="color: white;margin-left: 60px;">
                    <h3 class="font-bold">Tk 46,393.00</h3>
                    <span class="info-box-number">Weekly Fund Report</span>

                  </div>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>

          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background: #02c996cc;" >
                        <h3 class="card-title">Expense</h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr style="background: #20c99769;" >
                                  <th>#</th>
                                  <th>Invoice No.</th>
                                  <th>Customer</th>
                                  <th>Items</th>
                                  <th>Date</th>
                                  <th>Amount</th>
                                  <th>Status</th>
                                  <th class="print_hidden">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                             
                              <tr>
                                <td>1</td>
                                <td>9</td>
                                <td>
                                  Sakib Rabby
                                </td>
                                <td>
                                  <ul class="product-list">
                                    <li>Polo Shirt Code: 12345671 *1</li>
                                  </ul>
                                </td>
                                <td>20 Jan, 2022</td>
                               
                                <td>8500 Tk</td>
        
                               
                               
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td class="print_hidden">
                                  <div class="btn-group">
                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                      aria-expanded="false">
                                      <i class="fa fa-cogs"></i>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start">
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                        <i class="fa fa-print text-primary"></i>
                                        Print
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                        <i class="fa fa-print text-primary"></i>
                                        Chalan Print
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                        <i class="fa fa-pencil-square-o text-warning"></i>
                                        Edit
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                        <i class="fa  fa-backward text-primary"></i>
                                        Return
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                        <i class="fa  fa-backward text-primary"></i>
                                        Return List
                                      </a>
                                      <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                        data-toggle="modal" data-target="#edit" id="Add Payment">
                                        <i class="fa fa-money text-primary"></i>
                                        Add Payment
                                      </a>
                                      <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                        <i class="fa fa-trash text-danger"></i>
                                        Delete
                                      </a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>9</td>
                                <td>
                                  Sakib Rabby
                                </td>
                                <td>
                                  <ul class="product-list">
                                    <li>Polo Shirt Code: 12345671 *1</li>
                                  </ul>
                                </td>
                                <td>20 Dec, 2021</td>
                               
                                <td>2200 Tk</td>
        
                               
                               
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td class="print_hidden">
                                  <div class="btn-group">
                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                      aria-expanded="false">
                                      <i class="fa fa-cogs"></i>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start">
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                        <i class="fa fa-print text-primary"></i>
                                        Print
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                        <i class="fa fa-print text-primary"></i>
                                        Chalan Print
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                        <i class="fa fa-pencil-square-o text-warning"></i>
                                        Edit
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                        <i class="fa  fa-backward text-primary"></i>
                                        Return
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                        <i class="fa  fa-backward text-primary"></i>
                                        Return List
                                      </a>
                                      <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                        data-toggle="modal" data-target="#edit" id="Add Payment">
                                        <i class="fa fa-money text-primary"></i>
                                        Add Payment
                                      </a>
                                      <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                        <i class="fa fa-trash text-danger"></i>
                                        Delete
                                      </a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>9</td>
                                <td>
                                  Sakib Rabby
                                </td>
                                <td>
                                  <ul class="product-list">
                                    <li>Polo Shirt Code: 12345671 *1</li>
                                  </ul>
                                </td>
                                <td>20 Jun, 2022</td>
                               
                                <td>1500 Tk</td>
        
                               
                               
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td class="print_hidden">
                                  <div class="btn-group">
                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                      aria-expanded="false">
                                      <i class="fa fa-cogs"></i>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start">
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                        <i class="fa fa-print text-primary"></i>
                                        Print
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                        <i class="fa fa-print text-primary"></i>
                                        Chalan Print
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                        <i class="fa fa-pencil-square-o text-warning"></i>
                                        Edit
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                        <i class="fa  fa-backward text-primary"></i>
                                        Return
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                        <i class="fa  fa-backward text-primary"></i>
                                        Return List
                                      </a>
                                      <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                        data-toggle="modal" data-target="#edit" id="Add Payment">
                                        <i class="fa fa-money text-primary"></i>
                                        Add Payment
                                      </a>
                                      <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                        <i class="fa fa-trash text-danger"></i>
                                        Delete
                                      </a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>9</td>
                                <td>
                                  Sakib Rabby
                                </td>
                                <td>
                                  <ul class="product-list">
                                    <li>Polo Shirt Code: 12345671 *1</li>
                                  </ul>
                                </td>
                                <td>20 Jun, 2022</td>
                               
                                <td>500 Tk</td>
        
                               
                               
                                <td><span class="badge badge-warning">Pending</span></td>
                                <td class="print_hidden">
                                  <div class="btn-group">
                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                      aria-expanded="false">
                                      <i class="fa fa-cogs"></i>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start">
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                        <i class="fa fa-print text-primary"></i>
                                        Print
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                        <i class="fa fa-print text-primary"></i>
                                        Chalan Print
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                        <i class="fa fa-pencil-square-o text-warning"></i>
                                        Edit
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                        <i class="fa  fa-backward text-primary"></i>
                                        Return
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                        <i class="fa  fa-backward text-primary"></i>
                                        Return List
                                      </a>
                                      <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                        data-toggle="modal" data-target="#edit" id="Add Payment">
                                        <i class="fa fa-money text-primary"></i>
                                        Add Payment
                                      </a>
                                      <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                        <i class="fa fa-trash text-danger"></i>
                                        Delete
                                      </a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>9</td>
                                <td>
                                  Sakib Rabby
                                </td>
                                <td>
                                  <ul class="product-list">
                                    <li>Polo Shirt Code: 12345671 *1</li>
                                  </ul>
                                </td>
                                <td>20 Jun, 2022</td>
                               
                                <td>9500 Tk</td>
        
                               
                               
                                <td><span class="badge badge-danger">Delivered</span></td>
                                <td class="print_hidden">
                                  <div class="btn-group">
                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                      aria-expanded="false">
                                      <i class="fa fa-cogs"></i>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start">
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                        <i class="fa fa-print text-primary"></i>
                                        Print
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                        <i class="fa fa-print text-primary"></i>
                                        Chalan Print
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                        <i class="fa fa-pencil-square-o text-warning"></i>
                                        Edit
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                        <i class="fa  fa-backward text-primary"></i>
                                        Return
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                        <i class="fa  fa-backward text-primary"></i>
                                        Return List
                                      </a>
                                      <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                        data-toggle="modal" data-target="#edit" id="Add Payment">
                                        <i class="fa fa-money text-primary"></i>
                                        Add Payment
                                      </a>
                                      <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                        <i class="fa fa-trash text-danger"></i>
                                        Delete
                                      </a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>9</td>
                                <td>
                                  Sakib Rabby
                                </td>
                                <td>
                                  <ul class="product-list">
                                    <li>Polo Shirt Code: 12345671 *1</li>
                                  </ul>
                                </td>
                                <td>20 Jun, 2022</td>
                               
                                <td>500 Tk</td>
        
                               
                               
                                <td><span class="badge badge-danger">Delivered</span></td>
                                <td class="print_hidden">
                                  <div class="btn-group">
                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                      aria-expanded="false">
                                      <i class="fa fa-cogs"></i>
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start">
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                        <i class="fa fa-print text-primary"></i>
                                        Print
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                        <i class="fa fa-print text-primary"></i>
                                        Chalan Print
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                        <i class="fa fa-pencil-square-o text-warning"></i>
                                        Edit
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                        <i class="fa  fa-backward text-primary"></i>
                                        Return
                                      </a>
                                      <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                        <i class="fa  fa-backward text-primary"></i>
                                        Return List
                                      </a>
                                      <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                        data-toggle="modal" data-target="#edit" id="Add Payment">
                                        <i class="fa fa-money text-primary"></i>
                                        Add Payment
                                      </a>
                                      <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                        <i class="fa fa-trash text-danger"></i>
                                        Delete
                                      </a>
                                    </div>
                                  </div>
                                </td>
                              </tr>
                              
        
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">
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
        <div class="row">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header" style="background: #02c996cc;">
                      <h3 class="card-title">Deposit</h3>
                  </div>

                  <!-- /.card-header -->
                  <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                          <thead>
                              <tr style="background: #20c99769;" >
                                <th>#</th>
                                <th>Invoice No.</th>
                                <th>Branch Name</th>
                                <th>User Name</th>
                                <th>Date</th>
                                <th>Amount</th>
                               
                                <th>Status</th>
                                <th class="print_hidden">Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>9</td>
                              <td>
                                Uttara
                              </td>
                              <td>
                                pino
                              </td>
                              <td>20 Jun, 2022</td>
                             
                              <td>500 Tk</td>
      
                             
                              
                              <td><span class="badge badge-warning">Pending</span></td>
                            
                              <td class="print_hidden">
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-cogs"></i>
                                  </button>
                                  <div class="dropdown-menu" x-placement="bottom-start">
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                      <i class="fa fa-print text-primary"></i>
                                      Print
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                      <i class="fa fa-print text-primary"></i>
                                      Chalan Print
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                      <i class="fa fa-pencil-square-o text-warning"></i>
                                      Edit
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                      <i class="fa  fa-backward text-primary"></i>
                                      Return
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                      <i class="fa  fa-backward text-primary"></i>
                                      Return List
                                    </a>
                                    <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                      data-toggle="modal" data-target="#edit" id="Add Payment">
                                      <i class="fa fa-money text-primary"></i>
                                      Add Payment
                                    </a>
                                    <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                      <i class="fa fa-trash text-danger"></i>
                                      Delete
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>9</td>
                              <td>
                                Uttara
                              </td>
                              <td>
                                pino
                              </td>
                              <td>20 Jun, 2022</td>
                             
                              <td>500 Tk</td>
      
                             
                              
                              <td><span class="badge badge-danger">Delivered</span></td>
                            
                              <td class="print_hidden">
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-cogs"></i>
                                  </button>
                                  <div class="dropdown-menu" x-placement="bottom-start">
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                      <i class="fa fa-print text-primary"></i>
                                      Print
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                      <i class="fa fa-print text-primary"></i>
                                      Chalan Print
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                      <i class="fa fa-pencil-square-o text-warning"></i>
                                      Edit
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                      <i class="fa  fa-backward text-primary"></i>
                                      Return
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                      <i class="fa  fa-backward text-primary"></i>
                                      Return List
                                    </a>
                                    <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                      data-toggle="modal" data-target="#edit" id="Add Payment">
                                      <i class="fa fa-money text-primary"></i>
                                      Add Payment
                                    </a>
                                    <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                      <i class="fa fa-trash text-danger"></i>
                                      Delete
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>9</td>
                              <td>
                                Uttara
                              </td>
                              <td>
                                pino
                              </td>
                              <td>20 Jun, 2022</td>
                             
                              <td>500 Tk</td>
      
                             
                              
                              <td><span class="badge badge-warning">Pending</span></td>
                            
                              <td class="print_hidden">
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-cogs"></i>
                                  </button>
                                  <div class="dropdown-menu" x-placement="bottom-start">
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                      <i class="fa fa-print text-primary"></i>
                                      Print
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                      <i class="fa fa-print text-primary"></i>
                                      Chalan Print
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                      <i class="fa fa-pencil-square-o text-warning"></i>
                                      Edit
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                      <i class="fa  fa-backward text-primary"></i>
                                      Return
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                      <i class="fa  fa-backward text-primary"></i>
                                      Return List
                                    </a>
                                    <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                      data-toggle="modal" data-target="#edit" id="Add Payment">
                                      <i class="fa fa-money text-primary"></i>
                                      Add Payment
                                    </a>
                                    <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                      <i class="fa fa-trash text-danger"></i>
                                      Delete
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>9</td>
                              <td>
                                Uttara
                              </td>
                              <td>
                                pino
                              </td>
                              <td>20 Jun, 2022</td>
                             
                              <td>500 Tk</td>
      
                             
                              
                              <td><span class="badge badge-danger">Delivered</span></td>
                            
                              <td class="print_hidden">
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-cogs"></i>
                                  </button>
                                  <div class="dropdown-menu" x-placement="bottom-start">
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                      <i class="fa fa-print text-primary"></i>
                                      Print
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                      <i class="fa fa-print text-primary"></i>
                                      Chalan Print
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                      <i class="fa fa-pencil-square-o text-warning"></i>
                                      Edit
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                      <i class="fa  fa-backward text-primary"></i>
                                      Return
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                      <i class="fa  fa-backward text-primary"></i>
                                      Return List
                                    </a>
                                    <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                      data-toggle="modal" data-target="#edit" id="Add Payment">
                                      <i class="fa fa-money text-primary"></i>
                                      Add Payment
                                    </a>
                                    <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                      <i class="fa fa-trash text-danger"></i>
                                      Delete
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>9</td>
                              <td>
                                Uttara
                              </td>
                              <td>
                                pino
                              </td>
                              <td>20 Jun, 2022</td>
                             
                              <td>5100 Tk</td>
      
                             
                              
                              <td><span class="badge badge-danger">Delivered</span></td>
                            
                              <td class="print_hidden">
                                <div class="btn-group">
                                  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa fa-cogs"></i>
                                  </button>
                                  <div class="dropdown-menu" x-placement="bottom-start">
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                      <i class="fa fa-print text-primary"></i>
                                      Print
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                      <i class="fa fa-print text-primary"></i>
                                      Chalan Print
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                      <i class="fa fa-pencil-square-o text-warning"></i>
                                      Edit
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                      <i class="fa  fa-backward text-primary"></i>
                                      Return
                                    </a>
                                    <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                      <i class="fa  fa-backward text-primary"></i>
                                      Return List
                                    </a>
                                    <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                      data-toggle="modal" data-target="#edit" id="Add Payment">
                                      <i class="fa fa-money text-primary"></i>
                                      Add Payment
                                    </a>
                                    <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                      <i class="fa fa-trash text-danger"></i>
                                      Delete
                                    </a>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            
      
                          </tbody>
                          <tfoot>
                              <tr>
                                  <td colspan="7">
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
          <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background: #02c996cc;">
                    <h3 class="card-title">Withdraw</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example4" class="table table-bordered table-hover">
                        <thead>
                            <tr style="background: #20c99769;" >
                              <th>#</th>
                              <th>Invoice No.</th>
                              <th>Branch Name</th>
                              <th>User Name</th>
                              <th>Date</th>
                              <th>Amount</th>
                             
                              <th>Status</th>
                              <th class="print_hidden">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>9</td>
                            <td>
                              Uttara
                            </td>
                            <td>
                              pino
                            </td>
                            <td>20 Jun, 2022</td>
                           
                            <td>500 Tk</td>
    
                           
                            
                            <td><span class="badge badge-warning">Pending</span></td>
                          
                            <td class="print_hidden">
                              <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Chalan Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                    <i class="fa fa-pencil-square-o text-warning"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return List
                                  </a>
                                  <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                    data-toggle="modal" data-target="#edit" id="Add Payment">
                                    <i class="fa fa-money text-primary"></i>
                                    Add Payment
                                  </a>
                                  <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                    <i class="fa fa-trash text-danger"></i>
                                    Delete
                                  </a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>9</td>
                            <td>
                              Uttara
                            </td>
                            <td>
                              pino
                            </td>
                            <td>20 Jun, 2022</td>
                           
                            <td>500 Tk</td>
    
                           
                            
                            <td><span class="badge badge-danger">Delivered</span></td>
                          
                            <td class="print_hidden">
                              <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Chalan Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                    <i class="fa fa-pencil-square-o text-warning"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return List
                                  </a>
                                  <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                    data-toggle="modal" data-target="#edit" id="Add Payment">
                                    <i class="fa fa-money text-primary"></i>
                                    Add Payment
                                  </a>
                                  <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                    <i class="fa fa-trash text-danger"></i>
                                    Delete
                                  </a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>9</td>
                            <td>
                              Uttara
                            </td>
                            <td>
                              pino
                            </td>
                            <td>20 Jun, 2022</td>
                           
                            <td>500 Tk</td>
    
                           
                            
                            <td><span class="badge badge-warning">Pending</span></td>
                          
                            <td class="print_hidden">
                              <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Chalan Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                    <i class="fa fa-pencil-square-o text-warning"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return List
                                  </a>
                                  <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                    data-toggle="modal" data-target="#edit" id="Add Payment">
                                    <i class="fa fa-money text-primary"></i>
                                    Add Payment
                                  </a>
                                  <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                    <i class="fa fa-trash text-danger"></i>
                                    Delete
                                  </a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>9</td>
                            <td>
                              Uttara
                            </td>
                            <td>
                              pino
                            </td>
                            <td>20 Jun, 2022</td>
                           
                            <td>500 Tk</td>
    
                           
                            
                            <td><span class="badge badge-danger">Delivered</span></td>
                          
                            <td class="print_hidden">
                              <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Chalan Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                    <i class="fa fa-pencil-square-o text-warning"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return List
                                  </a>
                                  <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                    data-toggle="modal" data-target="#edit" id="Add Payment">
                                    <i class="fa fa-money text-primary"></i>
                                    Add Payment
                                  </a>
                                  <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                    <i class="fa fa-trash text-danger"></i>
                                    Delete
                                  </a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>9</td>
                            <td>
                              Uttara
                            </td>
                            <td>
                              pino
                            </td>
                            <td>20 Jun, 2022</td>
                           
                            <td>5100 Tk</td>
    
                           
                            
                            <td><span class="badge badge-danger">Delivered</span></td>
                          
                            <td class="print_hidden">
                              <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Chalan Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                    <i class="fa fa-pencil-square-o text-warning"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return List
                                  </a>
                                  <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                    data-toggle="modal" data-target="#edit" id="Add Payment">
                                    <i class="fa fa-money text-primary"></i>
                                    Add Payment
                                  </a>
                                  <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                    <i class="fa fa-trash text-danger"></i>
                                    Delete
                                  </a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          
    
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
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
      <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background: #02c996cc;">
                    <h3 class="card-title">Fund List</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example5" class="table table-bordered table-hover">
                        <thead>
                            <tr style="background: #20c99769;" >
                              <th>#</th>
                              <th>Invoice No.</th>
                              <th>Branch Name</th>
                              <th>User Name</th>
                              <th>Date</th>
                              <th>Amount</th>
                             
                              <th>Status</th>
                              <th class="print_hidden">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>9</td>
                            <td>
                              Uttara
                            </td>
                            <td>
                              pino
                            </td>
                            <td>20 Jun, 2022</td>
                           
                            <td>500 Tk</td>
    
                           
                            
                            <td><span class="badge badge-warning">Pending</span></td>
                          
                            <td class="print_hidden">
                              <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Chalan Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                    <i class="fa fa-pencil-square-o text-warning"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return List
                                  </a>
                                  <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                    data-toggle="modal" data-target="#edit" id="Add Payment">
                                    <i class="fa fa-money text-primary"></i>
                                    Add Payment
                                  </a>
                                  <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                    <i class="fa fa-trash text-danger"></i>
                                    Delete
                                  </a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>9</td>
                            <td>
                              Uttara
                            </td>
                            <td>
                              pino
                            </td>
                            <td>20 Jun, 2022</td>
                           
                            <td>500 Tk</td>
    
                           
                            
                            <td><span class="badge badge-danger">Delivered</span></td>
                          
                            <td class="print_hidden">
                              <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Chalan Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                    <i class="fa fa-pencil-square-o text-warning"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return List
                                  </a>
                                  <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                    data-toggle="modal" data-target="#edit" id="Add Payment">
                                    <i class="fa fa-money text-primary"></i>
                                    Add Payment
                                  </a>
                                  <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                    <i class="fa fa-trash text-danger"></i>
                                    Delete
                                  </a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>9</td>
                            <td>
                              Uttara
                            </td>
                            <td>
                              pino
                            </td>
                            <td>20 Jun, 2022</td>
                           
                            <td>500 Tk</td>
    
                           
                            
                            <td><span class="badge badge-warning">Pending</span></td>
                          
                            <td class="print_hidden">
                              <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Chalan Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                    <i class="fa fa-pencil-square-o text-warning"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return List
                                  </a>
                                  <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                    data-toggle="modal" data-target="#edit" id="Add Payment">
                                    <i class="fa fa-money text-primary"></i>
                                    Add Payment
                                  </a>
                                  <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                    <i class="fa fa-trash text-danger"></i>
                                    Delete
                                  </a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>9</td>
                            <td>
                              Uttara
                            </td>
                            <td>
                              pino
                            </td>
                            <td>20 Jun, 2022</td>
                           
                            <td>500 Tk</td>
    
                           
                            
                            <td><span class="badge badge-danger">Delivered</span></td>
                          
                            <td class="print_hidden">
                              <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Chalan Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                    <i class="fa fa-pencil-square-o text-warning"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return List
                                  </a>
                                  <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                    data-toggle="modal" data-target="#edit" id="Add Payment">
                                    <i class="fa fa-money text-primary"></i>
                                    Add Payment
                                  </a>
                                  <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                    <i class="fa fa-trash text-danger"></i>
                                    Delete
                                  </a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>1</td>
                            <td>9</td>
                            <td>
                              Uttara
                            </td>
                            <td>
                              pino
                            </td>
                            <td>20 Jun, 2022</td>
                           
                            <td>5100 Tk</td>
    
                           
                            
                            <td><span class="badge badge-danger">Delivered</span></td>
                          
                            <td class="print_hidden">
                              <div class="btn-group">
                                <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                    <i class="fa fa-print text-primary"></i>
                                    Chalan Print
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                    <i class="fa fa-pencil-square-o text-warning"></i>
                                    Edit
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return
                                  </a>
                                  <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                    <i class="fa  fa-backward text-primary"></i>
                                    Return List
                                  </a>
                                  <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                    data-toggle="modal" data-target="#edit" id="Add Payment">
                                    <i class="fa fa-money text-primary"></i>
                                    Add Payment
                                  </a>
                                  <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                    <i class="fa fa-trash text-danger"></i>
                                    Delete
                                  </a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          
    
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
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
        <div class="col-md-6">
          <div class="card">
              <div class="card-header" style="background: #02c996cc;">
                  <h3 class="card-title">Fund Request List</h3>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                  <table id="example6" class="table table-bordered table-hover">
                      <thead>
                          <tr style="background: #20c99769;" >
                            <th>#</th>
                            <th>Invoice No.</th>
                            <th>Branch Name</th>
                            <th>User Name</th>
                            <th>Date</th>
                            <th>Amount</th>
                           
                            <th>Status</th>
                            <th class="print_hidden">Approve Action</th>
                            <th class="print_hidden">Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>9</td>
                          <td>
                            Uttara
                          </td>
                          <td>
                            pino
                          </td>
                          <td>20 Jun, 2022</td>
                         
                          <td>500 Tk</td>
  
                         
                          
                          <td><span class="badge badge-warning">Pending</span></td>
                          <td class="print_hidden">
                            <div class="btn-group">
                              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-cogs"></i>
                              </button>
                              <div class="dropdown-menu" x-placement="bottom-start">
                               
                               
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Approve
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Pending
                                </a>
                             
                                
                              </div>
                            </div>
                          </td>
                          <td class="print_hidden">
                            <div class="btn-group">
                              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-cogs"></i>
                              </button>
                              <div class="dropdown-menu" x-placement="bottom-start">
                                <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                  <i class="fa fa-print text-primary"></i>
                                  Print
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                  <i class="fa fa-print text-primary"></i>
                                  Chalan Print
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                  <i class="fa fa-pencil-square-o text-warning"></i>
                                  Edit
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Return
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Return List
                                </a>
                                <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                  data-toggle="modal" data-target="#edit" id="Add Payment">
                                  <i class="fa fa-money text-primary"></i>
                                  Add Payment
                                </a>
                                <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                  <i class="fa fa-trash text-danger"></i>
                                  Delete
                                </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>9</td>
                          <td>
                            Uttara
                          </td>
                          <td>
                            pino
                          </td>
                          <td>20 Jun, 2022</td>
                         
                          <td>500 Tk</td>
  
                         
                          
                          <td><span class="badge badge-warning">Pending</span></td>
                          <td class="print_hidden">
                            <div class="btn-group">
                              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-cogs"></i>
                              </button>
                              <div class="dropdown-menu" x-placement="bottom-start">
                               
                               
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Approve
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Pending
                                </a>
                             
                                
                              </div>
                            </div>
                          </td>
                          <td class="print_hidden">
                            <div class="btn-group">
                              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-cogs"></i>
                              </button>
                              <div class="dropdown-menu" x-placement="bottom-start">
                                <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                  <i class="fa fa-print text-primary"></i>
                                  Print
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                  <i class="fa fa-print text-primary"></i>
                                  Chalan Print
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                  <i class="fa fa-pencil-square-o text-warning"></i>
                                  Edit
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Return
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Return List
                                </a>
                                <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                  data-toggle="modal" data-target="#edit" id="Add Payment">
                                  <i class="fa fa-money text-primary"></i>
                                  Add Payment
                                </a>
                                <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                  <i class="fa fa-trash text-danger"></i>
                                  Delete
                                </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>9</td>
                          <td>
                            Uttara
                          </td>
                          <td>
                            pino
                          </td>
                          <td>20 Jun, 2022</td>
                         
                          <td>500 Tk</td>
  
                         
                          
                          <td><span class="badge badge-warning">Pending</span></td>
                          <td class="print_hidden">
                            <div class="btn-group">
                              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-cogs"></i>
                              </button>
                              <div class="dropdown-menu" x-placement="bottom-start">
                               
                               
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Approve
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Pending
                                </a>
                             
                                
                              </div>
                            </div>
                          </td>
                          <td class="print_hidden">
                            <div class="btn-group">
                              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-cogs"></i>
                              </button>
                              <div class="dropdown-menu" x-placement="bottom-start">
                                <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                  <i class="fa fa-print text-primary"></i>
                                  Print
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                  <i class="fa fa-print text-primary"></i>
                                  Chalan Print
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                  <i class="fa fa-pencil-square-o text-warning"></i>
                                  Edit
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Return
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Return List
                                </a>
                                <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                  data-toggle="modal" data-target="#edit" id="Add Payment">
                                  <i class="fa fa-money text-primary"></i>
                                  Add Payment
                                </a>
                                <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                  <i class="fa fa-trash text-danger"></i>
                                  Delete
                                </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>9</td>
                          <td>
                            Uttara
                          </td>
                          <td>
                            pino
                          </td>
                          <td>20 Jun, 2022</td>
                         
                          <td>500 Tk</td>
  
                         
                          
                          <td><span class="badge badge-warning">Pending</span></td>
                          <td class="print_hidden">
                            <div class="btn-group">
                              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-cogs"></i>
                              </button>
                              <div class="dropdown-menu" x-placement="bottom-start">
                               
                               
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Approve
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Pending
                                </a>
                             
                                
                              </div>
                            </div>
                          </td>
                          <td class="print_hidden">
                            <div class="btn-group">
                              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-cogs"></i>
                              </button>
                              <div class="dropdown-menu" x-placement="bottom-start">
                                <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                  <i class="fa fa-print text-primary"></i>
                                  Print
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                  <i class="fa fa-print text-primary"></i>
                                  Chalan Print
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                  <i class="fa fa-pencil-square-o text-warning"></i>
                                  Edit
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Return
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Return List
                                </a>
                                <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                  data-toggle="modal" data-target="#edit" id="Add Payment">
                                  <i class="fa fa-money text-primary"></i>
                                  Add Payment
                                </a>
                                <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                  <i class="fa fa-trash text-danger"></i>
                                  Delete
                                </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>9</td>
                          <td>
                            Uttara
                          </td>
                          <td>
                            pino
                          </td>
                          <td>20 Jun, 2022</td>
                         
                          <td>500 Tk</td>
  
                         
                          
                          <td><span class="badge badge-warning">Pending</span></td>
                          <td class="print_hidden">
                            <div class="btn-group">
                              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-cogs"></i>
                              </button>
                              <div class="dropdown-menu" x-placement="bottom-start">
                               
                               
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Approve
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Pending
                                </a>
                             
                                
                              </div>
                            </div>
                          </td>
                          <td class="print_hidden">
                            <div class="btn-group">
                              <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa fa-cogs"></i>
                              </button>
                              <div class="dropdown-menu" x-placement="bottom-start">
                                <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                  <i class="fa fa-print text-primary"></i>
                                  Print
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                  <i class="fa fa-print text-primary"></i>
                                  Chalan Print
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                  <i class="fa fa-pencil-square-o text-warning"></i>
                                  Edit
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Return
                                </a>
                                <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                  <i class="fa  fa-backward text-primary"></i>
                                  Return List
                                </a>
                                <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                  data-toggle="modal" data-target="#edit" id="Add Payment">
                                  <i class="fa fa-money text-primary"></i>
                                  Add Payment
                                </a>
                                <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                  <i class="fa fa-trash text-danger"></i>
                                  Delete
                                </a>
                              </div>
                            </div>
                          </td>
                        </tr>
                     
  
                      </tbody>
                      <tfoot>
                          <tr>
                              <td colspan="7">
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

    <!---col-->
    <div class="row">
      <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background: #02c996cc;">
                <h3 class="card-title">Debit</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <table id="example5" class="table table-bordered table-hover">
                    <thead>
                        <tr style="background: #20c99769;" >
                          <th>#</th>
                          <th>Invoice No.</th>
                         
                          <th>Date</th>
                          <th>Amount</th>
                         
                          <th>Details</th>
                          
                          <th class="print_hidden">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>9</td>
                      
                        <td>20 Jun, 2022</td>
                       
                        <td>500 Tk</td>
                        <td>Food</td>

                       
                      
                        <td class="print_hidden">
                          <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Chalan Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                <i class="fa fa-pencil-square-o text-warning"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return List
                              </a>
                              <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                data-toggle="modal" data-target="#edit" id="Add Payment">
                                <i class="fa fa-money text-primary"></i>
                                Add Payment
                              </a>
                              <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                <i class="fa fa-trash text-danger"></i>
                                Delete
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>9</td>
                      
                        <td>20 Jun, 2022</td>
                       
                        <td>500 Tk</td>
                        <td>Food</td>

                       
                      
                        <td class="print_hidden">
                          <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Chalan Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                <i class="fa fa-pencil-square-o text-warning"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return List
                              </a>
                              <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                data-toggle="modal" data-target="#edit" id="Add Payment">
                                <i class="fa fa-money text-primary"></i>
                                Add Payment
                              </a>
                              <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                <i class="fa fa-trash text-danger"></i>
                                Delete
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>9</td>
                      
                        <td>20 Jun, 2022</td>
                       
                        <td>500 Tk</td>
                        <td>Food</td>

                       
                      
                        <td class="print_hidden">
                          <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Chalan Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                <i class="fa fa-pencil-square-o text-warning"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return List
                              </a>
                              <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                data-toggle="modal" data-target="#edit" id="Add Payment">
                                <i class="fa fa-money text-primary"></i>
                                Add Payment
                              </a>
                              <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                <i class="fa fa-trash text-danger"></i>
                                Delete
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>9</td>
                      
                        <td>20 Jun, 2022</td>
                       
                        <td>500 Tk</td>
                        <td>Food</td>

                       
                      
                        <td class="print_hidden">
                          <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Chalan Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                <i class="fa fa-pencil-square-o text-warning"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return List
                              </a>
                              <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                data-toggle="modal" data-target="#edit" id="Add Payment">
                                <i class="fa fa-money text-primary"></i>
                                Add Payment
                              </a>
                              <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                <i class="fa fa-trash text-danger"></i>
                                Delete
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>9</td>
                      
                        <td>20 Jun, 2022</td>
                       
                        <td>500 Tk</td>
                        <td>Food</td>

                       
                      
                        <td class="print_hidden">
                          <div class="btn-group">
                            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                              aria-expanded="false">
                              <i class="fa fa-cogs"></i>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start">
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                                <i class="fa fa-print text-primary"></i>
                                Chalan Print
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                                <i class="fa fa-pencil-square-o text-warning"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return
                              </a>
                              <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                                <i class="fa  fa-backward text-primary"></i>
                                Return List
                              </a>
                              <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                                data-toggle="modal" data-target="#edit" id="Add Payment">
                                <i class="fa fa-money text-primary"></i>
                                Add Payment
                              </a>
                              <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                                <i class="fa fa-trash text-danger"></i>
                                Delete
                              </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5">
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
      <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="background: #02c996cc;">
                <h3 class="card-title">Credit</h3>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example5" class="table table-bordered table-hover">
                <thead>
                    <tr style="background: #20c99769;" >
                      <th>#</th>
                      <th>Invoice No.</th>
                     
                      <th>Date</th>
                      <th>Amount</th>
                     
                      <th>Details</th>
                      
                      <th class="print_hidden">Actions</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>9</td>
                  
                    <td>20 Jun, 2022</td>
                   
                    <td>500 Tk</td>
                    <td>Food</td>

                   
                  
                    <td class="print_hidden">
                      <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">
                          <i class="fa fa-cogs"></i>
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start">
                          <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                            <i class="fa fa-print text-primary"></i>
                            Print
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                            <i class="fa fa-print text-primary"></i>
                            Chalan Print
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                            <i class="fa fa-pencil-square-o text-warning"></i>
                            Edit
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                            <i class="fa  fa-backward text-primary"></i>
                            Return
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                            <i class="fa  fa-backward text-primary"></i>
                            Return List
                          </a>
                          <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                            data-toggle="modal" data-target="#edit" id="Add Payment">
                            <i class="fa fa-money text-primary"></i>
                            Add Payment
                          </a>
                          <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                            <i class="fa fa-trash text-danger"></i>
                            Delete
                          </a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>9</td>
                  
                    <td>20 Jun, 2022</td>
                   
                    <td>500 Tk</td>
                    <td>Food</td>

                   
                  
                    <td class="print_hidden">
                      <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">
                          <i class="fa fa-cogs"></i>
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start">
                          <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                            <i class="fa fa-print text-primary"></i>
                            Print
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                            <i class="fa fa-print text-primary"></i>
                            Chalan Print
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                            <i class="fa fa-pencil-square-o text-warning"></i>
                            Edit
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                            <i class="fa  fa-backward text-primary"></i>
                            Return
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                            <i class="fa  fa-backward text-primary"></i>
                            Return List
                          </a>
                          <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                            data-toggle="modal" data-target="#edit" id="Add Payment">
                            <i class="fa fa-money text-primary"></i>
                            Add Payment
                          </a>
                          <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                            <i class="fa fa-trash text-danger"></i>
                            Delete
                          </a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>9</td>
                  
                    <td>20 Jun, 2022</td>
                   
                    <td>500 Tk</td>
                    <td>Food</td>

                   
                  
                    <td class="print_hidden">
                      <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">
                          <i class="fa fa-cogs"></i>
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start">
                          <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                            <i class="fa fa-print text-primary"></i>
                            Print
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                            <i class="fa fa-print text-primary"></i>
                            Chalan Print
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                            <i class="fa fa-pencil-square-o text-warning"></i>
                            Edit
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                            <i class="fa  fa-backward text-primary"></i>
                            Return
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                            <i class="fa  fa-backward text-primary"></i>
                            Return List
                          </a>
                          <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                            data-toggle="modal" data-target="#edit" id="Add Payment">
                            <i class="fa fa-money text-primary"></i>
                            Add Payment
                          </a>
                          <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                            <i class="fa fa-trash text-danger"></i>
                            Delete
                          </a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>9</td>
                  
                    <td>20 Jun, 2022</td>
                   
                    <td>500 Tk</td>
                    <td>Food</td>

                   
                  
                    <td class="print_hidden">
                      <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">
                          <i class="fa fa-cogs"></i>
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start">
                          <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                            <i class="fa fa-print text-primary"></i>
                            Print
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                            <i class="fa fa-print text-primary"></i>
                            Chalan Print
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                            <i class="fa fa-pencil-square-o text-warning"></i>
                            Edit
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                            <i class="fa  fa-backward text-primary"></i>
                            Return
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                            <i class="fa  fa-backward text-primary"></i>
                            Return List
                          </a>
                          <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                            data-toggle="modal" data-target="#edit" id="Add Payment">
                            <i class="fa fa-money text-primary"></i>
                            Add Payment
                          </a>
                          <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                            <i class="fa fa-trash text-danger"></i>
                            Delete
                          </a>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>9</td>
                  
                    <td>20 Jun, 2022</td>
                   
                    <td>500 Tk</td>
                    <td>Food</td>

                   
                  
                    <td class="print_hidden">
                      <div class="btn-group">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                          aria-expanded="false">
                          <i class="fa fa-cogs"></i>
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start">
                          <a class="dropdown-item" href="https://pos.softghor.com/back/pos-receipt/9">
                            <i class="fa fa-print text-primary"></i>
                            Print
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/chalan-receipt/9">
                            <i class="fa fa-print text-primary"></i>
                            Chalan Print
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/pos/9/edit">
                            <i class="fa fa-pencil-square-o text-warning"></i>
                            Edit
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/return/9">
                            <i class="fa  fa-backward text-primary"></i>
                            Return
                          </a>
                          <a class="dropdown-item" href="https://pos.softghor.com/back/return?pos_id=9">
                            <i class="fa  fa-backward text-primary"></i>
                            Return List
                          </a>
                          <a href="https://pos.softghor.com/back/pos/add_payment/9" class="edit dropdown-item"
                            data-toggle="modal" data-target="#edit" id="Add Payment">
                            <i class="fa fa-money text-primary"></i>
                            Add Payment
                          </a>
                          <a class="dropdown-item delete" href="https://pos.softghor.com/back/pos/9">
                            <i class="fa fa-trash text-danger"></i>
                            Delete
                          </a>
                        </div>
                      </div>
                    </td>
                  </tr>
                

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">
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
            <!---------tables------->
          <div class="row">
         

            <!-- Monthly Report -->







            <hr>

            <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"
              integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css"
              integrity="sha256-aa0xaJgmK/X74WM224KMQeNQC2xYKwlAt08oZqjeF0E=" crossorigin="anonymous">
            <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
              integrity="sha256-Uv9BNBucvCPipKQ2NS9wYpJmi8DTOEfTA/nH2aoJALw=" crossorigin="anonymous"></script>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div>
              <canvas id="horizontal_week_view_sales" style="height: 297px; width: 537px; display: block;" width="537"
                height="297" class="chartjs-render-monitor"></canvas>
              <script>
                var horizontal_week_view_sales = document.getElementById('horizontal_week_view_sales');
                var horizontal_myBarChart = new Chart(horizontal_week_view_sales, {
                  type: 'horizontalBar',
                  data: {
                    labels: ["24 Jul", "23 Jul", "22 Jul", "21 Jul", "20 Jul", "19 Jul", "18 Jul"],
                    datasets: [{
                      label: 'Sales',
                      data: [0, 6600, 13580, 3420, 0, 0, 0],
                      backgroundColor: ["rgba(59, 166, 221, 0.4)", "rgba(172, 104, 110, 0.4)", "rgba(126, 60, 230, 0.4)", "rgba(179, 229, 145, 0.4)", "rgba(239, 60, 246, 0.4)", "rgba(193, 160, 138, 0.4)", "rgba(11, 217, 25, 0.4)"],
                      borderColor: ["rgba(132, 48, 224, 1)", "rgba(255, 5, 138, 1)", "rgba(95, 9, 176, 1)", "rgba(172, 247, 75, 1)", "rgba(199, 246, 2, 1)", "rgba(147, 246, 11, 1)", "rgba(82, 3, 166, 1)"],
                      borderWidth: 1
                    }]
                  },
                  options: {
                  }
                });
              </script>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div>
              <canvas id="horizontal_week_view_receive" style="height: 297px; width: 537px; display: block;" width="537"
                height="297" class="chartjs-render-monitor"></canvas>
              <script>
                var horizontal_week_view_receive = document.getElementById('horizontal_week_view_receive');
                var horizontal_myBarChart = new Chart(horizontal_week_view_receive, {
                  type: 'horizontalBar',
                  data: {
                    labels: ["24 Jul", "23 Jul", "22 Jul", "21 Jul", "20 Jul", "19 Jul", "18 Jul"],
                    datasets: [{
                      label: 'Receive',
                      data: [null, null, 5, 500000, null, 5000, null],
                      backgroundColor: ["rgba(59, 166, 221, 0.4)", "rgba(172, 104, 110, 0.4)", "rgba(126, 60, 230, 0.4)", "rgba(179, 229, 145, 0.4)", "rgba(239, 60, 246, 0.4)", "rgba(193, 160, 138, 0.4)", "rgba(11, 217, 25, 0.4)"],
                      borderColor: ["rgba(132, 48, 224, 1)", "rgba(255, 5, 138, 1)", "rgba(95, 9, 176, 1)", "rgba(172, 247, 75, 1)", "rgba(199, 246, 2, 1)", "rgba(147, 246, 11, 1)", "rgba(82, 3, 166, 1)"],
                      borderWidth: 1
                    }]
                  },
                  options: {

                  }
                });
              </script>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div>
              <canvas id="horizontal_week_view_expense" style="height: 297px; width: 537px; display: block;" width="537"
                height="297" class="chartjs-render-monitor"></canvas>
              <script>
                var horizontal_week_view_expense = document.getElementById('horizontal_week_view_expense');
                var horizontal_myBarChart = new Chart(horizontal_week_view_expense, {
                  type: 'horizontalBar',
                  data: {
                    labels: ["24 Jul", "23 Jul", "22 Jul", "21 Jul", "20 Jul", "19 Jul", "18 Jul"],
                    datasets: [{
                      label: 'Expense',
                      data: [0, 0, 0, 100000, 0, 0, 0],
                      backgroundColor: ["rgba(59, 166, 221, 0.4)", "rgba(172, 104, 110, 0.4)", "rgba(126, 60, 230, 0.4)", "rgba(179, 229, 145, 0.4)", "rgba(239, 60, 246, 0.4)", "rgba(193, 160, 138, 0.4)", "rgba(11, 217, 25, 0.4)"],
                      borderColor: ["rgba(132, 48, 224, 1)", "rgba(255, 5, 138, 1)", "rgba(95, 9, 176, 1)", "rgba(172, 247, 75, 1)", "rgba(199, 246, 2, 1)", "rgba(147, 246, 11, 1)", "rgba(82, 3, 166, 1)"],
                      borderWidth: 1
                    }]
                  },
                  options: {

                  }
                });
              </script>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div class="chartjs-size-monitor">
                <div class="chartjs-size-monitor-expand">
                  <div class=""></div>
                </div>
                <div class="chartjs-size-monitor-shrink">
                  <div class=""></div>
                </div>
              </div>
              <canvas id="sales_amount_bar_chart" style="height: 300px; width: 100%; display: block;" width="1651"
                height="300" class="chartjs-render-monitor"></canvas>
              <script>
                var sales_amount_bar_chart = document.getElementById('sales_amount_bar_chart');
                var sales_amount_bar_display = new Chart(sales_amount_bar_chart, {
                  type: 'bar',
                  data: {
                    labels: ['6 Jul 2022', '3 Jul 2022', '10 Jul 2022', '11 Jul 2022', '14 Jul 2022', '16 Jul 2022', '18 Jul 2022', '21 Jul 2022', '22 Jul 2022', '23 Jul 2022',],
                    datasets: [{
                      label: 'Sales',
                      data: ['0', '0', '290', '0', '3', '22500', '0', '3420', '13580', '6600',],
                      backgroundColor: [
                        'rgba(57, 234, 133, 0.5)', 'rgba(76, 162, 57, 0.5)', 'rgba(43, 45, 170, 0.5)', 'rgba(57, 113, 92, 0.5)', 'rgba(132, 81, 72, 0.5)', 'rgba(149, 183, 2, 0.5)', 'rgba(38, 206, 120, 0.5)', 'rgba(170, 129, 136, 0.5)', 'rgba(89, 79, 217, 0.5)', 'rgba(102, 23, 210, 0.5)',
                      ],
                      borderColor: [
                        'rgba(240, 220, 21, 1)', 'rgba(171, 121, 67, 1)', 'rgba(124, 245, 224, 1)', 'rgba(74, 93, 42, 1)', 'rgba(53, 195, 51, 1)', 'rgba(123, 115, 80, 1)', 'rgba(70, 46, 45, 1)', 'rgba(142, 66, 170, 1)', 'rgba(188, 242, 174, 1)', 'rgba(66, 187, 109, 1)',
                      ],
                      borderWidth: 1
                    }]
                  },
                  options: {
                    scales: {
                      yAxes: [{
                        ticks: {
                          beginAtZero: true
                        }
                      }]
                    }
                  }
                });
              </script>
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
        $("#example3")
            .DataTable({
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
            })
            .buttons()
            .container()
            .appendTo("#example3_wrapper .col-md-6:eq(0)");
        $("#example4")
            .DataTable({
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
            })
            .buttons()
            .container()
            .appendTo("#example4_wrapper .col-md-6:eq(0)");
       
        $("#example22").DataTable({
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