<!DOCTYPE html>
<html>
<title>formulario Alumno</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>

<body>
   
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">Nuevo Usuario</h3>
  <!--<p class="w3-center w3-large"></p>-->
  <div style="margin-top:48px">
    <br>
    <form action="../backend/B_formUsuario.php" method="post" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Nombre Completo" id="usu_ape_nom" required name="usu_ape_nom"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" id="usu_email" required name="usu_email"></p>
      <p><input class="w3-input w3-border" type="number" placeholder="DNI" id="usu_dni" required name="usu_dni"></p>
      <p><input class="w3-input w3-border" type="date" placeholder="Fecha de Nacimiento" id="usu_fecha_nac" required name="usu_fecha_nac"></p>
      <p><input class="w3-input w3-border" type="number" placeholder="celular" id="usu_cel" required name="usu_cel"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Domicilio" id="usu_direccion" required name="usu_direccion"></p>
      <!-- estado  de muestra?-->
      <p><input class="w3-input w3-border" type="number" placeholder="Estado" id="usu_direccion" required name="usu_direccion"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Ingrese clave" id="usu_pass" required name="usu_pass"></p>
      <input type="CHECKBOX" id="usu_alumno" name="usu_alumno" value="1">
      <label for="usu_alumno">Alumno</label><br>
      <input type="CHECKBOX" id="usu_prof" name="usu_prof" value="1">
      <label for="usu_prof">Profesor</label><br>
      <input type="CHECKBOX" id="usu_secre" name="usu_secre" value="1">
      <label for="usu_secre">Secretario</label><br>
      <input type="CHECKBOX" id="usu_director" name="usu_directot" value="1">
      <label for="usu_director">Director</label><br>
      
      <p><input class="w3-input w3-border" type="text" placeholder="Usuario contacto" id="usu_contacto" required name="usu_contacto"></p>
      <p><input class="w3-input w3-border" type="number" placeholder="Telefono de contacto usuario" id="usu_tel_contacto" required name="usu_tel_contacto"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> Guardar
        </button>
      </p>
    </form>
    <!-- Image of location/map 
    <img src="/w3images/map.jpg" class="w3-image w3-greyscale" style="width:100%;margin-top:48px">-->
  </div>
</div>
    
</body>
</html>
