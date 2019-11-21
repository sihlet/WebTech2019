<?php
//database

//database credentials
require('db_cred.php');

/**
 *@author sihle
 *@version 1.0
 */
class db_connection
{
	//variables
	public $db = null;
	public $results = null;

	//connect
	/**
	*Database connection
	*@return bolean
	**/
	public function db_connect(){
		//connection
		$this->db = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
		//test the connection
		if (mysqli_connect_errno()) {
			return false;
		}else{
			return true;
		}
	}

	//execute a query
	/**
	*Query the Database
	*@param takes a connection and sql query
	*@return bolean
	**/
	public function db_query($sqlQuery){
		if (!$this->db_connect()) {
			return false;
		} 
		elseif ($this->db==null) {
			return false;
		}

		//run query 
		$this->results = mysqli_query($this->db,$sqlQuery);
		if ($this->results == false) {
			return false;
		}else{
			return true;
		}
		
	}

	//fetch data
	/**
	*get select data
	*@return a record
	**/
	public function db_fetch(){
		//check if result was set
		if ($this->results == null) {
			return false;
		}
		elseif ($this->results == false) {
			return false;
		}
		//return a record
		return mysqli_fetch_assoc($this->results);

	}

	//check if user is already booked a space
	/**
	*get select data
	*@param sql query
	*@return boolean
	**/
	public function check_User(){

	}

	function sanitizeData($input) {
		$data = trim($input);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);

		return $data;
	}
}
//fetch last ID
//row count
//query error
?>