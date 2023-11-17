<?php


require_once 'vendor/autoload.php';
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$template = $twig->load('databaseex.php');
echo $template->render([
	
]);

?>