<?php include('..\backend\db.php');

?>  

<!DOCTYPE html>
<html>
<title>formulario Alumno</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <script src="../js/jquery.min.js";></script> -->
<style>
/* Estilos para el formulario emergente */

body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: grey;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=number],input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>

<?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") 
       {
        // $usu_dni= $_POST['usu_dni']; 
        // $usu_ape_nom = $_POST['usu_ape_nom']; 
        // $usu_fecha_nac = $_POST['usu_fecha_nac']; 
        // $usu_direccion = $_POST['usu_direccion']; 
        // $usu_email = $_POST['usu_email']; 
        // $usu_cel = $_POST['usu_cel']; 
        // $usu_contacto = $_POST['usu_contacto']; 
        // $usu_tel_contacto = $_POST['usu_tel_contacto']; 
        // $usu_pass = $_POST['usu_pass']; 
        // $usu_estado = 'Activo';
         $usu_profe =isset( $_POST['usu_profe'])?1:0; 
         $usu_alumno = isset($_POST['usu_alumno'])?1:0; 
         $usu_director = isset($_POST['usu_director'])?1:0; 
         $usu_secre = isset($usu_secre)?1:0; 

          if(empty( $_POST['usu_dni'])){
            $query="INSERT INTO `usuario`(`usu_dni`, `usu_ape_nom`, `usu_fecha_nac`, `usu_direccion`, 
          `usu_email`, `usu_cel`, `usu_contacto`, `usu_tel_contacto`, `usu_pass`, `usu_estado`, 
           `usu_profe`, `usu_alumno`, `usu_director`, `usu_secre`) VALUES ('".$_POST['usu_dni']."','".$_POST['usu_ape_nom']."','".$_POST['usu_fecha_nac']."','".$_POST['usu_direccion']."','".$_POST['usu_email']."','".$_POST['usu_cel']."','".$_POST['usu_contacto']."','".$_POST['usu_tel_contacto']."','".$_POST['usu_pass']."','activo','$usu_profe','$usu_alumno','$usu_director','$usu_secre')";
          }else{
            $query = "UPDATE `usuario` SET `usu_ape_nom`='".$_POST['usu_ape_nom']."',`usu_fecha_nac`='".$_POST['usu_fecha_nac']."',`usu_direccion`='".$_POST['usu_direccion']."',`usu_email`='".$_POST['usu_email']."',`usu_cel`='".$_POST['usu_cel']."',`usu_contacto`='".$_POST['usu_contacto']."',`usu_tel_contacto`='".$_POST['usu_tel_contacto']."',`usu_pass`='".$_POST['usu_pass']."',`usu_estado`='Activo',`usu_profe`='$usu_profe',`usu_alumno`='$usu_alumno ',`usu_director`='$usu_director',`usu_secre`='$usu_secre' WHERE `usu_dni`='".$_POST['usu_dni']."' " ;
          }

          if(mysqli_query($conn, $query)==true){
            echo "se guardaron corectamente los datos";
          }else{echo "error en el ingreso";}}
     ?>    


<body>

   
   <!--inicio de formulario-->
  <div class="container" style="margin-top:48px">
  <h3 class="w3-center">Nuevo Usuario</h3>
    <br>
    <form class="" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" >
      <!-- <h1><i class="fas fa-cubes" style="font-size:45px;">Formulario Usuario</i></h1> -->
      
      <p><input class="w3-input w3-border" type="text" placeholder="Nombre Completo" id="usu_ape_nom" name="usu_ape_nom" required ></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" id="usu_email" required name="usu_email"></p> 
      
      <p><input class="w3-input w3-border" type="number" placeholder="DNI" id="usu_dni" required name="usu_dni"></p>
      <p><input class="w3-input w3-border" type="date" placeholder="Fecha de Nacimiento" id="usu_fecha_nac" required name="usu_fecha_nac"></p>
      <p><input class="w3-input w3-border" type="number" placeholder="celular" id="usu_cel" required name="usu_cel"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Domicilio" id="usu_direccion" required name="usu_direccion"></p>
      
      <!-- <p><input class="w3-input w3-border" type="text" placeholder="Estado" id="usu_direccion" required name="usu_direccion"></p> -->
      <p><input class="w3-input w3-border" type="text" placeholder="Ingrese clave" id="usu_pass" required name="usu_pass"></p>
      <input type="checkbox" id="usu_alumno" name="usu_alumno" value=1>
      <label for="usu_alumno">Alumno</label>
      <input type="checkbox" id="usu_prof" name="usu_prof" value="1">
      <label for="usu_prof">Profesor</label>
      <input type="checkbox" id="usu_secre" name="usu_secre" value="1">
      <label for="usu_secre">Secretario</label>
      <input type="checkbox" id="usu_director" name="usu_directot" value="1">
      <label for="usu_director">Director</label>
      
      <p><input class="w3-input w3-border" type="text" placeholder="Usuario contacto" id="usu_contacto"  name="usu_contacto"></p>
      <p><input class="w3-input w3-border" type="number" placeholder="Telefono de contacto usuario" id="usu_tel_contacto"  name="usu_tel_contacto"></p>
      <p>
        <button class="w3-button w3-black" name="guardar" id="guardar" type="submit">
          <i class="fa fa-paper-plane"></i> Guardar
        </button>
        <a class="w3-button w3-black" name="volver" id="volver" href="menuSecre.php">
          <i class="fa fa-paper-plane"></i> Volver
        </a>
      </p>
    </form> 
   
  </div>
</div>
      
  
  <!-- <script src="../js/usuario.js";></script> -->
    
    
</body>
</html>
