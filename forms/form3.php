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

  header("Location: form4.php");
}

//Insert data into database
require '../connection.php';

if(isset($_POST["next"])){
  $nombre1 = $_POST["nombre1"];
  $documento1 = $_POST["documento1"];
  $eps1 = $_POST["eps1"];
  $edad1 = $_POST["edad1"];
  $relacion1 = $_POST["relacion1"];
  $telefono1 = $_POST["telefono1"];

  $nombre2 = $_POST["nombre2"];
  $documento2 = $_POST["documento2"];
  $eps2 = $_POST["eps2"];
  $edad2 = $_POST["edad2"];
  $relacion2 = $_POST["relacion2"];
  $telefono2 = $_POST["telefono2"];

  $nombre3 = $_POST["nombre3"];
  $documento3 = $_POST["documento3"];
  $eps3 = $_POST["eps3"];
  $edad3 = $_POST["edad3"];
  $relacion3 = $_POST["relacion3"];
  $telefono3 = $_POST["telefono3"];

  $nombre4 = $_POST["nombre4"];
  $documento4 = $_POST["documento4"];
  $eps4 = $_POST["eps4"];
  $edad4 = $_POST["edad4"];
  $relacion4 = $_POST["relacion4"];
  $telefono4 = $_POST["telefono4"];

  $nombre5 = $_POST["nombre5"];
  $documento5 = $_POST["documento5"];
  $eps5 = $_POST["eps5"];
  $edad5 = $_POST["edad5"];
  $relacion5 = $_POST["relacion5"];
  $telefono5 = $_POST["telefono5"];

  $nombre6 = $_POST["nombre6"];
  $documento6 = $_POST["documento6"];
  $eps6 = $_POST["eps6"];
  $edad6 = $_POST["edad6"];
  $relacion6 = $_POST["relacion6"];
  $telefono6 = $_POST["telefono6"];

  $query = "INSERT INTO form3 VALUES('', '$nombre1', '$documento1', '$eps1', '$edad1', '$relacion1', '$telefono1',
   '$nombre2', '$documento2', '$eps2', '$edad2', '$relacion2', '$telefono2', 
   '$nombre3', '$documento3', '$eps3', '$edad3', '$relacion3', '$telefono3', 
   '$nombre4', '$documento4', '$eps4', '$edad4', '$relacion4', '$telefono4',
   '$nombre5', '$documento5', '$eps5', '$edad5', '$relacion5', '$telefono5',
   '$nombre6', '$documento6', '$eps6', '$edad6', '$relacion6', '$telefono6')";
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
  <div class="container2">
    <div class="div-logo-salud2">
      <img class="logo-salud2" src="../images/logo-salud2.png" alt="Logo-salud">
    </div>
    <form action="#" method="post">
      <div class="h2-corto">
        <h2>Nucleo Familiar (Con quien vive)</h2>
      </div>
      <div class="content">
      </div>
      <table class="table table-borderless">
        <thead>
          <tr>
            <th scope="col" class="text-white">Nombre</th>
            <th scope="col" class="text-white">Documento</th>
            <th scope="col" class="text-white">EPS</th>
            <th scope="col" class="text-white">Edad</th>
            <th scope="col" class="text-white">Relación</th>
            <th scope="col" class="text-white">Teléfono</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="text" id="inputother" placeholder="Ingrese el nombre" name="nombre1"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el documento" name="documento1"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese la EPS" name="eps1"></td>
            <td><input type="int" id="inputother" placeholder="Ingrese la edad" name="edad1"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese la relación" name="relacion1"></td>
            <td><input type="int" id="inputother" placeholder="Ingrese el teléfono" name="telefono1"></td>
          </tr>
          <tr>
            <td><input type="text" id="inputother" placeholder="Ingrese el nombre" name="nombre2"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el documento" name="documento2"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese la EPS" name="eps2"></td>
            <td><input type="int" id="inputother" placeholder="Ingrese la edad" name="edad2"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese la relación" name="relacion2"></td>
            <td><input type="int" id="inputother" placeholder="Ingrese el teléfono" name="telefono2"></td>
          </tr>
          <tr>
            <td><input type="text" id="inputother" placeholder="Ingrese el nombre" name="nombre3"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el documento" name="documento3"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese la EPS" name="eps3"></td>
            <td><input type="int" id="inputother" placeholder="Ingrese la edad" name="edad3"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese la relación" name="relacion3"></td>
            <td><input type="int" id="inputother" placeholder="Ingrese el teléfono" name="telefono3"></td>
          </tr>
          <tr>
            <td><input type="text" id="inputother" placeholder="Ingrese el nombre" name="nombre4"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el documento" name="documento4"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese la EPS" name="eps4"></td>
            <td><input type="int" id="inputother" placeholder="Ingrese la edad" name="edad4"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese la relación" name="relacion4"></td>
            <td><input type="int" id="inputother" placeholder="Ingrese el teléfono" name="telefono4"></td>
          </tr>
          <tr>
            <td><input type="text" id="inputother" placeholder="Ingrese el nombre" name="nombre5"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el documento" name="documento5"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese la EPS" name="eps5"></td>
            <td><input type="int" id="inputother" placeholder="Ingrese la edad" name="edad5"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese la relación" name="relacion5"></td>
            <td><input type="int" id="inputother" placeholder="Ingrese el teléfono" name="telefono5"></td>
          </tr>
          <tr>
            <td><input type="text" id="inputother" placeholder="Ingrese el nombre" name="nombre6"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese el documento" name="documento6"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese la EPS" name="eps6"></td>
            <td><input type="int" id="inputother" placeholder="Ingrese la edad" name="edad6"></td>
            <td><input type="text" id="inputother" placeholder="Ingrese la relación" name="relacion6"></td>
            <td><input type="int" id="inputother" placeholder="Ingrese el teléfono" name="telefono6"></td>
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