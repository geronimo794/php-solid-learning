<?php

interface DBConnectionInterface
{
    public function connect();
}

// Low level module should implement co
class MySQLConnection implements DBConnectionInterface
{
    public function connect()
    {
        // handle the database connection
        return 'Database connection';
    }
}

// And high level module should be depend by interface
class PasswordReminder
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}
