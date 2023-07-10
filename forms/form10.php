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

  header("Location: form11.php");
}

//Insert data into database
require '../connection.php';

if(isset($_POST["next"])){
  $nombreVictima = $_POST['nombreVictima'];
  $edad = $_POST['edad'];
  $sexo = $_POST['sexo'];
  $parentesco = $_POST['parentesco'];
  $situacionActual = $_POST['situacionActual'];
  $gestionRealizada = $_POST['gestionRealizada'];
  $accionesRealizar = $_POST['accionesRealizar'];
  $observaciones = $_POST['observaciones'];

  $query = "INSERT INTO form10 VALUES('', '$nombreVictima', '$edad', '$sexo', '$parentesco', '$situacionActual', 
  '$gestionRealizada', '$accionesRealizar', '$observaciones')";
   mysqli_query($conn, $query);
   echo 
   "
     <script> alert('Envio exitoso'); 
     </script>
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
      <h2>En Caso de Evacuación, Desaparecidos, Heridos o Fallecidos - Favor Diligenciar</h2>
      <div class="content">
        <div class="input-box">
          <label for="nombreVictima">Nombre de la Víctima</label>
          <input type="text" placeholder="Ingresa el nombre de la víctima" name="nombreVictima" required>
        </div>
        <div class="input-box">
          <label for="edad">Edad</label>
          <input type="int" placeholder="Ingresa la edad de la victima" name="edad" required>
        </div>
        <div class="input-box">
          <label for="genero">Sexo</label>
          <input type="text" placeholder="Ingrese el sexo de la victima" name="sexo" required>
        </div>
        <div class="input-box">
          <label for="parentesco">Parentesco</label>
          <input type="text" placeholder="Ingrese el parentesco de la victima" name="parentesco" required>
        </div>
        <div class="input-box">
          <label for="parentesco">Situación actual de la víctima</label>
          <input type="text" placeholder="Ingrese el parentesco de la victima" name="situacionActual" required>
        </div>
        <div class="input-box">
          <label for="gRealizada">Gestión realizada</label>
          <input type="text" placeholder="Ingrese la gestión realizada" name="gestionRealizada" required>
        </div>
        <div class="input-box">
          <label for="aRealizar">Acciones a realizar</label>
          <input type="text" placeholder="Ingrese las acciones a realizada" name="accionesRealizar" required>
        </div>
        <div class="input-box">
          <label for="observaciones">Obvervaciones</label>
          <input type="text" placeholder="Ingrese las observaciones" name="observaciones" required>
        </div>
      </div>
      <div class="button-container">
        <button type="submit" name="next" value="Next">Siguiente</button>
      </div>
    </form>
  </div>
</body>

</html>