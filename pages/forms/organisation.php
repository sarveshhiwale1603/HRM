<?php
include("../include/config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3| Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.css">
  <link rel="stylesheet" href="../../dist/css/style.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
      a:hover,
a:focus{
    text-decoration: none;
    outline: none;
}
.vertical-tab{
    font-family: 'Karla', sans-serif;
    display: table;
}
.vertical-tab .nav-tabs{
    width: 25%;
    min-width: 25%;
    border: none;
    vertical-align: top;
    display: table-cell;
}
.vertical-tab .nav-tabs li{ float: none; }
.vertical-tab .nav-tabs li a{
    color: #fff;
    background: #3c6382;
    font-size: 19px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: capitalize;
    text-align: center;
    padding: 7px;
    margin: 0 10px 10px 0;
    border-radius: 0;
    border: 2px solid #3c6382;
    position: relative;
    z-index: 1;
    transition: all 0.4s ease 0s;
}
.vertical-tab .nav-tabs li a:hover,
.vertical-tab .nav-tabs li.active a,
.vertical-tab .nav-tabs li.active a:hover{
    color: #3c6382;
    background: #fff;
    border: 2px solid #3c6382;
    border-radius: 20px 20px 0 20px;
    box-shadow: 10px 5px #3c6382;
}
.vertical-tab .tab-content{
    color: #fff;
    background-color: #3c6382;
    font-size: 14px;
    font-weight: 500;
    line-height: 21px;
    padding: 15px 15px 15px 25px;
    border-radius: 0 20px 20px 0;
    display: table-cell;
}
.vertical-tab .tab-content h3{
    color: #fff;
    font-size: 20px;
    font-weight: 600;
    text-transform: capitalize;
    margin: 0 0 3px;
}
@media only screen and (max-width: 479px){
    .vertical-tab .nav-tabs{
        width: 100%;
        display: block;
    }
    .vertical-tab .nav-tabs li a{
        padding: 10px 10px 9px;
        margin: 0 0 12px;
    }
    .vertical-tab .nav-tabs li a:hover,
    .vertical-tab .nav-tabs li.active a,
    .vertical-tab .nav-tabs li.active a:hover{
        box-shadow: 0 5px #3c6382;
        border-radius: 15px;
    }
    .vertical-tab .tab-content{
        font-size: 14px;
        padding: 15px;
        border-radius: 15px;
        display: block;
    }
}
  </style>

</head>
<body>
<div class="wrapper">

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
              <li class="breadcrumb-item active">Designation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid flex-grow-1 container-p-y">
  <h3 class="text-center font-weight-bold py-1 mb-2" >
    View Policies </h3>
    <a class="btn btn-primary rounded-pill d-block ml-5" href="policies.php" style="width:17%"><span class="ion ion-md-add"></span>&nbsp;Add New Policy</a>
     
  <hr class="container-m-nx border-light my-0">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="vertical-tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Section 1</a></li>
                    <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Section 2</a></li>
                    <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Section 3</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                        <h3>Section 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius, mi eros viverra massa.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                        <h3>Section 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius, mi eros viverra massa.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                        <h3>Section 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce semper, magna a ultricies volutpat, mi eros viverra massa, vitae consequat nisi justo in tortor. Proin accumsan felis ac felis dapibus, non iaculis mi varius, mi eros viverra massa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
      </div><!--/. container-fluid -->
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
  <?php
  include('../include/footer.php');
  ?>
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
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
<script>
    $(document).ready(function() {
        $(".sss").on('click',function() {
           let category=$(this).text().trim();
           $(".category").val(category);
        });

    });
    </script>
</body>
</html>
