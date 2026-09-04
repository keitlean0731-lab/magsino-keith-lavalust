<?php

require_once __DIR__ . '/../libraries/Database.php';

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }
}