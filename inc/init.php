<?php
//DB connection
$pdo = new PDO('mysql:host=localhost;dbname=livres', 
 'root',
 'root', 
 array(
     PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,
     PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
 ));

 //Session
 session_start();

 define('RACINE_SITE','/fiches_de_lecture/');

 //content variables:
 $content = '';
 $content_left = '';
 $content_right = '';

 //functions
 require_once 'functions.php';