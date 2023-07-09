<?php 
include('db.php');



   if(isset($_POST['guardar'])){
      $query="INSERT INTO `usuario`(`usu_dni`, `usu_ape_nom`, `usu_fecha_nac`, `usu_direccion`, 
      `usu_email`, `usu_cel`, `usu_contacto`, `usu_tel_contacto`, `usu_pass`, `usu_estado`, 
      `usu_profe`, `usu_alumno`, `usu_director`, `usu_secre`) VALUES ('".$_POST['usu_dni']."','".$_POST['usu_ape_nom']."','".$_POST['usu_fecha_nac']."','".$_POST['usu_direccion']."','".$_POST['usu_email']."','".$_POST['usu_cel']."','".$_POST['usu_contacto']."','".$_POST['usu_tel_contacto']."','".$_POST['usu_pass']."',1,'".$_POST['usu_profe']."','".$_POST['usu_alumno']."','".$_POST['usu_director']."','".$_POST['usu_secre']."')";

     // $usu="'".$_POST['usu_ape_nom']."'";
      if(mysqli_query($conn, $query)){
//$_SESSION["Usuario_mensaje_$usu"]="El nuevo usuario fue ingresado";
         header("location:../Front/menuSecre.php?mensaje=$usu");

         // echo"se ingreso correctamente..";
         
      }else{
         $_SESSION["Usuario"]="El usuario ya existe.";
         header('location:../Front/menuSecre.php');
         
         //echo"no ingreso el nuevo usuario";
      }   
   }
 