<?php 

namespace Core;

use PDO;

abstract class BaseModel
{
    private $pdo;
    protected $table;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    

}