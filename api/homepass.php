<?php
session_start();
error_reporting(0);
include '../database/config.php';

$userid=$_SESSION["job_id"];
$query="SELECT * from job where id='userid'";
$result =mysqli_query($conn,$query);

$row=mysqli_fetch_array($result);

$title=$row['job_title'];
$location=$row['location'];
$country=$row['company_country'];
$company=$row['poster_company'];
$logo =$row['company_logo'];
$id =$row['id'];


if(!$_SESSION["job_id"]==$id){
$success=$_SESSION['login_user'];

}else{
$success=$_SESSION["job_id"];
}

echo $success;
 ?>
