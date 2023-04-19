<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php  
    $id = $_GET['idInc'];?>
<form action='actuacioInsert.php' method="post" id='actuacion'>
  <input type='hidden' name='id' value=<?php echo $id;?>>
  <p>Descripció de l'actuació</p>
  <textarea for="descripcio" name="descripcio" form='actuacion'></textarea>
  <br><br>
  <p>Temps emprès</p>
  <label for="temps"></label>
  <input type="number" id="temps" name="temps">
  <br><br>
  <p>Visible:</p>
  <label for="visible_yes"><input type="radio" id="visible_yes" name="visible" value="1"> Sí</label>
  <label for="visible_no"><input type="radio" id="visible_no" name="visible" value="0"> No</label>
  <br><br>
  <input type="submit" value="Enviar">
</form>

</body>
</html>