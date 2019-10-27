<?php

#Arquivos no diretório raiz
$PastaInterna = "kandu";

#Caminho da URL
define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}/");

#Caminho para requisições (Incluir arquivo, etc)
/*Verifica se o servidor coloca a barra ao final
Se não colocar, adiciona a /
Evita erros quando subir para o servidor*/
if(substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
	define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}{$PastaInterna}/");
} else {
	define('DIRREQ', "{$_SERVER['DOCUMENT_ROOT']}/{$PastaInterna}/");
}

#Diretórios específicos
define('DIRIMG', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}/public/img/");
define('DIRCSS', "http://{$_SERVER['HTTP_HOST']}/{$PastaInterna}/public/bootstrap/node_modules/bootstrap/compiler/");

#Acesso ao banco de dados
define('HOST', "localhost");
define('DB', "kandu_bd");
define('USER', "root");
define('PASS', "");

?>