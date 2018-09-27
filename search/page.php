<?php
session_start();
include '../database/config.php';

$id = $_GET['search-results-job-title'];
$searchid= preg_replace('#[^0-9!]#i','',$id);

$query="";
$getid =mysqli_real_escape_string($conn,$searchid);

$query="SELECT * FROM job where id='$getid'";
$result =mysqli_query($conn,$query);

if ($rowcount =mysqli_num_rows($result)>0) {
if ($row=mysqli_fetch_array($result)) {
$companyname = $row['poster_company'];
$companysize =$row['company_size'];
$jobtitle=$row['job_title'];
$logo =$row['company_logo'];
}
}else {
  header("location:../erro/notfound?id=$id");
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>Find Jobs || AceJob.com</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../style/style.css">
<link rel="stylesheet"  type="text/css" href="../style/child.css">

<style>
.page-bg{
width: 1000px;
height: auto;
position: relative;
left: 18%;
}

.company-details{
  position: relative;

  margin-top: 20px;
  width: 150px;
  height: auto;
border: 2px solid #DCDADA;
border-left: none;
border-bottom-right-radius: 5px;
}
.company-details p{
font-size: 12px;
font-family: Lucida Sans;
margin: 6px;
word-wrap: break-word;
word-break: break-all;
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

    <nav id="navigation" class="navigation" >
      <a href="../Home" class="logoa" ><img class="Logo" src="../img/acelog.png" alt="ACELOG.com" ></a>
    <img src="../img/menu.png" class="menulogo">
          <div  class="menu">
          <ul id="menu-ul">
            <li><a href="../acejobfind.php" target="_self">Find Job</a></li>
            <li><a href="../jobresume">Find Job Seekers</a></li>
            <li><a href="../about?hr=aboutacejob.com?get&amp&ampabpu">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
            <li><a href="#">Sign Up</a></li>
          </ul>
          </div>

    <div id="search-web-web">
      <label  for="search" id="label-img" ><img src="../img/search.png" width="17px" id="search-img"></label>
      <input id="search"  class="search-web" type="text" name="search" placeholder="Search AceJob.com"/>
    </div>
      <ul id="Menu">
        <li><a href="../acejobfind.php" target="_self">Find Job</a></li>
        <li><a href="../jobresume">Find Job Seekers</a></li>
        <li><a href="../about?hr=aboutacejob.com?get&amp&ampabpu">About &nbspACE<span id="jobspan">JOB</span>.com</a></li>
      </ul>
      <ul id="signup">
        <li><a href="#"><img src="../img/phone-call.png">Contact Us</a></li>
          <li><a href="#"><img src="../img/login.png">Sign In</a></li>
      </ul>
    </nav>
    <div class="page-bg">
<div class="company-details">
<img src="<?php echo $logo; ?>" alt="<?php $imagerror ="Image Empty"; echo $imagerror?>" width="150px" height="150px" style="font-size:20px;color:#B0B0B0;font-family:Corbel;text-align:center;">
<hr>
<p>Company-Name:</p>
<p style="font-size:13px;color:#2B6530;margin-top:-5px;"><?php echo $companyname; ?></p>
<p>Company-Size:</p>
<p style="font-size:13px;color:#2B6530;margin-top:-5px;"><?php echo $companysize; ?></p>
<p>Job-title:</p>
<p style="font-size:13px;color:#2B6530;margin-top:-5px;"><?php echo $jobtitle; ?></p>
</div>

    </div>
<div class="email-us" style="position:fixed;margin-top:-240px;cursor:pointer">
 Email Us
</div>

<div id="email-us-popup">
</div>
<?php require '../public/header/footer.php'; ?>

          <script src="../acejob-js/job.js" charset="utf-8"></script>
<!--      <script src="../acejob-js/job.js" charset="utf-8"></script>-->
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
