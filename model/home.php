<?php 
/**
 * Model
 *
 * @author Azfar Ahmed
 * @version 1.0
 * @date November 02, 2015
 * @EasyPhp MVC Framework
 * @website www.tutbuzz.com
 */
 
class home_model extends DBconfig {
	
	public function __construct()
	  {
		$connection = new DBconfig();
		$this->connection = $connection->connectToDatabase();
	  }
}