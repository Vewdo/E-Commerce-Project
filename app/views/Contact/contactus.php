<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Contact View</title>
    <style>
        /* Style inputs with type="text", select elements and textareas */
        input[type=text],
        select,
        textarea {
            width: 100%;
            /* Full width */
            padding: 12px;
            /* Some padding */
            border: 1px solid #ccc;
            /* Gray border */
            border-radius: 4px;
            /* Rounded borders */
            box-sizing: border-box;
            /* Make sure that padding and width stays in place */
            margin-top: 6px;
            /* Add a top margin */
            margin-bottom: 16px;
            /* Bottom margin */
            resize: vertical
                /* Allow the user to vertically resize the textarea (not horizontally) */
        }

        /* Style the submit button with a specific background color etc */
        input[type=submit] {
            background-color: #04AA6D;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* When moving the mouse over the submit button, add a darker green color */
        input[type=submit]:hover {
            background-color: #45a049;
        }

        /* Add a background color and some padding around the form */
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
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
.navbar-brand{
    -webkit-touch-callout: none;
    -webkit-user-select: none; 
    -khtml-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none;
}

body{
    background-color:#757f8c;
}

th{
    font: bold;
}

hr{
    background-image:linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}


    </style>

</head>

<body>
<header>
        <nav style="margin-bottom: 0px;" class="navbar navbar-inverse">
        <a class="navbar-brand" href="/Main/Home" style="background-color: #333333">E-commerce project</a>
            <ul class="nav navbar-nav">
                <li><a href="/Main/timeline">Timeline</a></li>
                <li><a href="/Contact/about">About</a></li>
                <li style="background-color: #222222;"><a href="/Contact/contactus">Contact Us</a></li>
                <li><a href="/Site/MainPage">Page</a></li>
            </ul>
        </nav>
  </header>

<div class="container" id="student">

    <div class="into">
        <h1>Student Information</h1>
    </div>

    <hr class="solid">

    <div class="info1">
    <b>Christopher Benson&#9660;<br><br></b>    
    <table style="width:50%">
    <tr>
    <th>Student Number</th>
    <th>Email</th>
  </tr>
  <tr>
    <td>2015470</td>
    <td>kiko625@outlook.com</td>
  </tr>
</table>
    </div>

    <hr>

    <div class="info2">
      <b>Yuyuko Saigyouji&#9660;<br><br></b>    
    <table style="width:50%">
    <tr>
    <th>Student Number</th>
    <th>Email</th>
  </tr>
  <tr>
    <td>2015470</td>
    <td>kiko625@outlook.com</td>
  </tr>
</table>
    </div>
    
</div>

  <br>

    <div class="container">
        <form action="#">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="australia">Australia</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write a comment" style="height:200px"></textarea>

            <input type="submit" value="Submit">

        </form>
    </div>
</body>

</html>