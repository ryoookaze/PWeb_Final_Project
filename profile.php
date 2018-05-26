<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style/profile.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" href="/css/master.css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js">
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
    <style media="screen">
    .ui.footer.segment {
      position: fixed;
      bottom: 0;
      width: 100%;
      margin-bottom: 0;
    }
    </style>
    <br>
    <h1 class="ui centered aligned header" style="font-size:40px; color:#039BE5;">Your Profile</h1>
    <div id="sideNav" class="sidenav">
    <a href="javascript:void(0)" class="closebutton" onclick="closeNav()">&times;</a>
    <br>
    <a href="Dashboard.html">Home</a>
    <br>
    <a href="#">Order</a>
    <br>
    <a href="#">Profile</a>
    <br>
    <a href="#">Cart</a>
    <br>
    <a href="#">About</a>
    <div class="ui footer basic segment" style="height:50px;">
        <div class="ui container">
          <p style="color:white;">
            2018 Foodyshark, All Right Reservered.
          </p>
        </div>
      </div>
  </div>

    <span style="font-size:20px; cursor:pointer; padding:30px; position:fixed;" onclick="openNav()">&#9776;</span>

  <div class="searchBy">
    <b>Search By : </b>
  </div>
  <script>
  function openNav()
  {
    document.getElementById("sideNav").style.width = "100%";
  }
  function closeNav()
  {
    document.getElementById("sideNav").style.width = "0";
  }
  </script>
  </body>
</html>
