<!DOCTYPE html>
<html>
<head>
<title>Login and Signup Form with Validation</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.9.1.min.js"></script>
<!--// js -->
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
 <link href="//fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
 <script>
 // For Validation Purpose
 function validate()
 {
 var email = document.getElementById("email");
 var pass = document.getElementById("pass");
 var msg1 = document.getElementById("msg1");
 var msg2 = document.getElementById("msg2");
 if(email.value == "")
 {
 email.style.borderColor="red";
 msg1.style.display="block";
 email.focus();
 return false;
 }
 if(pass.value == "")
 {
 pass.style.borderColor="red";
 msg2.style.display="block";
 pass.focus();
 return false;
 }
 return true;
 }
 function emailchange(){
 var msg1 = document.getElementById("msg1"); 
 var email = document.getElementById("email");
 if(email != "")
 {
 email.style.borderColor="#d9d9ce"
 email.style.color="#fff";
 msg1.style.display="none";
 return true;
 }
 return false;
 }
 function passchange(){
 var msg2 = document.getElementById("msg2"); 
 var pass = document.getElementById("pass");
 if(pass != "")
 {
 pass.style.borderColor="#d9d9ce"
 pass.style.color="#fff";
 msg2.style.display="none";
 return true;
 }
 return false;
 }
 // for signup form
 function signup()
 {
 var uname = document.getElementById("uname");
 var email1 = document.getElementById("email1");
 var pass1 = document.getElementById("pass1");
 var cpass1 = document.getElementById("cpass1");
 var umsg = document.getElementById("umsg");
 var emsg = document.getElementById("emsg");
 var pmsg = document.getElementById("pmsg");
 var cpassmsg1 = document.getElementById("cpassmsg1");
 var cpassmsg = document.getElementById("cpassmsg");
 if(uname.value == "")
 {

 umsg.style.display="block";
 uname.focus();
 return false;
 }
 if(email1.value == "")
 {
 emsg.style.display="block"
 email1.focus();
 return false;
 }
 if(pass1.value == "")
 {
 pmsg.style.display="block"
 pass1.focus();
 return false; 
 }
 if(cpass1.value == "")
 {
 cpassmsg1.style.display="block"
 pass1.focus();
 return false; 
 }
 if(pass1.value != cpass1.value)
 {
 cpassmsg1.style.display="none";
 cpassmsg.style.display="block"
 cpass1.focus();
 return false;  
 }
 return true;
 }
function unamechange()
{
 var uname = document.getElementById("uname").value;
 var umsg = document.getElementById("umsg");
 if(uname != "")
 {
 umsg.style.display="none";
 return true;
 }
 return false;
}
function emailchange1()
{
 var email = document.getElementById("email1").value;
 var emsg = document.getElementById("emsg");
 if(email!= "")
 {
 emsg.style.display="none";
 return true;
 }
 return false;
}
function passchange1(){
var pass1 = document.getElementById("pass1").value;
var pmsg = document.getElementById("pmsg");
if(pass1 != "")
{
pmsg.style.display="none";
return true;
}
return false;
}
function cpasschange(){
var cpass1 = document.getElementById("cpass1").value;
var cpassmsg1 = document.getElementById("cpassmsg1");
if(cpass1 != "")
{
cpassmsg1.style.display="none"
return true;
}
return false;
}
 </script>
</head>
<body class="bg agileinfo">
   <h1 class="agile_head text-center"> Simple Login and Signup Form</h1>
   <div class="w3layouts_main wrap">
    <!--Horizontal Tab-->
        <div id="parentHorizontalTab_agile">
            <ul class="resp-tabs-list hor_1">
                <li>LogIn</li>
                <li>SignUp</li>
            </ul>
            <div class="resp-tabs-container hor_1">
               <div class="w3_agile_login">
                    <form action="login.php" method="post" class="agile_form" onsubmit="return validate()">
					  <p>Email</p>
					  <input type="email" name="email"  id ="email" onInput="emailchange()" />
						<p style="color:red;display:none" id="msg1">Email Can't be blank</p>
					  <p>Password</p>
					  <input type="password" name="pass" id="pass" class="password" onInput="passchange()"/> 
					   <p style="color:red;display:none" id="msg2">Password can't be blank</p>
					  <input type="submit" value="LogIn" class="agileinfo" name="login" />
					</form>
                    
                </div>
                <div class="agile_its_registration">
                    <form action="register.php" method="post" class="agile_form" onSubmit="return signup()">
					  <p>Username</p>
					  <input type="text" name="username" id="uname" onInput="unamechange()" />
					<p id ="umsg" style="color:red;display:none">User Name Can't be blank</p>
					  <p>Email</p>
					  <input type="email" name="email" id="email1" onInput="emailchange1()"/>
					<p id ="emsg" style="color:red;display:none">Email Can't be blank</p>
					  <p>Password</p>
					  <input type="password" name="Password" id="pass1" onInput="passchange1()" >
				<p id ="pmsg" style="color:red;display:none">Password Can't be blank</p>
					  <p>Confirm Password</p>
					  <input type="password" name="Confirm Password" id="cpass1" onInput="cpasschange()" >
				<p id ="cpassmsg1" style="color:red;display:none">Confirm Password can't be blank</p>
				<p id ="cpassmsg" style="color:red;display:none">Password and Confirm Password is not match</p>
					   <input type="submit" value="Signup" class="agileinfo" style="width:100%" name="submit" />
					</form> 
				</div>
            </div>
        </div>
		 <!-- //Horizontal Tab -->
    </div>
<!--tabs-->
<script src="js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	//Horizontal Tab
	$('#parentHorizontalTab_agile').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion
		width: 'auto', //auto or any width like 600px
		fit: true, // 100% fit in a container
		tabidentify: 'hor_1', // The tab groups identifier
		activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#nested-tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
		}
	});
});
</script>
<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');	 
				//empty string means no validation error
		}

</script>
<!--//tabs-->
</body>
</html>

