<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <style>
        body {
  background: #f2f2f2;
}

.grid-log {
  display: grid;
  place-items: center;
  height: 100vh;
}

/* Estilos para el contenedor principal */

.container {
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
  max-width: 400px;
  padding: 30px;
  text-align: center;
}

/* Estilos para el título y el ícono de la llave */

.login-title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  text-transform: uppercase;
}

.login-key {
  background: #262626;
  border-radius: 50%;
  color: #fff;
  display: inline-flex;
  font-size: 32px;
  height: 80px;
  justify-content: center;
  margin-bottom: 20px;
  width: 80px;
}

/* Estilos para el formulario */

.login-form {
  margin-top: 30px;
  text-align: left;
}

.form-group {
  margin-bottom: 20px;
}

.form-control-label {
  display: block;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 5px;
  text-transform: uppercase;
}

.form-control {
  background: #f2f2f2;
  border: none;
  border-radius: 5px;
  color: #262626;
  font-size: 16px;
  padding: 10px;
  width: 100%;
}

input[type="submit"] {
  background: #262626;
  border: none;
  border-radius: 5px;
  color: #fff;
  cursor: pointer;
  font-size: 16px;
  padding: 10px;
  text-transform: uppercase;
  transition: background 0.3s ease-in-out;
  width: 100%;
}

input[type="submit"]:hover {
  background: #333;
}

        </style>
    <title>Document</title>
</head>
<body>
    <div class="grid-log">
        <div class="container">
    
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">   
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 ">
                    <form method="post" action="login.php">
                            <div class="form-group">
                                <label class="form-control-label">USERNAME</label>
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control"  name="password">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="login">
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>

</body>
</html>