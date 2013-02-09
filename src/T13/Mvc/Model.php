<?php

namespace T13\Mvc;

use \PDO;
use \Exception;

abstract class Model
{
    protected $container;

    protected $db;

    protected $table;
    protected $primary = 'id';

    public function setContainer($conatainer)
    {
        if (empty($this->table)) {
            throw new Exception('Необходимо указать имя таблицы в конструкторе модели.');
        }

        $this->container = $conatainer;
        $this->db = $conatainer->get('db');
    }

    /**
     * Поиск по модели.
     */
    public function find($id)
    {
        $sql = "SELECT * FROM $this->table WHERE $this->primary = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    /**
     * Получить все записи.
     */
    public function findAll()
    {
        return $this->db->query("SELECT * FROM $this->table");
    }
}
