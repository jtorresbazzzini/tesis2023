<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
</style>
</head>
<body>
<h1>BIENVENIDO
<div class="w3-right w3-medium">
<a href="/tesis2023/index.php" class="w3-bar-item w3-button"><i class="fa xfa-solid fa-arrow-left"></i> Cerrar Sesión</a>
</div>
</h1>
<div class="w3-container">
<button class="tablink" onclick="openPage('Home', this, 'red')" id="defaultOpen">Mis cursos</button>
<button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">Notas</button>
<button class="tablink" onclick="openPage('Contact', this, 'blue')">Asistencia</button>
<button class="tablink" onclick="openPage('About', this, 'orange')">Reportes</button>
</div>
<div id="Home" class="tabcontent">
<div class="container w3-third">
  <img src="../Imagenes/fondo 1.jpg" alt="Avatar" class="image">
  <div class="overlay">
    <div class="text">Aleman | Inicial 1</div>
  </div>
</div>


<div class="container w3-third">
  <img src="../Imagenes/fondo2.jpg" alt="Avatar" class="image">
    <div class="overlay">
      <div class="text">Aleman | Avanzado 2</div>
    </div>
</div>






<div id="News" class="tabcontent">
  <h3>News</h3>
  <p>Some news this fine day!</p> 
</div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <p>Get in touch, or swing by for a cup of coffee.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p>Who we are and what we do.</p>
</div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
