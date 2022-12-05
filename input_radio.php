<?php 

$name ="";
$lenguaje="";
$chkleer = "";
$chkbailar = "";
$chkcomer = "";
$lsSeries = "";
$comentario = "";

if ($_POST){

  $name = (isset($_POST['name']))?$_POST['name']:"";

  $lenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
  
  $chkleer = ( isset($_POST['chkleer'])=="si")?"checked":"";
  $chkbailar = ( isset($_POST['chkbailar'])=="si")?"checked":"";
  $chkcomer = ( isset($_POST['chkcomer'])=="si")?"checked":"";

  $lsSeries = (isset($_POST['lsSeries']))?$_POST['lsSeries']:"";

  $comentario = (isset($_POST['comentario']))?$_POST['comentario']:"";

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
    <strong>Hola: </strong> <?php echo $name; ?> <br/>
    <strong>Tu lenguaje preferido es: </strong> <?php echo $lenguaje ?> <br/>
    <strong>Tus hobbies son: </strong> <br>
    <?php echo ($chkleer == 'checked')?"-Leer"."<br>":""; ?>
    <?php echo ($chkbailar == 'checked')?"-Bailar"."<br>":""; ?>
    <?php echo ($chkcomer == 'checked')?"-Comer"."<br>":""; ?> 
    <strong>Te gusta esta serie: </strong> <?php echo $lsSeries ?> <br/>
    <strong>Aqui esta tu comentario</strong> <?php echo $comentario ?> <br/>
  <?php } ?>
  <br><br>
  <form action="input_radio.php" method="post">

    <label for="name">Nombre:</label><br>
    <input type="text" name="name" id="name" value='<?php echo $name ?>'>

    <h3>¿Cual es tu lenguaje preferido?</h3>
    <label for="php">PHP</label>
    <input type="radio" id="php" <?php echo ($lenguaje == 'php')?"checked":""; ?> name="lenguaje" value="php" >

    <label for="html">HTML</label>
    <input type="radio" id="php" <?php echo ($lenguaje == 'html')?"checked":""; ?> name="lenguaje" value="html">

    <label for="html">CSS</label>
    <input type="radio" id="php" <?php echo ($lenguaje == 'css')?"checked":""; ?> name="lenguaje" value="css">


    <h3>¿Cuales son tus hobbies?</h3>

    <label for="leer">Leer</label>
    <input type="checkbox" name="chkleer" id="leer" value="si" <?php echo $chkleer; ?>>

    <label for="bailar">Bailar</label>
    <input type="checkbox" name="chkbailar" id="bailar" value="si" <?php echo $chkbailar; ?>>

    <label for="comer">Comer</label>
    <input type="checkbox" name="chkcomer" id="comer" value="si" <?php echo $chkcomer; ?>>

    <h3>¿Qué tipo de series te gustan?</h3>

    <select name="lsSeries" id="lsSeries">
      <option value="">Ninguna</option>
      <option value="simpson" <?php echo ($lsSeries=="simpson"?"selected":""); ?>>Simpson</option>
      <option value="dark" <?php echo ($lsSeries=="dark"?"selected":""); ?>>Dark</option>
      <option value="glee" <?php echo ($lsSeries=="glee"?"selected":""); ?>>Glee</option>
      <option value="padrino" <?php echo ($lsSeries=="padrino"?"selected":""); ?>>Padrino</option>
    </select>
    <br><br>

    <h3>Deja tu comentario</h3>
    <textarea name="comentario" id="" cols="30" rows="10">
<?php echo $comentario ?>
    </textarea>

    <br><br>
    <input type="submit" value="Enviar información">



  </form>
  
</body>
</html>