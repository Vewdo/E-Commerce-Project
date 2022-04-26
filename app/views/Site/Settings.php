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
     			</ul>
	</nav>
	<div style="display: flex;" id="container">

		<div id="sideMenu">
	<ul id="select-Settings">
		<li onclick="profileEdit();" id="profile"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16">
  <path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
  <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg><b> Profile</b></li>
		<li onclick="ThemeChange();" id="theme"><span id="dot1"></span><b> Theme</b>
		</li>
		<li onclick="regionChange();" id="region"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-currency-exchange" viewBox="0 0 16 16">
  <path d="M0 5a5.002 5.002 0 0 0 4.027 4.905 6.46 6.46 0 0 1 .544-2.073C3.695 7.536 3.132 6.864 3 5.91h-.5v-.426h.466V5.05c0-.046 0-.093.004-.135H2.5v-.427h.511C3.236 3.24 4.213 2.5 5.681 2.5c.316 0 .59.031.819.085v.733a3.46 3.46 0 0 0-.815-.082c-.919 0-1.538.466-1.734 1.252h1.917v.427h-1.98c-.003.046-.003.097-.003.147v.422h1.983v.427H3.93c.118.602.468 1.03 1.005 1.229a6.5 6.5 0 0 1 4.97-3.113A5.002 5.002 0 0 0 0 5zm16 5.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0zm-7.75 1.322c.069.835.746 1.485 1.964 1.562V14h.54v-.62c1.259-.086 1.996-.74 1.996-1.69 0-.865-.563-1.31-1.57-1.54l-.426-.1V8.374c.54.06.884.347.966.745h.948c-.07-.804-.779-1.433-1.914-1.502V7h-.54v.629c-1.076.103-1.808.732-1.808 1.622 0 .787.544 1.288 1.45 1.493l.358.085v1.78c-.554-.08-.92-.376-1.003-.787H8.25zm1.96-1.895c-.532-.12-.82-.364-.82-.732 0-.41.311-.719.824-.809v1.54h-.005zm.622 1.044c.645.145.943.38.943.796 0 .474-.37.8-1.02.86v-1.674l.077.018z"/>
</svg><b> Change region / language
</b></li>
	</ul>
</div>
<div id="mainSettings">
<form id="info" method='post'>	
	<button id="chooseimg"><img src="https://cdn.nerdschalk.com/wp-content/uploads/2020/09/how-to-remove-profile-picture-on-zoom-12.png" id="pfp"></button>
	<br><br>
	<input type="text" name="username"  id="username" placeholder="Username" disabled><button class="edit" id="editName" onclick="EditName();" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></button>
<br><br>
	<input type="email" name="email"  id="email" placeholder="email" disabled><button class="edit" id="editEmail" onclick="EditEmail();" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></button>
</form>

	<button  class="btn btn-outline-success" id="save" form="info" type="submit"><b>Save</b></button>
	<button class="btn btn-outline-danger" id="delete"><b>delete</b></button>

</div>
	</div>

<script type="text/javascript">
	$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
	

	var isLight = true//<?php  $_SESSION["favcolor"] = "light"; $_SESSION["favcolor"] = "light"?>

	if(!isLight){
		document.body.style.backgroundColor = "white";
		document.getElementsByTagName("nav")[0].className = "navbar navbar-default";
		document.getElementById("sideMenu").style.backgroundColor = "#cccccc";
		document.getElementsByTagName("ul")[1].style.filter = "invert(1)";
		document.getElementsByClassName("navbar-brand")[0].style.filter = "invert(1)";
		$("#mainSettings").css("color", "black");

	}else{
		document.body.style.backgroundColor = "#434343";
		document.getElementsByTagName("nav")[0].className = "navbar navbar-inverse";
		document.getElementById("sideMenu").style.backgroundColor = "#363434";
		document.getElementsByTagName("ul")[1].style.filter = "invert(0)";
		document.getElementsByClassName("navbar-brand")[0].style.filter = "invert(0)";
		$("#mainSettings").css("color", "white");
	}

	var profile = document.getElementById('profile');
	var theme = document.getElementById('theme');
	var region = document.getElementById('region');
	var content = document.getElementById('mainSettings');
	
	function profileEdit() {
		profile.style.color = "white";
		profile.style.backgroundColor = "gray";
		theme.style.color = "darkgray";
		theme.style.background = "transparent";
		region.style.color = "darkgray";
		region.style.background = "transparent";

		if(profile.style.color = "white"){
			$("li").mouseover(function(){
  			$(this).css("color", "white");
		});

			$("li").not("#profile").mouseleave(function(){
  			$(this).css("color", "darkgray");
			});

		}

		content.innerHTML = "<?php echo "<form id='info' method='post'><button id='chooseimg'><img src='https://cdn.nerdschalk.com/wp-content/uploads/2020/09/how-to-remove-profile-picture-on-zoom-12.png' id='pfp'></button><br><br><input type='text' name='username'  id='username' placeholder='Username' disabled><button class='edit' id='editName' onclick='EditName();' type='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'><path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/><path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/></svg></button><br><br><input type='email' name='email'  id='email' placeholder='email' disabled><button class='edit' id='editEmail' onclick='EditEmail();' type='button'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'><path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/><path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/></svg></button></form><button  class='btn btn-outline-success' id='save' form='info' type='submit'><b>Save</b></button><button class='btn btn-outline-danger' id='delete'><b>delete</b></button>"?>";
	}

	function ThemeChange() {
		profile.style.color = "darkgray";
		profile.style.background = "transparent";
		theme.style.color = "white";
		theme.style.backgroundColor = "gray";
		region.style.color = "darkgray";
		region.style.background = "transparent";


		if(theme.style.color = "white"){
			$("li").mouseover(function(){
  			$(this).css("color", "white");
		});

			$("li").not("#theme").mouseleave(function(){
  			$(this).css("color", "darkgray");
			});

		}

		

		content.innerHTML = "<button id='dark' style='width: 200px;height: 300px; color:black;' onclick='DarkTheme();'><svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='currentColor' class='bi bi-moon' viewBox='0 0 16 16'><path d='M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z'/></svg></button><button id='light' style='width: 200px;height: 300px;color:black;' onclick='LightTheme();'><svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='currentColor' class='bi bi-sun' viewBox='0 0 16 16'><path d='M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z'/></svg></button>";
	}



	function regionChange() {
		profile.style.color = "darkgray";
		profile.style.background = "transparent";
		theme.style.color = "darkgray";
		theme.style.background = "transparent";
		region.style.color = "white";
		region.style.backgroundColor = "gray";

		if(region.style.color = "white"){
			$("li").mouseover(function(){
  			$(this).css("color", "white");
		});

			$("li").not("#region").mouseleave(function(){
  			$(this).css("color", "darkgray");
			});


		}

		content.innerHTML = "<h2>Currency</h2><br><form method='post' id='currencyform'><button class='currency' name='currency' type='submit' form='currencyform' value='yen'>¥</button><button class='currency' name='currency' type='submit' form='currencyform' value='pound'>£</button><button class='currency' name='currency' type='submit' form='currencyform' value='euro'>€</button><br><br><button class='currency' name='currency' type='submit' form='currencyform' value='cad'>C$</button><button class='currency' name='currency' type='submit' form='currencyform' value='usd'>U$</button></form><br><br><hr>";
		
	}

	function DarkTheme() {
				document.body.style.backgroundColor = "#434343";
				document.getElementsByTagName("nav")[0].className = "navbar navbar-inverse";
				document.getElementById("sideMenu").style.backgroundColor = "#363434";
				document.getElementsByTagName("ul")[1].style.filter = "invert(0)";
				document.getElementsByClassName("navbar-brand")[0].style.filter = "invert(0)";
				$("#mainSettings").css("color", "white");
				<?php  $_SESSION["favcolor"] = "dark";?>
		}

		function LightTheme(){
			document.body.style.backgroundColor = "white";
			document.getElementsByTagName("nav")[0].className = "navbar navbar-default";
			document.getElementById("sideMenu").style.backgroundColor = "#cccccc";
			document.getElementsByTagName("ul")[1].style.filter = "invert(1)";
			document.getElementsByClassName("navbar-brand")[0].style.filter = "invert(1)";
			$("#mainSettings").css("color", "black");
			<?php  $_SESSION["favcolor"] = "light";?>
			document.cookie = "username=John Smith; expires=Thu, 18 Dec 9999 12:00:00 UTC; path=/";
		}

		function EditName() {
			$("#username").prop("disabled", false);

			$("#editName").css("visibility", "hidden");
		}

		function EditEmail() {
			$("#email").prop("disabled", false);

			$("#editEmail").css("visibility", "hidden");

		}
</script>

</body>
</html>

