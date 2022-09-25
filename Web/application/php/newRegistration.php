<?php



try {
  include '../settings/config.php';
  if (isset($_REQUEST['submit'])) {

    $regNo = $_REQUEST['regNo'];
    $name = $_REQUEST['name'];
    $uname = $_REQUEST['uname'];
    $pass = $_REQUEST['pass'];
    $dob = $_REQUEST['dob'];
    $dept = $_REQUEST['dept'];
    $gender = $_REQUEST['gender'];
    $bgroup = $_REQUEST['bgroup'];
    $fname = $_REQUEST['fname'];
    $phone = $_REQUEST['phone'];
    $nation = $_REQUEST['nation'];
    $address = $_REQUEST['address'];

    $query = "INSERT INTO `student_registration` (`date`, `regno`, `name`, `uname`, `pass`, `dob`, `dept`, `gender`, `bgroup`, `fathername`,
 `phone`, `nation`, `address`) VALUES (current_timestamp(), '$regNo', '$name','$uname','$pass','$dob','$dept','$gender','$bgroup','$fname',$phone,'$nation','$address' )";

    $conn->exec($query);
    echo "Registration Sucess";
    $conn = null;
  }

  include '../../application/views/login.php';
} catch (PDOException $er) {
  echo "Connection failed: " . $er->getMessage();
}