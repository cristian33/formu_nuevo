<?php
$con= new mysqli("localhost", "root", "","tuto");
 if($con->connect_errno){
     echo "fallo al conectarse con mysql" . $con->connect_errno." ".$con->connect_errno ;
 }else{
     mysqli_select_db($con, "usuario");
     //$res=$con->query("select id  from usuario");
     //echo $res;
 }


?>