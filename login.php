<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link 
href="https://fonts.googleapis.com/css?family=Handlee"
rel="stylesheet">
<title>Login</title>

<style>
h1 {
color: rgb(193, 211, 193);
margin-left: 50px;
      }
</style>

<style>
body {
margin: 0;
}

.header {
background-color: #86867c;
padding: 5px;
text-align: center;
}
</style>
</head>
<body>

<div class="header" role="heading">
    <p><img src="https://lh3.googleusercontent.com/pw/ACtC-3e18XmqZUul78P-iotO1x4kjez-ssISNBKlmy5Um9fxsAoKg05eWmTbQ5vhunC_K1nYRBqGRvGuGhLierBPD8itmY-LJzmyF0IrnzM3t64x-_ykl4VsWa5b-ptlYw6bMfJfGLLfLOPNqMCxn-F4au-P=w470-h296-no?authuser=0" width="150" height="100" style="float:right" alt=""> 
<h1><b>DESIGN AND IMPLEMENTATION OF E-LIBRARY FOR NATIONAL OPEN UNIVERSITY OF NIGERIA</b></h1>
</div>
</head>
 <body>
<style>
* {
  box-sizing: border-box;
		}
		
		body {
		  margin: 0;
		}
		
		/* Style the header */
		.header {
		  background-color: #f1f1f1;
		  padding: 20px;
		  text-align: center;
		}
		
		/* Style the top navigation bar */
		.topnav {
		  overflow: hidden;
		  background-color: #333;
		}
		
		/* Style the topnav links */
		.topnav a {
		  float: left;
		  display: block;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}
		
		/* Change color on hover */
		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}
		.row:after {
  		  content: "";
          display: table;
          clear: both;
		}
		</style>
		</head>
		<body>
    
	  <div class="header" role="heading">
	  </div>
	  
	  <div class="topnav">
		<a href="index.html">Home</a>
		<a href="Member.php">Login</a>
		<a href="registration.html">Register</a>
	  </div>
  
	  </style>
		
		<div id="sidebar-left"> 
		 <p> Login using your registered details to have full access to NOUN Online Course materials</p>
					
		</div>
	
			<div id="main"> 
					<h1>WELCOME TO NOUN E-LIBRARY</h1>  
					 
						 
						 
<div>
	<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
</div>			

<html>
<head>
<TITLE>Login</TITLE>
<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</head>
<body>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="user-registration.php">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="login-btn"
							id="login-btn" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
<p>NATIONAL OPEN UNIVERSITY IS THE BEST LEARNING INSTITUTE, WORK AND LEARN, AFFORDABLE AND RELIABLE</p>
</body>	
</html>
