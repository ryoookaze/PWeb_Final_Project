<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Logo Website.png">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" href="/css/master.css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js">
    <link rel=stylesheet href="js/drop.js">
<link rel="stylesheet" href="style/style.css">
    <title>Foodyshark - Seller</title>
  </head>
  <br>
  <h1 class="ui centered aligned header" style="font-size:40px; color:#039BE5;">Order Your Food</h1>
  <br>

  <div class="ui grid">
    <div class="four wide column">
      <div class="ui secondary vertical fluid menu" >
        <a class="item">
            <div class="left floated column">
                <i class="home big icon"></i>
                    <span style="font-size:20px;">Home</span>
            </div>
        </a>
        <br>
        <a class="item">
            <div class="left floated column">
                <i class="utensils big icon"></i>
                    <span style="font-size:20px;">Order</span>
            </div>
        </a>
        <br>
        <a class="item" href="profile.php">
            <div class="left floated column">
                <i class="user circle big icon"></i>
                    <span style="font-size:20px;">Profile</span>
            </div>
        </a>
        <br>
        <a class="item">
            <div class="left floated column">
                <i class="info circle big icon"></i>
                    <span style="font-size:20px">About</span>
            </div>
        </a>
        <br>
        <a class="item" href="confirmationpage.html">
            <div class="left floated column">
                <i class="shopping cart big icon"></i>
                    <span style="font-size:20px;">Cart</span>
            </div>
        </a>
        <br>
        <a class="item">
            <div class="left floated column">
              <i class="shopping cart big icon"></i>
                  <span style="font-size:20px">Log Out</span>
            </div>
        </a>
      </div>
    </div>
    <div class="twelve wide column">
  <div class="eight wide column">
            Order By    :
            <div class="ui selection dropdown">
              <input type="hidden" name="gender">
              <i class="dropdown icon"></i>
              <div class="default text">Gender</div>
              <div class="menu">
                <div class="item" data-value="1">Male</div>
                <div class="item" data-value="0">Female</div>
              </div>
            </div>
        </div>
        <div class="column">

        </div>
        <br>
        <div class="column">
            <button type="button" name="button" class="ui blue button">Menu Log</button>
        </div>
        <br>
        <div class="column">
            <button type="button" name="button" class="ui blue button">Market Log</button>
        </div>
        <br>
        <div class="column">
          <button type="button" name="button" class="ui blue button">Transaction Log</button>
        </div>
        <br>
        <div class="column">
          <button type="button" name="button" class="ui blue button">Add Menus</button>
        </div>
      </div>
    </div>
    </body>

</html>
