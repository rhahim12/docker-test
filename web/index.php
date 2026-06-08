<?php
$DATABASE_HOST = getenv("DATABASE_HOST") ?: "bdd"; // si la variable d'environnement DATABASE_HOST n'est pas définie, on utilise bdd par défaut
$DATABASE_NAME = getenv("DATABASE_NAME") ?: "ma-bdd";
$DATABASE_USER = getenv("DATABASE_USER") ?: "root";
$DATABASE_PASS = getenv("DATABASE_PASS") ?: "root";
// if(/*env not declared*/) throw new Exception("DATABASE_HOST environment variable not defined");
$bdd = new PDO("mysql:host=$DATABASE_HOST;dbname=$DATABASE_NAME", $DATABASE_USER, $DATABASE_PASS);
var_dump($bdd);
?>