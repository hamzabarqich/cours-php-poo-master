<?php

/**
 * Retourne une connexion à la base de données
 * 
 * @return PDO
 */
function getPdo(): PDO
 {
    $pdo = new PDO('mysql:host=localhost;dbname=blogpoo;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    return $pdo;
}

/**
 * Retourne la liste des articles classés par date de création
 * 
 * @return array
 */

function findAllArticles(): array
{
    $pdo = getPdo();
    $resultats = $pdo->query('SELECT * FROM articles ORDER BY created_at DESC');
    // On fouille le résultat pour en extraire les données réelles
    $articles = $resultats->fetchAll();

    return $articles;
}