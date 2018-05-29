<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
<link rel="stylesheet" href="/css/master.css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.3/semantic.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/Profile2.js"></script>
<link href="style/style2.css">
</head>
<body onload="startTime()">
<style media="screen">
body {
  width: 100wh;
  height: 90vh;
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
<div class="ui grid" style="padding : 50px 0px;">
  <div class="four wide column">
    <div class="ui secondary vertical fluid menu">
      <a class="item">
          <div class="left floated column">
              <i class="home big icon" style="color:white;"></i>
                  <span style="font-size:20px; color:white;">Home</span>
          </div>
      </a>
      <br>
      <a class="item">
          <div class="left floated column">
              <i class="utensils big icon" style="color:white;"></i>
                  <span style="font-size:20px; color:white;">Order</span>
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
<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
       <br>
<div id="jamdinding"></div>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Sally</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="imgsource/bakery.jpg" class="img-circle img-responsive"> </div>

                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Name:</td>
                        <td>Sally</td>
                      </tr>
                      <tr>
                        <td>Join date:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>01/24/1988</td>
                      </tr>

                         <tr>
                             <tr>
                        <td>Gender</td>
                        <td>Female</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>Bagan Batu,Pekan Baru</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>
                      </tr>

                    </tbody>
                  </table>

                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a href="profileedit.php">Edit Profile</a>
                        <span class="pull-right">

                        </span>
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
