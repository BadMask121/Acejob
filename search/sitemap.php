
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <title></title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
  <link rel="stylesheet" type="text/css" href="../style/child.css">
    </style>
      </head>
       <body>


             <div class="sign-in-bg" id="sign-in-bg">

                 <p class="close-sign-in" style="cursor:pointer">X</p>


               <div class="sign-in-bg-content"><form class="login" action="" method="post">
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
         <p id="about-p"><a href="../about">About AceJob.com</a></p>
               </div>

         <div class="sign-up" style="display:none">
           <p id="post-p">Post jobs for thousands of unemployed people to get employed <br>
              Post your resume and get employed by thousands of Company searching for employee's</p>
         <br><br><br><br>
         <a href="../access/employersignup?acejobTHD=SsjS"><button type="button" name="signupemployer" class="signup-employer">Post A Job</button></a>
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
<br>
<br>
<br>
<br>
      <?php
    error_reporting(0);
      $xmlDoc = new DOMDocument();
      $xmlDoc->load("../pagesearch.xml");

      $x = $xmlDoc->getElementsByTagName('pages');
      $q = $_GET["q"];

      //lookup all links from the xml file if length of q>0
      if (strlen($q)>0) {
$hint="";
$dfin="";
        for($i=0; $i< ($x->length); $i++) {
          $y=$x->item($i)->getElementsByTagName('title');
          $d=$x->item($i)->getElementsByTagName('description');
          $z=$x->item($i)->getElementsByTagName('url');

          if ($y->item(0)->nodeType==1) {
            //find a link matching the search text

            if(stristr($y->item(0)->childNodes->item(0)->nodeValue,$q) || stristr($z->item(0)->childNodes->item(0)->nodeValue,$q) || stristr($d->item(0)->childNodes->item(0)->nodeValue,$q) )
            {
//            echo strlen($y->item(0)->childNodes->item(0)->nodeValue->length);
              if (strlen($d->item(0)->childNodes->item(0)->nodeValue) > 200) {
              $dfin=substr($d->item(0)->childNodes->item(0)->nodeValue,0,250);
              $dfinito=substr_replace($dfin,"...",247);
              }else {
                $dfinito=$d->item(0)->childNodes->item(0);
              }

              if ($hint=="") {
$ser=$_SERVER['SERVER_NAME'];
                $b = "http://.$ser./Acejob.com";
                $url = parse_url( $b ) ;
          $hint="
<script>document.title='Search for ".$q." on Acejob';</script>

                <div class='search-content-query webcraw-content'>

                <a href='".        $z->item(0)->childNodes->item(0)->nodeValue ." ' target='_blank' target='_self' id='tite'>".        $y->item(0)->childNodes->item(0)->nodeValue ."</a>
<br>
                <a href='".        $z->item(0)->childNodes->item(0)->nodeValue ."'target='_self'id='web-link'>".$url['scheme'] ."://" .$_SERVER['SERVER_NAME'] .        $z->item(0)->childNodes->item(0)->nodeValue ."</a>

                <div class='search-webcraw-desc'>
                ".$dfinito."                </div>

            </div>
                ";

              }else {

                                $hint=$hint."
                <script>document.title='Search for ".$q." on Acejob';</script>

                                <div class='search-content-query webcraw-content'>

                                <a href='".        $z->item(0)->childNodes->item(0)->nodeValue ." ' target='_blank' target='_self' id='tite'>".        $y->item(0)->childNodes->item(0)->nodeValue ."</a>
                <br>
                                <a href='".        $z->item(0)->childNodes->item(0)->nodeValue ."'target='_self'id='web-link'>".$url['scheme'] ."://" .$_SERVER['SERVER_NAME'] .        $z->item(0)->childNodes->item(0)->nodeValue ."</a>

                                <div class='search-webcraw-desc'>
                                ".$dfinito."
                                </div>

                            </div>
                                ";

              }

            }
          }
        }
      }

      // Set output to "no suggestion" if no hint was found
      // or to the correct values
      if ($hint=="") {

if($q==""){

    $response="  <div class='search-error webcraw-content'>
    <p>No results found on Acejob</p>
  <div id='search-error-tips'>
    <p>Tips:</p>
    <ul>
    <li>Make sure that your searched words was correct</li>
    <li>Goto <a href='faq'>FAQ</a> to see related searched keywords </li>
    </ul>
  </div>
  </div>";
}else{
  $response="  <div class='search-error webcraw-content'>
  <p>No results found for - <span>$q</span> on Acejob</p>
<div id='search-error-tips'>
  <p>Tips:</p>
  <ul>
  <li>Make sure that your searched words was correct</li>
  <li>Got to <a href='faq'>FAQ</a> to see related searched keywords </li>
  </ul>
</div>
</div>";
}
      } else {
        $response=$hint;
      }
      echo $response;
      ?>





<?php require '../public/header/footer.php'; ?>
         <script src="../acejob-js/job.js" charset="utf-8"></script>
<script type="text/javascript">

var str ="";
           $('#search').keydown(function(event) {
               if (event.keyCode == 13) {
str=$('#search').val();
                 if (str.length==0) {
                     document.getElementById("search").innerHTML="";
                     return;
                   }
window.open('sitemap.php?q='+str,'_self');
                   return false;
                }
           });
</script>
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
