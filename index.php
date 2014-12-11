<?php

require_once 'session_tuned.php';

my_session_start();

$_SESSION['id'] = '213';
$_SESSION['nome'] = 'garoto';

var_dump($_SESSION);

