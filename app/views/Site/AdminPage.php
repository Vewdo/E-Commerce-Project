<?php require APPROOT . '/views/includes/header.php'; 
?>

<!DOCTYPE html>
<html>
<style type="text/css">

	nav a{
		-webkit-touch-callout: none;
    	-webkit-user-select: none; 
    	-khtml-user-select: none; 
    	-moz-user-select: none; 
    	-ms-user-select: none; 
    	user-select: none;
	}

	

	#select-Settings{
		color: white;
		font-size: 20;
		list-style: none;
		padding: 10;
		-webkit-touch-callout: none;
    	-webkit-user-select: none; 
    	-khtml-user-select: none; 
    	-moz-user-select: none; 
    	-ms-user-select: none; 
    	user-select: none;
	}


	#settingsNav li{
		margin-bottom: 30;
		
	}

	#sideMenu{
		background-color: #363434;
		width: 300;
		height: 100%;
		margin-left: -545;
	}

	#sideMenu li:hover{
		color: white;
		cursor: pointer;
		background-color: gray;
	}

	#sideMenu li{
		color: darkgray;
		padding-top: 20px;
		padding-bottom: 20px;
	}

	#dot1{
		height: 25px;
  		width: 25px;
  		 background: linear-gradient( -45deg, white, white 49%, white 49%, white 51%, black 51% ); 
  		border-radius: 50%;
  		display: inline-block;
  		border: 2px solid black;
	}

	#settingsNav{
		margin: 0;
		height: 50;
	}

	#container{
		height: 100%;
	}

	#mainSettings{
		color:  white;
		margin-left: 490.6px;
		margin-top: 50px;
	}

	#profile{
		color: white;
	}

	 #mainSettings img{		
		width: 150px;
		height: 150px;
		border-radius: 50%;
	}

	#mainSettings {
		/*mix-blend-mode: difference;*/
	}

	.edit{
		background: transparent;
		border: none;
	}

	#light #dark{
		background-color: gray;
		width: 100px;
		height: 300px;
	}

	#delete{
		color: red;
		background-color: transparent;
		border: 1px solid red;
		width: 90px;
		height: 40px;
		margin-top: 60;
	}

	#save{
		color: #0fff0f;
		background-color: transparent;
		border: 1px solid #0fff0f;
		width: 90px;
		height: 40px;
		margin-top: 60;
		margin-right: 20;
		margin-left: -20;
	}

	#save:hover{
		color: white;
		background-color: #0fff0f;
	}

	#delete:hover{
		color: white;
		background-color: red;
	}

	#mainSettings hr{
		border-top: 1px solid #979797;
		width: 800px;
		margin-left: -350;
	}

	.currency {
    border-radius: 50%;
    color: black;
    height: 60;
    width: 60;
    font-size: 30;
    FONT-WEIGHT: 600;
    margin-right: 10;
}

#email, #username{
	background-color: inherit;
	border: none;
	border-bottom: 1px solid #979797;
	outline: none;
}

::placeholder {
  color: white;
}

#pfp:hover{
	border: solid 3px white;

}

#chooseimg{
	width: 150px;
	height: 150px;
	border-radius: 50%;
	background: transparent;
	border: none;
}




</style>


<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<nav class="navbar navbar-inverse" id="settingsNav">
		<a class="navbar-brand" style="background-color:black;color: white;" href="/Main/Home">E-commerce project</a>
				<ul class="nav navbar-nav"; style="display: inline-block;white-space:nowrap;">
      				<li><a href="/Main/timeline">Timeline</a></li>
      				<li><a href="/Contact/about">About</a></li>
     				<li><a href="/Contact/contactus">Contact us</a></li>
     				<li><a href="/Site/MainPage">Store Page</a></li>
					<li><a href="/Contact/report">Report</a></li>
					<li><a href="#" style="color:white">Admin</a></li>
     			</ul>
	</nav>
	<h1 style="color:red">ADMIN PAGE</h1>
	<h2 style="color:red">Welcome to the admin page </h2>
	<h2 style="color:white">Options </h2>

	<li><a href="#" style="color:gray">Main Admin Page</a></li>
	<li><a href="/Contact/report">View Reports</a></li>
	<li><a href="/Site/UserPage">View Users</a></li>
	<li><a href="/Contact/ItemPage">View Items</a></li>
	