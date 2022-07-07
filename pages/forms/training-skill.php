


   
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.css">
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <style>
    .bg{
      border-top-left-radius: 10%;
    }
    .a1{
        float:right;
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
              <li class="breadcrumb-item active">Department</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 grid-margin">
              <div class="card-body">
                <div class="d-flex flex-row align-items-start">
                  <i class="nav-link fa fa-calculator"></i>
                  <div class="ms-3">
                    <a href="training-session.html" target="_self" class="Department"><h6>Training Session</a></h6>
                    <p>Set up Training Session</p>
                  </div>
              </div>
              </div>
          </div>
        <!-- /.col -->
        <div class="col-md-3 grid-margin">
          <div class="card-body">
              <div class="d-flex flex-row align-items-start">
                <i class="nav-link fa fa-user-plus"></i>
                <div class="ms-3">
                    <h6><a href="trainers.html" target="_self" >Trainers</a></h6>
                    <p>Add Trainers</p>
                  </div>
              </div>
          </div>
      </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-md-3 grid-margin">
          <div class="card-body">
              <div class="d-flex flex-row align-items-start">
                <i class="nav-link	fa fa-tasks"></i>
                <div class="ms-3">
                  <h6 ><a href="training-skill.html" target="_self" style="text-decoration:none">Training Skill </a></h6>
                  <p>Add Training Skill</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-3 grid-margin">
        <div class="card-body">
            <div class="d-flex flex-row align-items-start">
              <i class="nav-link	fa fa-calendar"></i>
              <div class="ms-3">
                <h6 ><a href="training-calendar.html" target="_self" style="text-decoration:none">Calendar</a></h6>
                <p> Training Calendar </p>
                </div>
            </div>
        </div>
    </div>
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
        <!-- Info boxes -->
        <hr class="border-light m-0 mb-3">
        <div class="row m-b-1 animated fadeInRight">
            <div class="col-md-4">
            <div class="card">
              <div class="card-header with-elements">
                Add New Training Skill </div>
              <div class="card-body">
     <form   method="post">
        

                <div class="form-group">
                  <label for="name">
                    Training Skill  </label>
                  <input type="text" class="form-control" name="Training Skill" placeholder="Training Skill">
                       </select>
                </div>
                
                  <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary" 
                    name="submit">Submit</button>
                  </div>
              </div>
              <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""/></div></form>    </div>
          </div>
          <div class="col-md-8">
            <div class="card user-profile-list">
              <div class="card-header with-elements"> <span class="card-header-title mr-2">List All Training Skills

                       </span> 



               
                      
                    </div>

                    
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    
                    <div class="col-sm-8">
                      <div class="table" id="showtable">
                        <p>Show
                          <select name="showtable">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select>
                          entries
                        </p>
                      </div>
                    </div>

                            <div class="col-sm-4" style="display:flex;text-align:end;">
                              <p style="padding:4px;">Search</p>
                              <input type="search" class="form-control form-control-sm" name="name">
                            </div>
                        </div>
                  <table class="datatables-demo table table-striped table-bordered" id="xin_table">
                    <thead>
                      <tr>
                        <th><i class="fa fa-braille"></i>Training Skill</th>
                        <th>Created at</th>
                      
                      </tr>
                    </thead>
              <tbody>

              </tbody>
                  </table>
                </div>
              
              
              
             
                <div class="row">
                  <div class="col-md-9">
                    <div class="dataTables_info" id="example1_info" role="status">Showing 1 to 5 of 5 records

                    </div>
                  </div>
                    <div class="col-md-3">
                      <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination" style="margin:auto">
                          <li class="paginate_button page-item previous disabled" id="example1_previous">
                            <a href="#"  class="page-link">Previous</a>
                          </li>
                            
                              <li class="paginate_button" name="next" id="example1_next">
                                <a href="#"class="page-link">Next</a>
                              </li>
                            </ul>
                      </div>
                    </div>
                  </div> 
          
            <!-- [ Main Content ] end --> 
          </div>
        </div>
        <!-- [ Main Content ] end -->
        </div>
    </div>
    
        <div class="modal notification-modal fade" id="notification-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">
                  Notifications          <br>
                  <small class="text-muted">
                  Mark all as read          </small> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
              </div>
              <div class="modal-body">
                <div class="tab-pane fade show active" id="pc-noti-home" role="tabpanel" aria-labelledby="pc-noti-home-tab">
                  <ul class="list-unstyled task-list">
                                                    </ul>
                  <!--<div class="text-center"> <a href="#!" class="b-b-primary text-primary">View Friend List</a> </div>-->
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-light-danger btn-sm" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->

        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade show delete-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          Are you sure you want to delete this record?        </h5>
        <button type="button" class="close" data-dismiss="modal" > <span aria-hidden="true">×</span> </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger"> <strong>
          You won't be able to revert this!          </strong> </div>
      </div>


  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; <a href="https://tectignis.in">tectignis.in</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
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

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../../plugins/raphael/raphael.min.js"></script>
<script src="../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<script type="text/javascript">var dt_infoFiltered = '(filtered from _MAX_ total records)';</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
<script>
  function filter(){
   starttime=(new Date()).getTime();
 endtime=(new Date()).getTime();

 (endtime-starttime )/1000 
  }
  </script>
<script>
    $(function () {
      $("#example1").DataTable({
        // "responsive": true, "lengthChange": false, "autoWidth": false,
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
    });</script>
<script>
     // bind filter button click
     $('#filters').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });
    $('#filters-side').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });
    </script>
  
  
</body>
</html>
