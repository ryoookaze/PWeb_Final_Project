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

  </style>
  <body>
   <div class="page-login">
  <div class="ui centered grid container">
    <div class="nine wide column">
      <br><br>
        <div class="ui icon warning message">
          <i class="lock icon"></i>
          <div class="content">
            <div class="header">
             <br> Login failed!
            </div>
            <p>You might have misspelled your username or password!</p>
          </div>
        </div>
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
          <button class="ui primary labeled icon button" type="submit">
            <i class="unlock alternate icon"></i>
            Login
          </button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
</html>
