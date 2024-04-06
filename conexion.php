<?php
 $nombre_server[1] = 'localhost'; //Servidor al cual nos vamos a conectar.
 $nombre_user[2] = 'root'; //Nombre del usuario de la base de datos.
 $password[3] = 'karito0605'; //Contrase&ntilde;a de la base de datos
$nombre_db[4] = 'ticyciapp'; //nombre de la base de datos
 $db = @mysqli_connect($nombre_server[1],$nombre_user[2],$password[3],$nombre_db[4]) or exit('Datos de conexion incorrectos.');
 $db->set_charset('utf8');
 if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
?>