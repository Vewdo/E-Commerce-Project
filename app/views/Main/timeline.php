<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<style>
body{
  background-color:#757f8c;
  opacity: 0;
   transition: opacity 1.5s;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid white;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: white;
}

tr:nth-child(odd) {
  background-color: #484848;
  color: white;
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
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

@font-face {
font-family: "CatAndFox";
src: url("fac.ttf") format("ttf"),
url("fac.otf") format("opentype"),
}

a{
    -webkit-touch-callout: none;
    -webkit-user-select: none; 
    -khtml-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none;
}
  td a{
    text-decoration: none;
    color: skyblue;
  }

td a:hover{
  color: aliceblue;
  text-decoration: none;
}

td a:active{
  text-decoration: none;
    color: skyblue;
}

td a:visited{
  text-decoration: none;
    color: skyblue;
}

h2{
  font-family: Verdana;
}

table{
  -webkit-touch-callout: none;
    -webkit-user-select: none; 
    -khtml-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none;
}


</style>


<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function(event) {
    document.querySelector('body').style.opacity = 1
})

</script>
</head>
<body>

  <header>
        <nav style="margin-bottom: 0px;" class="navbar navbar-inverse">
        <a class="navbar-brand" href="/Main/Home" style="background-color: #333333">E-commerce project</a>
            <ul class="nav navbar-nav">
                <li style="background-color: #222222;"><a href="/Main/timeline">Timeline</a></li>
                <li><a href="/Contact/about">About</a></li>
                <li><a href="/Contact/contactus">Contact Us</a></li>
                <li><a href="/Site/MainPage">Page</a></li>
            </ul>
        </nav>
  </header>

<h2 style="color:white;">Timeline Table | Team project logs</h2>

<table>
  <tr>
    <th>Student</th>
    <th>Student ID</th>
    <th>Task</th>
    <th>Timeline</th>
  </tr>
  <tr>
    <td>Christopher Benson</td>
    <td>2015470</td>
    <td>Worked on the <a href="/Site/MainPage" style="color:blue" target="_blank">Main Website Page</a>(Front-end)</td>
    <td>2 weeks</td>
  </tr>
  <tr>
    <td>Christopher Benson</td>
    <td>2015470</td>
    <td>Edited <a href="/Main/Home" target="_blank">landing page</a>(Front-end)</td>
    <td>1h</td>
  </tr>
  <tr>
    <td>Christopher Benson</td>
    <td>2015470</td>
    <td>edited the navbar(made it better) (Front-end)</td>
    <td>30min</td>
  </tr>
  <tr>
    <td>Christopher Benson</td>
    <td>2015470</td>
    <td>fixed the <a href="https://github.com/janoia/E-Commerce-Project/blob/main/project%20proposal.md" target="_blank">project proposal.md file</a> to have actual markdown syntax</td>
    <td>10min</td>
  </tr>
  <tr>
    <td>Christopher Benson</td>
    <td>2015470</td>
    <td>edited the <a href="https://github.com/janoia/E-Commerce-Project/blob/main/README.md" style="color:blue" target="_blank">README.md</a></td>
    <td>10min</td>
  </tr>
  <tr>
    <td>Christopher Benson</td>
    <td>2015470</td>
    <td>made the <a href="/Contact/about" target="_blank">About page</a> better</td>
    <td>3h</td>
  </tr>
  <tr>
    <td>Christopher Benson</td>
    <td>2015470</td>
    <td>edited and added student info in the <a href="http://localhost/Contact/contactus" style="color:blue;" target="_blank">Contact us Page</a></td>
    <td>1h</td>
  </tr>
  <tr>
    <td>Christopher Benson</td>
    <td>2015470</td>
    <td>made the database plan</td>
    <td>1h</td>
  </tr>
  <tr>
    <td>Christopher Benson</td>
    <td>2015470</td>
    <td>made the database plan</td>
    <td>1h</td>
  </tr>
  <tr>
    <td>Christopher Benson</td>
    <td>2015470</td>
    <td>Worked on the views</td>
    <td>1h</td>
  </tr>
  <tr>
    <td>Christopher Benson</td>
    <td>2015470</td>
    <td>tweaked the urls so they actually work</td>
    <td>5 minutes</td>
  </tr>
  <tr>
    <td>Christopher Benson</td>
    <td>2015470</td>
    <td>Started working on features</td>
    <td>2h</td>
  </tr>
</table>
</table>
</body>
</html>