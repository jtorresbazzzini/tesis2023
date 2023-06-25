<?php 
include('db.php');


// antes de validar si esta vacio hace que cargue los datos... despues validas....
// $usu_ape_nom = isset($_POST['usu_ape_nom']) != null ? '0';
// $usu_dni= $_POST['usu_dni']; 
// $usu_ape_nom = $_POST['usu_ape_nom']; 
// $usu_fecha_nac = $_POST['usu_fecha_nac']; 
// $usu_direccion = $_POST['usu_direccion']; 
// $usu_email = $_POST['usu_email']; 
// $usu_cel = $_POST['usu_cel']; 
// $usu_contacto = $_POST['usu_contacto']; 
// $usu_tel_contacto = $_POST['usu_tel_contacto']; 
// $usu_pass = $_POST['usu_pass']; 
// $usu_estado = $_POST['usu_estado']; 
// $usu_profe = $_POST['usu_profe']; 
// $usu_alumno = $_POST['usu_alumno']; 
// $usu_director = $_POST['usu_director']; 
// $usu_secre = $_POST['usu_secre']; 





if(isset($_POST['guardar'])){
    $query="INSERT INTO `usuario`(`usu_dni`, `usu_ape_nom`, `usu_fecha_nac`, `usu_direccion`, 
    `usu_email`, `usu_cel`, `usu_contacto`, `usu_tel_contacto`, `usu_pass`, `usu_estado`, 
    `usu_profe`, `usu_alumno`, `usu_director`, `usu_secre`) VALUES ('".$_POST['usu_dni']."','".$_POST['usu_ape_nom']."','".$_POST['usu_fecha_nac']."','".$_POST['usu_direccion']."','".$_POST['usu_email']."','".$_POST['usu_cel']."','".$_POST['usu_contacto']."','".$_POST['usu_tel_contacto']."','".$_POST['usu_pass']."','activo','".$_POST['usu_profe']."','".$_POST['usu_alumno']."','".$_POST['usu_director']."','".$_POST['usu_secre']."')";

     if(mysqli_query($conn, $query)){
        header('location:../Front/formUsuario.php');
        // echo"se ingreso correctamente..";
        
     }else{
        header('location:../Front/formUsuario.php');
        echo"no ingreso el nuevo usuario";

     }

     
}