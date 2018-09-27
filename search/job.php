<?php

try {


error_reporting(0);
ob_start();
session_start();
include '../database/config.php';


if(isset($_GET['what']) && $_GET['what']!=="") {
  $what = mysqli_real_escape_string($conn,$_GET['what']);
  $where = mysqli_real_escape_string($conn,$_GET['where']);

  $sql = mysqli_query($conn,"SELECT *  from job where job_title LIKE '%$what%' or poster_company LIKE '%$what%'");

}if(isset($_GET['where']) && $_GET['where']!=="") {
  $what = mysqli_real_escape_string($conn,$_GET['what']);
  $where = mysqli_real_escape_string($conn,$_GET['where']);

  $sql = mysqli_query($conn,"SELECT * from job where location LIKE '%$where%' or company_country LIKE '%$where%'");

}
 if(isset($_GET['what']) && $_GET['what']!=="" && isset($_GET['where']) && $_GET['where']!==""){

         $sql = mysqli_query($conn,"SELECT * from job where location LIKE '%$where%'  LIKE '%$where%' and job_title LIKE '%$what%' or poster_company LIKE '%$where%' and company_country LIKE '%$where%'");


}else {
  error_reporting(0);
}
$paginationDisplay="";



//begin pagination logic
$nr = mysqli_num_rows($sql);

if(isset($_GET['pn'])){
$pn=preg_replace('#[^0-9]#i','',$_GET['pn']);
}else {
  $pn=1;
}

$itemsPerPage=10;

$lastPage = ceil($nr/$itemsPerPage);

if($pn<1){

}elseif ($pn >= $lastPage) {
  $pn = $lastPage;
}

$centerPages="";
$sub1=$pn-1;
$sub2=$pn-2;
$add1=$pn+1;
$add2=$pn+2;
if ($pn =="") {
$pn=1;
}else
if($pn == 1){
  $centerPages .= '&nbsp; <span class="active">'.$pn.'</span>';
$centerPages .= '&nbsp; <a href="'.$_SERVER['PHP_SELF'].'?what='.$what.'&where='.$where.'&pn='. $add1 .'">'.$add1.'</a>&nbsp;';
}
elseif ($pn == $lastPage) {
  $centerPages .= '&nbsp; <a href="'.$_SERVER['PHP_SELF'].'?what='.$what.'&where='.$where.'&pn='.$sub1.'">'.$sub1.'</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="active">'.$pn.'</span>';

}else if ($pn > 2 && $pn < ($lastPage - 1)) {
   $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?what='.$what.'&where='.$where.'&pn='.$pn.'">' . $sub2 . '</a> &nbsp;';

   $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?what='.$what.'&where='.$where.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';

   $centerPages .= '&nbsp; <span class="active">' . $pn . '</span> &nbsp;';

   $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?what='.$what.'&where='.$where.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';

   $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?what='.$what.'&where='.$where.'&pn=' . $add2 . '">' . $add2 . '</a> &nbsp;';

} else if ($pn > 1 && $pn < $lastPage) {
   $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?what='.$what.'&where='.$where.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;';

   $centerPages .= '&nbsp; <span class="active">' . $pn . '</span> &nbsp;';

   $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?what='.$what.'&where='.$where.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;';
}
$limit =  ($pn-1)*$itemsPerPage;

$error='';

  if(isset($_GET['what']) && $_GET['what']!=="" ) {
    $sql = mysqli_query($conn,"SELECT * from job where job_title LIKE '%$what%' or poster_company LIKE '%$what%' order by id ASC LIMIT $limit,$itemsPerPage" )or die("<b>CANNOT QUERY OUT DATA</b>")or trigger_error("SQL", E_USER_ERROR);

    $count = mysqli_query($conn,"SELECT *  from job where job_title LIKE '%$what%' or poster_company LIKE '%$what%'");

  }if (isset($_GET['where']) && $_GET['where']!=="") {
  $sql = mysqli_query($conn,"SELECT * from job where location LIKE '%$where%' or company_country  LIKE '%$where%'  order by id ASC LIMIT $limit,$itemsPerPage")or die("<b>CANNOT QUERY OUT DATA</b>")or trigger_error("SQL", E_USER_ERROR);

      $count = mysqli_query($conn,"SELECT * from job where location LIKE '%$where%' or company_country LIKE '%$where%'");
    }
     if(isset($_GET['what']) && $_GET['what']!=="" && isset($_GET['where']) && $_GET['where']!==""){
       $sql = mysqli_query($conn,"SELECT * from job where location LIKE '%$where%'  and job_title LIKE '%$what%' order by id ASC LIMIT $limit,$itemsPerPage")or die("<b>CANNOT QUERY OUT DATA</b>")or trigger_error("SQL", E_USER_ERROR);

             $count = mysqli_query($conn,"SELECT * from job where location LIKE '%$where%'  LIKE '%$where%' and job_title LIKE '%$what%' or poster_company LIKE '%$where%' and company_country LIKE '%$where%'");

    }
    else {
error_reporting(0);

  $paginationDisplay="";
  $error="<p id='queryerror'>The searched <b>$what</b> job did not match any job</p>
<p style='font-weight:bold;font-size:12px;position:relative;left: 20%;top: 10px;'>Search suggestions:</p>
<ul id='query-ul'>
<li>Try more general keywords</li>
<li>Check your spelling</li>
<li>Replace abbreviations with the entire word</li>
</ul>";
    }


//?////END OF PAGINATION LOGIC
$result=mysqli_num_rows($sql);


if ($lastPage !="1") {
  $previous = $pn-1;


  if ($pn != 1) {
      $previous = $pn - 1;
      $paginationDisplay .=  '&nbsp;  <a href="' . $_SERVER['PHP_SELF'] . '?what='.$what.'&where='.$where.'&pn=' . $previous . '"> <<</a> ';
  }
  $paginationDisplay .= '<span class="paginationNumbers">' . $centerPages . '</span>';
  // If we are not on the very last page we can place the Next button
if ($pn == $lastPage) {
  $paginationDisplay .=  '&nbsp;';
}else
  if ($pn != $lastPage || mysqli_num_rows($sql) >=10) {
      $nextPage = $pn + 1;
      $paginationDisplay .=  '&nbsp;  <a href="' . $_SERVER['PHP_SELF'] . '?what='.$what.'&where='.$where.'&pn=' . $nextPage . '"> <span> >></span></a> ';
  }
  $paginationDisplay .= '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id=page-num>Page <strong>' . $pn . '</strong> of ' . $lastPage. '</span>&nbsp;  &nbsp;  &nbsp; ';
}elseif ($result <10) {
  $paginationDisplay="";
}

$outputList = '';
$success='';

if($result ==0){
  $paginationDisplay="";
  $error="<p id='queryerror'>The searched <b>$what</b> job did not match any job</p>
<p style='font-weight:bold;font-size:12px;position:relative;left: 20%;top: 10px;'>Search suggestions:</p>
<ul id='query-ul'>
<li>Try more general keywords</li>
<li>Check your spelling</li>
<li>Replace abbreviations with the entire word</li>
</ul>";
}

} catch (Exception $e) {
  echo $e->getMessage();
}
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title></title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../acejob-js/aos-master/dist/aos.css">
    <link rel="stylesheet" type="text/css" href="../style/style.css">
        <link rel="stylesheet" type="text/css" href="../style/child.css">
<link href="https://fonts.googleapis.com/css?family=Actor" rel="stylesheet">

<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

<style media="screen">
/**
Start
**/
#search-page-p{
  position: relative;
  top:-20px;
  font-size: 35px;
font-family: 'Actor', sans-serif;
color:#187F0D;
left: 18%;
z-index: 1;
}
#link-link:hover{
  color: #421635;
  text-decoration: underline
}

#link-link{
  display: block;
font-weight:bold;font-size:15px;position:absolute; top:20px;left:90px;
  color: #742879;
line-height: 1em;
}
.search-content{
  position: relative;
width: 750px;
  left: 30%;
  top: -50px;
  z-index: 1;
}

hr{ background: -webkit-linear-gradient(left, #000, #fff); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(right,  #000, #fff); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(right, #DCC6E0, #fff); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to right,#DCC6E0, #fff); /* Standard syntax (must be last) */

}
.search-content-query{
position: relative;
  width: 650px;
  border-radius: 3px;
  margin-top: 50px;
background-color: #faf2ef;
  height: 180px;
  -webkit-box-shadow:0px 0px 20px 2px rgba(0,0,0,0.1);
  -o-box-shadow:0px 0px 20px 2px rgba(0,0,0,0.1);
  -ms-box-shadow:0px 0px 20px 2px rgba(0,0,0,0.1);
  -moz-box-shadow:0px 0px 20px 2px rgba(0,0,0,0.1);
  box-shadow:0px 2px 3px 1px rgba(0,0,0,0.1);
font-weight: 100;
}
.search-content-query img{
position:relative;
top:5px;
left:-10px;
width: 15px;
height: 15px;
}
.search-content-query p{
position:relative;top:20px;left:50px;
margin:0px;
font-size: 12px;
text-transform: capitalize;
}


#uploadimg{
  position: relative;
  left: 20%;
  top: 5px;
}
#uploadimgp{
  position: relative;
  left: 32.5%;
  top: -13px;
}
#uploadp{
  position: relative;
  left: 22.5%;
  top: -18px;
  width: 120px;
}
a{
text-decoration: none;
  }

.upload-resume{
  font-size: 12px;
  position:relative;left:16%;
}
.upload-resume  a{
  font-family: 'Open Sans', sans-serif;
}
#ad-search{
  position: relative;
  left:233px;
  top: -50px;
}
#queryerror{
  position: relative;
  font-size: 20px;
  left: 35%;
  top: 0px;
  color: #534f1c;
}
#query-ul{
  position: relative;
font-size:13px;
left: 29%;
top: 30px;
}

#desc{
position:relative;
left:430px;
top:-80px;
box-sizing:border-box;
word-wrap: break-word;
height:auto;
max-width:200px;
height:70px;
max-height:70px;
overflow-y: auto;
overflow-x: hidden;
text-align: justify;
font-size: 12px;
}

#desc p{
text-align: left;
margin-left: -50px;
clear: both;
}
.button-secondary{
width: 100px;
height: 35px;
background: #7E349D;
font-weight: 400;
color: whitesmoke;
font-size: 13px;
}

.pure-button{
  position: absolute;
left: 533px;
}

/**
End of Job search css
**/
</style>
  </head>
   <body >

                 <div class="sign-in-bg" style="z-index:9999">


                   <div class="sign-in-bg-content">
<img class="close-sign-in"  src="../img/close.png"/>
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
                             <label  for="search" id="label-img" ><img src="../img/search.png" width="17px" id="search-img"></label>
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


            <form class="job-search-form" action="../search/job" method="get">
                <div class="what">What <br>
                <input id="input1" type="text" name="what" dir="ltr" value="" autofocus/><br>
                <span id="hint1">type Job title, keywords or company name</span>
              </div>

              <div class="where">Where <br>
                <input id="input2" type="text" name="where" dir="ltr" value="" /><br>
                <span id="hint2">type country, city, state or zip code</span>
              </div>



              <div class="upload-resume" style="" >
              <p id="ad-search"><a href="#">Advance Job Search</a></p>
              <p id="throw_error2" style="font-size:12px;font-family:candara;color:red;top:0%;left:0%"></p>
                <a href="jobresume" id="uploada"><img src="../img/cloudupload.png" alt="upload" id="uploadimg" style=""/> <p id="uploadp">Upload your resume</p></a>
              </div>
            </form>


              <a href="#" id="go-top"><img src="../img/small-up-arrows-in-a-circle 1.png" alt=""></a>

<p id="search-page-p"><img src="../img/search1.png" alt=""> Search Results : <span style="font-size:17px;color:#000"><?php
if ($result >= 1) {
  echo "<span style='font-weight:bold;color:#6289cb'>". $nr ."</span> jobs found matching your search <b>".$what."</b>";
}
else{
  echo $error;
}

 ?></span></p>

 <div class='search-content' >
 <?php
 /*
 Display result according to recently posted jobs, paginate only top 100 recent jobs
 ranked according to its availiablity
 */
 while($row = mysqli_fetch_array($sql)){
   $title=$row['job_title'];
   $location=$row['location'];
   $jobterms=$row['job_terms'];
   $currency=$row['currency'];
   $salary=$row['salary'];
   $salaryterm=$row['salary_term'];
   $country=$row['company_country'];
   $years=$row['job_years'];
   $company=$row['poster_company'];
   $description=$row['job_description'];
   $id =$row['id'];
   $logo =$row['company_logo'];


echo "
   <script>document.title='Search job for ".$what."'</script>
   <div class='search-content-query' data-aos='slide-up'>
   <img src='../img/title.png' style='width:23px;postion:relative;height:23px;left:60px;top:20px'><a href='page?search-results-job-title=$id?' id='link-link'<p>$title</p></a>
   <img src='$logo' alt='No company logo' style=' position:absolute;font-size:17px;color:#B0B0B0;font-family:Corbel;text-align:center;left:528px;width:100px;height:50px;top:5px;'>
   <p><img src='../img/briefcase.png'>$company</p>
   <p><img src='../img/location.png'>$location $country$</p>
   <p><img src='../img/flag1.png'>$jobterms</p>
   <p><img src='../img/annual.png'>$years</p>
   <p><img src='../img/salary.png'>$currency $salary <span style='text-transform: none;'> $salaryterm </span></p>
   <p><img src='../img/pencil.png' style='position:relative;left:360px;top:-90px'></p>
   <button class='button-secondary pure-button' > Apply</button>

   <div id='desc' >$description
   </div>

   </div>
   <hr style='margin-top:20px;width:450px;height:2px;border:none;'>
   ";
}

 /*
   $count = "(SELECT *  from job where job_title LIKE '%$what%' or poster_company LIKE '%$what%' ) UNION  (SELECT * from job where location LIKE '%$where%' or company_country LIKE '%$where%') ";

 */

 /*
     if($result ==0 ){
       $output ="<p id='queryerror'>The searched $what job did not match any job</p>
   <p style='font-weight:bold;font-size:12px;position:relative;left: 20%;top: 20px;'>Search suggestions:</p>
   <ul id='query-ul'>
   <li>Try more general keywords</li>
   <li>Check your spelling</li>
   <li>Replace abbreviations with the entire word</li>
   </ul>
       ";
       mysqli_close($conn);
     }
     */

 print "<div class='pagination'>$paginationDisplay</div>";
  ?>
</div>

<br>
<br>
<br>
<?php require '../public/header/footer.php'; ?>
      <script src="../acejob-js/job.js" charset="utf-8"></script>

          <script type="text/javascript" src="../acejob-js/aos-master/dist/aos.js"></script>
          <!--<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> -->
          <script>
          AOS.init({
             duration: 20,
             easing: 'ease-in-out',
             disable:'mobile',
           });
          </script>


  </body>
</html>
