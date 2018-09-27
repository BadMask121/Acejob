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
  <title>Create Advert | Acejob.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="AceJob,Jobless,Jobseeker,jobresume,AceJob Jobseeker">
<meta http-equiv="X-UA-Compatible" content="IE-edge">


    <link rel="stylesheet" type="text/css" href="../style/style.css">

<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" language="javascript" src="../acejob-js/job.js"></script>

<script type="text/javascript">
$(document).ready(function(){


$("form").submit(function() {

  var getcomnam=$("#company-name").val();
  var getcomsize=$("#company-size").val();
  var getpostername=$("#postername").val();
  var getdepartment=$("#department").val();
  var getcomphone=$("#companyphone").val();
  var getcomemail=$("#companyemail").val();
if (getdepartment==0) {
document.getElementById("throw_error").innerHTML='All fields are required only Department is optional';

}
else
{
  if(typeof(Storage) !=="undefined"){
  sessionStorage.setItem("comname",getcomnam);
  sessionStorage.setItem("comsize",getcomsize);
  sessionStorage.setItem("postname",getpostername);
  sessionStorage.setItem("department",getdepartment);
  sessionStorage.setItem("comphone",getcomphone);
  sessionStorage.setItem("comemail",getcomemail);

window.open('getting-started','_self');
  }else {
  alert("brower does not support storage");
  }
}
event.preventDefault();
  });
});

</script>

</head>
<body>


      <div class="sign-in-bg" id="sign-in-bg">

        <div class="sign-in-bg-content">
  <img class="close-sign-in"  src="./img/close.png"/>
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
  <a href="./access/employersignup?acejobTHD=SsjS"><button type="button" name="signupemployer" class="signup-employer">Post A Job</button></a>
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


<p id='post-job'>Post a Job<a href="#" style="text-decoration:underline"><span style="margin-left:60%;font-size:12px;">Need help?</span></a></p>
<hr id='post-job-hr'>

<form method="post" class="create-container-content" style="height:113%">
<p style="position:relative;top:45px;font-size:20px;">Acccount Information</p>
<div class="progress-bar"></div>
<p style="font-size:15px;margin-top:20px;font-family:sans-serif">Tell us about you. This information will not be shown to job seekers</p>
<div class="create-p1" style="margin-top:30px">
  <p>Your Company Name</p>
  <input id="company-name" type="text" name="companyname" value="" placeholder="e.g Acejob" required>
</div>

<div class="create-p1">
  <p>Company Size</p>
<select class="company-size" id="company-size" name="companysize">
  <option value="1-49">1-49</option>
  <option value="50-149">50-149</option>
  <option value="150-249">150-249</option>
  <option value="250-499">250-499</option>
  <option value="500-749">500-749</option>
  <option value="750-999">750-999</option>
  <option value="1000+">1000+</option>
</select>
</div>


<div class="create-p1">
  <p>Your Name</p>
  <input type="text" name="postername" value="" placeholder="Poster name" id="postername" required>
</div>
<div class="create-p1">
  <p>Department</p>
  <input type="text" name="department" value="" placeholder="Poster department in Company (optional)" id="department">
</div>

<div class="create-p1">
  <p>Company Phone</p>
  <input type="text" name="companyphone" value="" placeholder="Company telephone" id="companyphone" required>
</div>

<!--
<div class="create-p1">
  <p>Company Address</p>
  <textarea type="text" name="" value="" required></textarea>
</div>

<div class="create-p1">
  <p>Company Country</p>
  <input type="text" name="" value="" required>
</div>
-->
<div class="create-p1">
  <p>Company Email</p>
  <input type="email" name="companyemail" value="" placeholder="Company Email" id="companyemail" required>
</div>
<p id="throw_error" style="color:#FC7474;font-size:12px;margin-top:10px;"></p>
<input type="submit" name="continue" value="Continue" id="continue" >
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
</body>
