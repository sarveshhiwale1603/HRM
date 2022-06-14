<?php
include("../include/config.php");

if(!empty($_POST["department"])){ 
    $department_id = $_POST["department"];
  $query = mysqli_query($conn,"SELECT designation.id as id,designation.designation_name as designation_name FROM designation inner join department  on designation.department_id=department.id WHERE department_id='$department_id'"); 
   ?>
   <option value="">Select Designation</option>
     <?php while($row = $query->fetch_assoc()){  ?>
         <option value="<?php echo $row['id'] ?>"><?php echo $row['designation_name']?></option> 
    <?php  } 
  }else{ ?>
    <option value="">designation not found</option>
 <?php } 
?>
<?php
if(isset($_POST['Save'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $empid=$_POST['empid'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $hashpassword=password_hash($password,PASSWORD_BCRYPT);
    $shift=$_POST['shift'];
    $role=$_POST['role'];
    $department=$_POST['department'];
    $designation=$_POST['designation'];
    $salary=$_POST['salary'];
    $slip=$_POST['slip'];
    $city=$_POST['city'];
    $file=$_FILES['file']['name'];
    $status=1;
    date_default_timezone_set('Asia/Kolkata');
  $date=date("Y-m-d H:i:s");
$dnk="image/employee_image/";
$staff="employee";
  move_uploaded_file($_FILES['file']['tmp_name'],$dnk.$file);
    $sql=mysqli_query($conn,"INSERT INTO `login`(`name`,`lname`, `email`, `password`, `status`, `create_date`,`staff`) VALUES ('$fname','$lname','$email','$hashpassword','$status','$date','$staff')");
  
    $sql=mysqli_query($conn,"INSERT INTO `employee`( `fname`, `lname`, `employee_code`, `mobile`, `gender`, `email`, `uname`, `password`, `shift`, `role`, `department`, `designation`, `salary`, `payslip`, `image`,`city`, `create_date`, `status`) VALUES ('$fname','$lname','$empid','$contact','$gender','$email','$uname','$hashpassword','$shift','$role','$department','$designation','$salary','$slip','$file','$city','$date','$status')");
    if($sql==1){
        header("location:employees.php");
    }else{
        echo "<script>alert('Something went wrong')</script>";
    }
}

if(isset($_POST['save_shift'])){
    $shift_name=$_POST['shift_name'];
    $monday_in=$_POST['monday_in'];
    $monday_out=$_POST['monday_out'];
    $tuesday_in=$_POST['tuesday_in'];
    $tuesday_out=$_POST['tuesday_out'];
    $wednesday_in=$_POST['wednesday_in'];
    $wednesday_out=$_POST['wednesday_out'];
    $thursday_in=$_POST['thursday_in'];
    $thursday_out=$_POST['thursday_out'];
    $friday_in=$_POST['friday_in'];
    $friday_out=$_POST['friday_out'];
    $saturday_in=$_POST['saturday_in'];
    $saturday_out=$_POST['tuesday_out'];
    $sunday_in="Holiday";
   
    $sql=mysqli_query($conn,"INSERT INTO `shift_time`( `shift`, `monday_start_time`, `monday_end_time`, `tuesday_start_time`, `tuesday_end_time`, `wednesday_start_time`, `wednesday_end_time`, `thursday_start_time`, `thursday_end_time`, `friday_start_time`, `friday_end_time`, `saturday`, `saturday_end_time`, `sunday`) VALUES ('$shift_name','$monday_in','$monday_out','$tuesday_in','$tuesday_out','$wednesday_in','$wednesday_out','$thursday_in','$thursday_out','$friday_in','$friday_out','$saturday_in','$saturday_out','$sunday_in')");
    if($sql==1){
        header("location:shift&scheduling.php");}else{ echo "<script>alert('Something went wrong');window.location.href='shift&scheduling.php'</script>";}
}

if(isset($_POST['exitSave'])){
    $emp_name=$_POST['emp_name'];
    $exit_date=$_POST['exit_date'];
    $exit_type=$_POST['exit_type'];
    $exit_int=$_POST['exit_int'];
    $disable_acc=$_POST['disable_acc'];
    $desc=$_POST['desc'];
    $file=$_FILES['file']['name'];
    $file_tmp=$_FILES['file']['tmp_name'];
    $status=1;
    $dnk="image/exit_employee/";
    
    date_default_timezone_set('Asia/Kolkata');
  $date=date("Y-m-d H:i:s");
  move_uploaded_file($file_tmp,$dnk.$file);

    $sql=mysqli_query($conn,"INSERT INTO `exit_employee`(`name`, `date`, `type`, `interview`, `disable`, `desc`, `image`, `status`, `current_dates`) VALUES ('$emp_name','$exit_date','$exit_type','$exit_int','$disable_acc','$desc','$file','$status','$date')");
    if($sql==1){
        header("location:employees-Exit.php");}else{ echo "<script>alert('Something went wrong');window.location.href='exit_employee.php'</script>";}
}


if(isset($_POST['client_profile'])){
    $client_id=$_POST['client_id'];
    $file=$_FILES['file']['name'];
     /* Location */
   $location = "image/manage_image/".$file;
  
      if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
         $sql=mysqli_query($conn,"UPDATE `manage_client` SET `profile`='$file' WHERE `id`='$client_id'");

         if($sql==1){
            header("location:client-Details.php?manageid=$client_id");
         }
      }

}
?>