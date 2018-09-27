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
  <title>Confirmation || Acejob.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="AceJob,Jobless,Jobseeker,jobresume,AceJob Jobseeker">
<meta http-equiv="X-UA-Compatible" content="IE-edge">


    <link rel="stylesheet" type="text/css" href="../style/style.css">
    <script src="//cloud.tinymce.com/stable/tinymce.min.js?apiKey=brn05v6l7cdvvoxeaim585h5fe9dlaaz94f0qv05w3e81bp0"></script>
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
</style>

<script type="text/javascript">
$(document).ready(function(){


var getjobtitle =sessionStorage.getItem("getjobtitle");
var getcomnam =sessionStorage.getItem("getjobcompanypostname");
var postname =sessionStorage.getItem("postname");
var comphone =sessionStorage.getItem("comphone");
var getcomemail=sessionStorage.getItem("comemail");
var getjobsalaryamount=sessionStorage.getItem("getjobsalaryamount");
var getjobsalaryterm =sessionStorage.getItem("getjobsalaryterm");
var getjobterm =sessionStorage.getItem("getjobterm");
var getjobeducation =sessionStorage.getItem("getjobeducation");
var getdes =sessionStorage.getItem("getjobdescription");
var getjobcompanyemail =sessionStorage.getItem("getjobcompanyemail");

var comname =sessionStorage.getItem("comname");
var comsize =sessionStorage.getItem("comsize");
var  department=sessionStorage.getItem("department");
var getjobcompanylocation =sessionStorage.getItem("getjobcompanylocation");
var getjobcompanycountry =sessionStorage.getItem("getjobcompanycountry");
var getreceive =sessionStorage.getItem("getreceive");
var getcompanypostresume =sessionStorage.getItem("getcompanypostresume");

var getjobyears =sessionStorage.getItem("getjobyears");
var getjobexperience=sessionStorage.getItem("getjobexperience");
var getjobeducation =sessionStorage.getItem("getjobeducation");
var getjoblicense =sessionStorage.getItem("getjoblicense");
var  getjoblanguage=sessionStorage.getItem("getjoblanguage");
var getjobcurrency =sessionStorage.getItem("getjobcurrency");
$("form").submit(function() {

  var dataSent = 'getjobtitle='+getjobtitle + '&getcomnam='+getcomnam + '&postname='+postname + '&comphone='+comphone + '&getcomemail='+getcomemail + '&getjobsalaryamount='+getjobsalaryamount + '&getjobsalaryterm='+getjobsalaryterm + '&getjobterm='+getjobterm + '&getjobeducation='+getjobeducation + '&getdes='+getdes + '&getjobcompanyemail='+getjobcompanyemail + '&comname='+comname + '&department='+department + '&getjobcompanylocation='+getjobcompanylocation+'&getjobcompanycountry='+getjobcompanycountry
+ '&getreceive='+getreceive + '&getcompanypostresume='+getcompanypostresume + '&getjobyears='+getjobyears + '&getjobexperience='+getjobexperience + '&getjobcurrency='+getjobcurrency + '&getjoblicense='+getjoblicense + '&getjoblanguage='+getjoblanguage +'&comsize='+comsize;
    $.ajax({
    type: "POST",
    url: "../access/insertjob.php",
    data: dataSent,
    cache: false,
    dataType:'json',
    success: function(result){
if(result.success)
{
  window.open('finalize-posting?imag-post=websji=seed=saaskjsaj283jds','_self');
}else if (result.failed){
alert("Form wasnt posted");
}

      }

    });

event.preventDefault();
});

tinymce.init({
    selector: "textarea",
    theme: "modern",
    plugins: "pagebreak table save charmap media contextmenu paste directionality noneditable visualchars nonbreaking spellchecker template",
    toolbar1: "bold italic underline strikethrough | alignleft aligncenter alignright alignjustify fontselect fontsizeselect | bullist numlist | undo redo | forecolor backcolor | charmap nonbreaking",

    contextmenu: "cut copy paste",
    menubar: false,
    statusbar: false,
    toolbar_item_size: "small",

    setup: function (theEditor) {
        theEditor.on('focus', function () {
            $(this.contentAreaContainer.parentElement).find("div.mce-toolbar-grp").show();
        });
        theEditor.on('blur', function () {
            $(this.contentAreaContainer.parentElement).find("div.mce-toolbar-grp").hide();
        });
    }
});

tinymce.get('textarea').setContent(getdes);
tinymce.activeEditor.getBody().setAttribute('contenteditable', false);

$("#job-title").html(getjobtitle);
$("#confirmcompanyname").html(getcomnam);
$("#poster-name").html(postname);
$("#com-phone").html(comphone);
$("#com-email").html(getcomemail);
$("#salary").html(getjobsalaryamount);
$("#salaryterm").html(getjobsalaryterm);
$("#jobterm").html(getjobterm);
$("#education").html(getjobeducation);
$("#tocomemail").html(getjobcompanyemail);

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

<form method="post" class="create-container-content" style="height:240%">
<p style="position:relative;top:45px;font-size:20px;">Confirmation</p>
<div class="progress-bar">
  <div class="progress-bar-process-5">
  </div>
</div>
<div class="create-p1">
<input type="submit" name="continue" value="Confirm" id="job-continue" style="margin-top:10px;">

<p>Job Title:</p>
<p id="job-title" style="font-size:14px;font-family:corbel;font-weight:200"></p>
<hr style="height:1px;">

<p>Company Name</p>
<p id="confirmcompanyname" style="font-size:14px;font-family:corbel;font-weight:200"></p>
<hr style="height:1px;">

<p>Poster Name</p>
<p id="poster-name"style="font-size:14px;font-family:corbel;font-weight:200"></p>
<hr style="height:1px;">

<p>Company Phone</p>
<p id="com-phone"style="font-size:14px;font-family:corbel;font-weight:200"></p>
<hr style="height:1px;">

<p>Company Email</p>
<p id="com-email"style="font-size:14px;font-family:corbel;font-weight:200"></p>
<hr style="height:1px;">

<p>Salary</p>
<p id="salary"style="font-size:14px;font-family:corbel;font-weight:200"></p>
<hr style="height:1px;">

<p>Salary Term</p>
<p id="salaryterm"style="font-size:14px;font-family:corbel;font-weight:200"></p>
<hr style="height:1px;">

<p>Job term</p>
<p id="jobterm"style="font-size:14px;font-family:corbel;font-weight:200"></p>
<hr style="height:1px;">

<p>Education</p>
<p id="education"style="font-size:14px;font-family:corbel;font-weight:200"></p>
<hr style="height:1px;">

<p>Send request to</p>
<p id="tocomemail"style="font-size:14px;font-family:corbel;font-weight:200"></p>
<hr style="height:1px;">

<textarea name="confirm-textarea"  rows="8" cols="80" maxlength="10" id="textarea"></textarea>
</div>
<p style="font-size:12px;text-align:center">Once you confirm your details will uploaded</p>
<br><p id="throw_error" style="color:#FC7474;font-size:12px;"></p>
<a href="Screening-question"  ><p id="back" style="margin-top:-70px;width:30px">Back</p></a>
<input type="submit" name="continue" value="Confirm" id="job-continue" style="margin-top:10px;">
  </form>


      <footer class="footer" style="position:relative;height:225px;" id="footer">
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
      <!--      <script src="../acejob-js/job.js" charset="utf-8"></script>-->
             
</body>
