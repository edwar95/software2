<<?php
 $conn = mysql_connect('localhost','root','1720Vini');
 if(!$conn){
   die('No se puedeconectar'. mysql_error());
   }
   $db_selected = mysql_select_db('login', $conn);
   if(!$db_selected){
   die('Error al seleccionar la BD'. mysql_error());
   }

  $usuario = $_POST['usuario'];
  $pass = $_POST['password'];
  $pass1 = $_POST['password1'];
  $nombre = $_POST['nombre'];


  if($pass!=$pass1){
          echo "Las contraseñas no coinciden";
          }else{
          $ins = "INSERT INTO usuario(usuario, password, nombre) VALUES ('".$usuario."', SHA1('".$pass."'), '".$nombre."') ";
              $ins2=mysql_query($ins, $conn) or die(mysql_error());



              header("location:app.component.html");

          }

 ?>
