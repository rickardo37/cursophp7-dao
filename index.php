<?php
require_once("config.php");
//CARREGA UM USUARIO
//$root = new Usuario();
//$root->loadById(1);
//echo $root;


// CARREGA UMA LISTA DE USUARIOS
//$lista = Usuario::getList();
//echo json_encode($lista);

//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
//$search = Usuario::search("ka");
//echo json_encode($search);

//CARREGA UM USUARIO USANDO O LOGIN E A SENHA
$usuario = new Usuario();
$usuario->login("karlos","123rtt");

echo $usuario;







?>