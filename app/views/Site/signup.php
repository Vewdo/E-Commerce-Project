<?php require APPROOT . '/views/includes/header.php'; 
?>

<!DOCTYPE html>
<html>
<style type="text/css">

li:first-child{
	margin-left: 0;
	position: relative;
}

li {
	display: inline-block;
	margin-left: 28px;
	position: relative;
	}

li > a {
	font-size: 14px;
	text-transform: uppercase;
	letter-spacing: .5px;
	text-decoration: none;
	color: white;
	font-weight: bold;
}
.sub-nav {
background: black;
border-radius: 0px;
box-shadow: 0 10px 8px 0 rgba(0,0,0,0.2);
display: none;
right: 390px;
padding: 16px;
position: absolute;
top: 100%;
width: 130px;

	}

	#services:hover .sub-nav{
	 display: flex;
	}

	.sub-nav.col {
		display: flex;
		flex-direction: column;
		flex: 1;
		max-width: 0%;
	}

	p, label{
		filter: invert(1);
	}

</style>


<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<a class="navbar-brand" style="background-color:black;color: white;" href="/Main/Home">E-commerce project</a>
				<ul class="nav navbar-nav">
      				<li><a href="/Main/timeline">Timeline</a></li>
      				<li><a href="/Contact/about">About</a></li>
     				<li><a href="/Contact/contactus">Contact us</a></li>
     				<li><a href="/Site/MainPage">Store Page</a></li>
					<li><a href="/Contact/report">Report</a></li>
					<li><a href="#" style="color:white">Admin</a></li>
     			</ul>
     		</nav>

  <center>
		<form class="px-4 py-3" method="post" action="" onsubmit="submitForm(event)">
    	<div class="form-group">
      	<label for="username">Username</label>
      	<input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control"  id="email" name="email" placeholder="Email" required="">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" id="password" name="password" placeholder="Password" required="">
    </div>
    
    <div class="form-group">
      <label for="verify_password">Re-enter the password</label>
      <input type="password" class="form-control" id="verify_password" name="verify_password" placeholder="Re-enter the password" required="">
      <span id="error"></span>
    </div>
    
    <button type="submit" name="signup" class="btn btn-primary mt-2" value="signup"> Sign up</button>
    <p class="text-center">Already registered? <a href="/Site/login/">Login</a> </p>

    <script type="text/JavaScript">
  function submitForm(event){
    var pass = document.getElementById("password").value;
    var pass2 = document.getElementById("verify_password").value;

    if(pass2 != pass){
			event.preventDefault();
			document.getElementById("error").innerHTML = "the passwords do not match";
			document.getElementById("error").style.color = "red";
    }else{
    	document.getElementByTagName("form")[0].submit();
    }
  }
</script>

    <?php

if(!empty($data['msg'])){
    echo '<div class="alert alert-danger" role="alert">'.
        $data['msg'].'
    </div>';
}

?>
</center>
  </form>
</body>