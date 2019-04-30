<?php
/**
 * @file 
 * Boldizsar\RabIT\Model\User;
 */
namespace Boldizsar\RabIT\Model;

Class User {

    /** * @var string $table; */
    private $table = 'user';

    /** @var Db $conn */
    private $conn;

    /**
     * class constructor
     */
    public function __construct()
    {
        $this->conn = DB::getConnection();
    }

    /**
     * Return all records from $table
     */
    public function fetchAll()
    {
        // Create a query
        $query = "SELECT * FROM {$this->table};";

        // Execute the query
        $select = $this->conn->prepare($query);
        $select->execute();
        $results = $select->fetchAll(\PDO::FETCH_ASSOC);

        return $results;
    }
}