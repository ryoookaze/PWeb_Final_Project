<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="style/confirmation.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" href="/css/master.css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js">
    <meta charset="utf-8">
    <title>Confirmation</title>
  </head>
  <style media="screen">
    .ui.centered.header
    {
      font-size: 40px;
    }
    .ui.footer.segment
    {
      position: fixed;
      bottom: 0;
      width: 100%;
      margin-bottom: 0;
    }
  </style>
  <body>
    <div class="ui inverted vertical masthead center aligned segment">
            <div class="ui center aligned container">
                <div class="ui large secondary inverted centered pointing compact menu">
                    <a class="toc item">
                    </a>
                    <a class="item">Home</a>
                    <a class="item" href="#">Order</a>
                    <a href="#" class="item">About</a>
                    <a class="item login" id="testing" href="login.php">Log Out</a>
                </div>
            </div>
            <div class="ui text container">
            </div>
        </div>
      <div class="ui centered header">
        Confirmation and Payment
      </div>
      <div class="ui equal width grid">
  <div class="column">
  </div>

  <div class="eight wide column">
      <br><br>
    <div class="ui segment">
      <table class="ui five column table">
        <thead>
          <tr><th>Item</th>
          <th>Store</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Action</th>
        </tr></thead>
        <tbody>
          <tr>
            <td>Fried Rice</td>
            <td>Wong Jowo Store</td>
            <td>2</td>
            <td>Rp.24.500</td>
            <td><a href="#">Remove</a> </td>
          </tr>
          <tr>
            <td>Jamie</td>
            <td>Approved</td>
            <td>32</td>
            <td>Male</td>
            <td>Requires call</td>
          </tr>
          <tr>
            <td>Jill</td>
            <td>Denied</td>
            <td>22</td>
            <td>Female</td>
            <td>None</td>
          </tr>
        </tbody>
        <tfoot>
          <tr><th></th>
          <th>Total</th>
          <th></th>
          <th>Rp.500.000,-</th>
          <th></th>
        </tr></tfoot>
      </table>
    </div>
  </div>
  <div class="column">
  </div>
</div>
<br><br>
<div class="ui center aligned grid">
  <div class="ui centered buttons">
    <button class="ui button">Accept</button>
    <div class="or"></div>
    <button class="ui positive button">Cancel</button>
  </div>
</div>
<div class="ui footer inverted basic segment" style="height:50px;">
    <div class="ui container">
      <p style="color:white;">
        2018 Foodyshark, All Right Reservered.
      </p>
    </div>
  </div>
  </body>
</html>
