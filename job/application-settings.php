<?php
session_start();
include '../database/config.php';

if(!$_SESSION["login_user"]){
header('location:../Home','_self');
}else {
  $user =$_SESSION["login_user"];}
?>

<!DOCTYPE html>
<html>
<head>
  <title>AceJob | Application Settings</title>
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
<style media="screen">

.receive{
  width: 23px;
  height: 20px;
  display: inline;
}
</style>
<script type="text/javascript">
$(document).ready(function(){

$("form").submit(function() {

var getreceive =$("input[name=receive]:checked").val();
var getcompanypostresume =$("input[name=resume]:checked").val();
var getjobcompanyemail =$("#company-email").val();

if(getjobcompanyemail==0) {
  document.getElementById("throw_error").innerHTML='Where else can it be sent to :(';
  $("#throw_error").fadeIn(1000);
  $("#throw_error").fadeOut(1000);
setTimeout(function(){
  window.location='';
},1000);
}else
  if(typeof(Storage) !=="undefined"){

    sessionStorage.setItem("getreceive",getreceive);
    sessionStorage.setItem("getcompanypostresume",getcompanypostresume);
    sessionStorage.setItem("getjobcompanyemail",getjobcompanyemail);

window.open('Screening-question?Track=920291093jHs2323','_self');
  }

event.preventDefault();

});
});

</script>

</head>
<body >

                   <div class="sign-in-bg" style="z-index:9999">
                     <p class="close-sign-in" style="cursor:pointer">X</p>

                     <div class="sign-in-bg-content">
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
                    Post your resume and get employed by thousands of Company ing for employee's</p>
               <br><br><br><br>
               <a href="employersignup?acejobTHD=SsjS"><button type="button" name="signupemployer" class="signup-employer">Post A Job</button></a>
               <a href="#"><button type="button" name="signupjobseeker" class="signup-jobseeker">Post Resume</button></a>
               <p id="post-p1">Already have an account? &nbsp<a href="#" id="login-signup">Log In</a></p>

               <br><br><br><br><br><br><br>
               <p id="terms-p"><a href="#">Terms and Conditions</a></p>
               <p id="privacy-p"><a href="#">Privacy and Policy</a></p>
               <p id="about-p"><a href="../about">About AceJob.com</a></p>
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


<p id="post-job">Post a Job<a href="#" style="text-decoration:underline"><span style="margin-left:60%;font-size:12px;">Need help?</span></a></p>
<hr id="post-job-hr">

<form method="post" class="create-container-content" style="height:87%">
<p style="position:relative;top:45px;font-size:20px;">Application Settings</p>
<div class="progress-bar">
  <div class="progress-bar-process-3">
  </div>
</div>

<div class="create-p1" style="margin-top:30px">
  <p>How do you want to receive applications? (optional <span style="color:red;font-size:12px">Hint:</span> click on desired)</p>
</div>

<input id="check" class="receive" name="receive" type="radio" value="Email" checked>Email
<input id="check" class="receive" name="receive" type="radio" value="In-person">In-person


<div class="create-p1">
  <p>Applications for this job will be sent to the following email address(es):</p>
  <input id="company-email" type="text" name="company-email" value="" placeholder="e.g info@acejob.com" >
<div class="" style="margin-left:40px">
  <img src="../img/plus.png" alt="" width="25px" height="25px" style="margin-top:20px;cursor:pointer"><p style="margin-top:-25px;margin-left:30px;text-decoration:underline;font-size:13px;color:#8E44AD;cursor:pointer">Add additional email</p>
</div>
</div>

<div class="create-p1" style="margin-top:30px">
  <p>Ask job seekers for resume?</p>
</div>
<input type="radio" class="receive" name="resume" value="Resume required" checked>Resume required
<input type="radio" class="receive" name="resume" value="Do not ask for Resume">Do not ask for resume




<a href="job-details"  ><p id="back" style="margin-top:-10px;width:30px">Back</p></a>
<p id="throw_error" style="color:#FC7474;font-size:15px;margin-top:10px;"></p>
<input  type="submit" name="continue" value="Continue" style="margin-top:35px;">
  </form>


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
               duration: 400,
               easing: 'ease-in-sine',
               disable:'mobile',
             });
            </script>
</body>
