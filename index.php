<?php
	
require_once("config.php");
//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(4);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("e");
//echo json_encode($search);

//Carrega um usuario usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("user","12345");
//echo $usuario;

//Criando um novo usuário
/*
$aluno = new Usuario("aluno","@lun0");

$aluno->insert();

echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadbyId(7);

$usuario->update("professor","!professor");

echo $usuario;

?>