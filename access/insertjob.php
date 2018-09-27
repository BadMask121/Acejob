<?php
session_start();
include '../database/config.php';

$form_data=array();

$getjobtitle=mysqli_real_escape_string($conn,$_POST['getjobtitle']);
$getcomnam=mysqli_real_escape_string($conn,$_POST['getcomnam']);
$getjobterm=mysqli_real_escape_string($conn,$_POST['getjobterm']);
$comphone=mysqli_real_escape_string($conn,$_POST['comphone']);
$getjobcompanyemail=mysqli_real_escape_string($conn,$_POST['getjobcompanyemail']);
$getjobyears=mysqli_real_escape_string($conn,$_POST['getjobyears']);
$postname=mysqli_real_escape_string($conn,$_POST['postname']);
$comsize=mysqli_real_escape_string($conn,$_POST['comsize']);
$getjobcompanylocation=mysqli_real_escape_string($conn,$_POST['getjobcompanylocation']);
$getjobcompanycountry=mysqli_real_escape_string($conn,$_POST['getjobcompanycountry']);
$department=mysqli_real_escape_string($conn,$_POST['department']);
$getjobcurrency=mysqli_real_escape_string($conn,$_POST['getjobcurrency']);

$getcomemail=mysqli_real_escape_string($conn,$_POST['getcomemail']);
$comname=mysqli_real_escape_string($conn,$_POST['comname']);

$getjobsalaryamount=mysqli_real_escape_string($conn,$_POST['getjobsalaryamount']);
$getjobsalaryterm=mysqli_real_escape_string($conn,$_POST['getjobsalaryterm']);
$getjobeducation=mysqli_real_escape_string($conn,$_POST['getjobeducation']);

$getdescipt=mysqli_real_escape_string($conn,$_POST['getdes']);

$get=str_ireplace('<p>','',$getdescipt);
$getdes=str_ireplace('</p>','',$get);


$getreceive=mysqli_real_escape_string($conn,$_POST['getreceive']);
$getcompanypostresume=mysqli_real_escape_string($conn,$_POST['getcompanypostresume']);
$getjobexperience=mysqli_real_escape_string($conn,$_POST['getjobexperience']);
$getjoblicense=mysqli_real_escape_string($conn,$_POST['getjoblicense']);
$getjoblanguage=mysqli_real_escape_string($conn,$_POST['getjoblanguage']);

    $auto1 = "ALTER TABLE job DROP id";
    $autosec1 = "ALTER TABLE job ADD  id BIGINT( 200 ) NOT NULL AUTO_INCREMENT FIRST ,ADD PRIMARY KEY (id)";
    $autos1 =mysqli_query($conn,$auto1);
    $autos1 =mysqli_query($conn,$autosec1);


$user =$_SESSION["job_id"];
$query2 = "UPDATE job_user SET company_name='$getcomnam', company_email='$getcomemail' WHERE job_id='$user'";
$res2 = mysqli_query($conn,$query2);

$query="INSERT INTO job(
job_id,
job_title,
poster_company,
job_terms,
Company_phone,
job_email,
job_years,
poster_name,
company_size,
location,
company_country,
department,
currency,
salary,
salary_term,
job_description,
job_education,
job_language,
job_post_option,
job_resume_option,
experience,
licence

)

VALUES('$user'
,'$getjobtitle'
,'$getcomnam'
,'$getjobterm'
,'$comphone'
,'$getjobcompanyemail'
,'$getjobyears'
,'$postname'
,'$comsize'
,'$getjobcompanylocation'
,'$getjobcompanycountry'
,'$department'
,'$getjobcurrency'
,'$getjobsalaryamount'
,'$getjobsalaryterm'
,'$getdes'
,'$getjobeducation'
,'$getjoblanguage'
,'$getreceive'
,'$getcompanypostresume'
,'$getjobexperience'
,'$getjoblicense'

    )";

$res=mysqli_query($conn,$query);

if($res == true){
  $id=$conn->insert_id;
  $_SESSION['update_id']=$id;
$form_data['success']="Job posted successfully";
}else {
  $form_data['failed']="Sorry form wasnt submitted";
}

echo json_encode($form_data);

?>
