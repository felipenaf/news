<?php

class Connection
{
	private $connection;

	public function closeAll() {
		$this->connection = NULL;
	}

	public function getConnection() {
		$dbInfo = parse_ini_file("config.ini");

        try {
            $this->connection = new PDO(
                "mysql:host={$dbInfo['DB_HOST']};
                dbname={$dbInfo['DB_DATABASE']}", $dbInfo['DB_USERNAME'], $dbInfo['DB_PASSWORD']
            );

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);

            return $this->connection;
        } catch(PDOException $e) {
            throw new PDOException($e);
        }

	}

}
