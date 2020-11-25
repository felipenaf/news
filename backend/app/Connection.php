<?php

class Connection
{
	private static $connection;

	public static function closeAll() {
		self::$connection = NULL;
	}

	public static function getConnection() {
		$dbInfo = parse_ini_file("config.ini");

        self::$connection = new PDO(
            "mysql:host={$dbInfo['DB_HOST']};
            dbname={$dbInfo['DB_DATABASE']}", $dbInfo['DB_USERNAME'], $dbInfo['DB_PASSWORD']
        );

		self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		self::$connection->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);

		return self::$connection;
	}

}
