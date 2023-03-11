<?php
require '../vendor/autoload.php';

$router = new AltoRouter();

$router->map('GET', '/', '/views/home', 'home');
$router->map('GET', '/galerie', '/views/galerie', 'galerie');
$router->map('GET', '/contact', '/views/contact', 'contact');

$match = $router->match();
$files = $match['target'];
require "..$files.php";

?>