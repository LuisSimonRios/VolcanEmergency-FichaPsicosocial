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

  header("Location: ../index.php");
}

//Insert data into database
require '../connection.php';

if(isset($_POST["submit"])){
  $tarjetaProfesional = $_POST['tarjetaProfesional'];
  $documentoUsuario = $_POST['documentoUsuario'];
  //$firmas = $_POST['firmas'];

  $query = "INSERT INTO form11 VALUES('', '$tarjetaProfesional', '$documentoUsuario', '')";
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
  <style>
  #canvas {
    border: 1px solid black;
  }

  p {
    color: #fff;
  }

  .div-firma {
    text-align: center;
  }

  .button-container {
    margin-top: 50px;
  }
  </style>
</head>

<body>
  <div class="container">
    <div class="div-logo-salud2">
      <img class="logo-salud2" src="../images/logo-salud2.png" alt="Logo-salud">
    </div>
    <form action="" method="post">
      <h2>Firmas</h2>
      <div class="content">
        <div class="input-box">
          <label for="tarjetaProfesional">Tarjeta profesional</label>
          <input type="text" placeholder="Ingresa el código de la tarjeta profesional" name="tarjetaProfesional"
            required>
        </div>
        <div class="input-box">
          <label for="documentoUsuario">Documento del usuario</label>
          <input type="text" placeholder="Ingresa el documento del usuario" name="documentoUsuario" required>
        </div>
      </div>
      <div class="div-firma">
        <p>Firmar profesional y Firma usuario</p>
        <canvas name="firmas" id="canvas"></canvas>
        <br>
        <button id="btnLimpiar">Limpiar</button>
        <button id="btnDescargar">Descargar</button>
        <button id="btnGenerarDocumento" disabled="disabled">Pasar a documento</button>
        <br>
        <script src="../js/script1.js"></script>
      </div>
      <div class="button-container">
        <button type="submit" name="submit" value="Next" onclick="newWindow()">Finalizar</button>
      </div>
    </form>
  </div>

  <!--<script>
    function newWindow(){
      window.open('../index.php');
    }
  </script>-->
</body>

</html>