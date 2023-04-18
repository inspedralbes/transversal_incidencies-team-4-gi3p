<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/logUsu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    
    <title>Document</title>
</head>
<body>
<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <h2 style="text-align:center">Login with Social Media or Manually</h2>
      

      <div class="col">
        <a href="https://www.facebook.com/login" class="fb btn" target="_blank">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
        <a href="https://accounts.firefox.com/" class="firefox btn" target="_blank>
          <i class="fa fa-firefox fa-fw"></i> Login with Mozilla firefox
        </a>
        <a href="https://accounts.google.com/InteractiveLogin/identifier?continue=https%3A%2F%2Ftakeout.google.com%2F%3Fhl%3Des&followup=https%3A%2F%2Ftakeout.google.com%2F%3Fhl%3Des&hl=es&osid=1&passive=1209600&ifkv=AQMjQ7QcxmffUeXRajESApDwAGqO_dq60aVCKEotuLVDiJ9XIsjaWj9W7PxTDj-ZHongxMNh5ymwfA&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="google btn" target="_blank>
          <i class="fa fa-google fa-fw"></i> Login with Google+
        </a>
      </div>
      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
      </div>

    </div>
  </form>
</div>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="#" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
