
<?php
error_reporting(E_ALL);
session_start();
include '../database/config.php';

$errors = array();

    $email = mysqli_real_escape_string($conn,$_POST['email1']);
      $confirmemail = mysqli_real_escape_string($conn,$_POST['confirmemail1']);
    $password = mysqli_real_escape_string($conn,$_POST['password1']);

    $auto = "ALTER TABLE job DROP job_id";
    $autosec = "ALTER TABLE job ADD  job_id BIGINT( 200 ) NOT NULL AUTO_INCREMENT FIRST ,ADD PRIMARY KEY (job_id)";
    $autos =mysqli_query($conn,$auto);
    $autos =mysqli_query($conn,$autosec);

    $auto1 = "ALTER TABLE job_user DROP job_id";
    $autosec1 = "ALTER TABLE job_user ADD  job_id BIGINT( 200 ) NOT NULL AUTO_INCREMENT FIRST ,ADD PRIMARY KEY (job_id)";
    $autos1 =mysqli_query($conn,$auto1);
    $autos1 =mysqli_query($conn,$autosec1);

  $query = "INSERT INTO job_user(email,password)  VALUES('$confirmemail','$password')";
  $result = mysqli_query($conn,$query);

        if($result ==true) {
          echo "Successful";
              }else {
          echo "string";
        }
