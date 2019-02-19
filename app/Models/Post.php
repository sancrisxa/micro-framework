<?php

namespace App\Models;

use Core\BaseModel;
use PDO;

class Post extends BaseModel
{
    protected $table = "posts";

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;

    }

    public function all()
    {
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $stmt->closeCursor();
        return $result;
    }
}