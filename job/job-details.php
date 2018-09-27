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
  <title>AceJob | Job Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="AceJob,Jobless,Jobseeker,jobresume,AceJob Jobseeker">
<meta http-equiv="X-UA-Compatible" content="IE-edge">


    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <script src="//cloud.tinymce.com/stable/tinymce.min.js?apiKey=brn05v6l7cdvvoxeaim585h5fe9dlaaz94f0qv05w3e81bp0"></script>
     <script>tinymce.init({ selector:'textarea' });</script>
<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" media="screen, projection" href="http://www.learningjquery.com/wp-content/themes/ljq/styles/ie.css" />
<script src="//cloud.tinymce.com/stable/tinymce.min.js?apiKey=brn05v6l7cdvvoxeaim585h5fe9dlaaz94f0qv05w3e81bp0"></script>
<![endif]-->
<!--[if lte IE 6]>
<script src="//cloud.tinymce.com/stable/tinymce.min.js?apiKey=brn05v6l7cdvvoxeaim585h5fe9dlaaz94f0qv05w3e81bp0"></script>
<script type="text/javascript">document.createElement('abbr');</script>
<![endif]-->
<!--[if lt IE 9]>
<script src="//cloud.tinymce.com/stable/tinymce.min.js?apiKey=brn05v6l7cdvvoxeaim585h5fe9dlaaz94f0qv05w3e81bp0"></script>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<style media="screen">
  #box-1{
    width:200px;
    font-size: 16px;
    height: 50px;
    -webkit-box-shadow: 0px 0px 0px 0px;
    -ms-box-shadow: 0px 0px 0px 0px;
    -moz-box-shadow: 0px 0px 0px 0px;
    -o-box-shadow: 0px 0px 0px 0px;
    box-shadow: 0px 0px 0px 0px;

  }
</style>
<script type="text/javascript">
$(document).ready(function(){

$("form").submit(function() {

var getjobterm =$("#box-1").val();
var getjobcurrency =$("#currency").val();
var getjobsalaryamount =$("#salary-amount").val();
var getjobsalaryterm =$("#salary-term").val();
var getjobdescription =$("#job-description").val();

if(getjobdescription==0) {
  document.getElementById("throw_error").innerHTML='Description of job  is very important';
window.location='';
}if(getjobdescription < 900) {
  document.getElementById("throw_error").innerHTML='Description should not be less than 30 words';
window.location='';
}else
  if(typeof(Storage) !=="undefined"){

    sessionStorage.setItem("getjobterm",getjobterm);
    sessionStorage.setItem("getjobcurrency",getjobcurrency);
    sessionStorage.setItem("getjobsalaryamount",getjobsalaryamount);
    sessionStorage.setItem("getjobsalaryterm",getjobsalaryterm);
    sessionStorage.setItem("getjobdescription",getjobdescription);

    window.open('application-settings?hrc=KjsIsjdsaNsa0923824Jhdsh37689','_self');
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
<hr id="post-job">

<form method="post" class="create-container-content" style="height:90%">
<p style="position:relative;top:45px;font-size:20px;">Job Details</p>
<div class="progress-bar">
  <div class="progress-bar-process-2">
  </div>
</div>
<div class="create-p1">
  <p>job term (optional <span style="color:red;font-size:12px">Hint:</span> click on desired)</p>
  <div class="job-term-box">
<select class="" name="" id="box-1">
  <option value="Full-time">Full-time</option>
  <option value="Part-time">Part-time</option>
  <option value="Temporary">Temporary</option>
  <option value="Contract">Contract</option>
  <option value="Internship">Internship</option>
  <option value="Commission">Commission</option>
</select>
  </div>
</div>

<div class="create-p1">
  <p>What is the salary of this job? (optional)</p>
  <select class="currency" name="currency" id="currency">
<option value="&#36;">&#36;</option>
  <option value="&#162;">&#162;</option>
<option value="&#163;">&#163;</option>
<option value="&#8364;">&#8364;</option>
<option value="&#165;">&#165;</option>
<option value="&#8377;">&#8377;</option>
<option value="&#8381;">&#8381;</option>
<option value="&#20803;">&#20803;</option>
<option value="&#164;">&#164;</option>
<option value="&#8352;">&#8352;</option>
<option value="&#8353;">&#8353;</option>
<option value="&#8354;">&#8354;</option>
<option value="&#8355;">&#8355;</option>
<option value="&#8356;">&#8356;</option>
<option value="&#8357;">&#8357;</option>
<option value="&#8358;">&#8358;</option>
<option value="&#8359;">&#8359;</option>
<option value="&#22278;">&#22278;</option>
<option value="&#8360;">&#8360;</option>

</select>

  <input type="text" name="amount" value="" class="amount" id="salary-amount" placeholder="Example: 50,000">

<select class="salaryrange" name="salaryrange" id="salary-term">
  <option value="per hour">per hour</option>
  <option value="per day">per day</option>
  <option value="per week">per week</option>
  <option value="per month">per month</option>
  <option value="per year">per year</option>
</select>
</div>


<div class="create-p1">
  <p>Job Description</p>
  <textarea id="job-description" name="jobdescription" max-length="30" required>What is the job about</textarea>
</div>

<br><p id="throw_error" style="color:#FC7474;font-size:12px;"></p>
<a href="getting-started"  ><p id="back" style="margin-top:-50px;width:30px">Back</p></a>
<input type="submit" name="continue" value="Continue" id="job-continue" style="margin-top:10px;">
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
