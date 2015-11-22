<?php 
/**
 * Helper page
 *
 * @author Azfar Ahmed
 * @version 1.0
 * @date November 02, 2015
 * @EasyPhp MVC Framework
 * @website www.tutbuzz.com
 */
 
 class helper extends DBconfig {
	 
	 public function __construct()
	{
		$connection = new DBconfig();
		$this->connection = $connection->connectToDatabase();
	}
	
	public function db_insert($array, $tbname) {
		$array_keys = array_keys($array);
		$array_keys = implode(", ", $array_keys);
		$array_values = implode("','", $array);
		$array_values = "'".$array_values."'";
		$query = "INSERT INTO $tbname ($array_keys) VALUES ($array_values)";
		if (mysqli_query($this->connection, $query)) {
			return true;
		} else {
			return false;
		}
	}
	
	public function db_select($select, $tbname, $filter="") {
		$query = "SELECT $select FROM $tbname $filter";
		$result = $this->connection->query($query);
		return $result;
	}
	
	public function db_update($array, $tbname, $where) {
		$keys = array_keys($array);
		$set = array();
		foreach($keys as $key) {
			$set[] = "$key = '$array[$key]' ";
		}
		$set = implode(", ", $set);
		$query = "UPDATE $tbname SET $set $where";
		if (mysqli_query($this->connection, $query)) {
			return true;
		} else {
			return false;
		}
	}
	
	public function db_delete($tbname, $where) {
		$query = "DELETE FROM $tbname $where";
		if (mysqli_query($this->connection, $query)) {
			return true;
		} else {
			return false;
		}
	}
	
	public function check($tbname, $where) {
		$query = "SELECT * FROM $tbname $where";
		$query_result = mysqli_query($this->connection, $query);
		if (mysqli_num_rows($query_result) > 0) {
			return true;
		} else {
			return false;
		}
	}
 }
 