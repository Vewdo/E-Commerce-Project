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

article:nth-child(odd) {
  background-color: lightgray;
}

article:nth-child(even) {
  background-color: #484848;
  color: white;
}

a{
    -webkit-touch-callout: none;
    -webkit-user-select: none; 
    -khtml-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none;
}

article{
    height: 40px;
    text-align: center;
}
article b{
    cursor: pointer;
}

article:hover{
    filter: brightness(85%);
}


p{
    display: none;
}

b{
    -webkit-touch-callout: none;
    -webkit-user-select: none; 
     -khtml-user-select: none; 
       -moz-user-select: none; 
        -ms-user-select: none; 
            user-select: none;
}

body{
    background-color: #757f8c;
}


    </style>
</head>

<body>
    <header>
        <nav style="margin-bottom: 0px;" class="navbar navbar-inverse">
        <a class="navbar-brand" href="/Main/Home" style="background-color: #333333">E-commerce project</a>
            <ul class="nav navbar-nav">
                <li><a href="/Main/timeline">Timeline</a></li>
                <li style="background-color: #222222;"><a href="/Contact/about">About</a></li>
                <li><a href="/Contact/contactus">Contact Us</a></li>
                <li><a href="/Site/MainPage">Page</a></li>
            </ul>
        </nav>
  </header>

 <article onclick="show(1)">
    <b id="name1">Feature 1 &#x25BC;</b>
<hr class="solid">
<p id="1">Having the ability to change the language</p>
</article>

 <article style="background-color: lightgray;" onclick="show(2)">
<b id="name2">Feature 2 &#x25BC;</b>
<hr class="solid">
<p id="2">Having the ability to have  and modify a shopping cart</p>
</article>

 <article onclick="show(3)">
<b id="name3">Feature 3 &#x25BC;</b>
<hr class="solid">
<p id="3">Having the ability to create and edit accouts</p>
</article>

 <article onclick="show(4)">
<b id="name4">Feature 4 &#x25BC;</b>
<hr class="solid">
<p id="4">Having the ability to sign in</p>
</article>

 <article onclick="show(5)">
<b id="name5">Feature 5 &#x25BC;</b>
<hr class="solid">
<p id="5">Having the ability to pay</p>
</article>

 <article onclick="show(6)">
<b id="name6">Feature 6 &#x25BC;</b>
<hr class="solid">
<p id="6">Having the ability to change the theme</p>
</article>

 <article onclick="show(7)">
<b id="name7">Feature 7 &#x25BC;</b>
<hr class="solid">
<p id="7">Having the ability to keep receipts</p>
</article>

<script type="text/javascript">
    const open = [0, 0, 0, 0, 0, 0, 0];


    function show(feature) {
        var i = parseInt(feature);
        var articleNum = document.getElementById(feature.toString());
        var articleTitle = document.getElementById("name" + feature.toString());
        var articleSize = document.getElementsByTagName("article")[feature - 1];

        if(open[i - 1] == 0){//open
            articleNum.style.display = "block";
            $('article').click(function(){
    $(this).animate({height:'90'})
})            
            articleTitle.innerHTML= "feature " + feature + "&#x25B2;";
            open[i - 1] = 1;
        }else{ //close
            articleNum.style.display = "none";
            articleTitle.innerHTML= "feature " + feature + "&#x25BC;" + "<br>";
            $('article').click(function(){
    $(this).animate({height:'40'})
}) 
            open[i - 1] = 0;
        }
        
    }
    

</script>

</body>

</html>