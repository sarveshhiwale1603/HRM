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
<div class="row mt-4 pr-5 pl-5">
  <div class="col-md-12">
    <div class="pc-wizard-subtitle-vertical card" id="detailswizard2">
      <div class="row">
        <div class="col-md-4">
          <ul class="nav flex-column card-body border-right px-0 nav-tabs nav-tabs1">
              <?php
              $sql=mysqli_query($conn,"SELECT * FROM `policies` group by title") ;
              while($arr=mysqli_fetch_array($sql)){
                  $dnk=$arr['title'];
                  $id=$arr['id'];
                  $count=mysqli_num_rows($sql);
                  if($count==1){
                      echo "<li class='nav-item sss'><a href='#".$dnk."_".$id."' class=nav-link active data-toggle=tab><i class='fa fa-check-square-o' style='24px'>&nbsp;&nbsp;</i><span>".$dnk."</span></a></li>";
                  }
                  else{
                    echo "<li class='nav-item sss'><a href='#".$dnk."_".$id."' class=nav-link data-toggle=tab><i class='fa fa-check-square-o' style='24px;'>&nbsp;&nbsp;</i><span>".$dnk."</span></a></li>";
                  }
                  }
                
              ?>
                      </ul>
        </div>
        <div class="col-md-8">
          <div class="card-body pb-0">
            <div class="tab-content">
            <?php
              $sql=mysqli_query($conn,"SELECT * FROM `policies` group by title") ;
              while($arr=mysqli_fetch_array($sql)){
                  $dnk=$arr['title'];
                  $id=$arr['id'];
                  $description=$arr['description'];
                  $image=$arr['image'];
                  $count=mysqli_num_rows($sql);
                  if($count==1){
              ?>
                            <div class="tab-pane show active" id="<?php echo $dnk.'_'.$id ?>">
                <h5 class="mt-3"><?php echo $dnk ?></h5>
                <div><?php echo $description ?></div>
                				                <span class="box-96 mr-0-5">
                <img src="image/policy_image/<?php echo $image; ?>" alt="bond policy" class="d-block ui-w-50" width="100" height="100" title="bond policy" />                </span>
                              </div>
                            
                            <?php } else {?>
                				              
                              <div class="tab-pane" id="<?php echo $dnk.'_'.$id ?>">
                <h5 class="mt-3"><?php echo $dnk ?></h5>
                <div><?php echo $description ?></div>
                				                <span class="box-96 mr-0-5">
                <img src="image/policy_image/<?php echo $image; ?>" alt="bond policy" class="d-block ui-w-50" width="100" height="100" title="bond policy" />                </span>
                              </div><?php }  }?>
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
