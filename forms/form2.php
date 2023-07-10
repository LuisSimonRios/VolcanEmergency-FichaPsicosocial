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

  header("Location: form3.php");
}

//Insert data into database
require '../connection.php';

if(isset($_POST["next"])){
  $nombreAfectado = $_POST["nombreAfectado"];
  $edadPaciente = $_POST["edadPaciente"];
  $documento = $_POST["documento"];
  $direccion = $_POST["direccion"];
  $comuna = $_POST["comuna"];
  $telefono = $_POST["telefono"];
  $ocupacion = $_POST["ocupacion"];
  $procedencia = $_POST["procedencia"];
  $eps = $_POST["eps"];
  $lugarIntervencion = $_POST["lugarIntervencion"];
  $sexo = $_POST["sexo"];

  $query = "INSERT INTO form2 VALUES('', '$nombreAfectado', '$edadPaciente', '$documento', '$direccion', 
  '$comuna', '$telefono', '$ocupacion', '$procedencia', '$eps', '$lugarIntervencion', '$sexo')";
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
    <form action="#" method="post">
      <h2>Datos de la Persona - Cabeza de Familia</h2>
      <div class="content">
        <div class="input-box">
          <label for="nombrepersonaafectada">Nombres y apellidos del afectado</label>
          <input type="text" placeholder="o representante familiar" name="nombreAfectado" required>
        </div>
        <div class="input-box">
          <label for="edadpaciente">Edad</label>
          <input type="int" placeholder="Ingresa la edad del paciente" name="edadPaciente" required>
        </div>
        <div class="input-box">
          <label for="documento">Documento de identidad</label>
          <input type="int" placeholder="Ingresa el documento de identidad" name="documento" required>
        </div>
        <div class="input-box">
          <label for="direccion">Dirección</label>
          <input type="text" placeholder="Ingresa la dirección" name="direccion" required>
        </div>
        <div class="input-box">
          <label for="comuna">Comuna</label>
          <input type="text" placeholder="Ingresa la comuna" name="comuna" required>
        </div>
        <div class="input-box">
          <label for="telefono">Teléfono de contacto</label>
          <input type="int" placeholder="Ingresa el telefono" name="telefono" required>
        </div>
        <div class="input-box">
          <label for="ocupacion">Ocupación</label>
          <input type="text" placeholder="Ingresa la ocupacion" name="ocupacion" required>
        </div>
        <div class="input-box">
          <label for="procedencia">Procedencia</label>
          <input type="text" placeholder="Ingresa la procedencia" name="procedencia" required>
        </div>
        <div class="input-box">
          <label for="eps">EPS</label>
          <input type="text" placeholder="Ingrese la EPS, solo si tiene" name="eps">
        </div>
        <div class="input-box">
          <label for="lintervencion">Lugar de intervención</label>
          <input type="text" placeholder="Ingresa el lugar de intervencion" name="lugarIntervencion" required>
        </div>
        <span class="tipopoblacion-title">Sexo</span>
        <div class="tipopoblacion-category">
          <input type="radio" name="sexo" id="masculino">
          <label for="masculino">Maculino</label>
          <input type="radio" name="sexo" id="femenino">
          <label for="femenino">Femenino</label>
        </div>
      </div>

      <div class="button-container">
        <button type="submit" name="next" value="Next">Siguiente</button>
      </div>
    </form>
  </div>
</body>

</html>