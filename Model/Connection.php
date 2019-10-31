<?php


class Connection
{
    private $_host = 'localhost';
    private $_username = 'Rafah';
    private $_password = 'Wachtwoord123';
    private $_database = 'crud';

    protected $connection;

    public function __construct()
    {
        if (!isset($this->connection)) {

            $this->connection = new pdo($this->_host, $this->_username, $this->_password, $this->_database);

            if (!$this->connection) {
                echo 'Cannot connect to database server';
                exit;
            }
        }

        return $this->connection;
    }
}
