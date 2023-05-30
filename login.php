<!--

<!DOCTYPE html>
<html>
    <head>
    <title>webapp</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="bootstrap.css">
    </head>
    <body>


    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-3">

  <h1 class="text-center">Login</h1>
<form action="user.php" method="post">

  <div class="formgroup m-2">
    <label>Username</label>
    <input type="text" name="user" autocomplete="off" class="form-control">
  </div>

  <div class="formgroup m-2">
    <label>Password</label>
    <input type="text" name="password" autocomplete="off" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary m-2">Submit</button>

</form>
</div>



<div class="col-lg-6 p-3">
<h1 class="text-center">Sign in</h1>
<form action="user.php" method="post">

  <div class="formgroup m-2">
    <label>Username</label>
    <input type="text" name="user" autocomplete="off" class="form-control">
  </div>

  <div class="formgroup m-2">
    <label>Password</label>
    <input type="text" name="password" autocomplete="off" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary m-2">Submit</button>

</form>
</div>
</div>
</div> -->



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
  
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body>

<!--
<h2>Responsive Social Login Form</h2>
<p>Resize the browser window to see the responsive effect. When the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other.</p>
-->

<div class="container col-lg-6 col-md-6 col-sm-6 " style="height:50vh">
  <form action="/action_page.php">
    <div class="column">
      <h2 style="text-align:center">Login with Social Media or Manually</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>

         <!--
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a> -->
         
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>
        <input type="text" name="email" placeholder="Email" required>
        <input type="password" name="email" placeholder="password" required>
        <input type="submit" value="Login">
        <div class="col">

      <!--<a href="#" style="color:black" class="btn">Forgot password?</a> -->
    </div>
      </div>
      
    </div>
  </form>
</div>




</body>
</html>






