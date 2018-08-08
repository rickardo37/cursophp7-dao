<?php
require_once("config.php");
//CARREGA UM USUARIO PELO SEU ID#####################
//$root = new Usuario();
//$root->loadById(12);
//echo $root;
//####################################################


// CARREGA UMA LISTA DE USUARIOS######################
//$lista = Usuario::getList();
//echo json_encode($lista);
//####################################################


//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN###
//$search = Usuario::search("ka");
//echo json_encode($search);
//####################################################


//CARREGA UM USUARIO USANDO O LOGIN E A SENHA#########
//$usuario = new Usuario();
//$usuario->login("karlos","123rtt");
//echo $usuario;
//####################################################



//INSERÇÃO NO BANCO###################################
//$aluno = new Usuario("JUMJE","KJHGFT");
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@weert");

//$aluno->insert();

//echo $aluno;
//#####################################################

//FAZ UMA EDIÇÃO DE UM REGISTRO
//$usuario = new Usuario();
//$usuario->loadById(13);
//$usuario->update("professor","rreeww");
//echo $usuario;
//#########################################################


//####FAZ A EXCLUSÃO DE UM ARQUIVO#######################
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->delete();

echo $usuario;
//#########################################################

?>