<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-image: url('https://www.faronics.com/assets/It-ticket-support.jpg');
        background-size: cover;
        background-color: #f0f0f0;
        text-align: center;
      }
      
      h1 {
        color: #262d2f;
        font-size: 32px;
        margin-top: 40px;
        margin-bottom: 30px;
      }
      
      p {
        font-size: 18px;
        margin-bottom: 40px;
      }
      
      button {
        padding: 10px 20px;
        font-size: 16px;
        color: #ffffff;
        background-color: #428bca;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.2s ease;
        margin: 0 10px;
      }
      
      button:hover {
        background-color: #3071a9;
      }
      
      .container {
        width: 80%;
        max-width: 500px;
        margin: auto;
        background-color: #caedf3;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      }
      
      .btn-usuario {
        background-color: #5cb85c;
      }
      
      .btn-admin {
        background-color: #d9534f;
      }
      
      .btn-usuario:hover {
        background-color: #4cae4c;
      }
      
      .btn-admin:hover {
        background-color: #c9302c;
      }
    </style>
</head>
<body>
<div class="container">
      <h1>Incidencies Pedralbes</h1>
      <p>Seleccione una opción:</p>
      <button class="btn-usuario" onclick="location.href='user.php'">Ingresar como usuario</button>
      <button class="btn-admin" onclick="location.href='adminPanel.php'">Ingresar como administrador</button>
    </div>
  </body>
</html>