<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Logo Website.png">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" href="style/card.css">
    <link rel="stylesheet" href="/css/master.css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.3/semantic.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-Master/semantic.min.css">
    <script src="Semantic-UI-CSS-Master/semantic.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script>
    $(document).ready(function(){
        $('.login').click(function(){
           $('#coba').modal('show');
        });
        });
    </script>
<link rel="stylesheet" href="style/style.css">
    <title>Welcome</title>
  </head>
  <body>
<div class="backgroundcolor">
  <!--Header-->
  <div class="ui inverted vertical masthead center aligned segment">
          <div class="ui center aligned container">
              <div class="ui large secondary inverted centered pointing compact menu">
                  <a class="toc item">
                      <i class="sidebar icon"></i>
                  </a>
                  <a class="active item">Home</a>
                  <a class="item" href="#">Order</a>
                  <a class="item login" id="testing">Login</a>
                  <a class="item" href="signup.html">Sign Up</a>
              </div>
          </div>

          <div class="ui text container">
          </div>

      </div>
<div class="ui modal" id="coba">
      <div class="ui centered header" style="font-size:30px; color:white;">
        Log In To Foodyshark
      </div>
     <div class="page-login">
    <div class="ui centered grid container">
      <div class="nine wide column">
        <br><br>
        <div class="ui fluid card">
          <div class="content">
          <form class="ui form" method="POST">
            <div class="field">
              <label>User</label>
              <input type="text" name="user" placeholder="User">
            </div>
            <div class="field">
              <label>Password</label>
              <input type="password" name="pass" placeholder="Password">
            </div>
              <div class="ui grid">
                  <div class="four column row">
                      <div class="centered column">
                      <button class="ui primary button" type="submit">
                              <a href="dashboard.html">Log In</a>
                      </button>
                      </div>
                  </div>
              </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div>

<div class="maincontainer" style="  top: 50%;
  left: 20%;">

      <div class="thecard">

        <div class="thefront"><img src="imgsource/Gordon-Ramsay.jpg"></div>

        <div class="theback"><h1>Ivander William</h1><p>Front End Developer of This Web</p>
        </div>

      </div>
    </div>
<div class="maincontainer" style="  top: 50%;
  left: 50%;">

      <div class="thecard">

        <div class="thefront"><img src="imgsource/rav-cropped.jpg"></div>

        <div class="theback"><h1>Aang</h1><p>Front End Developer of This Web</p>
      </div>

      </div>
    </div>
<div class="maincontainer" style="  top: 50%;
  left: 80%;">

      <div class="thecard">

        <div class="thefront"><img src="imgsource/chef_juna.jpg"></div>

        <div class="theback"><h1>Rifqi</h1><p>Back End Developer of This Web</p>
        <button>Submit</button></div>

      </div>
    </div>
      </div>  
      </div>
</body>
  <script>
    $('.login.modal')
    .modal('attach events', '.login.button','show');
  </script>
</html>
