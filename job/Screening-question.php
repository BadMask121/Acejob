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
  <title>Screening Questions | Acejob.com</title>
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
  #create-p1{
background: #fff;
width: 90%;
margin-left: 40px;
height: 200px;
border: 1px solid #d9c6ec;
  }
  .create-p1-p{
    color:#949194;
    position: relative;
top:-20px;
left: 35px;
  }
  #create-p1-label{
background: #F2EEF2;
height: 102px;
margin-top: -10px;
width:600px;
margin-left: 50px;
border: 1px  solid #7a88d3;
border-style: dashed;
  }
  #create-p1-label >p{
font-size: 13px;
font-family: sans-serif;
font-weight: 300;
position: relative;
top: 20px;
  }
  #create-p1-label >input,#create-p1-label >select{
    position: relative;
    left: 120px;
  }

  .create-container-content .progress-bar-process-4{
    margin-top: 50px;
    width:70%;
    height: 5px;
  background-color: #F1892D;
  border: none;
  border-radius: 5px;
  -webkit-box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.5);
  -ms-box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.5);
  -o-box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.5);
  box-shadow: 0px 0px 1px 0px rgba(0, 0, 0, 0.5);
  }
</style>
<script type="text/javascript">
$(document).ready(function(){

$("form").submit(function() {

var getjobyears =$("#years").val();
var getjobexperience =$("#experience").val();
var getjobeducation =$("#education").val();
var getjoblicense =$("#license").val();
var getjoblanguage =$("#language").val();

  if(typeof(Storage) !=="undefined"){

    sessionStorage.setItem("getjobyears",getjobyears);
    sessionStorage.setItem("getjobexperience",getjobexperience);
    sessionStorage.setItem("getjobeducation",getjobeducation);
    sessionStorage.setItem("getjoblicense",getjoblicense);
    sessionStorage.setItem("getjoblanguage",getjoblanguage);

  window.open('confirmation?set=Codsndi0392032=jsIsjdsaNsa0923824Jhdsh37689','_self');
  }
event.preventDefault();

});
});
</script>

</head>
<body>

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

<form method="post" class="create-container-content" style="height:180%">
<p style="position:relative;top:45px;font-size:20px;">Application Questions</p>
<div class="progress-bar">
  <div class="progress-bar-process-4">
  </div>
</div>
<div class="create-p1" >
  <p>Quickly identify which candidates meet key job requirements:</p>
<ul style="margin-left:100px">
  <li>Present job seekers with specific questions when they apply for your job.</li>
<li>Review job seekers' answers along with their application.</li>
</ul>
<p style="font-weight:lighter">Would you like to ask candidates to respond to any criteria entered below when they apply for your job?</p>
</div>

<div class="create-p1" id="create-p1">
  <p><img src="../img/briefcase.png" alt="" style="margin-top:10px;"><span style="position:relative;top:-5px;left:10px;">Experience</span></p>
  <p class="create-p1-p">Ask job seekers if they have a required experience or skill:</p>

<div for="" class="create-p1" id="create-p1-label">
<p>This job requires</p>

  <select class="years" name="years" id="years" style="width:100px;margin-top:-25px">
<option value="1 year">1 year</option>
  <option value="2 years">2 years</option>
<option value="3 years">3 years</option>
<option value="4 years">4 years</option>
<option value="5 years">5 years</option>
<option value="6 years">6 years</option>
<option value="7 years">7 years</option>
<option value="8 years">8 years</option>
<option value="9 years">9 years</option>
<option value="10 years">10 years</option>
</select>

<p style="margin-top:-52px;margin-left:280px">of</p><input type="text" name="experience" value="" class="experience" style="margin-left:180px;margin-top:-25px;width:200px" id="experience" placeholder="Example: IT"><p style="margin-top:-52px;margin-left:510px">experience</p>

</div>
</div>

<div class="create-p1" id="create-p1" style="margin-top:23px;">
  <p><img src="../img/mortarboard.png" alt="" style="margin-top:10px;"><span style="position:relative;top:-5px;left:10px;">Education</span></p>
<p class="create-p1-p">Ask job seekers if they meet your minimum required education level:</p>

<div for="" class="create-p1" id="create-p1-label">
<p>This job requires the following level of education: </p>

  <select class="education" name="education" id="education" style="width:200px;margin-left:40%;">
<option value="High School or Equivalent">High School or Equivalent</option>
  <option value="Associate">Associate</option>
<option value="Bachelors">Bachelors</option>
<option value="Masters">Masters</option>
<option value="Doctorates">Doctorates</option>
</select>
</div>
</div>


<div class="create-p1" id="create-p1" style="margin-top:23px;">
  <p><img src="../img/license.png" alt="" style="margin-top:10px;"><span style="position:relative;top:-5px;left:10px;">License</span></p>
<p class="create-p1-p">Ask job seekers if they have a required license or certification:</p>

<div for="" class="create-p1" id="create-p1-label">
<p>This job requires the following license:</p>
<input type="text" name="license" id="license" style="width:170px;margin-left:180px" value=""/>
</div>
</div>


<div class="create-p1" id="create-p1" style="margin-top:23px;">
  <p><img src="../img/language.png" alt="" style="margin-top:10px;"><span style="position:relative;top:-5px;left:10px;">Language</span></p>
<p class="create-p1-p">Ask job seekers if they speak a required language:</p>

<div for="" class="create-p1" id="create-p1-label">
<p>This job requires the following language:</p>
<input type="text" name="language" id="language" style="width:170px;margin-left:190px" value=""/>
</div>
</div>


<br><p id="throw_error" style="color:#FC7474;font-size:12px;"></p>
<a href="job-details"  ><p id="back" style="margin-top:-50px;width:30px">Back</p></a>
<input type="submit" name="continue" value="Continue" id="job-continue" style="margin-top:50px;">
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
   
</body>
