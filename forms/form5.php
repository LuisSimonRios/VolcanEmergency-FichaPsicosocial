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

  header("Location: form6.php");
}

//Insert data into database
require '../connection.php';

if(isset($_POST["next"])){
  $tipoIntervencion = $_POST['tipoIntervencion'];
  $condicionPrevia = $_POST['condicionPrevia'];
  $atencionPsicosocial = $_POST['atencionPsicosocial'];
  $accionesRealizar = $_POST['accionesRealizar'];
  $observacionFinal = $_POST['obseracionFinal'];
  $requiereSeguimiento = $_POST['requiereSeguimiento'];

  $query = "INSERT INTO form5 VALUES('', '$tipoIntervencion', '$condicionPrevia', '$atencionPsicosocial', 
  '$accionesRealizar', '$observacionFinal', '$requiereSeguimiento')";
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
        <span class="tipopoblacion-title">Tipo de intervención</span>
        <div class="tipopoblacion-category">
          <input type="radio" name="tipoIntervencion" id="aPsicosocial">
          <label for="aPsicosocial">Asesoría psicosocial</label>
          <input type="radio" name="tipoIntervencion" id="iEnCrisis">
          <label for="iEnCrisis">Intervención en Crisis</label>
          <input type="radio" name="tipoIntervencion" id="vDomiciliaria">
          <label for="vDomiciliaria">Visita Domiciliaria</label><br>
          <input type="radio" name="tipoIntervencion" id="iFamiliar">
          <label for="iFamiliar">Intervención familiar</label><br>
        </div>
        <div class="input-box large2">
          <span class="tipopoblacion-title">Condición previa de salud fisica y mental / medicamentos</span>
          <input type="text" placeholder="Ingrese la condición previa de salud fisica y mental / medicamentos"
            name="condicionPrevia" required>
        </div>
        <span class="tipopoblacion-title">Atención psicosocial realizada - Sintomatología presente</span>
        <div class="tipopoblacion-category">
          <input type="radio" name="atencionPsicosocial" id="vSalud">
          <label for="vSalud">Validación salud</label>
          <input type="radio" name="atencionPsicosocial" id="gSocial">
          <label for="gSocial">Gestión social</label>
          <input type="radio" name="atencionPsicosocial" id="aMedica">
          <label for="aMedica">Atención médica</label><br>
          <input type="radio" name="atencionPsicosocial" id="pSalud">
          <label for="pSalud">Procedimiento salud</label><b r>
            <input type="radio" name="atencionPsicosocial" id="otro">
            <label for="otro">Otro</label>
            <input id="inputother" type="text" placeholder="¿Cuál?" name="atencionPsicosocial onchange="changeradioother()">
        </div>
        <div class="categoryII">
          <span class="tipopoblacion-title">Acciones por realizar, remisiones o necesidades específicas</span>
          <div class="tipopoblacion-category">
            <input type="radio" name="accionesRealizar" id="aSalud">
            <label for="aSalud">Afiliación salud</label>
            <input type="radio" name="accionesRealizar" id="pDocum">
            <label for="pDocum">Perdida documento</label>
            <input type="radio" name="accionesRealizar" id="medicam">
            <label for="medicam">Medicamento</label><br>
            <input type="radio" name="accionesRealizar" id="gSocial">
            <input id="inputother" type="text" placeholder="Gestión social, ¿Cuál?" name="accionesRealizar"
              onchange="changeradioother()">
            <input type="radio" name="accionesRealizar" id="atencionSalud">
            <input id="inputother" type="text" placeholder="Atención en salud, ¿Cuál?" name="accionesRealizar"
              onchange="changeradioother()">
            <input type="radio" name="accionesRealizar" id="procedSalud">
            <input id="inputother" type="text" placeholder="Procedimiento salud, ¿Cuál?" name="accionesRealizar"
              onchange="changeradioother()"><br>
            <input type="radio" name="aaccionesRealizar" id="ninguna">
            <label for="aSalud">Ninguna</label>
          </div>
          <div class="input-box large2">
            <span class="tipopoblacion-title">Observaciones finales</span>
            <input type="text" placeholder="Ingrese la condición previa de salud fisica y mental / medicamentos"
              name="observacionFinal" required>
          </div>
        </div>
        <span class="tipopoblacion-title">Requiere seguimiento</span>
        <div class="tipopoblacion-category">
          <input type="radio" name="requiereSeguimiento" id="psicologico">
          <label for="psicologico">Psicológico</label>
          <input type="radio" name="requiereSeguimiento" id="vDomicilio">
          <label for="vDomicilio">Visita Domiciliaria</label>
          <input type="radio" name="requiereSeguimiento" id="telefon">
          <label for="telefon">Telefónico</label><br>
          <input type="radio" name="requiereSeguimiento" id="aMedica">
          <label for="aMedica">Atención médica</label>
          <input type="radio" name="requiereSeguimiento" id="ninguna">
          <label for="aSalud">No requiere</label>
        </div>
      </div>

      <div class="button-container">
        <button type="submit" name="next" value="Next">Siguiente</button>
      </div>
    </form>
  </div>
</body>

</html>