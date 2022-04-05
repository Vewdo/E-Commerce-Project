<?php require APPROOT . '/views/includes/header.php'; 
?>
<style>

body{
  color: white;
  background-color:#757f8c;
  text-align: center;
}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  padding-right: 35px;
  padding-left: 35px;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding-right: 35px;
  padding-left: 35px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

a{
    -webkit-touch-callout: none;
    -webkit-user-select: none; 
    -khtml-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none;
}

h1, h2{
      font-family: "Lucida Console", Times, serif;

      overflow: hidden; /* Ensures the content is not revealed until the animation */
      border-right: .15em solid white; /* The typwriter cursor */
      white-space: nowrap; /* Keeps the content on a single line */
      margin: 0 auto; /* Gives that scrolling effect as the typing happens */
      letter-spacing: .15em; /* Adjust as needed */
      animation: 
      typing 3.5s steps(40, end),
      blink-caret .75s step-end infinite;
}

@keyframes typing {
  from { width: 0 }
  to { width: 100% }
}

@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange; }
}

</style>

<body>

<header>
        <nav style="margin-bottom: 0px;" class="navbar navbar-inverse">
        <span class="navbar-brand">E-commerce project</span>
            <ul class="nav navbar-nav">
                <li><a href="/Main/timeline">Timeline</a></li>
                <li><a href="/Contact/about">About</a></li>
                <li><a href="/Contact/contactus">Contact Us</a></li>
                <li><a href="/Site/MainPage">Page</a></li>
            </ul>
        </nav>
</header>


    


    <h1>Team assignment Assignment 01</h1>
    <h2>First Assignment by Christopher and Jordano for ECommerce</h2>
    <p>This project will end up (hopefully like any other ecommerce website like amazon or ebay) and we plan to make changes to this website as well along the way</p>

</body>
<?php require APPROOT . '/views/includes/footer.php'; ?>