<?php
//require 'forms/form1.php';
session_start();

if(isset($_POST['next'])){
  foreach($_POST as $key => $value){
    $_SESSION['info'][$key] = $value;
  }

  $keys = array_keys($_SESSION['info']);

  if(in_array('next', $keys)) {
    unset($_SESSION['info']['next']);
  }

  header("Location: forms/form1.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title>Ficha de Atención Psicosocial</title>
</head>

<body>
  <h2 class="index-title2">Plan de Emergencias Municipio de Manizales</h2>
  <div class="container">
    <form action="" method="post">
      <h2 class="index-title">Ficha de Atención Psicosocial Individual y Familiar - Primer Contacto</h2>
      <div class="content">
        <div class="div-logo-salud">
          <img class="logo-salud" src="images/logo-salud.png" alt="Logo-salud">
        </div>
      </div>
      <div class="button-container">
        <button type="submit" name="next" value="Next">Iniciar Aquí</button>
      </div>
    </form>
  </div>
</body>

</html>