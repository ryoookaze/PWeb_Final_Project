<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
    <title>Log In</title>
  </head>
  <style media="screen">
  body {
    width: 100wh;
    height: 90vh;
    color: #fff;
    background: linear-gradient(-45deg, #80DEEA, #4DD0E1, #0097A7, #00838F);
    background-size: 400% 400%;
    -webkit-animation: Gradient 15s ease infinite;
    -moz-animation: Gradient 15s ease infinite;
    animation: Gradient 15s ease infinite;
  }
  .ui.footer.segment {
    position: fixed;
    bottom: 0;
    width: 100%;
    margin-bottom: 0;
    background-color: #f5f5f5;
  }

  @-webkit-keyframes Gradient {
    0% {
      background-position: 0% 50%
    }
    50% {
      background-position: 100% 50%
    }
    100% {
      background-position: 0% 50%
    }
  }

  @-moz-keyframes Gradient {
    0% {
      background-position: 0% 50%
    }
    50% {
      background-position: 100% 50%
    }
    100% {
      background-position: 0% 50%
    }
  }

  @keyframes Gradient {
    0% {
      background-position: 0% 50%
    }
    50% {
      background-position: 100% 50%
    }
    100% {
      background-position: 0% 50%
    }
  }
  </style>
  <body>
    <br>
    <br>
    <div class="ui vertical masthead center aligned">
            <div class="ui center aligned container">
                <div class="ui large secondary white centered compact menu" style="color:white;">
                    <a class="active item" style="color:white; font:"SF UI Text";" href="index.html">Home</a>
                    <a class="item" href="#" style="color:white;">Order</a>
                    <a class="item" style="color:white;">Gallery</a>
                    <a class="item" href="signup.html" style="color:white;">Sign Up</a>
                </div>
            </div>
        </div>
    <br><br><br>
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
<div class="ui footer basic segment" style="height:50px;">
    <div class="ui container">
      <p style="color:black;">
        2018 Foodyshark, All Right Reservered.
      </p>
    </div>
  </div>
  </body>
</html>
