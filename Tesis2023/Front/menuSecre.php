<?php include('..\backend\db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Menu Secretario/a</title>
</head>
<body>
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin-top: 20px;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {background-color: white;}
#News {background-color: white;}
#Contact {background-color: white;}
#About {background-color: white;}

.container {
  position: relative;
  width: 25%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .05s ease;
  background-color: black;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.contenedorBuscadorAlta{
    display: block;
    align-items:bllo ;
}
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}

/*  */

</style>
<h1>
<div class="w3-right w3-medium">

</div></h1>

<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">ESCUELA DE LENGUAS</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button"><i class=" fa fa-solid fa-book"></i> Nosotros</a>
      <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Directivos</a>
      <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Idiomas</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> Contacto</a>
      <!-- <a href="../Front/login.php" class="w3-bar-item w3-button"><i class="fa xfa-solid fa-arrow-right"></i></i> Ingresar</a> -->
      <a href="/tesis2023/index.php" class="w3-bar-item w3-button"><i class="fa xfa-solid fa-arrow-left"></i> Cerrar Sesión</a>
      <div class="topnav">
 
</div>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- tabla de alumnos -->
<div class="w3-container">
  <div class="contenedorBuscadorAlta ">
    <p class=""><h2>Menú Secretario</h2> <a href="formUsuario.php" type="button" class="btn btn-dark">Alta Usuario</a></p>  
    <!-- inicio de buscador -->
    <form>
  <input type="text" name="search" placeholder="Search..">
    </form>
    <!-- fin de buscador -->
    </div>
  <form action="">
  <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
   <!--inicio de listado-->
    <div class="w3-container">
      <table class="w3-table w3-striped w3-bordered">
        <tr>
          <th>Nombre y Apellido</th>
          <th>DNI</th>
          <th>Email
          <th>Perfiles</th>
          <th>Estado</th>
          <th>Editar</th>
          <th>Eliminar</th>
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
            <th><?php if($row['usu_profe']== 1)echo "Profesor";if($row['usu_alumno']== 1)
                          echo " Alumno";if($row['usu_secre']== 1)echo " Secretario/a";if($row['usu_director']) echo " Director"; ?> </th>
            <th><?php echo $row['usu_estado'];?></th><!-- poner el estado si es 1 es activo / si es 0 es inactivo-->
            <th><a class="w3-button w3-black edit_usuario"  href="editFormUsuario.php?id=<?= $row['usu_dni']; ?>&$rolAlu=<?=$row['usu_alumno'] ?>& $rolSecretario=<?=$row['usu_secre'] ?>&$rolProfe=<?=$row['usu_profe'] ?>&$rolDirector=<?=$row['usu_director'] ?>" >Editar</a></th>
            <th><button class="w3-button btn-danger eliminar_usuario" type="submit" href="../backend/editarUsuario.php?id=<?= $row['usu_dni'];?>" id="eliminar" name="eliminar" >Eliminar</button></th>
          </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </form>


</div>
    

</body>
</html>