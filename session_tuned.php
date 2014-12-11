<?php

require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Session\Storage\Handler\PdoSessionHandler;

function my_session_start()
{
	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=test', 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	
	$session = new PdoSessionHandler($pdo);

	// Cria as tabelas no banco: rodar só na primeira vez
	//$session->createTable();

	// Quando utilizamos uma classe como SessionHandler, os parametros são um pouco diferentes
	session_set_save_handler($session, true);

	// Inicia a sessão 
	session_start();

}
