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
  <style media="screen">
    header
    {
      padding : 30px 0px;
      background-color: #0288D1;
    }
  </style>
  <header>
    <h1 class="ui centered aligned header" style="font-size:40px; color:white;">Edit Profile</h1>
  </header>

  <br>

  <div class="ui grid">
    <div class="four wide column">
      <div class="ui secondary vertical fluid menu">
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
      <form class="ui form" action="index.html" method="post" style="width:400px;">
        <div class="input-group">
          <label for="">Name</label>
          <input type="text" name="name" value="" placeholder="Enter Your Name">
          <div class="input-group">
            <br>
            <label for="">Address</label>
            <input type="text" name="address" value="" placeholder="Enter Your Address">
          <div class="input-group">
            <br>
            <label for="">Email</label>
            <input type="text" name="" value="" placeholder="Enter Your Email">
          </div>
          <div class="input-group">
            <br>
            <label for="">Phone Number</label>
            <input type="number" name="" value="" placeholder="Enter Your Number Phone">
          </div>
          </div>
        </div>
        <br>
        <button type="button" name="button" class="ui blue button">Save</button>
      </form>

      </form>

    </body>

</html>
