<?php
include('../backend/db.php');

$id=$_GET['id'];
// $usu_Alumno=$_GET['rolAlu'];
// $usu_Secretario =$_GET['rolSecretario'];
// $usu_Profesor =$_GET['rolProfe'];   
// $usu_Director =$_GET['rolDirector'];
 

// echo $usu_Secretario;
//if($usu_Alumno)

$sql= "SELECT * FROM usuario where usu_dni = $id;";
$var= mysqli_query($conn,$sql);
$row=mysqli_fetch_array($var);print_r($row) ;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Front/css/editFormUsuario.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Usuario</title>
</head>
<body>  
    
   
   <!--inicio de formulario-->
  <div class="container" style="margin-top:48px">
  <h3 class="w3-center"> Editar Usuario</h3>
    <br>
    <form class="" action="../backend/editarUsuario.php" method="post" >
      <p><input class="w3-input w3-border" type="text" placeholder="Nombre Completo" id="usu_ape_nom" name="usu_ape_nom" value="<?php echo $row['usu_ape_nom']; ?>" required ></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" id="usu_email" required name="usu_email" value="<?php echo $row['usu_email']; ?>"></p> 
      <p><input class="w3-input w3-border" type="number" placeholder="DNI" id="usu_dni" required name="usu_dni" value="<?php echo $row['usu_dni']; ?>"></p>
      <p><input class="w3-input w3-border" type="date" placeholder="Fecha de Nacimiento" id="usu_fecha_nac" required name="usu_fecha_nac" value="<?php echo $row['usu_fecha_nac']; ?>"></p>
      <p><input class="w3-input w3-border" type="number" placeholder="celular" id="usu_cel" required name="usu_cel" value="<?php echo $row['usu_cel']; ?>"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Domicilio" id="usu_direccion" required name="usu_direccion" value="<?php echo $row['usu_direccion']; ?>"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Ingrese clave" id="usu_pass" required name="usu_pass" value="<?php echo $row['usu_pass']; ?>"></p>
      
      <p><input type="checkbox"  id="usu_alumno" name="usu_alumno" <?php if($row['usu_alumno']==1){echo "checked";}?> value="1">
      <label for="usu_alumno">Alumno</label><br></p>
      <p><input type="checkbox" id="usu_profe"  name="usu_profe" <?php if($row['usu_profe']==1){echo "checked";}; ?>" value="1">
      <label for="usu_prof">Profesor</label><br></p>
      <p><input type="checkbox" id="usu_secre" name="usu_secre" <?php if( $row['usu_secre']==1){echo "checked";};?> value="1">
      <label for="usu_secre">Secretario</label><br></p>
      <p><input type="checkbox" id="usu_director" name="usu_director" <?php if( $row['usu_director']==1){echo "checked";};?> value="1">
      <label for="usu_director">Director</label><br></p>  
      <p><input class="w3-input w3-border" type="text" placeholder="Usuario contacto" id="usu_contacto"  name="usu_contacto" value="<?php echo $row['usu_contacto']; ?>"></p>
      <p><input class="w3-input w3-border" type="number" placeholder="Telefono de contacto usuario" id="usu_tel_contacto"  name="usu_tel_contacto" value="<?php echo $row['usu_tel_contacto']; ?>"></p>
      <p>
        <button class="w3-button w3-black" name="actualiza" id="actualiza" type="submit">
          <i class="fa fa-paper-plane"></i> Actualizar
        </button>
        <a class="w3-button w3-black" name="volver" id="volver" href="menuSecre.php">
          <i class="fa fa-paper-plane"></i> Volver</a>
      </p>
    </form> 
   
  </div>
</div>
      

    
    
</body>
</html>