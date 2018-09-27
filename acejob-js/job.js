
           var oReq = new XMLHttpRequest(); //New request object
           oReq.onload = function() {
               //This is where you handle what to do with the response.
               //The actual data is found on this.responseText
               if (this.readyState == 4 && this.status == 200) {
               if(this.responseText !=""){
         document.getElementById('sign-in-p').innerHTML=this.responseText;

         document.getElementById("sign-in-p").onclick = function(e) {
document.getElementById('sign-in-bg').style.display='none';
  //       document.getElementById('sign-in-bg').innerHTML=this.responseText;
         }

         }else {
         document.getElementById('sign-in-p').innerHTML='Sign in';
         }
                 }
           };

           var loc = window.location.pathname;
           var dir = loc.substring(0,loc.lastIndexOf('/'));

            if(dir != "/Acejob"){
              oReq.open("get", "../api/homepass.php", true);
              oReq.send();
            }else {
              oReq.open("get", "./api/homepass.php", true);
              oReq.send();
            }


(function(){
  var startingTime = new Date().getTime();
  var rand = "";
   var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
   for (var i = 0; i < 30; i++)
     rand += possible.charAt(Math.floor(Math.random() * possible.length));


     // Load the script
     var script = document.createElement("SCRIPT");
     script.src = 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js';
     script.type = 'text/javascript';
     document.getElementsByTagName("head")[0].appendChild(script);

     // Poll for jQuery to come into existance
     var checkReady = function(callback) {
         if (window.jQuery) {
             callback(jQuery);
         }
         else {
         }
             window.setTimeout(function() { checkReady(callback); }, 20);
     };

     // Start polling...
     checkReady(function($) {
         $(function() {
             var endingTime = new Date().getTime();
             var tookTime = endingTime - startingTime;
            // window.alert("jQuery is loaded, after " + tookTime + " milliseconds!");

         });

var str ="";
           $('#search').keydown(function(event) {
               if (event.keyCode == 13) {
str=$('#search').val();
                 if (str.length==0) {
                     document.getElementById("search").innerHTML="";
                     return;
                   }
/**
                   if (window.XMLHttpRequest) {
                     // code for IE7+, Firefox, Chrome, Opera, Safari
                     xmlhttp=new XMLHttpRequest();
                   } else {  // code for IE6, IE5
                     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                   }
                   xmlhttp.onreadystatechange=function() {
                     if (this.readyState==4 && this.status==200) {
//document.getElementById('search').innerHTML=this.response;
window.open(this.response);

                     }
                   }
                   xmlhttp.open("GET","./erro/sitemap.php?q="+str,true);
                   xmlhttp.send();
**/

var loc = window.location.pathname;
var dir = loc.substring(0,loc.lastIndexOf('/'));



 if(dir != "/Acejob"){
window.open('../search/sitemap.php?q='+str,'_self');
 }else {
   window.open('./search/sitemap.php?q='+str,'_self');
 }

                   return false;
                }
           });


                        var input1=document.getElementById("input1");
                        var input2=document.getElementById("input2");
             var error = document.getElementById("throw_error2");
                        $("form").keydown(function(event) {
                    if (event.which == 13){

                      if (input2.value=="" && input1.value=="") {
                        error.innerHTML="What kind of job are you searching for?";

                        setTimeout(function() {
                      $("#throw_error2").fadeOut(1000);
 if(dir != "/Acejob"){
if(dir == "/job")
  window.location='./job';
  else
                        window.location='job';
 }else {
                       window.location='./acejobfind';
 }
                        },1000);

                      }else {
                       $("form").submit();
                      }
                    }
                    });

         $(window).scroll(function() {
         if($(window).scrollTop() > 250){
           $("#go-top").fadeIn(1000);
         }else if ($(window).scrollTop() < 250) {
         $("#go-top").fadeOut();
         }

         });
         $("#go-top").click(function(){
         		$('html, body').animate({scrollTop : 0},1000);
         		return false;
         	});


         $("#menu-open").click(function() {
          $("#menu-open").hide();
           $("#menu-close").show();
         $(".menu>ul").slideDown();
         });

         $("#menu-close").click(function() {
         $(".menu>ul").slideUp();
          $("#menu-open").show();
           $("#menu-close").hide();
         });


           $(window).scroll(function() {

                   if($(window).scrollTop() < 50 ) {
                     $("nav").css("position","static");
          $("nav").css("opacity","0.9");
                     $(".email-us").css("transition","0.9s");
                       $(".email-us").css("opacity","0.6");
$("nav").css("border-bottom","none");
                   } else if ($(window).scrollTop() > 50) {
                       //remove the background property so it comes transparent again (defined in your css)
               $("nav").css("position","fixed");
                  $("nav").css("opacity","0.9");
                      $(".email-us").css("opacity","0.9");
                  $("nav").css("z-index","9999");
                          $("nav").css("border-bottom","1px solid #DCC6E0");
           }

           });


//Storage and cookies setting
         if(!typeof(Storage) !=="undefined")
         {

         }
         else {

         }


//Setting up
         var success="good";
           function reqListener () {
             console.log(this.responseText);
           }

var user;
var userdir;
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


if (dir!="/Acejob"){
user ="../access/login.php";
userdir = "../access/useraccess?sess_ID="+rand;
}else {
  user ="./access/login.php";
  userdir = "./access/useraccess?sess_ID="+rand;
}

         // AJAX Code To login Form.
         $.ajax({
         type: "POST",
         url: user,
         data: dataSent,
         cache: false,
         dataType: 'json',
         success: function(result){
         if(result.success){
         window.location=userdir;
         }else if(result.error){
           $("#throw_error").fadeIn(1000).html(result.error);
         }
         }

         });
         event.preventDefault();
         }
         return false;
         });



         $('a[href*="#"]:not([href="#"])').click(function() {
           if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
             var target = $(this.hash);
             target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
             if (target.length) {
               $('html, body').animate({
                 scrollTop: target.offset().top
               }, 1000);
               return false;
             }

           }
         });
//jquery click to sign in
         $(".sign-in").click(function(){
         $(".sign-in-bg").slideDown(200);
         });

         $(".close-sign-in").click(function() {

         $(".sign-in-bg").slideUp(200);
         });

         $("#signup-login").click(function() {
         $(".sign-in-bg-content")
                             .animate(
                                 {
                                     'margin-left':'1000px'
                                     // to move it towards the right and, probably, off-screen.
                                 },1000,
                                 function(){
                                     $(this).slideUp('fast');
                                     // once it's finished moving to the right, just
                                     // removes the the element from the display, you could use
                                     // `remove()` instead, or whatever.
         $(".sign-up").show();
                                 }
                                 );
         });


         $("#login-signup").click(function() {
         $(".sign-up").fadeOut();
         $(".sign-in-bg-content").fadeIn();
         });


var counts = $("#email-e").click(function () {
    $(".email-us-container").slideDown();
    $("#email-e").css("margin-top","-450");

});



//end of main js
     });

//end of opening function
})();
