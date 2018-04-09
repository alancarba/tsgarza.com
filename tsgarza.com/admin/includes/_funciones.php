<?php 
require_once("_db.php");
if(!isset($_POST['accion'])){
	$accion ="";
}else{
	$accion = $_POST['accion'];
}
switch ($accion) {
	case 'eliminarUsuario': eliminarUsuarios();
	break;
	case 'eliminarSucursal': eliminarSucursales();
	break;
}
function consultarUsuarios(){
	global $db;
	$usuarios = $db->select("usuarios","*");
	return $usuarios;
}
function consultarSucursales(){
	global $db;
	$sucursales = $db->select("sucursales","*");
	return $sucursales;
}
function eliminarUsuarios(){
	global $db;
	extract($_POST);
	$usuarios = $db->delete("usuarios",["id_usr" => $usuario]);
	echo "Se ha eliminado el usuario correctamente";	
}
function eliminarSucursales(){
	global $db;
	extract($_POST);
	$sucursales = $db->delete("sucursales",["id_suc" => $sucursal]);
	echo "Se ha eliminado la sucursal correctamente";	
}
?>