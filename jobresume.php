<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Find employees around you and worldwide</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./style/style.css">
<link rel="stylesheet" type="text/css" href="./style/child.css">
  </head>
  <body>

    <nav id="navigation" class="navigation">
      <a href="Home" class="logoa"><img id="Logo" src="./img/acelog.png" alt="ACELOG.com" style="position:relative;top:-20px;"></a>
    <img src="./img/menu.png" class="menulogo">
          <div  class="menu">
          <ul id="menu-ul">
            <li><a href="acejobfind.php" target="_self">Find Job</a></li>
            <li><a href="jobresume">Find Job Seekers</a></li>
            <li><a href="about?hr=aboutacejob.com?get&amp&ampabpu">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
            <li><a href="#">Sign Up</a></li>
          </ul>
          </div>

    <div id="search-web-web"  style="position:relative;margin-top:-8px">
      <label  for="search" id="label-img" hidden="hidden"><img src="./img/search.png" width="17px" id="search-img"></label>
      <input id="search"  class="search-web" type="text" name="search" placeholder="Search AceJob.com"/>
    </div>
      <ul id="Menu">
        <li><a href="acejobfind.php">Find Job</a></li>
        <li><a href="jobresume">Find Job Seekers</a></li>
        <li><a href="about?hr=aboutacejob.com?get&amp&ampabpu">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
      </ul>
      <ul id="signup">
        <li><a href="#"><img src="./img/phone-call.png">Contact Us</a></li>
          <li><a href="#"><img src="./img/login.png">Sign In</a></li>
      </ul>
    </nav>


    <div class="email-us">
     Email Us
    </div>

    <div id="email-us-popup">

    </div>

    <footer class="footer" style="position:relative; top:-50%">
        <ul class="footer-ul-1" style="position:relative;top:30px;">
          <li><a href="#">Disclaimer</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms & Conditions</a></li>
        </ul>

        <ul class="footer-ul-2" style="position:relative;top:30px;">
          <li ><a href="#">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Corporate Responsibilty</a></li>
          <li><a href="#">FAQs</a></li>
        </ul>

      <p id="footer-p">&#169; Copyright  <a href="Home.php?hrc=ST1223=skjjsa=user&amp">AceJob.com</a>, ACJ. All rights reserved.</p>

    </footer>

              <script src="./acejob-js/job.js" charset="utf-8"></script>
    <!--      <script src="./acejob-js/job.js" charset="utf-8"></script>-->
              <script type="text/javascript" src="./acejob-js/aos-master/dist/aos.js"></script>
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
