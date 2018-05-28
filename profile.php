<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style/profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" href="/css/master.css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js">
    <meta charset="utf-8">
    <title>Profile</title>
  </head>
  <body>
    <style media="screen">
    .ui.footer.segment
    {
      position: fixed;
      bottom: 0;
      width: 100%;
      margin-bottom: 0;
    }
    .coverphoto
    {
      background-color: #039BE5;
      height: 100%;
    }
    .styleNav
    {

      position: fixed;
    }
    </style>
    <div class="coverphoto" id="coverbackground">
      <div class="bg"></div>
      <br><br>
      <div class="ui vertical masthead center aligned" id="navbar">
              <div class="ui center aligned container">
                  <div class="ui large secondary white centered compact menu" style="color:white;">
                      <a class="active item" style="color:white; font:"SF UI Text";" href="index.html">Home</a>
                      <a class="item" href="#" style="color:white;">Order</a>
                      <a class="item" href="#" style="color:white;">Profile</a>
                      <a class="item" href="login.php" style="color:white;">Log Out</a>

                  </div>
              </div>
          </div>
    <!--Navbar-->
      <!--Navbar-->
    <br>

<div class="five column doubling ui grid">
    <div class="column">

    </div>
    <div class="column">
      <h2 class="ui center aligned icon header">
        <i class="users link icon" style="color:white;"></i>
        <label for="follower" style="color:white;">Follower</label>
      </h2>
    </div>
    <div class="column">
    </div>
    <div class="column">

    </div>
    <div class="column">
    </div>
    <div class="five column doubling ui row">
      <div class="column">

      </div>
      <div class="column">

      </div>
      <div class="column">
        <div class="ui card">
<div class="image">
  <img src="imgsource/gordonramsay.jpg">
</div>
<div class="content">
  <a class="header">Go</a>
  <div class="meta">
    <span class="date">Joined in 2013</span>
  </div>
  <div class="description">
    Kristy is an art director living in New York.
  </div>
</div>
<div class="extra content">
  <a>
    <i class="user icon"></i>
    22 Friends
  </a>
</div>
</div
      </div>
      <div class="column">
      </div>
      <div class="column">

      </div>
    </div>
</div>
    <!--Sidebar-->
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

  </div>
  </div>
  <div class="ui footer basic segment" style="height:50px;">
      <div class="ui container">
        <p style="color:white;">
          2018 Foodyshark, All Right Reservered.
        </p>
      </div>
    </div>
  <!--Sidebar-->
    <span style="font-size:20px; cursor:pointer; padding:30px; position:fixed;" onclick="openNav()">&#9776;</span>
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
