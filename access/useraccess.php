<?php
session_start();
include '../database/config.php';

if(!$_SESSION["job_id"]){
header('location:../Home','_self');
}else {
  $user =$_SESSION["login_user"];}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Useraccess | Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="AceJob,Jobless,Jobseeker,jobresume,AceJob Jobseeker">
<meta http-equiv="X-UA-Compatible" content="IE-edge">


    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" media="screen, projection" href="http://www.learningjquery.com/wp-content/themes/ljq/styles/ie.css" />
<![endif]-->
<!--[if lte IE 6]>
<script type="text/javascript">document.createElement('abbr');</script>
<![endif]-->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body >

      <div class="sign-in-bg" id="sign-in-bg">

        <div class="sign-in-bg-content">
  <img class="close-sign-in"  src="../img/close.png"/>
          <form class="login" action="" method="post">
        <p>Email Address</p><input id="username" type="text" name="user" value="">
        <p>Password</p><input id="password" type="password" name="pass" value="">
        <br><p id="throw_error" style="color:#FC7474;font-size:12px;"></p>
                <br><p id="forgot-pass">forgot password? <a href="#">click here</a></p>
        <p id="not-member">Not a member? <a href="#" id="signup-login">Create an Account</a></p>
        <input type="submit" name="login" value="Login" id="login">
        </form>


  <br><br><br><br><br>
  <p id="terms-p"><a href="#">Terms and Conditions</a></p>
  <p id="privacy-p"><a href="#">Privacy and Policy</a></p>
  <p id="about-p"><a href="about">About AceJob.com</a></p>
        </div>

  <div class="sign-up" style="display:none">
    <p id="post-p">Post jobs for thousands of unemployed people to get employed <br>
       Post your resume and get employed by thousands of Company searching for employee's</p>
  <br><br><br><br>
  <a href="./employersignup?acejobTHD=SsjS"><button type="button" name="signupemployer" class="signup-employer">Post A Job</button></a>
  <a href="#"><button type="button" name="signupjobseeker" class="signup-jobseeker">Post Resume</button></a>
  <p id="post-p1">Already have an account? &nbsp<a href="#" id="login-signup">Log In</a></p>

  <br><br><br><br><br><br><br>
  <p id="terms-p"><a href="#">Terms and Conditions</a></p>
  <p id="privacy-p"><a href="#">Privacy and Policy</a></p>
  <p id="about-p"><a href="about">About AceJob.com</a></p>
  </div>

      </div>


                       <nav id="navigation" class="navigation">
                         <a href="../Home" class="logoa"><img id="Logo" src="../img/acelog.png" alt="ACELOG.com" ></a>
                       <img src="../img/menu_30px.png" class="menulogo"  style="display:none" id="menu-open"/>
                       <img src="../img/delete.png" class="menulogo" id="menu-close"/>
                             <div  class="menu">
                             <ul id="menu-ul">
                               <li><a href="../acejobfind" target="_self">Find Job</a></li>
                               <li><a href="../jobresume">Find Job Seekers</a></li>
                               <li><a href="../about?hr=aboutacejob.com?get&amp&ampabpu">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
                               <li><a href="#" class="sign-in" id="sign-in-click">Sign In</a></li>
                             </ul>
                             </div>

                             <div id="search-web-web">
                               <label  for="search" id="label-img" hidden="hidden"><img src="../img/search.png" width="17px" id="search-img"></label>
                               <input id="search"  class="search-web" type="text" name="search" placeholder="Search AceJob.com"  />
                           </div>


                         <ul id="Menu">

                           <li><a href="../acejobfind" target="_self">Find Job</a></li>
                           <li><a href="../jobresume">Find Job Seekers</a></li>
                           <li><a href="../about?hr=aboutacejob.com?">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
                         </ul>
                         <ul id="signup">
                           <li><a href="#"><img src="../img/phone-call.png">Contact Us</a></li>
                             <li class="sign-in" id="sign-in" ><img src="../img/login.png"  id="sign-in-img"><p id="sign-in-p">Sign In</p></li>
                         </ul>
                       </nav>




<div class="sign-up">
  <p id="post-p">Welcome to Ace<span style="color:#5884c7;font-size:15px">job</span>.com You have the option to:</p>
  <p id="post-p">Post jobs for thousands of unemployed people to get employed <br>
     Post your resume and get employed by thousands of Company searching for employee's</p>
<br>
<br>
<br>
<br>
<a href="../job/create-advertiser"><button type="button" name="signupemployer" class="signup-employer">Post A Job</button></a>
<a href="#"><button type="button" name="signupjobseeker" class="signup-jobseeker">Post Resume</button></a>
<p id="post-p1" > &nbsp
  <a href="Dashboard" id="login-signup" style="color:#88d7b9;text-decoration:none;"><img src="../img/download-business-statistics-symbol-of-a-graphic.png" style="margin-top:-20px"><span style="position:relative;
    position: relative;
    top: 15px;
    left: -15%;">Dashboard</span> </a> </p>

<br><br><br><br><br><br><br>
</div>

<footer class="footer">
              <ul class="footer-ul-1" style="position:relative;top:30px;">
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
              </ul>

              <ul class="footer-ul-2" style="position:relative;top:30px;">
                <li ><a href="#">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Services </a></li>
                <li><a href="#">Corporate Responsibilty</a></li>
                <li><a href="#">FAQs</a></li>
              </ul>

            <p id="footer-p">&#169; Copyright  <a href="Home">AceJob.com</a>, ACJ. All rights reserved.</p>
          </footer>
          <script src="../acejob-js/job.js" charset="utf-8"></script>

          <script type="text/javascript" src="../acejob-js/aos-master/dist/aos.js"></script>
          <!--<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>-->
          <script>
          AOS.init({
             duration: 50,
             easing: 'ease-in-sine',
             disable:'mobile',
           });
          </script>
</body>
</html>
