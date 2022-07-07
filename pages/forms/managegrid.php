<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3| Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
    <link rel="stylesheet" href="../../dist/css/adminlte.css" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


    <style>
        .hoverTitles {
            color: black;
            cursor: pointer;
            font-weight: 500;
            font-size: small;
        }

        .hoverTitles:hover {
            color: blueviolet !important;
        }
    </style>
</head>

<body>
    <div class="wrapper">
       

        <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>



 
  <?php 
include("../include/header.php");
?>
      

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Department</li>
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
                  

                    <!-- /.row -->
                    <div class="row justify-content-center">
                        <div class="col-md-12">

                            <div class="collapse" id="collapseExample">

                                <div class="row my-3">
                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Clients Management
                                                </h5>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                        aria-expanded="false" aria-controls="collapseExample">
                                                        <i class="fas fa-minus"></i> Hide</button>
                                                    </button>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <div class="row my-3">
                                                    <div class="col-lg-6">
                                                        <label>First Name<sup><b style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="fas fa-user-alt"></i>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="First Name">
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <!-- /.col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <label>Last Name<sup><b style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"> <i
                                                                        class="fas fa-user-alt"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="Last Name">
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <!-- /.col-lg-6 -->
                                                </div>
                                                <!-- /.row -->


                                                <div class="row my-3">
                                                    <div class="col-lg-4">
                                                        <label>Employee ID<sup><b style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" value="123456">
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <!-- /.col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <label>Contact Number<sup><b
                                                                    style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control"
                                                                placeholder="Contact Number">
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Gender<sup><b style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <select class="form-control select2" style="width: 100%;">
                                                                <option selected="selected">Male</option>
                                                                <option>Female</option>
                                                            </select>
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <!-- /.col-lg-4 -->
                                                </div>
                                                <!-- /.row -->


                                                <div class="row my-3">
                                                    <div class="col-lg-6">
                                                        <label>Email<sup><b style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="fas fa-envelope"></i>
                                                                </span>
                                                            </div>
                                                            <input type="email" class="form-control"
                                                                placeholder="Email">
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <!-- /.col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <label>Username<sup><b style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"> <i
                                                                        class="fas fa-user-alt"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control"
                                                                placeholder="Username">
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <!-- /.col-lg-6 -->
                                                </div>
                                                <!-- /.row -->


                                                <div class="row my-3">
                                                    <div class="col-lg-4">
                                                        <label>Password<sup><b style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"> <i
                                                                        class="fas fa-eye-slash"></i></span>
                                                            </div>
                                                            <input type="password" class="form-control"
                                                                placeholder="password">
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <!-- /.col-lg-4 -->
                                                    <div class="col-lg-4">
                                                        <label>Office Shift<sup><b
                                                                    style="color:red;">*</b></sup></label>
                                                        <select class="form-control select2" style="width: 100%;"
                                                            placeholder="Office Shift">
                                                            <option selected="selected" disabled>Office Shift</option>
                                                            <option>Morning</option>
                                                        </select>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Role<sup><b style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <select class="form-control select2" style="width: 100%;">
                                                                <option selected="selected" disabled>Role</option>
                                                                <option>Web Developer</option>
                                                                <option>Android Developer</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row my-3">
                                                    <div class="col-lg-6">
                                                        <label>Department<sup><b style="color:red;">*</b></sup></label>
                                                        <select class="form-control select2" style="width: 100%;"
                                                            placeholder="Office Shift">
                                                            <option selected="selected" disabled>Departments</option>
                                                            <option>Developer</option>
                                                            <option>Sales</option>
                                                            <option>Marketing</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Designation<sup><b style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <select class="form-control select2" style="width: 100%;">
                                                                <option selected="selected" disabled>Designation
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row my-3">
                                                    <div class="col-lg-6">
                                                        <label>Basic Salary<sup><b
                                                                    style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"> <i
                                                                        class="fas fa-rupee-sign"></i></span>
                                                            </div>
                                                            <input type="number" class="form-control" value="456132">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Payslip Type<sup><b
                                                                    style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <select class="form-control select2" style="width: 100%;">
                                                                <option selected="selected">Per Month</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <buttton type="button" id="reset" class="btn btn-default"
                                                        name="reset" data-bs-toggle="collapse" href="#collapseExample"
                                                        role="button" aria-expanded="false"
                                                        aria-controls="collapseExample">Reset</buttton>
                                                    <buttton type="button" id="submit" class="btn btn-primary"
                                                        name="Save">Save</buttton>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Profile Picture</h5>
                                            </div>
                                            <div class="card-body">
                                                <label>Profile Picture<sup><b style="color:red;">*</b></sup></label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="file">
                                                    <label class="custom-file-label">Choose file...</label>
                                                    <small class="text-muted">Upload files only:
                                                        gif,png,jpg,jpeg</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card user-card user-card-1 mt-4">
                                <div class="card-body pt-0">
                                    <div class="user-about-block text-center">
                                        <div class="row align-items-end pt-2">
                                            <div class="col text-left py-4">
                                                <h5 class="card-title">List All Employees</h5>
                                            </div>
                                            <div class="col text-right py-4">
                                                <div class="card-tools">
                                                    <span class="mr-2">View Mode : </span>
                                                    <a href="manage.html"><button type="button"
                                                            class="btn btn-primary btn-sm">
                                                            <i class="fas fa-list-ul"></i>
                                                        </button></a>
                                                        <a href="managegrid.html" class="btn btn-sm waves-effect waves-light btn-primary btn-icon m-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid View"> <i class="fas fa-th-large"></i> </a>
                                                    <!-- <button type="button" class="btn btn-primary btn-sm">
                                                            <i class="fas fa-th-large"></i></button> -->
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                        aria-expanded="false" aria-controls="collapseExample">
                                                        <i class="fas fa-plus"></i> Add New
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 col-sm-6"></div>
                        <!--/. container-fluid -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="card user-card user-card-1 mt-4">
                                <div class="card-body pt-0">
                                    <div class="user-about-block text-center">
                                        <div class="row align-items-end">
                                            <div class="col text-left pb-3">
                                                <span class="badge badge-success">Active</span>
                                            </div>
                                            <div class="col">
                                                <img class="img-radius img-fluid wid-80" src="http://hrm.tectignis.in/public/uploads/clients/thumb/tiger.jfif" alt="aniket nangare">
                                            </div>
                                            <div class="col text-right pb-3">
                                                <div class="dropdown" style="cursor:pointer;">
                                                    <a style="color:rgba(0, 0, 0, 0.434);" class="drp-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false"><i style="color:black;"
                                                            class="feather icon-more-horizontal">...</i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item"
                                                            href="client-Details .html"><i
                                                                class="fa fa-eye"></i> View
                                                        </a>
                                                        <a href="#!" class="dropdown-item delete" data-toggle="modal"
                                                            data-target="#delete-modal"
                                                            data-record-id="Bj3O1nKOy9gLbuclLplgz87_v24n1j_MzCptXk3LGUY"><i
                                                                class="fa fa-trash"></i> Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="delete-modal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Are you sure you want to delete this record?
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="alert alert-danger">
                                                        You won't be able to revert this!
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-end">
                                                    <button type="button" class="btn btn-default"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Confirm</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <div class="text-center">
                                        <h4 class="mb-1 mt-3">ANIKAT NANGARE</h4>
                                        <P class="text-muted mb-3">@aniketnangare

                                        </P>
                                        <p class="mb-1 mt-2">
                                            <b>Email : </b>
                                            <a href="Email : aniket@gmail.com"> aniket@gmail.com

                                            </a>
                                        </p>
                                        <p class="mb-2">
                                            <b>Contact</b>
                                            " 1234567890 "
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6"></div>
                    </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside>
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="../../plugins/raphael/raphael.min.js"></script>
    <script src="../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../dist/js/pages/dashboard2.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function () {
            $("#example1")
                .DataTable({
                    // "responsive": true, "lengthChange": false, "autoWidth": false,
                    // "buttons": [   "colvis"]
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
<!-- <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> -->