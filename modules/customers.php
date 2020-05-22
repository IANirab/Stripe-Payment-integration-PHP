<?php 

class Customer
{
	private $db;

	function __construct()
	{
		$this->db = new Database;
	}

	function addCustomer($data){
		//prepare query
		$this->db->query('INSERT INTO tbl_customers (id,first_name,last_name,email) VALUES(:id,:first_name,:last_name,:email)');

		//Bind Values
    	$this->db->bind(':id', $data['id']);
    	$this->db->bind(':first_name', $data['first_name']);
    	$this->db->bind(':last_name', $data['last_name']);
    	$this->db->bind(':email', $data['email']);

    	//Execute
    	if ($this->db->execute()) {
    		return true;
    	} else {
    		return false;
    	}
	}

	public function getCustomers()
	{
		$this->db->query('SELECT * FROM tbl_customers ORDER BY creat_date DESC');

		$result = $this->db->resultset();
		return $result;
	}
}