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

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
        </nav>
        <!-- /.navbar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
              <span class="brand-text font-weight-light">AdminLTE 4</span>
            </a>
        
            <!-- Sidebar -->
            <div class="sidebar">
              <!-- Sidebar user (optional) -->
             
        
              <!-- SidebarSearch Form -->
              
        
              <!-- Sidebar Menu -->
              <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                  <li class="nav-item">
                    <a href="tectignis.html" class="nav-link">
                      <i class="nav-icon fas fa-home"></i>
                      <p>
                        Home
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                        Employee
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-star"></i>
                      <p>
                        Core HR
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ol class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="Department.html" class="nav-link">
                          <i class="nav-icon fa fa-ellipsis"></i>
                          <p>Department</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="designation.html" class="nav-link">
                          <i class="nav-icon fa fa-ellipsis"></i>
                          <p>Designation</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="policies.html" class="nav-link">
                          <i class="nav-icon fa fa-ellipsis"></i>
                          <p>policies</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="announcement.html" class="nav-link">
                          <i class="nav-icon fa fa-astrick"></i>
                          <p>Make Announcement</p>
                        </a>
                      </li>
                    </ol>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-clock"></i>
                      <p>
                        Attendance
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <ol class="nav-item">
                        <a href="#" class="nav-link">
                          
                          <p>Attendance</p>
                        </a>
                      </ol>
                      <ol class="nav-item">
                        <a href="#" class="nav-link">
                        
                          <p>manul Attendance</p>
                        </a>
                      </ol>
                      <ol class="nav-item">
                        <a href="#" class="nav-link">
                          
                          <p>monthly Report</p>
                        </a>
                      </ol>
                      <ol class="nav-item">
                        <a href="#" class="nav-link">
                          <p>Overtime Request</p>
                        </a>
                      </ol>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-rupee-sign"></i>
                      <p>
                        Payroll
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-edit"></i>
                      <p>
                        Task
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-book"></i>
                      <p>
                        Project
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-handshake"></i>
                      <p>
                        Manage Clients
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon 	fa fa-user-plus"></i>
                      <p>
                        Leads
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-question-circle"></i>
                      <p>
                        Helpdesk
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class='nav-icon fas fa-chart-pie'></i>
                      <p>
                         Estimates
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class='nav-icon fas fa-plus-square'></i>
                      <p>
                        Leave Request
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon 	fa fa-laptop"></i>
                      <p>
                        Training Session
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-gavel"></i>
                      <p>
                        Disiplinary
                      </p>
                    </a>
                  </li>
                </ul>
              </nav>
              <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
          </aside>
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
                                            <h6 class="mb-1"> ANIKET NANGARE </h6>
                                            <p class="mb-0 text-muted"> @aniketnangare </p>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush mb-3">
                                   
                                    <li class="list-group-item border-bottom-0"> <span class="f-w-500"><i class="fa fa-envelope m-r-10"></i> Email  </span>  <span class="float-right" > aniket@gmail.com</span>
                                    </li>
                                    <li class="list-group-item"> <span class="f-w-500"><i class="fa fa-user m-r-10"></i>  Contact No </span> <a href="#"  class="float-right text-body">  4847473636 </a> </li>
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

                        <input type="hidden" id="user_id" value="6">
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
                                 <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="first_name">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="last_name">Last Name  <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name"  >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="last_name">Email  <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Email " >
                                                </div>
                                            </div>
                                 </div>  
                                 <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="Username">Username  <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control" id="Username" name="Username" placeholder="username">
                                        </div>
                                    </div>
                                   
                                      <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="status" class="control-label"> Status   <span class="text-danger">*</span></label>
                                                                    <select class="form-control select2" style="width: 100%;">
                                                                        <option selected="selected">  Active  </option>
                                                                        <option > Banned </option>
                                                                    </select> 
                                                                </div>
                                                            </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="last_name">Contact Number <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="Contact" name="contact" placeholder="Contact Number">
                                        </div>
                                    </div>



                         </div>  
                         <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="gender" class="control-label"> Gender  </label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option  selected="selected">  Male  </option>
                                        <option> Female </option>
                                    </select> 
                                </div>
                            </div>
                           
                              <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="country" class="control-label"> Country  <span class="text-danger">*</span> </label>
                                                            <select class="form-control select2" style="width: 100%;">
                                                                <option value="">
                                                                    Select One                    </option>
                                                                                        <option value="1" >
                                                                    Afghanistan                    </option>
                                                                                        <option value="2" >
                                                                    Albania                    </option>
                                                                                        <option value="3" >
                                                                    Algeria                    </option>
                                                                                        <option value="4" >
                                                                    American Samoa                    </option>
                                                                                        <option value="5" >
                                                                    Andorra                    </option>
                                                                                        <option value="6" >
                                                                    Angola                    </option>
                                                                                        <option value="7" >
                                                                    Anguilla                    </option>
                                                                                        <option value="8" >
                                                                    Antarctica                    </option>
                                                                                        <option value="9" >
                                                                    Antigua and Barbuda                    </option>
                                                                                        <option value="10" >
                                                                    Argentina                    </option>
                                                                                        <option value="11" >
                                                                    Armenia                    </option>
                                                                                        <option value="12" >
                                                                    Aruba                    </option>
                                                                                        <option value="13" >
                                                                    Australia                    </option>
                                                                                        <option value="14" >
                                                                    Austria                    </option>
                                                                                        <option value="15" >
                                                                    Azerbaijan                    </option>
                                                                                        <option value="16" >
                                                                    Bahamas                    </option>
                                                                                        <option value="17" >
                                                                    Bahrain                    </option>
                                                                                        <option value="18" >
                                                                    Bangladesh                    </option>
                                                                                        <option value="19" >
                                                                    Barbados                    </option>
                                                                                        <option value="20" >
                                                                    Belarus                    </option>
                                                                                        <option value="21" >
                                                                    Belgium                    </option>
                                                                                        <option value="22" >
                                                                    Belize                    </option>
                                                                                        <option value="23" >
                                                                    Benin                    </option>
                                                                                        <option value="24" >
                                                                    Bermuda                    </option>
                                                                                        <option value="25" >
                                                                    Bhutan                    </option>
                                                                                        <option value="26" >
                                                                    Bolivia                    </option>
                                                                                        <option value="27" >
                                                                    Bosnia and Herzegovina                    </option>
                                                                                        <option value="28" >
                                                                    Botswana                    </option>
                                                                                        <option value="29" >
                                                                    Bouvet Island                    </option>
                                                                                        <option value="30" >
                                                                    Brazil                    </option>
                                                                                        <option value="31" >
                                                                    British Indian Ocean Territory                    </option>
                                                                                        <option value="32" >
                                                                    Brunei Darussalam                    </option>
                                                                                        <option value="33" >
                                                                    Bulgaria                    </option>
                                                                                        <option value="34" >
                                                                    Burkina Faso                    </option>
                                                                                        <option value="35" >
                                                                    Burundi                    </option>
                                                                                        <option value="36" >
                                                                    Cambodia                    </option>
                                                                                        <option value="37" >
                                                                    Cameroon                    </option>
                                                                                        <option value="38" >
                                                                    Canada                    </option>
                                                                                        <option value="39" >
                                                                    Cape Verde                    </option>
                                                                                        <option value="40" >
                                                                    Cayman Islands                    </option>
                                                                                        <option value="41" >
                                                                    Central African Republic                    </option>
                                                                                        <option value="42" >
                                                                    Chad                    </option>
                                                                                        <option value="43" >
                                                                    Chile                    </option>
                                                                                        <option value="44" >
                                                                    China                    </option>
                                                                                        <option value="45" >
                                                                    Christmas Island                    </option>
                                                                                        <option value="46" >
                                                                    Cocos (Keeling) Islands                    </option>
                                                                                        <option value="47" >
                                                                    Colombia                    </option>
                                                                                        <option value="48" >
                                                                    Comoros                    </option>
                                                                                        <option value="49" >
                                                                    Congo                    </option>
                                                                                        <option value="50" >
                                                                    Cook Islands                    </option>
                                                                                        <option value="51" >
                                                                    Costa Rica                    </option>
                                                                                        <option value="52" >
                                                                    Croatia (Hrvatska)                    </option>
                                                                                        <option value="53" >
                                                                    Cuba                    </option>
                                                                                        <option value="54" >
                                                                    Cyprus                    </option>
                                                                                        <option value="55" >
                                                                    Czech Republic                    </option>
                                                                                        <option value="56" >
                                                                    Denmark                    </option>
                                                                                        <option value="57" >
                                                                    Djibouti                    </option>
                                                                                        <option value="58" >
                                                                    Dominica                    </option>
                                                                                        <option value="59" >
                                                                    Dominican Republic                    </option>
                                                                                        <option value="60" >
                                                                    East Timor                    </option>
                                                                                        <option value="61" >
                                                                    Ecuador                    </option>
                                                                                        <option value="62" >
                                                                    Egypt                    </option>
                                                                                        <option value="63" >
                                                                    El Salvador                    </option>
                                                                                        <option value="64" >
                                                                    Equatorial Guinea                    </option>
                                                                                        <option value="65" >
                                                                    Eritrea                    </option>
                                                                                        <option value="66" >
                                                                    Estonia                    </option>
                                                                                        <option value="67" >
                                                                    Ethiopia                    </option>
                                                                                        <option value="68" >
                                                                    Falkland Islands (Malvinas)                    </option>
                                                                                        <option value="69" >
                                                                    Faroe Islands                    </option>
                                                                                        <option value="70" >
                                                                    Fiji                    </option>
                                                                                        <option value="71" >
                                                                    Finland                    </option>
                                                                                        <option value="72" >
                                                                    France                    </option>
                                                                                        <option value="73" >
                                                                    France, Metropolitan                    </option>
                                                                                        <option value="74" >
                                                                    French Guiana                    </option>
                                                                                        <option value="75" >
                                                                    French Polynesia                    </option>
                                                                                        <option value="76" >
                                                                    French Southern Territories                    </option>
                                                                                        <option value="77" >
                                                                    Gabon                    </option>
                                                                                        <option value="78" >
                                                                    Gambia                    </option>
                                                                                        <option value="79" >
                                                                    Georgia                    </option>
                                                                                        <option value="80" >
                                                                    Germany                    </option>
                                                                                        <option value="81" >
                                                                    Ghana                    </option>
                                                                                        <option value="82" >
                                                                    Gibraltar                    </option>
                                                                                        <option value="83" >
                                                                    Guernsey                    </option>
                                                                                        <option value="84" >
                                                                    Greece                    </option>
                                                                                        <option value="85" >
                                                                    Greenland                    </option>
                                                                                        <option value="86" >
                                                                    Grenada                    </option>
                                                                                        <option value="87" >
                                                                    Guadeloupe                    </option>
                                                                                        <option value="88" >
                                                                    Guam                    </option>
                                                                                        <option value="89" >
                                                                    Guatemala                    </option>
                                                                                        <option value="90" >
                                                                    Guinea                    </option>
                                                                                        <option value="91" >
                                                                    Guinea-Bissau                    </option>
                                                                                        <option value="92" >
                                                                    Guyana                    </option>
                                                                                        <option value="93" >
                                                                    Haiti                    </option>
                                                                                        <option value="94" >
                                                                    Heard and Mc Donald Islands                    </option>
                                                                                        <option value="95" >
                                                                    Honduras                    </option>
                                                                                        <option value="96" >
                                                                    Hong Kong                    </option>
                                                                                        <option value="97" >
                                                                    Hungary                    </option>
                                                                                        <option value="98" >
                                                                    Iceland                    </option>
                                                                                        <option value="99" >
                                                                    India                    </option>
                                                                                        <option value="100" >
                                                                    Isle of Man                    </option>
                                                                                        <option value="101" >
                                                                    Indonesia                    </option>
                                                                                        <option value="102" >
                                                                    Iran (Islamic Republic of)                    </option>
                                                                                        <option value="103" >
                                                                    Iraq                    </option>
                                                                                        <option value="104" >
                                                                    Ireland                    </option>
                                                                                        <option value="105" >
                                                                    Israel                    </option>
                                                                                        <option value="106" >
                                                                    Italy                    </option>
                                                                                        <option value="107" >
                                                                    Ivory Coast                    </option>
                                                                                        <option value="108" >
                                                                    Jersey                    </option>
                                                                                        <option value="109" >
                                                                    Jamaica                    </option>
                                                                                        <option value="110" >
                                                                    Japan                    </option>
                                                                                        <option value="111" >
                                                                    Jordan                    </option>
                                                                                        <option value="112" >
                                                                    Kazakhstan                    </option>
                                                                                        <option value="113" >
                                                                    Kenya                    </option>
                                                                                        <option value="114" >
                                                                    Kiribati                    </option>
                                                                                        <option value="115" >
                                                                    Korea, Democratic People's Republic of                    </option>
                                                                                        <option value="116" >
                                                                    Korea, Republic of                    </option>
                                                                                        <option value="117" >
                                                                    Kosovo                    </option>
                                                                                        <option value="118" >
                                                                    Kuwait                    </option>
                                                                                        <option value="119" >
                                                                    Kyrgyzstan                    </option>
                                                                                        <option value="120" >
                                                                    Lao People's Democratic Republic                    </option>
                                                                                        <option value="121" >
                                                                    Latvia                    </option>
                                                                                        <option value="122" >
                                                                    Lebanon                    </option>
                                                                                        <option value="123" >
                                                                    Lesotho                    </option>
                                                                                        <option value="124" >
                                                                    Liberia                    </option>
                                                                                        <option value="125" >
                                                                    Libyan Arab Jamahiriya                    </option>
                                                                                        <option value="126" >
                                                                    Liechtenstein                    </option>
                                                                                        <option value="127" >
                                                                    Lithuania                    </option>
                                                                                        <option value="128" >
                                                                    Luxembourg                    </option>
                                                                                        <option value="129" >
                                                                    Macau                    </option>
                                                                                        <option value="130" >
                                                                    Macedonia                    </option>
                                                                                        <option value="131" >
                                                                    Madagascar                    </option>
                                                                                        <option value="132" >
                                                                    Malawi                    </option>
                                                                                        <option value="133" >
                                                                    Malaysia                    </option>
                                                                                        <option value="134" >
                                                                    Maldives                    </option>
                                                                                        <option value="135" >
                                                                    Mali                    </option>
                                                                                        <option value="136" >
                                                                    Malta                    </option>
                                                                                        <option value="137" >
                                                                    Marshall Islands                    </option>
                                                                                        <option value="138" >
                                                                    Martinique                    </option>
                                                                                        <option value="139" >
                                                                    Mauritania                    </option>
                                                                                        <option value="140" >
                                                                    Mauritius                    </option>
                                                                                        <option value="141" >
                                                                    Mayotte                    </option>
                                                                                        <option value="142" >
                                                                    Mexico                    </option>
                                                                                        <option value="143" >
                                                                    Micronesia, Federated States of                    </option>
                                                                                        <option value="144" >
                                                                    Moldova, Republic of                    </option>
                                                                                        <option value="145" >
                                                                    Monaco                    </option>
                                                                                        <option value="146" >
                                                                    Mongolia                    </option>
                                                                                        <option value="147" >
                                                                    Montenegro                    </option>
                                                                                        <option value="148" >
                                                                    Montserrat                    </option>
                                                                                        <option value="149" >
                                                                    Morocco                    </option>
                                                                                        <option value="150" >
                                                                    Mozambique                    </option>
                                                                                        <option value="151" >
                                                                    Myanmar                    </option>
                                                                                        <option value="152" >
                                                                    Namibia                    </option>
                                                                                        <option value="153" >
                                                                    Nauru                    </option>
                                                                                        <option value="154" >
                                                                    Nepal                    </option>
                                                                                        <option value="155" >
                                                                    Netherlands                    </option>
                                                                                        <option value="156" >
                                                                    Netherlands Antilles                    </option>
                                                                                        <option value="157" >
                                                                    New Caledonia                    </option>
                                                                                        <option value="158" >
                                                                    New Zealand                    </option>
                                                                                        <option value="159" >
                                                                    Nicaragua                    </option>
                                                                                        <option value="160" >
                                                                    Niger                    </option>
                                                                                        <option value="161" >
                                                                    Nigeria                    </option>
                                                                                        <option value="162" >
                                                                    Niue                    </option>
                                                                                        <option value="163" >
                                                                    Norfolk Island                    </option>
                                                                                        <option value="164" >
                                                                    Northern Mariana Islands                    </option>
                                                                                        <option value="165" >
                                                                    Norway                    </option>
                                                                                        <option value="166" >
                                                                    Oman                    </option>
                                                                                        <option value="167" >
                                                                    Pakistan                    </option>
                                                                                        <option value="168" >
                                                                    Palau                    </option>
                                                                                        <option value="169" >
                                                                    Palestine                    </option>
                                                                                        <option value="170" >
                                                                    Panama                    </option>
                                                                                        <option value="171" >
                                                                    Papua New Guinea                    </option>
                                                                                        <option value="172" >
                                                                    Paraguay                    </option>
                                                                                        <option value="173" >
                                                                    Peru                    </option>
                                                                                        <option value="174" >
                                                                    Philippines                    </option>
                                                                                        <option value="175" >
                                                                    Pitcairn                    </option>
                                                                                        <option value="176" >
                                                                    Poland                    </option>
                                                                                        <option value="177" >
                                                                    Portugal                    </option>
                                                                                        <option value="178" >
                                                                    Puerto Rico                    </option>
                                                                                        <option value="179" >
                                                                    Qatar                    </option>
                                                                                        <option value="180" >
                                                                    Reunion                    </option>
                                                                                        <option value="181" >
                                                                    Romania                    </option>
                                                                                        <option value="182" >
                                                                    Russian Federation                    </option>
                                                                                        <option value="183" >
                                                                    Rwanda                    </option>
                                                                                        <option value="184" >
                                                                    Saint Kitts and Nevis                    </option>
                                                                                        <option value="185" >
                                                                    Saint Lucia                    </option>
                                                                                        <option value="186" >
                                                                    Saint Vincent and the Grenadines                    </option>
                                                                                        <option value="187" >
                                                                    Samoa                    </option>
                                                                                        <option value="188" >
                                                                    San Marino                    </option>
                                                                                        <option value="189" >
                                                                    Sao Tome and Principe                    </option>
                                                                                        <option value="190" >
                                                                    Saudi Arabia                    </option>
                                                                                        <option value="191" >
                                                                    Senegal                    </option>
                                                                                        <option value="192" >
                                                                    Serbia                    </option>
                                                                                        <option value="193" >
                                                                    Seychelles                    </option>
                                                                                        <option value="194" >
                                                                    Sierra Leone                    </option>
                                                                                        <option value="195" >
                                                                    Singapore                    </option>
                                                                                        <option value="196" >
                                                                    Slovakia                    </option>
                                                                                        <option value="197" >
                                                                    Slovenia                    </option>
                                                                                        <option value="198" >
                                                                    Solomon Islands                    </option>
                                                                                        <option value="199" >
                                                                    Somalia                    </option>
                                                                                        <option value="200" >
                                                                    South Africa                    </option>
                                                                                        <option value="201" >
                                                                    South Georgia South Sandwich Islands                    </option>
                                                                                        <option value="202" >
                                                                    Spain                    </option>
                                                                                        <option value="203" >
                                                                    Sri Lanka                    </option>
                                                                                        <option value="204" >
                                                                    St. Helena                    </option>
                                                                                        <option value="205" >
                                                                    St. Pierre and Miquelon                    </option>
                                                                                        <option value="206" >
                                                                    Sudan                    </option>
                                                                                        <option value="207" >
                                                                    Suriname                    </option>
                                                                                        <option value="208" >
                                                                    Svalbard and Jan Mayen Islands                    </option>
                                                                                        <option value="209" >
                                                                    Swaziland                    </option>
                                                                                        <option value="210" >
                                                                    Sweden                    </option>
                                                                                        <option value="211" >
                                                                    Switzerland                    </option>
                                                                                        <option value="212" >
                                                                    Syrian Arab Republic                    </option>
                                                                                        <option value="213" >
                                                                    Taiwan                    </option>
                                                                                        <option value="214" >
                                                                    Tajikistan                    </option>
                                                                                        <option value="215" >
                                                                    Tanzania, United Republic of                    </option>
                                                                                        <option value="216" >
                                                                    Thailand                    </option>
                                                                                        <option value="217" >
                                                                    Togo                    </option>
                                                                                        <option value="218" >
                                                                    Tokelau                    </option>
                                                                                        <option value="219" >
                                                                    Tonga                    </option>
                                                                                        <option value="220" >
                                                                    Trinidad and Tobago                    </option>
                                                                                        <option value="221" >
                                                                    Tunisia                    </option>
                                                                                        <option value="222" >
                                                                    Turkey                    </option>
                                                                                        <option value="223" >
                                                                    Turkmenistan                    </option>
                                                                                        <option value="224" >
                                                                    Turks and Caicos Islands                    </option>
                                                                                        <option value="225" >
                                                                    Tuvalu                    </option>
                                                                                        <option value="226" >
                                                                    Uganda                    </option>
                                                                                        <option value="227" >
                                                                    Ukraine                    </option>
                                                                                        <option value="228" >
                                                                    United Arab Emirates                    </option>
                                                                                        <option value="229" >
                                                                    United Kingdom                    </option>
                                                                                        <option value="230" >
                                                                    United States                    </option>
                                                                                        <option value="231" >
                                                                    United States minor outlying islands                    </option>
                                                                                        <option value="232" >
                                                                    Uruguay                    </option>
                                                                                        <option value="233" >
                                                                    Uzbekistan                    </option>
                                                                                        <option value="234" >
                                                                    Vanuatu                    </option>
                                                                                        <option value="235" >
                                                                    Vatican City State                    </option>
                                                                                        <option value="236" >
                                                                    Venezuela                    </option>
                                                                                        <option value="237" >
                                                                    Vietnam                    </option>
                                                                                        <option value="238" >
                                                                    Virgin Islands (British)                    </option>
                                                                                        <option value="239" >
                                                                    Virgin Islands (U.S.)                    </option>
                                                                                        <option value="240" >
                                                                    Wallis and Futuna Islands                    </option>
                                                                                        <option value="241" >
                                                                    Western Sahara                    </option>
                                                                                        <option value="242" >
                                                                    Yemen                    </option>
                                                                                        <option value="243" >
                                                                    Zaire                    </option>
                                                                                        <option value="244" >
                                                                    Zambia                    </option>
                                                                                        <option value="245" >
                                                                    Zimbabwe                    </option>
                                                                                      </select> 
                                                        </div>
                                                    </div>
                          

                            
                 </div>     
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="first_name">Address</label>
                            <input type="text" class="form-control" id="Address" name="Address" placeholder="Address" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Address2"> &nbsp; </label>
                            
                            <input type="text" class="form-control" id="Address" name="Address" placeholder="Address line 2" >
                        </div>
                    </div>
                    
         </div>  
         <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="first_name">City</label>
                    <input type="text" class="form-control" id="City" name="City" placeholder="City">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="last_name">State / Province</label>
                    <input type="text" class="form-control" id="State" name="state" placeholder="State / Province" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="last_name">Zip Code / Postal Code</label>
                    <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code / Postal Code">
                </div>
            </div>
 </div>   
 <button type="submit" class="btn btn-primary" style="float: right;">Save</button>  
    <!-- PERSONAL INFORMATION -->
                                          
                                        </div>
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
                                                <form action="" name="edit_user_photo" id="edit_user_photo" autocomplete="off" method="post" accept-charset="utf-8">
                                                    <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                                    <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw"style="display:none;">
                                                    <div class="form-body">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="logo">  Profile Picture <span class="text-danger">*</span> </label>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input"  name="file">
                                                                        <label class="custom-file-label"> Choose file... </label>
                                                                        <small> Upload files only: gif,png,jpg,jpeg </small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary ladda-button" data-style="expand-right"><span class="ladda-label"> Update Picture </span><span class="ladda-spinner"></span></button>
                                        </div>
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
                                                        <table id="PROJECT" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="PROJECT__info">
                                                          <thead>
                                                           <tr>
                                                           <th>PROJECT</th>
                                                           <th>PRIORITY </th>
                                                           <th>TEAM</th>
                                                           <th>START DATE</th>
                                                           <th>END DATE</th>

                                                           <th>PROGRESS</th>

                                                          
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
                                        <form action="" name="change_password" id="change_password" autocomplete="off" method="post" accept-charset="utf-8">
                                            <input type="hidden" name="csrf_token" value="53a234476ba3b824da743d5aeaa31e04">
                                            <input type="hidden" name="token" value="vx26WfVlb_M1fWrFzCPYekQi1KECygUtBMb5BV7fnAw" style="display:none;">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>  Current password </label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-eye"></i></span></div>
                                                                <input type="password" readonly="readonly" class="form-control" name="pass"  placeholder="Current password" value="********">
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
                                                                <input type="password" class="form-control" name="new_password" placeholder="New password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label>  Repeat new password <span class="text-danger">*</span></label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-eye"></i></span></div>
                                                                <input type="password" class="form-control" name="confirm_password"  placeholder="Repeat new password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-danger ladda-button"  data-style="expand-right"><span class="ladda-label">  Change Password </span><span  class="ladda-spinner"></span></button>
                                            </div>
                                            <div style="display:none"><label>Bot Will Fill This Field</label><input  type="text" name="ciapp_check" value=""></div>
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
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
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

</body>
</html>