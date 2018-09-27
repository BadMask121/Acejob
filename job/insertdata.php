<?php
error_reporting(E_ALL);
session_start(0);


$servername = "localhost";
$username = "id1138035_acejob";
$password = "wondery2k";
$db_name ="id1138035_acejob";

// Create connection
$conn = new mysqli($servername,$username, $password,$db_name);
if ($conn->connect_error) {
  die("Connection to Database Failed: ".$conn->connect_error);
}

$error= "";

if($_SERVER['REQUEST_METHOD'] =="GET"){

$company_name = $_GET['company_name'];
$company_size =  $_GET['company_size'];
$poster_name =  $_GET['poster_name'];
$poster_department =  $_GET['poster_department'];
$company_phone =  $_GET['company_phone'];
$company_email =  $_GET['company_email'];


if($company_name!="" 
	&& $company_size!=""
	&& $poster_name!=""
	&& $poster_department!=""
	&& $company_phone!=""
	&& $company_email!="")
{

try { 


$companyquery = mysqli_query($conn,"INSERT INTO job (Company_phone,poster_name,company_size,department) VALUES(
	'$company_phone'
	,'$poster_name'
	,'$company_size'	
	,'$poster_department')") or die("Error inserting data into database");

$accountquery = mysqli_query($conn,"INSERT INTO job_user (company_name,company_email)
values('$company_name','$company_email') ")  or die("Error inserting data");


if($accountquery == true && $companyquery == true) {
echo "Data inserted successfully";

}else{
echo "Data not inserted";

 }
	
} catch (Exception $e) {
$e->getTraceAsString();	
}

}
else{
	echo "fields are empty ";
}

}else{
	echo "Error: requesting method is not found";
}



?>
