<?php
session_start();
include '../database/config.php';

$error =array();
$form_data =array();

$email = mysqli_real_escape_string($conn,$_POST['email2']);
$password = mysqli_real_escape_string($conn,$_POST['password2']);
$logquery = "SELECT job_id, email, password from job_user WHERE  email='$email' and password='$password'";
$result = mysqli_query($conn,$logquery);
$row=mysqli_num_rows($result);

$row1=mysqli_fetch_array($result,MYSQLI_ASSOC);



if($row !=0){

$uservalue=$_POST['email2'];

$_SESSION["login_user"]=$uservalue;
$_SESSION["job_id"]=$row1['job_id'];

$form_data['success']="good";
$loginuser = $_SESSION["login_user"];

mysqli_close($conn);

}else {
  $form_data['error']="Invalid user details";
  mysqli_close($conn);
}

echo json_encode($form_data);

?>
