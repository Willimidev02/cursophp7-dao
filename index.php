<?php

require_once("config.php");

//carrega um usuario
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

//carrega uma lista de usuarios
//$lista = Usuario::getlist();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//carrega um usuario usanod um login e a senha
$usuario = new Usuario();
$usuario->login("joazin", "1013190");

echo $usuario;

?>