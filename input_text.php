<?php 

$name="";

if ($_POST){
  $name = (isset($_POST['name']))?$_POST['name']:"";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>
<body>
  <?php if($_POST){ ?>
    <strong>Hola: </strong> <?php echo $name; ?>
  <?php } ?>
  <br><br>
  <form action="input_text.php" method="post">
    <label for="name">Nombre:</label><br>
    <input type="text" name="name" id="name" value='<?php echo $name ?>'>

    <input type="submit" value="Enviar información">

  </form>
  
</body>
</html>