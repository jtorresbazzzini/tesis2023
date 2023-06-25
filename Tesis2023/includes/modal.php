<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Front/css/modal.css">
</head>
<body>
<div class="modal">
    <div class="bodyModal">
        
    <form action="../backend/B_formUsuario.php" method="post"  name="" target="_blank">
      <h1><i class="fas fa-cubes" style="font-size:45px;">Formulario Usuario</i></h1>

      <p><input class="w3-input w3-border" type="text" placeholder="Nombre Completo" id="usu_ape_nom" name="usu_ape_nom" required name="usu_ape_nom"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" id="usu_email" required name="usu_email"></p>
      <p><input class="w3-input w3-border" type="number" placeholder="DNI" id="usu_dni" required name="usu_dni"></p>
      <p><input class="w3-input w3-border" type="date" placeholder="Fecha de Nacimiento" id="usu_fecha_nac" required name="usu_fecha_nac"></p>
      <p><input class="w3-input w3-border" type="number" placeholder="celular" id="usu_cel" required name="usu_cel"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Domicilio" id="usu_direccion" required name="usu_direccion"></p>
      
      <!-- <p><input class="w3-input w3-border" type="text" placeholder="Estado" id="usu_direccion" required name="usu_direccion"></p> -->
      <p><input class="w3-input w3-border" type="text" placeholder="Ingrese clave" id="usu_pass" required name="usu_pass"></p>
      <input type="checkbox" id="usu_alumno" name="usu_alumno" value="1">
      <label for="usu_alumno">Alumno</label><br>
      <input type="checkbox" id="usu_prof" name="usu_prof" value="1">
      <label for="usu_prof">Profesor</label><br>
      <input type="checkbox" id="usu_secre" name="usu_secre" value="1">
      <label for="usu_secre">Secretario</label><br>
      <input type="checkbox" id="usu_director" name="usu_directot" value="1">
      <label for="usu_director">Director</label><br>
      
      <p><input class="w3-input w3-border" type="text" placeholder="Usuario contacto" id="usu_contacto"  name="usu_contacto"></p>
      <p><input class="w3-input w3-border" type="number" placeholder="Telefono de contacto usuario" id="usu_tel_contacto"  name="usu_tel_contacto"></p>
      <p>
        <button class="w3-button w3-black" name="guardar" id="guardar" type="submit">
          <i class="fa fa-paper-plane"></i> Guardar
        </button>
      </p>
    </form>
    </div>
</div>
</body>
</html>

