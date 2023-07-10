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

  header("Location: form5.php");
}

//Insert data into database
require '../connection.php';

if(isset($_POST["next"])){
  $nombre1 = $_POST["nombre1"]; 
  $parentesco1 = $_POST["parentesco1"];
  $telefono1 = $_POST["telefono1"];
  
  $nombre2 = $_POST["nombre2"];
  $parentesco2 = $_POST["parentesco2"];
  $telefono2 = $_POST["telefono2"];

  $nombre3 = $_POST["nombre3"];
  $parentesco3 = $_POST["parentesco3"];
  $telefono3 = $_POST["telefono3"];

  $nombre4 = $_POST["nombre4"];
  $parentesco4 = $_POST["parentesco4"];
  $telefono4 = $_POST["telefono4"];

  $query = "INSERT INTO form4 VALUES('', '$nombre1', '$parentesco1', '$telefono1', 
  '$nombre2', '$parentesco2', '$telefono2', '$nombre3', '$parentesco3', '$telefono3', 
  '$nombre4', '$parentesco4', '$telefono4')";
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <title>Ficha de Atención Psicosocial</title>
</head>

<body>
  <div class="container3">
    <div class="div-logo-salud2">
      <img class="logo-salud2" src="../images/logo-salud2.png" alt="Logo-salud">
    </div>
    <form action="#" method="post">
      <div class="h2-corto2">
        <h2>Red de Apoyo (Personas con las que no vive)</h2>
      </div>
      <div class="content">
      </div>
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col" class="text-white">Nombre</th>
            <th scope="col" class="text-white">Parentesco</th>
            <th scope="col" class="text-white">Teléfono</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" id="inputother" placeholder="Ingrese el nombre" name="nombre1"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el parentesco" name="parentesco1"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el teléfono" name="telefono1"></td>
          </tr>
          <tr>
            <td><input type="text" id="inputother" placeholder="Ingrese el nombre" name="nombre2"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el parentesco" name="parentesco2"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el teléfono" name="telefono4"></td>
          </tr>
          <tr>
            <td><input type="text" id="inputother" placeholder="Ingrese el nombre" name="nombre3"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el parentesco" name="parentesco3"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el teléfono" name="telefono5"></td>
          </tr>
          <tr>
            <td><input type="text" id="inputother" placeholder="Ingrese el nombre" name="nombre4"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el parentesco" name="parentesco4"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el teléfono" name="telefono6"></td>
          </tr>

        </tbody>
      </table>
      <div class="button-container2">
        <button type="submit" name="next" value="Next">Siguiente</button>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>
</body>

</html>