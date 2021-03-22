<?php

try {
    $bdd = new PDO('mysql:host=localhost:3306;dbname=db_site_mp;charset=utf8', 'bandido', 'bandido@ad');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
