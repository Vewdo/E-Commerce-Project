  

/*
store page

*/
  function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}


/*
  settings page
*/
  $(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
  

  //var isLight = <?php $hi = "true"; echo $hi; //search database?>;

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
    }

    function LightTheme(){
      document.body.style.backgroundColor = "white";
      document.getElementsByTagName("nav")[0].className = "navbar navbar-default";
      document.getElementById("sideMenu").style.backgroundColor = "#cccccc";
      document.getElementsByTagName("ul")[1].style.filter = "invert(1)";
      document.getElementsByClassName("navbar-brand")[0].style.filter = "invert(1)";
      $("#mainSettings").css("color", "black");
    }

    function EditName() {
      $("#username").prop("disabled", false);

      $("#editName").css("visibility", "hidden");
    }

    function EditEmail() {
      $("#email").prop("disabled", false);

      $("#editEmail").css("visibility", "hidden");

    }