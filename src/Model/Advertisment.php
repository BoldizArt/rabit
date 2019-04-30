<?php
/**
 * @file 
 * Boldizsar\RabIT\Model\Advertisment;
 */
namespace Boldizsar\RabIT\Model;

Class Advertisment {

    /** @var string $table; */
    private $table = 'advertisment';

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
        $query = "
            SELECT A.id, A.title, U.name
            FROM {$this->table} AS A
            INNER JOIN user AS U 
                ON A.userid=U.id;
        ";

        // Execute the query
        $select = $this->conn->prepare($query);
        $select->execute();
        $results = $select->fetchAll(\PDO::FETCH_ASSOC);

        return $results;
    }
}