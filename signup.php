<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/signup.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
    <title>Sign Up</title>
  </head>
  <body>
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
    <br>
    <br>
    <br>
    <h1 class="ui centered aligned header" style="font-size:40px; color:white;">Sign Up Your Account</h1>
    <br>
    <br>
    <br>
    <div class="ui two column centered grid">
      <div class="column">
        <div class="ui form">
          <div class="three fields">
            <div class="field">
              <label style="color:white;">First name</label>
              <input type="text" placeholder="First Name">
            </div>
            <div class="field">
              <label style="color:white;">Middle name</label>
              <input type="text" placeholder="Middle Name">
            </div>
            <div class="field">
              <label style="color:white;">Last name</label>
              <input type="text" placeholder="Last Name">
            </div>
          </div>
        </div>
      </div>
        <div class="four column centered row">
          <div class="column">
            <form class="ui form">
              <div class="field">
                <label style="color:white; font-size:15px;">E-mail</label>
                <input type="text" name="first-name" placeholder="Enter Your Email">
              </div>
            </div>
        <div class="column">
          <div class="ui form">
  <div class="field">
      <label style="color:white;">Gender</label>
      <div class="ui selection dropdown">
          <input type="hidden" name="gender">
          <i class="dropdown icon"></i>
              <div class="default text" >Gender</div>
                <div class="menu">
                  <div class="item" data-value="1">Male</div>
                  <div class="item" data-value="0">Female</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="ui two column centered grid">
      <!--Date-->
      <div class="column">
        <div class="field">
          <label style="color:white;">Date</label>
          <div class="ui calendar" id="example2">
            <div class="ui input left icon">
              <i class="calendar icon"></i>
              <input type="text" placeholder="dd mm yyyy">
            </div>
        </div>
        </div>
        <br/>
          </div>
        </div>
        <div class="ui two column centered grid">
      <div class="column">
        <div class="ui animated white centered button" tabindex="0">
  <div class="visible content" style="color:#00838F;">Sign Up</div>
  <div class="hidden content">
    <i class="right arrow icon"></i>
  </div>
      </div>
    </div>
  </div>

  </body>
</html>
