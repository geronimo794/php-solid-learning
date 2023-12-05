<?php
// Low level module
class MySQLConnection
{
    public function connect()
    {
        // handle the database connection
        return 'Database connection';
    }
}

// High level module
// High level module cannot be depend on low level module
// Must be depend on interface
class PasswordReminder
{
    private $dbConnection;

    public function __construct(MySQLConnection $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }
}
