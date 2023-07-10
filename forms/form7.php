<?php
session_start();

if(isset($_POST['next'])){
  foreach($_POST as $key => $value){
    $_SESSION['info'][$key] = $value;
  }

  $keys = array_keys($_SESSION['info']);

  if(in_array('next', $keys)) {
    unset($_SESSION['info']['next']);
  }

  header("Location: form8.php");
}

//Insert data into database
require '../connection.php';

if(isset($_POST["next"])){
  $nombres = $_POST['nombres'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];

  $query = "INSERT INTO form7 VALUES('', '$nombres', '$direccion', '$telefono')";
  mysqli_query($conn, $query);
  echo 
  "
    <script> alert('Envio exitoso'); </script>
  ";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <title>Ficha de Atención Psicosocial</title>
</head>

<body>
  <div class="container">
    <div class="div-logo-salud2">
      <img class="logo-salud2" src="../images/logo-salud2.png" alt="Logo-salud">
    </div>
    <form action="" method="post">
      <h2>Datos de la Persona</h2>
      <div class="content">
        <div class="input-box">
          <label for="nombrepersonaafectada">Nombres y apellidos del afectado</label>
          <input type="text" placeholder="o representante familiar" name="nombres" required>
        </div>
        <div class="input-box">
          <label for="direccion">Dirección</label>
          <input type="text" placeholder="Ingresa la dirección" name="direccion" required>
        </div>
        <div class="input-box">
          <label for="telefono">Teléfono de contacto</label>
          <input type="int" placeholder="Ingresa el telefono" name="telefono" required>
        </div>
      </div>

      <div class="button-container">
        <button type="submit" name="next" value="Next">Siguiente</button>
      </div>
    </form>
  </div>
</body>

</html>