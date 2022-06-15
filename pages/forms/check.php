<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
}?>
<?php
if(isset($_POST['userid'])){
$query=mysqli_query($conn,"select * from exit_employee where id='".$_POST['userid']."'");
$row=mysqli_fetch_array($query);
echo '<table class="table table-striped" style="border-top:none;">
      <tr>
        <th>Employee to Exit</th>
        <td>'.$row['name'].'</td>
      </tr>
      <tr>
        <th>Exit Date</th>
        <td>'.$row['date'].'</td>
      </tr>
      <tr>
        <th>Type of Exit</th>
        <td>'.$row['type'].'</td>
      </tr>
      <tr>
        <th>Exit Interview</th>
        <td>'.$row['interview'].'</td>
      </tr>
      <tr>
        <th>Disable Account</th>
        <td>'.$row['disable'].'</td>
      </tr>
      <tr>
        <th>Description</th>
        <td>'.$row['desc'].'</td>
      </tr>
  </table>';
}

//edit
if(isset($_POST['usereditid'])){
    $query=mysqli_query($conn,"select * from exit_employee inner join exit_type on exit_employee.type=exit_type.id where exit_employee.id='".$_POST['usereditid']."'");
$row=mysqli_fetch_array($query);
       echo '<div class="modal-body">';
       echo '<div class="row">';
       echo '<div class="col-md-6">';
       echo '<div class="form-group">';
       echo '<label for="exit_date">
                  Exit Date          <span class="text-danger">*</span></label>';
                  echo ' 
                  <input type="hidden" name="id" value="'.$_POST['usereditid'].'">
                  <input class="form-control d_date" placeholder="Exit Date" readonly="" name="exit_date" type="text" value="'.$row['date'].'" data-dtp="dtp_511uo">';
                  echo '</div>';
                  echo ' </div>';
                  echo ' <div class="col-md-6">';
                  echo ' <div class="form-group">';
                  echo '<label for="type">
                  Type of Exit <span class="text-danger">*</span></label>';
                  echo ' <select class="select2 form-control"  name="exit_type" >';
                  echo '<option value="'.$row['type'].'">'.$row['type'].'</option>';
                    $sql=mysqli_query($conn,'select * from exit_type');
                    while($row1=mysqli_fetch_array($sql)){
                        echo '<option value="'.$row1['id'].'">'.$row1['type'].'</option>';
                    }
                  echo '  </select>';
                  echo ' </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="exit_interview">
                  Exit Interview          <span class="text-danger">*</span></label>
                <select class="select2 form-control" name="exit_interview">
                <option value="'.$row['interview'].'" selected>'.$row['interview'].'</option>
                  <option value="Yes"> Yes </option>
                  <option value="No"  data-select2-id="200">No</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="is_inactivate_account">
                  Disable Account          <span class="text-danger">*</span></label>
                <select class="select2 form-control"  name="is_inactivate_account" >
                <option value="'.$row['disable'].'" selected>'.$row['disable'].'</option>
                  <option value="Yes">
                  Yes          </option>
                  <option value="No" data-select2-id="204">
                  No          </option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label for="description">
                  Description        </label>
                <textarea class="form-control textarea" placeholder="Description" name="reason" cols="30" rows="5">'.$row['desc'].'</textarea>
              </div>
            </div>
          </div>
        </div>
        <div>
        <button type="submit" name="update" class="btn btn-success float-right mb-3 mr-2">Submit</button>
        </div>
        ';
}


if(isset($_GET['did'])){
    $query=mysqli_query($conn,"delete from exit_employee where id='".$_GET['did']."'");
    if($query){
      header("location:employees-Exit.php");}
      else{
        echo "<script>alert('Record not deleted');</script>";
      }

}

if(isset($_POST['update'])){
    $exit_date=$_POST['exit_date'];
    $exit_type=$_POST['exit_type'];
    $exit_interview=$_POST['exit_interview'];
    $is_inactivate_account=$_POST['is_inactivate_account'];
    $reason=$_POST['reason'];
    $id=$_POST['id'];
    
    $sql=mysqli_query($conn,"UPDATE `exit_employee` SET `date`='$exit_date',`type`='$exit_type',`interview`='$exit_interview',`disable`='$is_inactivate_account',`desc`='$reason' WHERE id='$id'");
    if($sql){
        header("location:employees-Exit.php");
    }
}

if(isset($_POST['save_overtime'])){
  $emp_name=$_POST['emp_name'];
  $date=$_POST['date'];
  $in_time=$_POST['in_time'];
  $out_time=$_POST['out_time'];
  $reason=$_POST['reason'];
  $status="pending";
  date_default_timezone_set('Asia/Kolkata');
  $date1=date("Y-m-d H:i:s");

  $sql=mysqli_query($conn,"INSERT INTO `overtime`(`name`,`date`, `in_time`, `out_time`, `reason`, `status`, `cur_date`) VALUES ('$emp_name','$date','$in_time','$out_time','$reason','$status','$date1')");
  if($sql){
    header("location:overtime-Request.php");
  }
}


if(isset($_GET['deleteid'])){
  $delid = $_GET['deleteid'];
  $sql = "DELETE FROM overtime WHERE id = '$delid'";
  $result = mysqli_query($conn, $sql);
  if($result){header ("location:overtime-Request.php"); }
  else{ echo "<script>alert('Failed to Delete')</script>"; }
}

if(isset($_POST['overtimeeditid'])){
  $query=mysqli_query($conn,"select * from overtime where id='".$_POST['overtimeeditid']."'");
  $row=mysqli_fetch_array($query);
         echo '<div class="modal-body">
         <div class="row">
           <div class="col-md-12">
                           <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                   <label for="first_name">
                     Employee <span class="text-danger">*</span>
                   </label>
                   <select class="form-control " name="employee_name">';
                  echo'  <option value="'.$row['name'].'" selected>'.$row['name'].'</option>';
                  $sql=mysqli_query($conn,"SELECT * FROM employee");
                  while($dnk=mysqli_fetch_array($sql)){
                    echo "<option value='".$dnk['fname']." ".$dnk['lname']."'>".$dnk['fname']." ".$dnk['lname']."</option>";
                  }
                                  echo ' </select>
                 </div>
               </div>
             </div>
                     <div class="row">
           <div class="col-md-6">
             <div class="form-group">
               <label for="date">Date <span class="text-danger">*</span></label>
               
               <div class="input-group">
               <input type="hidden" name="overtimeeditid" value="'.$row['id'].'">
                     <input class="form-control "placeholder="Date" name="attendance_date_m" id="datepicker" type="text" value="'.$row['date'].'" readonly>
                     <div class="input-group-append"><span class="input-group-text"><i class="fas fa-calendar-alt"></i></span></div>
                 </div>
             </div>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <label for="status">Status</label>
                     <select class="form-control" name="status" >
                       <option value="'.$row['status'].'" selected>'.$row['status'].'</option>
                       <option value="Accepted">Accepted</option>
                       <option value="Rejected">Rejected</option>
                     </select>
               </div>
               </div>
               </div>
             
             <div class="row">
                      <div class="col-md-6">
                 <div class="form-group">
                   <label for="clock_in">In Time <span class="text-danger">*</span></label>
                   <div class="input-group" id="timepicker2">
                    <input class="form-control datetimepicker-input" placeholder="In Time"  name="clock_in_m" type="text" value="'.$row['in_time'].'" data-target="#timepicker2" readonly>
                     <div class="input-group-append" data-target="#timepicker2" data-toggle="datetimepicker"><span class="input-group-text"><i class="fas fa-clock"></i></span></div>
                 </div>
                 </div>
               </div>
                          <div class="col-md-6">
                 <div class="form-group">
                   <label for="clock_out">Out Time <span class="text-danger">*</span></label>
                   <div class="input-group">
                    <input class="form-control timepicker" placeholder="Out Time" name="clock_out_m" type="text" value="'.$row['out_time'].'" data-dtp="dtp_lbLY4" readonly>
                     <div class="input-group-append"><span class="input-group-text"><i class="fas fa-clock"></i></span></div>
                 </div>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-12">
                 <div class="form-group">
                   <label for="date">Reason <span class="text-danger">*</span></label>
                   <textarea class="form-control" placeholder="Reason" name="reason" type="text">'.$row['reason'].'</textarea>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="modal-footer">
       <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
       <button type="submit" class="btn btn-primary ladda-button" name="saveOvertime" data-style="expand-right"><span class="ladda-label">Update</span><span class="ladda-spinner"></span></button>
     </div>          ';
}


if(isset($_POST['saveOvertime'])){
  $emp_name=$_POST['employee_name'];
  $date=$_POST['attendance_date_m'];
  $in_time=$_POST['clock_in_m'];
  $out_time=$_POST['clock_out_m'];
  $reason=$_POST['reason'];
  $status=$_POST['status'];
  $id=$_POST['overtimeeditid'];

  $sql=mysqli_query($conn,"UPDATE `overtime` SET `name`='$emp_name',`date`='$date',`in_time`='$in_time',`out_time`='$out_time',`reason`='$reason',`status`='$status' WHERE id='$id'");
  if($sql){
    header("location:overtime-Request.php");
  }
}


if(isset($_POST['dnk'])){
  $query=mysqli_query($conn,"select * from attendance where id='".$_POST['dnk']."'");
  $row=mysqli_fetch_array($query);
  echo '  <div class="row">
  <div class="col-md-12">
                <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="first_name">
            Employee <span class="text-danger">*</span>
          </label>
          <input type="hidden" name="manualid" value="'.$row['id'].'">
          <input type="hidden" name="manualemplid" value="'.$row['employee_id'].'">';
          
        echo'  <select class="form-control select2-hidden-accessible" name="employee_name1" data-plugin="select_hrm" data-placeholder="Employee" tabindex="-1" aria-hidden="true" data-select2-id="44">';
        echo'  <option value="'.$row['employee_name'].'" selected>'.$row['employee_name'].'</option>';
          $query=mysqli_query($conn,"select * from employee");
                  while($sql=mysqli_fetch_array($query))
                  { echo "<option value='".$sql['fname']." ".$sql['lname']."'>".$sql['fname']." ".$sql['lname']."</option>";
                       } 
                       echo' </select>
        </div>
      </div>
    </div>
          <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="date">
            Attendance Date <span class="text-danger">*</span>
          </label>
          <div class="input-group">
            <input class="form-control attendance_date_e" placeholder="Attendance Date" name="attendance_date_m" type="text" value="'.$row['date'].'" data-dtp="dtp_dl6pL">
            <div class="input-group-append"><span class="input-group-text"><i class="fas fa-calendar-alt"></i></span></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
              <div class="col-md-6">
        <div class="form-group">
          <label for="clock_in">
            In Time <span class="text-danger">*</span>
          </label>
          <div class="input-group">
            <input class="form-control timepicker" placeholder="In Time" readonly="true" name="clock_in_m" type="text" value="'.$row['clock_in'].'" data-dtp="dtp_qHHzf">
            <div class="input-group-append"><span class="input-group-text"><i class="fas fa-clock"></i></span></div>
          </div>
        </div>
      </div>
              <div class="col-md-6">
        <div class="form-group">
          <label for="clock_out">
            Out Time <span class="text-danger">*</span>
          </label>
          <div class="input-group">
            <input class="form-control timepicker" placeholder="Out Time" readonly="true" name="clock_out_m" type="text" value="'.$row['clock_out'].'" data-dtp="dtp_XXfJ3">
            <div class="input-group-append"><span class="input-group-text"><i class="fas fa-clock"></i></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
';
}

if(isset($_POST['manualAttendanceEdit'])){
  $id=$_POST['manualid'];
  $emp_id=$_POST['manualemplid'];
  $employee = $_POST['employee_name1'];
  $attendance_date = $_POST['attendance_date_m'];
  $in_time = $_POST['clock_in_m'];
  $out_time = $_POST['clock_out_m'];
 
  $sql="UPDATE `attendance` SET `date`='$attendance_date',`clock_in`='$in_time',`clock_out`='$out_time',`employee_id`='$emp_id',`employee_name`='$employee' WHERE id='$id
  .'";
  if (mysqli_query($conn, $sql)){
    header("location:manual-attendance.php");
 } else {
    echo "<script> alert ('connection failed !');window.location.href='manual-Attendance.php'</script>";
 }
}




if(isset($_GET['managedelid'])){
  $query=mysqli_query($conn,"delete from manage_client where id='".$_GET['managedelid']."'");
  if($query){
    header("location:manage.php");}
    else{
      echo "<script>alert('Record not deleted');</script>";
    }
}

if(isset($_POST['client_detail_update1'])){
  $user_id=$_POST['user_id'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $email=$_POST['email'];
  $Username=$_POST['Username'];
  $status=$_POST['status'];
  $contact=$_POST['contact'];
  $gender=$_POST['gender'];
  $country=$_POST['country'];
  $Address=$_POST['Address'];
  $Address2=$_POST['Address2'];
  $City=$_POST['City'];
  $state=$_POST['state'];
  $zip=$_POST['zip'];
  
  $sql2=mysqli_query($conn,"UPDATE `manage_client` SET `first_name`='$first_name',`last_name`='$last_name',`contact`='$contact',`gender`='$gender',`email`='$email',`username`='$Username',`status`='$status',`country`='$country',`address`='$Address',`address2`='$Address2',`city`='$City',`state`='$state',`zip_code`='$zip' WHERE id='$user_id'");
  if($sql2){
    echo "Record updated";
  }
  else{
    echo "Record not updated";
  }
  }

  if(isset($_POST['changepassword'])){
    $cur_id=$_POST['cur_id'];
    $cur_pass=$_POST['cur_pass'];
    $new_pass=$_POST['new_pass'];

    $sql=mysqli_query($conn,"select * from manage_client where id='$cur_id'");
    $row=mysqli_fetch_array($sql);
    $cur_password=$row['password'];

    if(password_verify($cur_pass, $cur_password)){
      $new_password=password_hash($new_pass, PASSWORD_BCRYPT);
      $sql2=mysqli_query($conn,"UPDATE `manage_client` SET `password`='$new_password' WHERE id='$cur_id'");
    }
    else{
      echo "<script>alert('Current password is incorrect');</script>";
    }
  }










  if(isset($_POST['dnkk'])){
    $query=mysqli_query($conn,"select * from leave_request where id='".$_POST['dnkk']."'");
    $row=mysqli_fetch_array($query);
    echo '  <div class="row">
    <div class="col-md-12">
                  <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="first_name">
              Employee <span class="text-danger">*</span>
            </label>
            <input type="hidden" name="leaveid" value="'.$row['id'].'">
            <input type="hidden" name="leaveemplid" value="'.$row['employee_id'].'">';
            
          echo'  <select class="form-control select2-hidden-accessible" name="employee_name2" data-plugin="select_hrm" data-placeholder="Employee" tabindex="-1" aria-hidden="true" data-select2-id="44">';
          echo'  <option value="'.$row['employee'].'" selected>'.$row['employee'].'</option>';
            $query=mysqli_query($conn,"select * from employee");
                    while($sql=mysqli_fetch_array($query))
                    { echo "<option value='".$sql['fname']." ".$sql['lname']."'>".$sql['fname']." ".$sql['lname']."</option>";
                         } 
                         echo' </select>
          </div>
        </div>
      </div>
            <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="date">
              Leave Type <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control leave_type" placeholder="Leave Type" name="leave_type" type="text" value="'.$row['leave_type'].'" data-dtp="dtp_dl6pL">
              
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label for="date">
           Applied On <span class="text-danger">*</span>
          </label>
          <div class="input-group">
            <input class="form-control applied_on" placeholder="Applied On " name="applied_on" type="date" value="'.$row['date'].'" data-dtp="dtp_dl6pL">
            
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
         Start Date <span class="text-danger">*</span>
        </label>
        <div class="input-group">
          <input class="form-control start_date" placeholder="Applied On " name="start_date" type="date" value="'.$row['start_date'].'" data-dtp="dtp_dl6pL">
          
        </div>
      </div>
    </div>
  </div>
      <div class="row">
                <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
             End date <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control end_date" placeholder="leave duration" name="end_date" type="date" value="'.$row['end_date'].'"  data-dtp="dtp_qHHzf">
              
            </div>
          </div>
        </div>
                
      </div>

    </div>
  </div>
  ';
  }
  
  if(isset($_POST['leaveEdit'])){
    $id=$_POST['leaveid'];
    $emp_id=$_POST['leaveemplid'];
    $employee = $_POST['employee_name2'];
    $leave_type = $_POST['leave_type'];
    $applied_on = $_POST['applied_on'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
   
    $sql="UPDATE `leave_request` SET `leave_type`='$leave_type',`start_date`='$start_date',`end_date`='$end_date',`employee_id`='$emp_id',`employee`='$employee' WHERE id='$id
    .'";
    if (mysqli_query($conn, $sql)){
      header("location:leave_request.php");
   } else {
      echo "<script> alert ('connection failed !');window.location.href='leave_request.php'</script>";
   }
  }
  



  if(isset($_POST['dnk1'])){
    $query=mysqli_query($conn,"select * from leave_type where id='".$_POST['dnk1']."'");
    $row=mysqli_fetch_array($query);
    echo '  <div class="row">
    <div class="col-md-12">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="date">
        Leave Type <span class="text-danger">*</span>
        </label>
        <div class="input-group">
        <input type="hidden" name="leaveid" value="'.$row['id'].'">
            <input type="hidden" name="leaveemplid" value="'.$row['employee_id'].'">
          <input class="form-control Leave_type" placeholder="Applied On " name="leave_type" type="text" value="'.$row['leave_type'].'" data-dtp="dtp_dl6pL">
          
        </div>
      </div>
    </div>
  </div>
 
      <div class="row">
                <div class="col-md-12">
          <div class="form-group">
            <label for="clock_in">
            Days per year <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control end_date" placeholder="leave duration" name="days_per_year" type="text" value="'.$row['days_per_year'].'"  data-dtp="dtp_qHHzf">
              
            </div>
          </div>
        </div>
                
      </div>
      <div class="col-md-12">
      <div class="form-group">
        <label for="date">
       Requires Approval<span class="text-danger">*</span>
        </label>
        <div class="input-group">
          <input class="form-control requires_approval" placeholder="requires approval " name="requires_approval" type="text" value="'.$row['requires_approval'].'" data-dtp="dtp_dl6pL">
          
        </div>
      </div>
    </div>
  </div>

    </div>
  </div>
  ';
  }
  
  if(isset($_POST['leavetypeEdit'])){
    $id=$_POST['leaveid'];
    $emp_id=$_POST['leaveemplid'];
    
    $leave_type = $_POST['leave_type'];
    $days_per_year = $_POST['days_per_year'];
    $requires_approval = $_POST['requires_approval'];
   
   
    $sql="UPDATE `leave_type` SET `leave_type`='$leave_type',`days_per_year`='$days_per_year',`requires_approval`='$requires_approval',`employee_id`='$emp_id' WHERE id='$id
    .'";
    if (mysqli_query($conn, $sql)){
      header("location:leave.php");
   } else {
      echo "<script> alert ('connection failed !');window.location.href='leave.php'</script>";
   }
  }
  






?>
  