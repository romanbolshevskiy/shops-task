<?php

	class Database {

		public static function getConnection() {
			$params = [
				'host'=>'localhost',
				'dbname' => 'shops-task',
				'user'=>'root',
				'password' => ''
			];

			$dsn = "mysql:host={$params['host'] };dbname={$params['dbname']}";
			$db = new PDO($dsn ,  $params['user'] ,  $params['password'] );
			return $db;
		}

	}

?>