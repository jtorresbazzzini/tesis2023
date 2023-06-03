<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  /* background-image: url("../Imagenes/fondo12.jpg"); */
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="" class="w3-button w3-wide">ESCUELA DE LENGUAS</a>
<div class="w3-right w3-hide-small">
      <a href="/tesis2023/index.php" class="w3-bar-item w3-button"><i class="fa xfa-solid fa-arrow-left"></i> Volver</a>
</div>

<form action="/tesis2023/front/menuprof.php" method="post">
  <div class="imgcontainer">    
    <!--img src="../Imagenes/fondo4.jpg" alt="Avatar" class="avatar"!-->
  </div>

  <div class="container">
    <label for="uname"><b>DNI</b></label>
    <input type="text" placeholder="Ingresar DNI" name="uname" required>

    <label for="psw"><b>Contraseña</b></label>
    <input type="password" placeholder="Ingresar contraseña" name="psw" required>
    
    <label for="tipo"><b>Rol</b></label>
    <br>
    <input type="radio" name="rol" id="contact_email" value="Alumno" />
    <label for="contact_email">Alumno</label>
    <input type="radio" name="rol" id="contact_phone" value="Profesor" />
    <label for="contact_phone">Profesor</label>
    <input type="radio" name="rol" id="contact_phone" value="Secretario" />
    <label for="contact_phone">Secretario</label>
    <input type="radio" name="rol" id="contact_phone" value="Administrador" />
    <label for="contact_phone">Adminisrador</label>
   
    <button type="submit">Ingresar</button>
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div> -->
</form>

</body>
</html>
