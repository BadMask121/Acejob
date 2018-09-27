<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Find companies and organisation with over 5000 job vacancies from different parts of the world from over 15 countries with top employing companies e.g  Avon: 1,040,Terminix: 996,T-Mobile: 986,Koch Davis: 979,Giant Eagle: 964">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Find Jobs || AceJob.com</title>
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <link rel="stylesheet" type="text/css" href="./style/child.css">

    <script  src="./acejob-js/job.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style>
.Logo{
  margin-top: -20px;
}

#search-web-web{
  margin-top: 12px;
  font-family:Lucida Sans;
}

</style>

<script type="text/javascript">
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
<p id="post-p1">Already have an account? &nbsp <a href="#" id="login-signup">Log In</a></p>

<br><br><br><br><br><br><br>
<p id="terms-p"><a href="#">Terms and Conditions</a></p>
<p id="privacy-p"><a href="#">Privacy and Policy</a></p>
<p id="about-p"><a href="about">About AceJob.com</a></p>
</div>
    </div>

<nav id="navigation" class="navigation" >
  <a href="Home" class="logoa"><img id="Logo" src="./img/acelog.png" alt="ACELOG.com" ></a>
<img src="./img/menu_30px.png" class="menulogo"  style="display:none" id="menu-open"/>
<img src="./img/delete.png" class="menulogo" id="menu-close"/>
      <div  class="menu">
      <ul id="menu-ul">
        <li><a href="acejobfind" target="_self">Find Job</a></li>
        <li><a href="jobresume">Find Job Seekers</a></li>
        <li><a href="about?hr=aboutacejob.com?get&amp&ampabpu">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
        <li><a href="#" class="sign-in" id="sign-in-click">Sign In</a></li>
      </ul>
      </div>

      <div id="search-web-web"style="margin-top:-2px">
        <label  for="search" id="label-img" ><img src="./img/search.png" width="17px" id="search-img"></label>
        <input id="search"  class="search-web" type="text" name="search" placeholder="Search AceJob.com" />
    </div>


  <ul id="Menu">

    <li><a href="acejobfind" target="_self">Find Job</a></li>
    <li><a href="jobresume">Find Job Seekers</a></li>
    <li><a href="about?hr=aboutacejob.com?">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
  </ul>
  <ul id="signup">
    <li><a href="#"><img src="./img/phone-call.png">Contact Us</a></li>
      <li class="sign-in" id="sign-in" ><img src="./img/login.png"  id="sign-in-img"><p id="sign-in-p">Sign In</p></li>
  </ul>
</nav>


      <form class="job-search-form" action="./search/job" method="get">
          <div class="what">What <br>
          <input id="input1" type="text" name="what" dir="ltr"  value="" autofocus/><br>
          <span id="hint1">type Job title, keywords or company name</span>
        </div>

        <div class="where">Where <br>
          <input id="input2" type="text" name="where" dir="ltr" value=""  /><br>
          <span id="hint2">type city, state or zip code</span>
        </div>
<input id="input2" type="text" name="&pn=1" dir="ltr" value=""   hidden="hidden"/>
        <div class="upload-resume">
        <a href="#" id="advance">Advance Job Search</a>
        <p id="throw_error2" style="font-size:12px;font-family:candara;color:red;height:20px"></p>
          <a href="jobresume"><img src="img/cloudupload.png" alt="upload" id="uploadimg"><p id="uploadp">Upload your resume</p></a><p id="uploadimgp"> - Let employers find you</p>
        </div>

      </form>

    <div class="email-us">
     <p id="email-e">Email Us</p>
    <form class="email-us-container" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" style="display:none">
      <div class="email-address">
        <p>Email Address:</p> <input type="email" name="email" value="" placeholder="Please enter your email address">
      </div>

      <div class="subject">
      <p>Subject:</p><input type="text" name="subject" value="" placeholder="Whats your complaint's" >
      </div>

      <div class="message">
      <p>Message:</p><textarea name="message" rows="10" cols="30">Enter your complaint</textarea>
      </div>
    <span style="font-size:10px;color:red"><?php echo $emailErr ?></span>
    <input id="submit-btn" type="submit" name="submit" value="Send">


    </form>
    </div>
<?php require 'public/header/footer.php'; ?>
              <script src="./acejob-js/job.js" charset="utf-8"></script>
    <!--      <script src="./acejob-js/job.js" charset="utf-8"></script>-->

  </body>
</html>
