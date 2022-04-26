<?php require APPROOT . '/views/includes/header.php'; 
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css"> 

		body:not(h2){
			-webkit-touch-callout: none;
    	-webkit-user-select: none; 
    	-khtml-user-select: none; 
    	-moz-user-select: none; 
    	-ms-user-select: none; 
    	user-select: none;
		}

		#content{
			display: flex;
		}

		article{
			background-color: white;
			margin-bottom: 10px;
		}

		article:nth-child(even){
			background-color: #b5b5b5;
		}	

		nav{
			margin-bottom: 0px!important;
		}
	</style>
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
					<li><a href="#">Admin</a></li>
     			</ul>
	</nav>
	 

	<center>
			<form action="" class="navbar-inner" id="searchForm" method="post" onsubmit="validIn(event);">     				
    				<div class="input-group">
   						<input type="text" class="form-control" id="searchBox" name="input">
   						<span class="input-group-btn">
   				    	<button class="btn btn-default" type="submit" form="searchForm" value="Submit"><svg style="height:1.47em;" viewBox="0 0 12 13"><g stroke-width="2" stroke="#999999" fill="none"><path d="M11.29 11.71l-4-4"/><circle cx="5" cy="5" r="4"/></g></svg></button>
  				 		</span>
					</div>
    			</form>  

    			<script>
					function validIn(event) {
						if(document.getElementById('searchBox').value == "")
							event.preventDefault();
					}

				</script>

	<h1 style="color: white;">Results for <?php 
	if(!isset($_POST['input'])){
		echo $_POST['categories'];
	}else{
		echo $_POST['input'];
	}
	?></h1>
	</center>
		<article>
			<img src="https://dominionmartialarts.com/wp-content/uploads/2017/04/default-image-620x600.jpg" height="150px" width="200px" style="display:inline-block;vertical-align:middle;"><h2 style="display:inline-block; margin-left: 20px;">Item name</h2>
			<h3 style="display:inline-block; margin-left: 20px;"><br>price</h3>
		</article>

		<article>
			<img src="https://dominionmartialarts.com/wp-content/uploads/2017/04/default-image-620x600.jpg" height="150px" width="200px" style="display:inline-block;vertical-align:middle;"><h2 style="display:inline-block; margin-left: 20px;">Item name</h2>
			<h3 style="display:inline-block; margin-left: 20px;"><br>price</h3>
		</article>

		<article>
			<img src="https://dominionmartialarts.com/wp-content/uploads/2017/04/default-image-620x600.jpg" height="150px" width="200px" style="display:inline-block;vertical-align:middle;"><h2 style="display:inline-block; margin-left: 20px;">Item name</h2>
			<h3 style="display:inline-block; margin-left: 20px;"><br>price</h3>
		</article>

</body>
</html>