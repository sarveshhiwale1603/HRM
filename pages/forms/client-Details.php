<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
} 
$id=$_GET['manageid'];
$sql=mysqli_query($conn,"select * from manage_client  where id='$id'");
$row=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3| Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">


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


    <style>
        .user-card .user-about-block .certificated-badge {
            position: absolute;
            bottom: -5px;
            right: -5px;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            background: #fff;
            padding: 5px 3px;
        }
    </style>
</head>

<body>
    <div class="wrapper">

    <?php include("../include/header.php"); ?>
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




                    <div class="row" data-select2-id="669">
                        <!-- [] start -->
                        <div class="col-lg-4">
                            <div class="card user-card user-card-1">
                                <div class="card-body pb-0">
                                    <div class="float-right">
                                        <span class="badge badge-success">Active</span>
                                    </div>
                                    <div class="media user-about-block align-items-center mt-0 mb-3">
                                        <div class="position-relative d-inline-block"> <img  class="img-radius img-fluid wid-80"  style="border-radius:50%; width:80px ;" src="http://hrm.tectignis.in/public/uploads/clients/thumb/tiger.jfif" alt="ANIKET NANGARE">
                                            <div class="certificated-badge"> <i class="fas fa-certificate text-primary bg-icon"  style="font-size:22px;"></i> <i class="fas fa-check front-icon text-white" style="font-size: 11px;position: absolute; top: 11px; left: 9px;"></i>
                                            </div>
                                        </div>
                                        <div class="media-body ml-3">
                                            <h6 class="mb-1"><?php echo $row['first_name'] ?></h6>
                                            <p class="mb-0 text-muted"><?php echo $row['username'] ?> </p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush mb-3">
                                   
                                    <li class="list-group-item border-bottom-0"> <span class="f-w-500"><i class="fa fa-envelope m-r-10"></i> Email  </span>  <span class="float-right" > <?php echo $row['email'] ?></span>
                                    </li>
                                    <li class="list-group-item"> <span class="f-w-500"><i class="fa fa-user m-r-10"></i>  Contact No </span> <a href="#"  class="float-right text-body"> <?php echo $row['contact'] ?></a> </li>
                                </ul>

                                <div class="nav flex-column nav-pills list-group list-group-flush list-pills"  id="user-set-tab" role="tablist" aria-orientation="vertical">
                                   

                                    <a class="nav-link list-group-item list-group-item-action"  id="user-set-information-tab" data-toggle="pill" href="#user-set-information"
                                        role="tab" aria-controls="user-set-information" aria-selected="true"> <span
                                            class="f-w-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user icon-svg-primary wid-20">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            Personal Information </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action" id="user-set-picture-tab"
                                        data-toggle="pill" href="#user-set-picture" role="tab"
                                        aria-controls="user-set-picture" aria-selected="false"> <span class="f-w-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image icon-svg-primary wid-20">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                            <polyline points="21 15 16 10 5 21"></polyline>
                                        </svg>
                                            Profile Picture </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action" id="user-set-account-tab"
                                        data-toggle="pill" href="#user-set-account" role="tab"
                                        aria-controls="user-set-account" aria-selected="false"> <span class="f-w-500"><i class="fa fa-layer-group"></i>
                                            Project </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action"
                                        id="user-set-document-tab" data-toggle="pill" href="#user-set-document"
                                        role="tab" aria-controls="user-set-document" aria-selected="false"> <span
                                            class="f-w-500"><i class="fa fa-edit"></i>
                                            Task </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action" id="user-set-agenda-tab"
                                        data-toggle="pill" href="#user-set-agenda" role="tab"
                                        aria-controls="user-set-agenda" aria-selected="false"> <span class="f-w-500"><i class='fas fa-calendar-alt'></i>
                                            Invoices     </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>

                                    <a class="nav-link list-group-item list-group-item-action"
                                        id="user-set-password-tab" data-toggle="pill" href="#user-set-password"
                                        role="tab" aria-controls="user-set-password" aria-selected="false"> <span
                                            class="f-w-500"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield icon-svg-primary wid-20">
                                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                            </svg>
                                            Change Password </span> <span class="float-right"><i
                                                class="fa fa-chevron-right"></i></span> </a>
                                </div>
                            </div>
                        </div>


                        <!-- FORMS -->
                        <div class="col-lg-8" data-select2-id="668">
                            <div class="tab-content" id="user-set-tabContent" data-select2-id="user-set-tabContent">
                                <!-- Personal Information -->

                                <div class="tab-pane fade active show" id="user-set-information" role="tabpanel" aria-labelledby="user-set-information-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user icon-svg-primary wid-20">
                                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="12" cy="7" r="4"></circle>
                                                </svg><span class="p-l-5"> Personal Information </span></h5>
                                        </div>
                                        <div class="card-body">
                                            <form method="post">
                                 <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <input type="hidden" id="user_id" name="user_id" value="<?php echo $row['id']; ?>">
                                                    <label for="first_name">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="fstname" name="first_name" value="<?php echo $row['first_name']; ?>" placeholder="First Name" required>
                                                </div>
                                                <span id="fname"></span>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="last_name">Last Name  <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="lstname" value="<?php echo $row['last_name']; ?>" name="last_name" placeholder="Last Name" required  >
                                                </div>
                                                <span id="lname"></span>

                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email">Email  <span class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" name="email" placeholder="Email "  required>
                                                </div>
                                            </div>
                                 </div>  
                                 <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Username">Username  <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" id="Username" value="<?php echo $row['username']; ?>" name="Username" placeholder="username" required>
                                        </div>
                                    </div>
                                   
                                      <div class="col-md-4">
                                        <div class="form-group">
                                        <label for="status" class="control-label"> Status   <span class="text-danger">*</span></label>
                                        <select class="form-control" id="status" name="status" style="width: 100%;" required>
                                        <option value="<?php echo $row['status']; ?>" selected ><?php echo $row['status']; ?> </option>
                                        <option value="Active"> Active </option>
                                        <option value="Banned"> Banned </option>
                                        </select> 
                                        </div>
                                        </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="last_name">Contact Number <span class="text-danger">*</span></label>
                                            <input type="number" value="<?php echo $row['contact']; ?>" class="form-control" id="contact" name="contact" placeholder="Contact Number" required>
                                        </div>
                                    </div>
                         </div>  
                         <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gender" class="control-label"> Gender  </label>
                                    <select class="form-control select2" id="gender" name="gender" style="width: 100%;" required>
                                        <option  selected="selected" value="<?php echo $row['gender']; ?>"> <?php echo $row['gender']; ?> </option>
                                        <option value="Female"> Female </option>
                                        <option value="Male">Male</option>
                                    </select> 
                                </div>
                            </div>
                           
                              <div class="col-md-4">
                                 <div class="form-group">
                                   <label for="country" class="control-label"> Country  <span class="text-danger">*</span> </label>
                                    <select class="form-control select2" id="country" name="country" style="width: 100%;" required>
                                    <option  selected="selected" value="<?php echo $row['country']; ?>"> <?php echo $row['country']; ?> </option>
                                    <option value="India">India</option>
                                                                                      </select> 
                                                        </div>
                                                    </div>                            
                 </div>     
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Address</label>
                            <input type="text" class="form-control" value="<?php echo $row['address']; ?>" id="Address" name="Address" placeholder="Address"required >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Address2"> &nbsp; </label>
                            
                            <input type="text" class="form-control" value="<?php echo $row['address2']; ?>" id="Address2" name="Address2" placeholder="Address line 2" required>
                        </div>
                    </div>
                    
         </div>  
         <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="first_name">City</label>
                    <input type="text" class="form-control" id="City" value="<?php echo $row['city']; ?>" name="City" placeholder="City" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="last_name">State / Province</label>
                    <input type="text" class="form-control" id="state" value="<?php echo $row['state']; ?>" name="state" placeholder="State / Province" required >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="last_name">Zip Code / Postal Code</label>
                    <input type="text" class="form-control" value="<?php echo $row['zip_code']; ?>" id="zip" name="zip" placeholder="Zip Code / Postal Code" required>
                </div>
            </div>
 </div>   
 <button type="button" class="btn btn-primary" id="client_detail_update1" name="client_detail_update1" style="float: right;">Save</button>  
    <!-- PERSONAL INFORMATION -->
                                          
                                        </div>
    </form>
                                    </div>
                                </div>


                                <!-- PROFILE PICTURE -->

                                <div class="tab-pane fade" id="user-set-picture" role="tabpanel"  aria-labelledby="user-set-picture-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  viewBox="0 0 24 24" fill="none" stroke="currentColor"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image icon-svg-primary wid-20">
                                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                                    <polyline points="21 15 16 10 5 21"></polyline>
                                                </svg><span class="p-l-5">  Profile Picture </span></h5>
                                        </div>
                                        <div class="card-body pb-2">
                                            <div class="box-body">
                                                <form action="api.php"  id="edit_user_photo" autocomplete="off" method="post"enctype="multipart/form-data">
                                                    <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                                    <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw"style="display:none;" required>
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div style="text-align: center;">
                                                                    <img src="image/manage_image/<?php echo $row['profile']; ?>" style="width: 250px;height:250px;border-radius: 50%;">
                                                            </div>
                                                                <div class="form-group mt-3">
                                                                    <label for="logo">  Profile Picture <span class="text-danger">*</span> </label>
                                                                    <div class="custom-file">
                                                                    <input type="hidden" id="client_id" name="client_id" value="<?php echo $row['id']; ?>">
                                                                        <input type="file" name="file" accept="image/png, image/gif, image/jpeg, image/jpg">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                               
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right" name="client_profile" ><span class="ladda-label"> Update Picture </span><span class="ladda-spinner"></span></button>
                                        </div>
                                        </form>
                                        <div style="display:none"><label>Bot Will Fill This Field</label>
                                            <input  type="text" name="ciapp_check" value=""></div>
                                    </div>
                                </div>




                                <!-- Project -->


                                <div class="tab-pane fade" id="user-set-account" role="tabpanel"
                                    aria-labelledby="user-set-account-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><i class="fa fa-layer-group"></i><span class="p-l-5"> List all project</span></h5>
                                        </div>
                                        <form action="" name="edit_user" id="edit_account" autocomplete="off" method="post" accept-charset="utf-8">
                                            <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                            <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                            <div class="card-body">
                                                <div id="PROJECT_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                    <div class="row">
                                                      <div class="col-sm-12">
                                                        <table id="PROJECT" class="table table-bordered table-responsive table-striped dataTable dtr-inline" aria-describedby="PROJECT__info">
                                                          <thead>
                                                           <tr>
                                                           <th>PROJECT</th>
                                                           <th>PRIORITY </th>
                                                           <th>TEAM</th>
                                                           <th>START DATE</th>
                                                           <th>END DATE</th>

                                                           <th>PROGRESS</th>
                                                           <th>ACTION</th>
                                                          
                                                          </thead>
                                                          <tbody>
                                                            <?php
                                                            $result_project=mysqli_query($conn,"SELECT * FROM project inner join manage_client on project.client=manage_client.id left join employee on employee.employee_code=project.team WHERE project.client='$id';");
                                                            while($row_project = mysqli_fetch_array($result_project)){
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $row_project['title']; ?></td>
                                                                    <td><?php echo $row_project['priority']; ?></td>
                                                                    <td><?php echo $row_project['fname'].' '.$row_project['lname']; ?></td>
                                                                    <td><?php echo $row_project['start_date']; ?></td>
                                                                    <td><?php echo $row_project['end_date']; ?></td>
                                                                    <td>
                                                                    <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $row_project['progress']; ?>">
    <?php echo $row_project['progress']; ?>
    </div>
  </div>    
                                                                    </td>
                                                                    <td><a href="project-Details.php"><i class="fa fa-location-arrow"></i></a></td>
                                                            </tr>
                                                            <?php }
                                                            ?>
                                                          </tbody>
                                                         <tfoot>
                            
                                                         </tfoot>
                                                        </table>
                                                      </div>
                                                    </div>
                          
                        </div>
                    </div>
                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label">  Save </span><span class="ladda-spinner"></span></button>
                                            </div>
                                            <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""></div>
                                        </form>
                                    </div>
                                </div>



                                <!-- Task -->


                                <div class="tab-pane fade" id="user-set-document" role="tabpanel" aria-labelledby="user-set-document-tab">
                                    <div class="card user-profile-list">
                                        <div class="card-header">
                                            <h5><i class="fa fa-edit"></i><span class="p-l-5"> list all task </span></h5>
                                        </div>
                                        <div class="card-body">
                                            <div id="taskTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                  <div class="col-sm-12">
                                                    <table id="taskTable" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="taskTable_info">
                                                      <thead>
                                                       <tr>
                                                       <th>TITLE</th>
                                                       <th>PEOJECT</th>
                                                       <th>TEAM</th>
                                                       <th>PROGRESS</th>
                                                       <th>END DATE</th>



                                                      
                                                      </thead>
                                                      <tbody>
                                                      </tbody>
                                                     <tfoot>
                        
                                                     </tfoot>
                                                    </table>
                                                  </div>
                                                </div>
                      
                    </div>
                </div>
                            </div>
                        </div>


                        <!-- Invoices -->


                                <div class="tab-pane fade" id="user-set-agenda" role="tabpanel" aria-labelledby="user-set-agenda-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><i class='fas fa-box'></i><span class="p-l-5"> Invoices</span></h5>
                                        </div>
                                        <div class="card-body">
                                            <div id="Invoices_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                  <div class="col-sm-12">
                                                    <table id="Invoices" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="Invoices_info">
                                                      <thead>
                                                       <tr>
                                                       <th>#</th>
                                                       <th>BILL FOR</th>
                                                       <th>INVOICE DATE</th>
                                                       <th>AMOUNT</th>
                                                       <th>STATUS </th>



                                                      
                                                      </thead>
                                                      <tbody>
                                                      </tbody>
                                                     <tfoot>
                        
                                                     </tfoot>
                                                    </table>
                                                  </div>
                                                </div>
                      
                    </div>
                </div>
                                    </div>
                                </div>


                                
                                <!-- CHANGE PASSWORD -->


                                <div class="tab-pane fade" id="user-set-password" role="tabpanel"
                                    aria-labelledby="user-set-password-tab">
                                    <div class="alert alert-warning" role="alert">
                                        <h5 class="alert-heading"><i class="feather icon-alert-circle mr-2"></i>  Alert! </h5>
                                        <p>  Dont share this password to anyone. The password should be changed at least once in 3 months. </p>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"  class="feather feather-shield icon-svg-primary wid-20">
                                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                                </svg><span class="p-l-5"> Change Password </span></h5>
                                        </div>
                                        <form name="change_password" id="change_password" autocomplete="off" method="post" accept-charset="utf-8">
                                            <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                            <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>  Current password </label>
                                                            <div class="input-group">
                                                            <input type="hidden" name="cur_id" id="cur_id" value="<?php echo $row['id']; ?>">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-eye"></i></span></div>
                                                               
                                                                <input type="password"  class="form-control" name="pass" id="cur_pass">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label> New password <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-eye"></i></span></div>
                                                                <input type="password" class="form-control" name="new_pass" id="new_pass"  placeholder="New password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>  Repeat new password <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-eye"></i></span></div>
                                                                <input type="password" class="form-control" name="con_pass" id="con_pass" placeholder="Repeat new password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="button" class="btn btn-danger ladda-button" id="changepassword" data-style="expand-right"><span class="ladda-label">  Change Password </span><span  class="ladda-spinner"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- [] end -->
                    </div>






                </div><!-- /.container-fluid -->
            </div>
        </div>

        <?php include("../include/footer.php"); ?>
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

// allowances

        $(function () {
            $("#taskTable").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#taskTable_wrapper .col-md-6:eq(0)');
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
        $(function () {
            $("#PROJECT").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#PROJECT_wrapper .col-md-6:eq(0)');
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
        // Invoices
        $(function () {
            $("#Invoices").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#Invoices_wrapper .col-md-6:eq(0)');
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


    </script>
    <script>

//TEXT VALIDATION
$("#fname").hide();
  $("#fstname").keyup(function(){
   txt_check();
 });
 function txt_check(){
   let txt=$("#fstname").val();
   let vali =/^[A-Za-z ]+$/;
   if(!vali.test(txt)){
    $("#fname").show().html("Enter Alphabets only").css("color","red").focus();
    txt_err=false;
    return false;
   }
   else{
       $("#fname").hide();

   }
 }

 $("#sub").click(function(){
   txt_err = true;
         txt_check();

     if((txt_err==true)){
        return true;
     }
     else{return false;}
  });

</script>
<script>

//TEXT VALIDATION
$("#lname").hide();
  $("#lstname").keyup(function(){
   txt_check1();
 });
 function txt_check1(){
   let txt=$("#lstname").val();
   let vali =/^[A-Za-z ]+$/;
   if(!vali.test(txt)){
    $("#lname").show().html("Enter Alphabets only").css("color","red").focus();
    txt_err=false;
    return false;
   }
   else{
       $("#lname").hide();

   }
 }

 $("#sub").click(function(){
   txt_err = true;
         txt_check1();

     if((txt_err==true)){
        return true;
     }
     else{return false;}
  });
</script>

    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <script src="../../dist/js/jqueries.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- Page specific script -->
    <script>
        $(function () {

             //Date picker
             $('#reservationdateAllowances').datetimepicker({
                format: 'L'
            });

            $('#reservationdateAllowances2').datetimepicker({
                format: 'L'
            });
            
            $('#reservationdateBI').datetimepicker({
                format: 'L'
            });
            $('#reservationdate').datetimepicker({
                format: 'L'
            });
            $('#reservationdate').datetimepicker({
                format: 'L'
            });

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date and time picker
            $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function (event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            })

            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })

        })
        // BS-Stepper Init
        document.addEventListener('DOMContentLoaded', function () {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })

        // DropzoneJS Demo Code Start
        Dropzone.autoDiscover = false

        // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
        var previewNode = document.querySelector("#template")
        previewNode.id = ""
        var previewTemplate = previewNode.parentNode.innerHTML
        previewNode.parentNode.removeChild(previewNode)

        var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
            url: "/target-url", // Set the url
            thumbnailWidth: 80,
            thumbnailHeight: 80,
            parallelUploads: 20,
            previewTemplate: previewTemplate,
            autoQueue: false, // Make sure the files aren't queued until manually added
            previewsContainer: "#previews", // Define the container to display the previews
            clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
        })

        myDropzone.on("addedfile", function (file) {
            // Hookup the start button
            file.previewElement.querySelector(".start").onclick = function () { myDropzone.enqueueFile(file) }
        })

        // Update the total progress bar
        myDropzone.on("totaluploadprogress", function (progress) {
            document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
        })

        myDropzone.on("sending", function (file) {
            // Show the total progress bar when upload starts
            document.querySelector("#total-progress").style.opacity = "1"
            // And disable the start button
            file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
        })

        // Hide the total progress bar when nothing's uploading anymore
        myDropzone.on("queuecomplete", function (progress) {
            document.querySelector("#total-progress").style.opacity = "0"
        })

        // Setup the buttons for all transfers
        // The "add files" button doesn't need to be setup because the config
        // `clickable` has already been specified.
        document.querySelector("#actions .start").onclick = function () {
            myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
        }
        document.querySelector("#actions .cancel").onclick = function () {
            myDropzone.removeAllFiles(true)
        }
  // DropzoneJS Demo Code End
    </script>
<script></script>
</body>
</html>