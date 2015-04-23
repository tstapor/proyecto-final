<?php
/**
* @file conexion.php
* archivo de configuración de la conexión a base de datos de la página web
*
** @author Tomas Stapor
*  @version 0.1
*/
$host='localhost';
$user='root';
$passwd='';
$database='proyecto';
/**
* Función para conectarse a la base de datos
* @param $host Nombre del host
* @param $user Nombre del usuario
* @param $passwd Contraseña de la base de datos
* @param $database Nombre de la base de datos
*/
function conectar($host,$user,$passwd,$database){
	$ok = mysqli_connect($host,$user,$passwd,$database);
	if(!$ok){
		//en caso de error
		echo ("Error en la conexión");
	}
	return $ok;
}

?>