<?php
$realnombre=$_POST['realnombre'];
$nick=$_POST['nick'];
$password=$_POST['password'];
$reppassword=$_POST['reppassword'];

$reqlen= strlen($nick) * strlen ($password) * strlen($reppassword); 
if($reqlen >0){
    if ($password===$reppassword){
        require("conex.php");
        mysqli_query($con,"insert into usuario values('','$realnombre','$nick','$password')");
         echo "query correcto";
         
    } else {
        echo "las contraseñas no son iguales";
    }                             
} else {
    echo "ingrese datos a los campos requeridos ";
}
?>