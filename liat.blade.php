<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/icon/Logo_Website.png')}}">
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
    <script src="{{ asset('js/semantic.min.js') }}"></script>
    <script>

    $(document).ready(function(){
        $('#testing').click(function(){
           $('#coba').modal('show');
        });
        });
    </script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <title>Welcome</title>
  </head>
  <body>
<div class="backgroundcolor">
  <!--Header-->
  <div class="ui inverted large menu">
    <a class="active item">Home</a>
    <a class="item">Order</a>
    <a href="#" class="item">Gallery</a>
    <a href="#" class="item">About</a>
<div class="right menu">
<div class="ui buttons">
  <a class="ui white" id="testing">
  <button class="ui button login">
    Log In
  </button>
</a>
  <div class="ui modal test" id="coba">
         <div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui blue image header">
      <img src="assets/images/logo.png" class="image">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    <form class="ui large form">
      <div class="ui segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large primary submit button">Login</div>
      </div>
    </form>

    <div class="ui message">
      New to us? <a href="#">Sign Up</a>
    </div>
  </div>
</div>
       </div>

    <div class="or"></div>
    <button class="ui positive button">
      <a class="ui blue" href="{{ route('signup') }}" style="color:white;">Sign Up</a>
    </button>
</div>

</div>
</div>
<div class="ui centered grid">
<div class="computer only row">
  <div class="column"></div>
</div>
<div class="six wide tablet eight wide computer column"></div>
<div class="six wide tablet eight wide computer column"></div>
<div class="six wide tablet eight wide computer column"></div>
<div class="six wide tablet eight wide computer column"></div>
<div class="six wide tablet eight wide computer column"></div>
<div class="six wide tablet eight wide computer column"></div>
<div class="six wide tablet eight wide computer column"></div>
<div class="six wide tablet eight wide computer column"></div>
<div class="six wide tablet eight wide computer column"></div>
<div class="six wide tablet eight wide computer column"></div>
<div class="six wide tablet eight wide computer column"></div>
</div>
<h1 class="ui center aligned header" style="font-size:60px; color:white;">Welcome To Foodyshark
<div class="sub header" style="font-size:30px; color:white;">Enjoy Our Food and Beverages
</div>
<button class="ui blue large button center aligned ">Get Started</button>
</h1>
<br>
<br>
<br>
<br>
<br>
<br>
</div>
  <h1 class="ui left aligned header" style="font-size:70px;">About Us</h1>
  <div class="ui grid">
    <div class="three wide column"></div>
    <div class="three wide column">
      <div class="ui inverted segment" style="height:300px;">
        <div class="ui blue centered header" style="font-size:30px;">
          <div class="ui two column centered grid">
          <div class="column"></div>
    <div class="four column centered row">
    <div class="column"></div>
    <div class="column"></div>
    <div class="column"></div>
    <div class="column"></div>
    </div>
  </div>
          We Serve It Better</div>
        <p class="centered" style="font-size:15px; text-align:center;">We Care About Satisfy.</p>
      </div>
    </div>
    <div class="three wide column">
      <div class="ui inverted segment" style="height:300px;">
        <div class="ui blue centered header" style="font-size:30px;"><div class="ui two column centered grid">
          <div class="column"></div>
    <div class="four column centered row">
    <div class="column"></div>
    <div class="column"></div>
    <div class="column"></div>
    </div>
  </div>
          Never Forget Moments</div>
        <p class="centered"style="font-size:15px; text-align:center;">We Care About Satisfy.</p>
      </div>
  </div>
  </div>
  <br>
  <!--Gallery-->
  <h1 class="ui left aligned header" style="font-size:70px;">Gallery</h1>
  <br>
  <br>
  <div class="ui equal width grid">
    <div class="column">
      <div class="ui link cards">
      <div class="ui centered card">
        <div class="image">
          <img src="{{asset ('img/resource/friedrice.jpg')}}">
        </div>
        <div class="content">
          <div class="header">Fried Rice</div>
          <div class="meta">
            <a>Steven Hard</a>
          </div>
          <div class="description">An Indonesian cuisine that will tempt all your senses </div>
        </div>
        <div class="extra content">
          <span class="center aligned">
            Since 2013
          </span>
        </div>
      </div>
    </div>
    </div>
    <div class="column">

    </div>
    <div class="equal width row">
      <div class="column">

      </div>
      <div class="column">

      </div>
    </div>
  </div>
    <h1 class="ui left aligned header" style="font-size:70px;">Category</h1>
    <div class="ui link cards">
    <div class="ui centered card">
      <div class="image">
        <img src="{{asset ('img/resource/bmwm4.jpg')}}">
      </div>
      <div class="content">
        <div class="header">Ivander William</div>
        <div class="meta">
          <a>Front End Developer</a>
        </div>
        <div class="description">An Indonesian cuisine that tempting </div>
      </div>
      <div class="extra content">
        <span class="center aligned">
          Joined in 2013
        </span>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">About</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Sitemap</a>
            <a href="#" class="item">Contact Us</a>
            <a href="#" class="item">Religious Ceremonies</a>
            <a href="#" class="item">Gazebo Plans</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Services</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">Banana Pre-Order</a>
            <a href="#" class="item">DNA FAQ</a>
            <a href="#" class="item">How To Access</a>
            <a href="#" class="item">Favorite X-Men</a>
          </div>
        </div>
        <div class="seven wide column">
          <h4 class="ui inverted header">Footer Header</h4>
          <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
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
