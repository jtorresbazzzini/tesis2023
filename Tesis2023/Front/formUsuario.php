<?php include('..\backend\db.php');
include "..\includes\modal.php";
?>  

<!DOCTYPE html>
<html>
<title>formulario Alumno</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="../js/jquery.min.js";></script>
<style>
/* Estilos para el formulario emergente */
.form-popup {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0, 0, 0, 0.5);
}

.form-container {
  max-width: 400px;
  padding: 20px;
  background-color: #fff;
  margin: 100px auto;
  border: 1px solid #ccc;
  border-radius: 5px;
}

/* Estilos adicionales */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom: 10px;
}

.cancel {
  background-color: #ccc;
}
</style>


<body>
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
   <!--inicio de listado-->
  <div class="w3-container">
    <table>
      <tr>
        <th>Nombre y Apellido</th>
        <th>DNI</th>
        <th>Email
        <th>Perfiles</th>
        <th></th>
        <th></th>
      </tr>
      <tbody>
        <?php
        $consu="SELECT * FROM usuario   ";
        $varUsu = mysqli_query($conn,$consu); 
        while($row =  mysqli_fetch_array($varUsu)){?>
        <tr>
          <th><?php echo $row['usu_ape_nom'];?> </th>
          <th><?php echo $row['usu_dni'];?> </th>
          <th><?php echo $row['usu_email'];?> </th>
          <th><?php if($row['usu_profe']== 1)
                      echo "Profesor";
                      else
                        {if($row['usu_alumno']== 1)
                        echo "Alumno";
                          else
                            {if($row['usu_secre']== 1)
                               echo "Secretario/a";
                              else
                         echo "Director";}}?> </th>
          <!-- <th><a href="../backend/B_formUsuario.php?id=" id=editar class="w3-button w3-black">Editar</a></th> -->
          <th><a class="w3-button w3-black edit_usuario" usuario ="<?php echo $row['usu_dni']; ?> "href="#" >Editar</a></th>
        </tr>

       <?php } ?>
      </tbody>
    </table>
    

  </div>
    <!--fin de formulario-->


   <!--inicio de formulario-->
<!-- <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact"> -->
  <h3 class="w3-center">Nuevo Usuario</h3>
  <!--<p class="w3-center w3-large"></p>-->
  <div style="margin-top:48px">
    <br>
    
    <img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">
  </div>
</div>
      
  
  <script src="../js/usuario.js";></script>
    
    
</body>
</html>
