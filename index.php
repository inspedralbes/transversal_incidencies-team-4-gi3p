<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/login.css">
    
    <title>Document</title>
</head>
<body>
    <div class="grid-index">
      <nav class="encabezado-index">
        <a href="index.php" class="return-index">
          <span class="logo">
            <img src="images/campus.png" alt="Incidencies Pedralbes" style="padding: 10px">
          </span>
            </a>
      </nav>
    </div>

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
                                <label class="form-control-label" >USERNAME</label>
                                <input type="text" class="form-control" name="userid">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label" >PASSWORD</label>
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

    <!--<div class="container-grid-index">
          <form method="post" action="login.php">
          Nom Usuari: <input type="text" name="userid" placeholder="usuario"><br>
          Contraseña: <input type="password" name="password" placeholder="contraseña"><br>
          <input type="submit" value="login">
          </form>
          <a href='logout.php'>Desconectar</a><br>
          <a href='member.php'>Area de miembros</a><br>       
      </div>-->
      

      <!--<div class="subscribe">
    <input type="submit" class="btn" value="sign in" style="font-size: 16px"><br />
    <a href="#" class="btn-3d-sub"><span>submit</span></a><br />
    <a href="#" class="btn-3d-can"><span>cancel</span></a>
  </div>-->
      

  
 
</body>
</html>