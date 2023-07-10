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

  header("Location: form7.php");
}

//Insert data into database
require '../connection.php';

if(isset($_POST["next"])){
  $numeroFicha = $_POST['numeroFicha'];
  $fechaAtencion = $_POST['fechaAtencion'];
  $nombreProfesional = $_POST['nombreProfesional'];
  $profesion = $_POST['profesion'];
  $institucion = $_POST['institucion'];

  $query = "INSERT INTO form6 VALUES('', '$numeroFicha', '$fechaAtencion', '$nombreProfesional', '$profesion', '$institucion')";
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
      <h2>Datos de Atención</h2>
      <div class="content">
        <div class="input-box">
          <label for="numeroficha">N° de ficha</label>
          <input type="text" placeholder="Ingresa el N° de ficha" name="numeroFicha" required>
        </div>
        <div class="input-box">
          <label for="fechaatencion">Fecha de atención</label>
          <input type="date" placeholder="Ingresa la fecha de atención" name="fechaAtencion" required>
        </div>
        <div class="input-box">
          <label for="nombreprofesional">Nombre del profesional</label>
          <input type="text" placeholder="Ingresa el nombre del profesional" name="nombreProfesional" required>
        </div>
        <div class="input-box">
          <label for="profesion">Profesión</label>
          <input type="text" placeholder="Ingresa el nombre del profesional" name="profesion" required>
        </div>
        <div class="input-box">
          <label for="institurepresenta">Institución que representa</label>
          <input type="text" placeholder="Ingresa la institución que representa" name="institucion" required>
        </div>
      </div>
      <div class="button-container">
        <button type="submit" name="next" value="Next">Siguiente</button>
      </div>
    </form>
  </div>
</body>

</html>