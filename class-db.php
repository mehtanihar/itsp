<?php
	if ( !class_exists ('DB') ) {
		class DB {
			 function __construct() {
				$mysqli = new mysqli('localhost', 'root', '', 'social');
				
				if ($mysqli->connect_errno) {
					printf("Connect failed %s\n", $mysqli->connect_error);
					exit();
				}
				
				$this->connection =  $mysqli;
			}
			
			 function insert($query) {				
				$result = $this->connection->query($query);
				
				return $result;
			}
			
			 function update($query) {
				$result = $this->connection->query($query);
				
				return $result;
			}
		
	

			function select($query) {							
				$result = $this->connection->query($query);
				
				if ( !$result ) {
					return false;
				}
				
				while ( $obj = $result->fetch_object() ) {
					$results[] = $obj;
				}
				
				return $results;
			}
		}
	}
			$db = new DB;

?>