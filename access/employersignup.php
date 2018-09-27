
<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Create an account | AceJob.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
<link rel="stylesheet" type="text/css" href="../style/child.css">

<script type="text/javascript">

$(document).ready(function(){
$("#sub-btn").click(function(){

  $("#throw_error").empty();

var email = $("input[name=email]").val();
var confirmemail =  $("input[name=confirm-email]").val();
var password = $("input[name=password]").val();


var dataString = 'email1='+email + '&confirmemail1=' + confirmemail +'&password1=' +password;


if (password.length ==0) {
document.getElementById("throw_error").innerHTML='Password cannot be left empty';
}else
if (password.length <=6) {
document.getElementById("throw_error").innerHTML='Password too short(6-30)';
}else
if (email == '' || confirmemail==''||password==''){
alert("all field is required");
}else
{
// AJAX Code To Submit Form.

$.ajax({
type: "POST",
url: "create.php",
data: dataString,
cache: false,
success: function(result){

    if (!result) { //If fails
      if (result.errors.email) { //Returned if any error from process.php
        $(".throw_error").fadeIn(1000).html(result.errors.email); //Throw relevant error
      }
    }else {
      $("#popup").fadeIn(500);
      $("#popup").fadeOut(1000);
      setTimeout(function() {
  $(".sign-in-bg").slideDown(500);
      },1000);
      }

}
});
}
return false;
});
});
</script>


<script type="text/javascript">
  $(document).ready(function(){

$("#login").click(function(){

  $("#throw_error").empty();

var email1 = $("input[name=user]").val();
var password1 = $("input[name=pass]").val();
var dataSent = 'email2='+email1 +'&password2=' +password1;

if (password1.length ==0){
document.getElementById("throw_error").innerHTML='Password cannot be left empty';
}else
if (password1.length <=6) {
document.getElementById("throw_error").innerHTML='Password too short(6-30)';
}else
if (email1 == "" || password1==""){
document.getElementById("throw_error").innerHTML='All field is required';
}else
{
// AJAX Code To Submit Form.

$.ajax({
type: "POST",
url: "login.php",
data: dataSent,
cache: false,
dataType: 'json',
success: function(result){
  if(result.success){
window.location='../access/useraccess?job_id=0923nwksdvauyi87';
  }else if(result.error){
    $("#throw_error").fadeIn(1000).html(result.error);
  }
  }

});
event.preventDefault();
}
return false;
});

  });

</script>


<style media="screen">
.sucess-popup{
  display: none;
  width:270px;color:#EFECEC;
  position:relative;
top: 20px;
  background:#1abc9c;
  left:38%;
  border-bottom-left-radius: 5px;
  border-top-right-radius: 5px;
  border-top-left-radius: 2px;
  border: none;
z-index:1;
}
p,input,h2{
  font-family: corbel;
}
a{
  text-decoration: underline;
}

</style>

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


<div class="create-account" >
<div class="sucess-popup" id="popup"><img src="../img/checked.png" width="25px" alt="" id="img-suscces"><span style="margin-left:12px;">Account Created Successfully</span></div>
<form class="create-account-form" action="" method="post" style="position:relative">

<h2>Create an Account</h2>
<div class="form-content">
  <p>Email Address</p>
  <input type="email" name="email" value="" id="email" required autofocus>
  <p id="confirm-e">Confirm Email Address</p>
  <input type="email" name="confirm-email" class="email"  value="" id="confirm-email" required>
  <p>Password</p>
  <input type="password" name="password" value="" id="pasword" required>
  <input type="checkbox" name="remember" value="" style="width:50px;height:20px" checked><p style="font-size:12px;margin-top:-28px;margin-left:63px;">Keep me signed in on this computer</p>
</div>
<p style="margin-top:-40px;margin-left:200px;color:red;font-size:11px;" id="throw_error"></p>
<input type="submit" name="create" value="Create Account" class="submit-btn" id="sub-btn">

<hr style="border-radius:10px;margin:5px;">

<p style="font-size:11px;text-align:center;color:#7f8c8d">
All job search information is kept private.<br>
We won't post anything without your permission.</p>
<hr style="margin:10px;"/>
<p style="font-size:11px;text-align:center;color:#7f8c8d;margin:10px">By creating an account, you agree to Ace<span style="color:#19B5FE">Job</span>.com <a href="#">Terms and Conditions</a> and consent to our Cookie Policy and <a href="#">Privacy Policy</a>.</p>

</form>

      <div class="email-us">
       Email Us
      </div>
      <div id="email-us-popup">
      </div>
</div>

      <footer class="footer" style="height:55%;">
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
</html>
