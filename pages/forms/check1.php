if(isset($_POST['dnk'])){
    $query=mysqli_query($conn,"select * from leave_request where id='".$_POST['dnk']."'");
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
  
  if(isset($_POST['leaverequestedit'])){
    $id=$_POST['manualid'];
    $emp_id=$_POST['manualemplid'];
    $employee = $_POST['employee_name1'];
    $attendance_date = $_POST['attendance_date_m'];
    $in_time = $_POST['clock_in_m'];
    $out_time = $_POST['clock_out_m'];
   
    $sql="UPDATE `leave_request` SET `leave_type `='$leave_type',`leave_duration`='$leave_duration',`days`='$days',`applied_on`='$applied_on',`employee_name`='$employee' WHERE id='$id
    .'";
    if (mysqli_query($conn, $sql)){
      header("location:leave_request.php");
   } else {
      echo "<script> alert ('connection failed !');window.location.href='leave_request.php'</script>";
   }
  }
  