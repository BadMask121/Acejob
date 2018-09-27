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
  <title>AceJob | Getting Started</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="AceJob,Jobless,Jobseeker,jobresume,AceJob Jobseeker">
<meta http-equiv="X-UA-Compatible" content="IE-edge">


    <link rel="stylesheet" type="text/css" href="../style/style.css">

<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!--[if lte IE 7]>
<link rel="stylesheet" type="text/css" media="screen, projection" href="http://www.learningjquery.com/wp-content/themes/ljq/styles/ie.css" />
<![endif]-->
<!--[if lte IE 6]>
<script type="text/javascript">document.createElement('abbr');</script>
<![endif]-->
<script type="text/javascript">
$(document).ready(function(){

function before() {
return sessionStorage.clear();
}
$("a").click(function() {
  before();
});

$("form").submit(function() {

var getjobtitle =$("#job-title").val();
var getjobcompanypostname =$("#companynamepost").val();
var getjobcompanylocation =$("#companylocation").val();
var getjobcompanycountry =$("#companycountry").val();

if(getjobtitle==0 || getjobcompanypostname==0 || getjobcompanylocation ==0 || getjobcompanycountry==0) {
  document.getElementById("throw_error").innerHTML='All fields are required only Department is optional';
}else
  if(typeof(Storage) !=="undefined"){
    sessionStorage.setItem("getjobtitle",getjobtitle);
    sessionStorage.setItem("getjobcompanypostname",getjobcompanypostname);
    sessionStorage.setItem("getjobcompanylocation",getjobcompanylocation);
    sessionStorage.setItem("getjobcompanycountry",getjobcompanycountry);

    window.open('job-details?hrc=sd','_self');
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
<hr id="post-job-hr">

<form method="post" class="create-container-content">
<p style="position:relative;top:45px;font-size:20px;">Getting Started</p>
<div class="progress-bar">
  <div class="progress-bar-process">
  </div>
</div>
<div class="create-p1" style="margin-top:30px">
  <p>Job Title</p>
  <input id="job-title" type="text" name="jobtitle" value="" placeholder="Specific Title" required>
</div>

<div class="create-p1">
  <p>Company</p>
  <input type="text" id="companynamepost" name="companynamepost" value="" placeholder="Name of Company for this job posting" required>
</div>

<div class="create-p1">
  <p>Location</p>
  <textarea type="text" id="companylocation" name="location" value="" placeholder="address,city,state,zipcode " required></textarea>
</div>


<div class="create-p1">
  <p>Company Country</p>
  <select name="companycountry" id="companycountry" value="" required>

<option value=""selected >Select Company Country</option>
    <optgroup label="">
      <option value="Afghanistan">Afghanistan</option>
         <option value="Albania">Albania</option>
         <option value="Algeria">Algeria</option>
         <option value="American Samoa">American Samoa</option>
         <option value="Andorra">Andorra</option>
         <option value="Angola">Angola</option>
         <option value="Anguilla">Anguilla</option>
         <option value="Antartica">Antarctica</option>
         <option value="Antigua and Barbuda">Antigua and Barbuda</option>
         <option value="Argentina">Argentina</option>
         <option value="Armenia">Armenia</option>
         <option value="Aruba">Aruba</option>
         <option value="Australia">Australia</option>
         <option value="Austria">Austria</option>
         <option value="Azerbaijan">Azerbaijan</option>
         <option value="Bahamas">Bahamas</option>
         <option value="Bahrain">Bahrain</option>
         <option value="Bangladesh">Bangladesh</option>
         <option value="Barbados">Barbados</option>
         <option value="Belarus">Belarus</option>
         <option value="Belgium">Belgium</option>
         <option value="Belize">Belize</option>
         <option value="Benin">Benin</option>
         <option value="Bermuda">Bermuda</option>
         <option value="Bhutan">Bhutan</option>
         <option value="Bolivia">Bolivia</option>
         <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
         <option value="Botswana">Botswana</option>
         <option value="Bouvet Island">Bouvet Island</option>
         <option value="Brazil">Brazil</option>
         <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
         <option value="Brunei Darussalam">Brunei Darussalam</option>
         <option value="Bulgaria">Bulgaria</option>
         <option value="Burkina Faso">Burkina Faso</option>
         <option value="Burundi">Burundi</option>
         <option value="Cambodia">Cambodia</option>
         <option value="Cameroon">Cameroon</option>
         <option value="Canada">Canada</option>
         <option value="Cape Verde">Cape Verde</option>
         <option value="Cayman Islands">Cayman Islands</option>
         <option value="Central African Republic">Central African Republic</option>
         <option value="Chad">Chad</option>
         <option value="Chile">Chile</option>
         <option value="China">China</option>
         <option value="Christmas Island">Christmas Island</option>
         <option value="Cocos Islands">Cocos (Keeling) Islands</option>
         <option value="Colombia">Colombia</option>
         <option value="Comoros">Comoros</option>
         <option value="Congo">Congo</option>
         <option value="Congo">Congo, the Democratic Republic of the</option>
         <option value="Cook Islands">Cook Islands</option>
         <option value="Costa Rica">Costa Rica</option>
         <option value="Cota D'Ivoire">Cote d'Ivoire</option>
         <option value="Croatia">Croatia (Hrvatska)</option>
         <option value="Cuba">Cuba</option>
         <option value="Cyprus">Cyprus</option>
         <option value="Czech Republic">Czech Republic</option>
         <option value="Denmark">Denmark</option>
         <option value="Djibouti">Djibouti</option>
         <option value="Dominica">Dominica</option>
         <option value="Dominican Republic">Dominican Republic</option>
         <option value="East Timor">East Timor</option>
         <option value="Ecuador">Ecuador</option>
         <option value="Egypt">Egypt</option>
         <option value="El Salvador">El Salvador</option>
         <option value="Equatorial Guinea">Equatorial Guinea</option>
         <option value="Eritrea">Eritrea</option>
         <option value="Estonia">Estonia</option>
         <option value="Ethiopia">Ethiopia</option>
         <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
         <option value="Faroe Islands">Faroe Islands</option>
         <option value="Fiji">Fiji</option>
         <option value="Finland">Finland</option>
         <option value="France">France</option>
         <option value="France Metropolitan">France, Metropolitan</option>
         <option value="French Guiana">French Guiana</option>
         <option value="French Polynesia">French Polynesia</option>
         <option value="French Southern Territories">French Southern Territories</option>
         <option value="Gabon">Gabon</option>
         <option value="Gambia">Gambia</option>
         <option value="Georgia">Georgia</option>
         <option value="Germany">Germany</option>
         <option value="Ghana">Ghana</option>
         <option value="Gibraltar">Gibraltar</option>
         <option value="Greece">Greece</option>
         <option value="Greenland">Greenland</option>
         <option value="Grenada">Grenada</option>
         <option value="Guadeloupe">Guadeloupe</option>
         <option value="Guam">Guam</option>
         <option value="Guatemala">Guatemala</option>
         <option value="Guinea">Guinea</option>
         <option value="Guinea-Bissau">Guinea-Bissau</option>
         <option value="Guyana">Guyana</option>
         <option value="Haiti">Haiti</option>
         <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
         <option value="Holy See">Holy See (Vatican City State)</option>
         <option value="Honduras">Honduras</option>
         <option value="Hong Kong">Hong Kong</option>
         <option value="Hungary">Hungary</option>
         <option value="Iceland">Iceland</option>
         <option value="India">India</option>
         <option value="Indonesia">Indonesia</option>
         <option value="Iran">Iran (Islamic Republic of)</option>
         <option value="Iraq">Iraq</option>
         <option value="Ireland">Ireland</option>
         <option value="Israel">Israel</option>
         <option value="Italy">Italy</option>
         <option value="Jamaica">Jamaica</option>
         <option value="Japan">Japan</option>
         <option value="Jordan">Jordan</option>
         <option value="Kazakhstan">Kazakhstan</option>
         <option value="Kenya">Kenya</option>
         <option value="Kiribati">Kiribati</option>
         <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
         <option value="Korea">Korea, Republic of</option>
         <option value="Kuwait">Kuwait</option>
         <option value="Kyrgyzstan">Kyrgyzstan</option>
         <option value="Lao">Lao People's Democratic Republic</option>
         <option value="Latvia">Latvia</option>
         <option value="Lebanon">Lebanon</option>
         <option value="Lesotho">Lesotho</option>
         <option value="Liberia">Liberia</option>
         <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
         <option value="Liechtenstein">Liechtenstein</option>
         <option value="Lithuania">Lithuania</option>
         <option value="Luxembourg">Luxembourg</option>
         <option value="Macau">Macau</option>
         <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
         <option value="Madagascar">Madagascar</option>
         <option value="Malawi">Malawi</option>
         <option value="Malaysia">Malaysia</option>
         <option value="Maldives">Maldives</option>
         <option value="Mali">Mali</option>
         <option value="Malta">Malta</option>
         <option value="Marshall Islands">Marshall Islands</option>
         <option value="Martinique">Martinique</option>
         <option value="Mauritania">Mauritania</option>
         <option value="Mauritius">Mauritius</option>
         <option value="Mayotte">Mayotte</option>
         <option value="Mexico">Mexico</option>
         <option value="Micronesia">Micronesia, Federated States of</option>
         <option value="Moldova">Moldova, Republic of</option>
         <option value="Monaco">Monaco</option>
         <option value="Mongolia">Mongolia</option>
         <option value="Montserrat">Montserrat</option>
         <option value="Morocco">Morocco</option>
         <option value="Mozambique">Mozambique</option>
         <option value="Myanmar">Myanmar</option>
         <option value="Namibia">Namibia</option>
         <option value="Nauru">Nauru</option>
         <option value="Nepal">Nepal</option>
         <option value="Netherlands">Netherlands</option>
         <option value="Netherlands Antilles">Netherlands Antilles</option>
         <option value="New Caledonia">New Caledonia</option>
         <option value="New Zealand">New Zealand</option>
         <option value="Nicaragua">Nicaragua</option>
         <option value="Niger">Niger</option>
         <option value="Nigeria">Nigeria</option>
         <option value="Niue">Niue</option>
         <option value="Norfolk Island">Norfolk Island</option>
         <option value="Northern Mariana Islands">Northern Mariana Islands</option>
         <option value="Norway">Norway</option>
         <option value="Oman">Oman</option>
         <option value="Pakistan">Pakistan</option>
         <option value="Palau">Palau</option>
         <option value="Panama">Panama</option>
         <option value="Papua New Guinea">Papua New Guinea</option>
         <option value="Paraguay">Paraguay</option>
         <option value="Peru">Peru</option>
         <option value="Philippines">Philippines</option>
         <option value="Pitcairn">Pitcairn</option>
         <option value="Poland">Poland</option>
         <option value="Portugal">Portugal</option>
         <option value="Puerto Rico">Puerto Rico</option>
         <option value="Qatar">Qatar</option>
         <option value="Reunion">Reunion</option>
         <option value="Romania">Romania</option>
         <option value="Russia">Russian Federation</option>
         <option value="Rwanda">Rwanda</option>
         <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
         <option value="Saint LUCIA">Saint LUCIA</option>
         <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
         <option value="Samoa">Samoa</option>
         <option value="San Marino">San Marino</option>
         <option value="Sao Tome and Principe">Sao Tome and Principe</option>
         <option value="Saudi Arabia">Saudi Arabia</option>
         <option value="Senegal">Senegal</option>
         <option value="Seychelles">Seychelles</option>
         <option value="Sierra">Sierra Leone</option>
         <option value="Singapore">Singapore</option>
         <option value="Slovakia">Slovakia (Slovak Republic)</option>
         <option value="Slovenia">Slovenia</option>
         <option value="Solomon Islands">Solomon Islands</option>
         <option value="Somalia">Somalia</option>
         <option value="South Africa">South Africa</option>
         <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
         <option value="Span">Spain</option>
         <option value="SriLanka">Sri Lanka</option>
         <option value="St. Helena">St. Helena</option>
         <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
         <option value="Sudan">Sudan</option>
         <option value="Suriname">Suriname</option>
         <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
         <option value="Swaziland">Swaziland</option>
         <option value="Sweden">Sweden</option>
         <option value="Switzerland">Switzerland</option>
         <option value="Syria">Syrian Arab Republic</option>
         <option value="Taiwan">Taiwan, Province of China</option>
         <option value="Tajikistan">Tajikistan</option>
         <option value="Tanzania">Tanzania, United Republic of</option>
         <option value="Thailand">Thailand</option>
         <option value="Togo">Togo</option>
         <option value="Tokelau">Tokelau</option>
         <option value="Tonga">Tonga</option>
         <option value="Trinidad and Tobago">Trinidad and Tobago</option>
         <option value="Tunisia">Tunisia</option>
         <option value="Turkey">Turkey</option>
         <option value="Turkmenistan">Turkmenistan</option>
         <option value="Turks and Caicos">Turks and Caicos Islands</option>
         <option value="Tuvalu">Tuvalu</option>
         <option value="Uganda">Uganda</option>
         <option value="Ukraine">Ukraine</option>
         <option value="United Arab Emirates">United Arab Emirates</option>
         <option value="United Kingdom">United Kingdom</option>
         <option value="United States">United States</option>
         <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
         <option value="Uruguay">Uruguay</option>
         <option value="Uzbekistan">Uzbekistan</option>
         <option value="Vanuatu">Vanuatu</option>
         <option value="Venezuela">Venezuela</option>
         <option value="Vietnam">Viet Nam</option>
         <option value="Virgin Islands (British)">Virgin Islands (British)</option>
         <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
         <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
         <option value="Western Sahara">Western Sahara</option>
         <option value="Yemen">Yemen</option>
         <option value="Yugoslavia">Yugoslavia</option>
         <option value="Zambia">Zambia</option>
         <option value="Zimbabwe">Zimbabwe</option>

    </optgroup>  </select>
</div><br><p id="throw_error" style="color:#FC7474;font-size:12px"></p>
<a href="create-advertiser" style="width:10px;"><p id="back" style="width:20px;">Back</p></a>
<input type="submit" name="continue" value="Continue" id="continue"/>
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
