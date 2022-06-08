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
    $sql=mysqli_query($conn,"INSERT INTO `login`(`name`, `email`, `password`, `status`, `create_date`,`staff`) VALUES ('$fname','$email','$hashpassword','$status','$date','$staff')");
  
    $sql=mysqli_query($conn,"INSERT INTO `employee`( `fname`, `lname`, `employee_code`, `mobile`, `gender`, `email`, `uname`, `password`, `shift`, `role`, `department`, `designation`, `salary`, `payslip`, `image`,`city`, `create_date`, `status`) VALUES ('$fname','$lname','$empid','$contact','$gender','$email','$uname','$hashpassword','$shift','$role','$department','$designation','$salary','$slip','$file','$city','$date','$status')");
    if($sql==1){
        header("location:employees.php");
    }else{
        echo "<script>alert('Something went wrong')</script>";
    }
}
?>