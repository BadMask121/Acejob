<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>About Acejobs</title>
<script src="acejob-js/job.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./style/style.css">
<link rel="stylesheet"  type="text/css" href="./style/child.css">

<style>
@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700");

</style>

<script type="text/javascript">

$(document).ready(function() {



  var input1=document.getElementById("input1");
  var input2=document.getElementById("input2");

    $("form").keydown(function(event) {
if (event.keyCode == 13){
  if (input2.value=="" && input1.value=="") {
    document.getElementById("throw_error").innerHTML="What kind of job are you searching for?";
    setTimeout(function() {
  $("#throw_error").fadeOut(500);
  window.location='acejobfind';
    },500);
  }else {
     $("form").submit();
  }
}
});
/*
    $("#input2").keydown(function(event) {


          if (input2.value=="") {
            document.getElementById("throw_error").innerHTML="What kind of job are you searching for?";
            setTimeout(function() {
          $("#throw_error").fadeOut(500);
          window.location='acejobfind';
            },500);
          }else {
    $("form").submit();
          }
            return false;
         }
    });
*/


});


function onLoadHandler() {

window.initLogInitialUserInteraction('1bbgogpk7b00nb5j', 'hp');
}

window.onload = onLoadHandler;
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
      <a href="Home" class="logoa"><img id="Logo" src="./img/acelog.png" alt="ACELOG.com" ></a>
    <img src="./img/menu_30px.png" class="menulogo"  style="display:none" id="menu-open"/>
    <img src="./img/delete.png" class="menulogo" id="menu-close"/>
          <div  class="menu">
          <ul id="menu-ul">
            <li><a href="acejobfind" target="_self">Find Job</a></li>
            <li><a href="jobresume">Find Job Seekers</a></li>
            <li><a href="about?hr=aboutacejob.com?get&amp&ampabpu">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
            <li><a href="#" class="sign-in" id="sign-in-click"></a></li>
          </ul>
          </div>

          <div id="search-web-web">
            <label  for="search" id="label-img" q><img src="./img/search.png" width="17px" id="search-img"></label>
            <input id="search"  class="search-web" type="text" name="search" placeholder="Search AceJob.com"  />
        </div>


      <ul id="Menu">

        <li><a href="acejobfind" target="_self">Find Job</a></li>
        <li><a href="jobresume">Find Job Seekers</a></li>
        <li><a href="about?hr=aboutacejob.com?">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
      </ul>
      <ul id="signup">
        <li><a href="#"><img src="./img/phone-call.png">Contact Us</a></li>
          <li class="sign-in" id="sign-in" ><img src="./img/login.png"  id="sign-in-img"><a id="sign-in-p">Sign in</a></li>
      </ul>

    </nav>


<div class="about-us">
<img src="./img/map.png" alt="">

  <p id="head-abt">We help people all over the world hire and get hired</p>
<hr>
<p id="about-us-p" >Acejob a worldwide job searching site, Acejob is available in more than 60 countries and 28 languages, covering 94% of global GDP. Since 2017, Acejob has given job seekers free access to millions of jobs from thousands of company websites and job boards. As the leading pay-for-performance recruitment advertising network with Ultra modern virtual interviews, Acejob drives millions of targeted applicants to jobs in every field and is the most cost-effective source of candidates for thousands of companies. Co-founded by <span style="font-size:18px;font-family:Lucida Sans;color:#928989">Emakpor Jeffrey Efemena (C.E.O)</span>,<span style="font-size:16px;font-family:Lucida Sans;color:#71b9ee"> Hanane Bello</span> <span>and</span> <span style="font-size:16px;font-family:Lucida Sans;color:brown">Paul Bowers Adusei MO-Dey</span>.  Acejob is a subsidiary of AceNation Co. LTD in Ghana Africa, Acejob has offices in Accra-Ghana, Lagos-Nigeria. For more information about Acejob, see our blog, press releases or contact us.
</p>
<br>
<div class=vision >
  <p  id="v-head">OUR VISION</p>
  <hr>

</div>
</div>


<div class="email-us">
 Email Us
</div>

<div id="email-us-popup">

</div>

<footer class="footer">
<p id="footer-p">&#169; Copyright  <a href="Home">AceJob.com</a>, ACJ. All rights reserved.</p>

<ul class="footer-ul-1">
  <li><a href="#">Disclaimer</a></li>
  <li><a href="#">Privacy Policy</a></li>
  <li><a href="#">Terms & Conditions</a></li>
</ul>

<ul class="footer-ul-2" >
  <li ><a href="#">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
  <li><a href="#">Contact Us</a></li>
  <li><a href="#">Services</a></li>
  <li><a href="#">Corporate Responsibilty</a></li>
  <li><a href="#">FAQs</a></li>
</ul>
</footer>

          <script src="./acejob-js/job.js" charset="utf-8"></script>
<!--      <script src="./acejob-js/job.js" charset="utf-8"></script>-->

  </body>
</html>
