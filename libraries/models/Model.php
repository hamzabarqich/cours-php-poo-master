<?php

require_once('libraries/database.php');

class Model {
    private $pdo;

    public function __construct()
    {
        $this->pdo = getPdo();
    }
}