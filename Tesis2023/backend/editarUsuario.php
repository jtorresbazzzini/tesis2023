<?php 
include('db.php');

// $id=$_GET['id'];
// $rolAlu=$_GET['rolAlu'];

if(isset($_POST['actualiza'])){
   
       $query1 = "UPDATE `usuario`
    SET `usu_dni` = '".$_POST['usu_dni']."',
        `usu_ape_nom` = '".$_POST['usu_ape_nom']."',
         `usu_fecha_nac` = '".$_POST['usu_fecha_nac']."',
         `usu_direccion` = '".$_POST['usu_direccion']."', 
         `usu_email` = '".$_POST['usu_email']."', 
         `usu_cel` = '".$_POST['usu_cel']."', 
         `usu_contacto` = '".$_POST['usu_contacto']."', 
         `usu_tel_contacto` = '".$_POST['usu_tel_contacto']."' ,
         `usu_pass` = '".$_POST['usu_pass']."',
         `usu_profe`= '".$_POST['usu_profe']."',
         `usu_alumno`='".$_POST['usu_alumno']."',
         `usu_director`='".$_POST['usu_director']."', 
         `usu_secre`='".$_POST['usu_secre']."'
     WHERE  `usu_dni` = '".$_POST['usu_dni']."' ;";
    
   if(mysqli_query($conn, $query1)){
     header('location:../Front/menuSecre.php');}
    }elseif(isset($_POST['eliminar'])){
      $query= "UPDATE `usuario`
      SET `usu_estado` = '0' where `usu_dni` = '".$_POST['usu_dni']."'";
        if(mysqli_query($conn, $query)){
          header('location:../Front/menuSecre.php');

    }}
     

 
