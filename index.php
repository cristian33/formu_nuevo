<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario de Registro</title>
    </head>
   
    <body  >
        
        


        <h1>Formulario de Registro</h1>
        <img src="http://www.mundoimagenes.me/covers/thumbs/imagenes-graciosas-con-frases-para-reirse-para-whatsapp.jpg"/>
        <h3>Los campos con (*) son requeridos</h3>
      
        <form action="registro.php" method="post"/>
        <table>
            <tr>
                <td>
                    Nombres
                </td>
                <td>
                    <input type="text" name="realnombre"/>
                </td>
            </tr>
            
               <tr>
                <td>
                   * Nick de usuario
                </td>
                <td>
                    <input type="text" name="nick"/>
                </td>
            </tr>
            
               <tr>
                <td>
                   * Contraseña
                </td>
                <td>
                    <input type="password" name="password"/>
                </td>
            </tr>
            
               <tr>
                <td>
                    *Repetir contraseña
                </td>
                <td>
                    <input type="password" name="reppassword"/>
                </td>
            </tr>
        </table>
        
        <input type="submit" name="registrarse"/>
        <input type="submit" name="restablecer"/>
        
        </form>
        <?php
        if (isset($_POST['registrarse'])){
          requiere("registro.php") ; 
        }
        
        ?>
    </body>
</html>
