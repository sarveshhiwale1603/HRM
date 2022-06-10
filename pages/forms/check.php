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
  $status=1;
  date_default_timezone_set('Asia/Kolkata');
  $date=date("Y-m-d H:i:s");

  $sql=mysqli_query($conn,"INSERT INTO `overtime`(`name`, `in time`, `out time`, `reason`, `status`, `cur_date`) VALUES ('$emp_name','$in_time','$out_time','$reason','$status','$date')");
  if($sql){
    header("location:overtime-Request.php");
  }
}
?>