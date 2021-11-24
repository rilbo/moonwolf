<?php
// Connexion BDD

// Autoload vendor
define('DIR_VENDOR', $_SERVER['DOCUMENT_ROOT'] . '/vendor/');
if (file_exists(DIR_VENDOR . 'autoload.php')) {
  require_once(DIR_VENDOR . 'autoload.php');
}

$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();
